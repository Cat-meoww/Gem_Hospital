<?php

namespace App\Controllers\admin;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;


class bookings extends General
{
    use ResponseTrait;
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        return $this->dashboard();
    }
    public function dashboard()
    {
        $this->data['title'] = "Dashboard";
        return view('admin/dashboard', $this->data);
    }
    public function general_bookings()
    {

        $GeneralBookings = new \App\Models\GeneralBookings();
        $this->data['title'] = "General Booking Enquires";
        $this->data['Dataset'] = $GeneralBookings->orderBy('created_on', 'DESC')->findAll();


        $this->data['Options'] = [
            'services' => $this->generate_services(),
            'branch' => $this->generate_branch(),
        ];
        return view('admin/bookings/general_bookings', $this->data);
    }
    public function video_bookings()
    {
        helper('form');

        $VideoBookings = new \App\Models\VideoBookings();
        $this->data['title'] = "Video Booking Enquires";
        


        $this->data['Options'] = [
            'services' => $this->generate_services(),
            'doctors' => $this->generate_doctors(),
            'date_types' => [
                'ENTRY' => "Entry Date Wise",
                'BOOKING' => "Booking Date Wise"
            ],
            'payment_status' => [
                'ALL' => "All",
                'INIT' => "Init",
                'SUCCESS' => "Success",
                'FAILED' => "Failed",
            ]
        ];
        return view('admin/bookings/video_bookings', $this->data);
    }
    private function generate_services()
    {
        $Services = new \App\Models\Services();

        $arrayOfObjects = $Services->select('id,name')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }
    private function generate_branch()
    {
        $Branches = new \App\Models\Branches();

        $arrayOfObjects = $Branches->select('id,name')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }
    private function generate_doctors()
    {
        $Doctors = new \App\Models\Doctors();

        $arrayOfObjects = $Doctors->select('id,name')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }
        return $associativeArray;
    }
    private function generate_video_doctors()
    {
        $Doctors = new \App\Models\Doctors();

        $arrayOfObjects = $Doctors->select('video_booking_doctors.id,doctors.name')->join('video_booking_doctors', 'video_booking_doctors.doctor=doctors.id', 'INNER')->get()->getResult();
        $associativeArray = [];

        foreach ($arrayOfObjects as $object) {
            $associativeArray[$object->id] = $object->name;
        }


        return $associativeArray;
    }

    /**
     * Datatables
     */
    public function video_datatable()
    {
        try {
            // sleep(10);
            $ordercol = ['video_bookings.id', 'video_bookings.firstname', 'video_bookings.lastname', 'video_bookings.phone', 'video_bookings.email', 'video_bookings.id', 'video_bookings.id', 'video_bookings.booking_date', 'video_bookings.start_time'];
            $VideoBookings = new \App\Models\VideoBookings();
            $sql = $VideoBookings->select();

            $recordsTotal = $sql->countAllResults(false);


            $sql->select('video_bookings.*,payments.status');
            $sql->join('payments', 'payments.booking_id = video_bookings.id', 'inner');

            $PostData = [
                'datetype' => $this->request->getVar('datetype'),
                'from_date' =>  $this->request->getVar('from_date'),
                'to_date' => $this->request->getVar('to_date'),
                'pay_status' => $this->request->getVar('pay_status'),
            ];
            $rules  = [
                'datetype' => 'in_list[BOOKING,ENTRY]',
                'from_date' => 'required|valid_date[Y-m-d]',
                'to_date' => 'required|valid_date[Y-m-d]',
                'pay_status' => 'in_list[ALL,INIT,SUCCESS,FAILED]',
            ];

            if ($this->validateData($PostData, $rules)) {
                $datetype = $this->request->getVar('datetype');
                $from_date = $this->request->getVar('from_date');
                $to_date = $this->request->getVar('to_date');
                $pay_status = $this->request->getVar('pay_status');

                switch ($datetype) {
                    case 'ENTRY':
                        $sql = $sql->where('date(video_bookings.created_on) >=', $from_date)->where('date(video_bookings.created_on) <=', $to_date);
                        break;
                    case 'BOOKING':
                        $sql = $sql->where('booking_date >=', $from_date)->where('booking_date <=', $to_date);
                        break;

                    default:

                        break;
                }

                if ($pay_status != "ALL") {
                    $sql = $sql->where('payments.status', $pay_status);
                }
            }


            if ($this->request->getVar('search[value]')) {
                $filterval = $this->request->getPost('search[value]');
                $sql =  $sql->groupStart()
                    ->like('video_bookings.id', $filterval)
                    ->orLike('video_bookings.firstname', $filterval)
                    ->orLike('video_bookings.lastname', $filterval)
                    ->orLike('video_bookings.phone', $filterval)
                    ->orLike('video_bookings.email', $filterval)
                    ->orLike('video_bookings.booking_date', $filterval)
                    ->groupEnd();
            }

            if ($this->request->getVar('order')) {
                $colorder = $this->request->getPost('order[0][column]');
                $coldir = $this->request->getPost('order[0][dir]');
                $columnname = $ordercol[$colorder] ??   'id';

                $sql = $sql->orderBy($columnname, $coldir);
            } else {
                //default
                $sql = $sql->orderBy('video_bookings.id', "DESC");
            }
            $recordsFiltered = $sql->countAllResults(false);
            if ($this->request->getPost('length') != -1) {
                $sql = $sql->limit($this->request->getPost('start'), $this->request->getPost('length'));
            }

            $query = $sql->get();
            $data = [];

            $services = $this->generate_services();
            $doctors = $this->generate_video_doctors();
            foreach ($query->getResult() as $row) {
                $subarray = [];
                $subarray[] = "#" . $row->id;
                $subarray[] = $row->firstname;
                $subarray[] = $row->lastname;
                $subarray[] = $row->phone;
                $subarray[] = $row->email;
                $subarray[] = $doctors[$row->doctor] ?? "unknown";
                $subarray[] = $services[$row->service] ?? "unknown";
                $subarray[] = $row->booking_date;
                $subarray[] = analogueFormate($row->start_time)  . " - " . analogueFormate($row->end_time);
                $subarray[] = $row->status;

                $data[] = $subarray;
            }
            $output = [
                "draw"                 => $this->request->getPost('draw'),
                "recordsTotal"         => $recordsTotal,
                "recordsFiltered"    => $recordsFiltered,
                "data"                 => $data,
            ];
            return $this->respond($output);
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }
    private function handle_exception(\Exception $e)
    {
        $data = ['status' => 'bad'];
        $data['message'] = $e->getMessage();

        $data['errors'] = $e->getMessage();

        return $this->respond($data);
    }
}
