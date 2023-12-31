<?= $this->extend('layout/admin/main') ?>
<?= $this->section('head') ?>
<link rel="stylesheet" href="<?= base_url('frontend/assets/css/ck-content.css') ?>">
<style>
    .sticky-top {
        position: sticky;
        top: 0;
        z-index: 10;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<form action="<?= base_url("api/admin/all-master/sub-roles/create") ?>" method="post" data-reload="true" data-success-redirect="<?= base_url("admin/all-master/sub-roles") ?>" autocomplete="off" class="grid grid-cols-1 gap-3 fetch-form">

    <div class="flex flex-wrap items-start justify-between gap-3 mb-4">
        <h2 class="text-lg font-semibold">Create Role </h2>
        <div class="flex items-center gap-2">
            <a href="<?= base_url('admin/all-master/sub-roles') ?>" class="btn px-2 py-[5px] text-xs">Back</a>
            <button type="submit" class="btn px-2 py-[5px] text-xs">Save Changes</button>
        </div>
    </div>
    <div class="msg-block col-span-2">

    </div>
    <div class="flex flex-col gap-7">

        <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
            
            <div class=" grid grid-flow-row gap-4">

                <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 dark:border-white/10">
                    <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Role name</label>
                    <input required type="text" name="name" value="<?= old('name') ?>" placeholder="... Type" class="form-input">
                </div>
                <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 dark:border-white/10">
                    <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Role Description</label>
                    <input required type="text" name="description" value="<?= old('description') ?>" placeholder="... Type" class="form-input">
                </div>
            </div>
        </div>



    </div>





</form>



<?= $this->endSection() ?>
<?= $this->section('footer') ?>

<script src="<?= base_url('admin/assets/js/ckeditor/build/ckeditor.js') ?>"></script>
<style src="<?= base_url('admin/assets/js/ckeditor/build/style.css') ?>"></style>
<script>
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    $(document).ready(() => {
        const forms = {
            __init: () => {
                $('.fetch-form').submit(async function(e) {
                    try {
                        e.preventDefault();
                        $(this).children('.msg-block').html("");

                        const url = $(this).attr('action');;
                        const formdata = new FormData(this);
                        const reload = $(this).data('reload');
                        const success_redirect = $(this).data('success-redirect');


                        const options = {
                            method: 'POST',
                            mode: 'cors',
                            cache: 'no-cache',
                            credentials: 'same-origin',
                            body: formdata,
                        }
                        const rawdata = await fetch(url, options);
                        let res = await rawdata.json();

                        if (res.status === "success") {
                            $(this).children('.msg-block').html(forms.html_success(res.msg));

                            if (reload == true) {
                                await sleep(1000);
                                if (success_redirect) {
                                    window.location = success_redirect;
                                } else {
                                    window.location.reload();
                                }

                            }


                        } else if (res.status === "bad") {

                            if (typeof res.errors === "string") {
                                $(this).children('.msg-block').html(forms.html_error(res.errors));
                            } else {
                                let errors = Object.values(res.errors);
                                $(this).children('.msg-block').html(forms.html_error(errors.join("<br>")));
                            }

                        }
                    } catch (e) {
                        console.log(e);
                        return Promise.reject(new Error("fetch error"))
                    }

                })
                $(document).on("click", ".remove-parent", function() {
                    $(this).parent().remove();
                })
            },
            html_error: (data) => {
                return `<div class="mt-3 flex items-center rounded bg-lightred p-3 text-white"><div>${data} </div> <button type="button" class="ml-auto hover:opacity-50 rotate-0 hover:rotate-180 transition-all duration-300 remove-parent">
                    <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z" fill="currentcolor"></path>
                    <path d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z" fill="currentcolor"></path>
                    </svg>
                    </button></div>`;
            },
            html_success: (data) => {
                return `<div class="rounded bg-lightgreen-100 p-3 mt-3 text-black">${data}</div>`;
            }
        }
        forms.__init();




    });

   
</script>
<?= $this->endSection() ?>