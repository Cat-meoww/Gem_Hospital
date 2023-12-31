<?php

namespace App\Validation;

use PHPUnit\Framework\Constraint\Count;

class CustomRules
{
    public function fileCountRange($str, string  $params, array $data, &$error): bool
    {
        $request = \Config\Services::request();
        $params = explode(",", $params);
        if (count($params) != 3) {
            $error = "Syntax error required 3 params";
            return false;
        }

        [$field, $min, $max] = $params;
        $min = (int)$min;
        $max = (int)$max;


        $files = $request->getFileMultiple($field);
        if (count($files) < $min) {
            $error = "Minimum $min files required";
            return false;
        }
        if (count($files) > $max) {
            $error = "Maximum $min files allowed";
            return false;
        }

        foreach ($files as $file) {

            // d("validation",$file->guessExtension());
            if (!$file->isValid()) {
                $error = $file->getErrorString() . '(' . $file->getError() . ')';
                return false;
            }
            $allowedExt = ["png", "jpg", "jpeg", "webp"];
            if (!in_array($file->guessExtension(), $allowedExt)) {
                $error = "The files must be in  " . implode(",", $allowedExt);
                return false;
            }
        }

        // dd([$files, $params,  $data]);

        return true;
    }

    public function from_today($data, &$error)
    {

        if ($data < date('Y-m-d')) {
            $error = "Required valid date from today";
            return false;
        }
        return true;
    }
    
    public function date_greater_than($main_date, string  $params, array $data, &$error)
    {
        if ($main_date < $params) {

            return false;
        }
        return true;
    }

    public function time_duration($to_date, $params, array $data, &$error)
    {
        $param = explode(',', $params);


        if (count($param) != 2) {
            return false;
        }
        $Time = new \CodeIgniter\I18n\Time();
        $timezone = env('timezone');
        $from_date = $param[0];
        $Duration = (int) $param[1];
        $from = $Time::parse($from_date, $timezone);
        $to    = $Time::parse($to_date, $timezone);

        $diff = $from->difference($to);
        if ($Duration != $diff->getMinutes()) {
            $error="Duration must be $Duration Minutes ";
            return false;
        }
        return true;
    }
}
