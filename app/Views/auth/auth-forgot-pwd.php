<!DOCTYPE html>
<html x-data="main" class="dark">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Tailwind CSS Admin & Dashboard Template" />
    <meta name="author" content="ThemesBoss" />

    <title><?= env('app.name') ?></title>

    <link rel="shortcut icon" href="<?= base_url() ?>admin/assets/images/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>admin/assets/css/style.css" />
</head>

<body class="antialiased relative font-inter bg-lightwhite dark:bg-black text-black dark:text-white text-sm font-normal overflow-x-hidden">

    <header>
        <nav class="bg-lightwhite dark:bg-black px-4 lg:px-7 py-4">
            <div class="flex flex-wrap justify-between items-center">
                <a href="<?= base_url('/') ?>" class="flex items-center">
                    <img src="<?= base_url() ?>admin/assets/images/dark-logo.svg" alt="logo" class="hidden dark:block" />
                </a>
                <div class="flex items-center lg:order-2">

                    <a href="<?= base_url('auth/login') ?>" class="text-black dark:text-white bg-transparent border border-black/10 dark:border-white/10 hover:bg-black dark:hover:bg-white hover:text-white dark:hover:text-black rounded-lg text-sm px-2 py-1 mr-2 transition-all duration-300">Login</a>
                </div>
            </div>
        </nav>
    </header>


    <div class="min-h-[calc(100vh-134px)] py-4 px-4 sm:px-12 flex justify-center items-center">
        <div class="max-w-[680px] flex-none w-full bg-white dark:bg-white/5 p-4 sm:p-10 lg:px-[146px] lg:py-[107px] rounded-2xl loginform">
            <h1 class="text-2xl font-semibold mb-2 text-center">Forgot Password ?</h1>
            <p class="text-center text-black/40 dark:text-white/40 mb-7">Enter your email to reset your password.</p>
            <form method="post" action="<?= base_url('auth/password_reset/check') ?>" autocomplete="off">
                <div class="mb-7">
                    <input type="email" name="email" value placeholder="Email" class="form-input" />
                    <?= validation_show_error('email', 'alert-label') ?>
                </div>


                <button type="submit" required class="mb-4 py-2 px-4 bg-black dark:bg-lightpurple-200 w-full rounded-lg text-white dark:text-black text-lg font-semibold border border-black dark:border-lightpurple-200 hover:bg-transparent dark:hover:bg-transparent hover:text-black dark:hover:text-white transition-all duration-300">
                    Submit
                </button>
                <div class="text-center">
                    <a href="<?= base_url('auth/login') ?>" class="text-xs text-lightpurple-300 inline-block">Back</a>
                </div>

                <?php if (session()->getFlashdata('success') !== NULL) : ?>
                    

                    <div class="mt-4 flex items-center rounded bg-indigo-300/50 dark:bg-indigo-300 p-3 text-black/80 dark:text-black">
                        <svg class="w-5 h-5 mr-2" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4012 27.0849C11.4012 27.0849 10.9664 26.9028 9.6139 26.8843C9.6139 26.8843 8.4575 26.8685 7.88867 26.7645C7.88867 26.7645 6.77082 26.56 6.10539 25.8946C6.10539 25.8946 5.43594 25.2252 5.22844 24.0882C5.22844 24.0882 5.12294 23.5102 5.10465 22.3366C5.10465 22.3366 5.08389 21.0046 4.91418 20.5965C4.91418 20.5965 4.74093 20.18 3.79698 19.1924C3.79698 19.1924 2.98525 18.3431 2.6547 17.8655C2.6547 17.8655 2 16.9195 2 16C2 16 2 15.0846 2.64417 14.1522C2.64417 14.1522 2.96978 13.6809 3.77243 12.8434C3.77243 12.8434 4.7293 11.8449 4.91512 11.4012C4.91512 11.4012 5.09721 10.9664 5.1157 9.6139C5.1157 9.6139 5.13151 8.4575 5.23553 7.88867C5.23553 7.88867 5.43996 6.77082 6.10539 6.10539C6.10539 6.10539 6.77484 5.43594 7.91181 5.22844C7.91181 5.22844 8.48983 5.12294 9.66342 5.10465C9.66342 5.10465 10.9954 5.08389 11.4035 4.91418C11.4035 4.91418 11.82 4.74093 12.8076 3.79698C12.8076 3.79698 13.6569 2.98525 14.1345 2.6547C14.1345 2.6547 15.0805 2 16 2C16 2 16.9154 2 17.8478 2.64417C17.8478 2.64417 18.3191 2.96978 19.1566 3.77243C19.1566 3.77243 20.1551 4.7293 20.5988 4.91512C20.5988 4.91512 21.0336 5.09721 22.3861 5.1157C22.3861 5.1157 23.5425 5.13151 24.1113 5.23553C24.1113 5.23553 25.2292 5.43996 25.8946 6.10539C25.8946 6.10539 26.5641 6.77484 26.7716 7.91181C26.7716 7.91181 26.8771 8.48985 26.8953 9.66342C26.8953 9.66342 26.9161 10.9954 27.0858 11.4035C27.0858 11.4035 27.2591 11.82 28.203 12.8076C28.203 12.8076 29.0148 13.6569 29.3453 14.1345C29.3453 14.1345 30 15.0805 30 16C30 16 30 16.9154 29.3558 17.8478C29.3558 17.8478 29.0302 18.3191 28.2276 19.1566C28.2276 19.1566 27.2707 20.1551 27.0849 20.5988C27.0849 20.5988 26.9028 21.0336 26.8843 22.3861C26.8843 22.3861 26.8685 23.5425 26.7645 24.1113C26.7645 24.1113 26.56 25.2292 25.8946 25.8946C25.8946 25.8946 25.2252 26.5641 24.0882 26.7716C24.0882 26.7716 23.5102 26.8771 22.3366 26.8953C22.3366 26.8953 21.0046 26.9161 20.5965 27.0858C20.5965 27.0858 20.18 27.2591 19.1924 28.203C19.1924 28.203 18.3431 29.0148 17.8655 29.3453C17.8655 29.3453 16.9195 30 16 30C16 30 15.0846 30 14.1522 29.3558C14.1522 29.3558 13.6809 29.0302 12.8434 28.2276C12.8434 28.2276 11.8449 27.2707 11.4012 27.0849ZM12.1738 25.2401C12.1738 25.2401 12.9603 25.5695 14.2272 26.7836C14.2272 26.7836 15.4965 28 16 28C16 28 16.5103 28 17.8105 26.7572C17.8105 26.7572 19.0676 25.5556 19.8285 25.2392C19.8285 25.2392 20.5903 24.9223 22.3054 24.8956C22.3054 24.8956 24.0931 24.8677 24.4804 24.4804C24.4804 24.4804 24.8607 24.1001 24.8845 22.3588C24.8845 22.3588 24.9083 20.6186 25.2401 19.8262C25.2401 19.8262 25.5695 19.0397 26.7836 17.7728C26.7836 17.7728 28 16.5035 28 16C28 16 28 15.4897 26.7572 14.1895C26.7572 14.1895 25.5556 12.9324 25.2392 12.1715C25.2392 12.1715 24.9223 11.4097 24.8956 9.69459C24.8956 9.69459 24.8677 7.90694 24.4804 7.51961C24.4804 7.51961 24.1001 7.13932 22.3588 7.11551C22.3588 7.11551 20.6186 7.09172 19.8262 6.75988C19.8262 6.75988 19.0397 6.43046 17.7728 5.2164C17.7728 5.2164 16.5035 4 16 4C16 4 15.4897 4 14.1895 5.24278C14.1895 5.24278 12.9324 6.44437 12.1715 6.76082C12.1715 6.76082 11.4097 7.07767 9.69459 7.10441C9.69459 7.10441 7.90694 7.13227 7.51961 7.51961C7.51961 7.51961 7.13932 7.8999 7.11551 9.64124C7.11551 9.64124 7.09172 11.3814 6.75988 12.1738C6.75988 12.1738 6.43047 12.9603 5.2164 14.2272C5.2164 14.2272 4 15.4965 4 16C4 16 4 16.5103 5.24278 17.8105C5.24278 17.8105 6.44437 19.0676 6.76082 19.8285C6.76082 19.8285 7.07767 20.5903 7.10441 22.3054C7.10441 22.3054 7.13227 24.0931 7.51961 24.4804C7.51961 24.4804 7.8999 24.8607 9.64124 24.8845C9.64124 24.8845 11.3814 24.9083 12.1738 25.2401Z" fill="currentColor"></path>
                            <path d="M11.1909 15.777C11.0048 15.5992 10.7574 15.5 10.5 15.5C10.4998 15.5 10.4773 15.5003 10.4773 15.5003C10.2122 15.5063 9.96027 15.6174 9.77704 15.8091C9.59923 15.9952 9.5 16.2426 9.5 16.5L9.50026 16.5227C9.50627 16.7878 9.61737 17.0397 9.80911 17.223L13.4716 20.723C13.8579 21.0921 14.4662 21.0924 14.8528 20.7236L22.19 13.7238C22.3819 13.5407 22.4935 13.2887 22.4997 13.0235C22.5001 13.0075 22.5001 12.9915 22.4997 12.9755C22.4936 12.727 22.3952 12.4896 22.2236 12.3097C22.0348 12.1119 21.7734 12 21.5 12L21.4718 12.0004C21.2245 12.0074 20.9887 12.1057 20.8097 12.2764L14.1631 18.6174L11.1909 15.777Z" fill="currentColor"></path>
                        </svg>
                        <span class="pr-2"> <?= $session->getFlashdata("success") ?></span>

                    </div>
                <?php endif ?>
            </form>
        </div>
    </div>



    <footer class="p-7 flex items-center justify-center">
        <p class="text-xs text-black/40 dark:text-white/40">&copy; 2023 <?= env('app.name') ?></p>
    </footer>




    <script src="<?= base_url() ?>admin/assets/js/alpine-collaspe.min.js"></script>
    <script src="<?= base_url() ?>admin/assets/js/alpine-persist.min.js"></script>
    <script src="<?= base_url() ?>admin/assets/js/alpine.min.js" defer></script>

    <script src="<?= base_url() ?>admin/assets/js/custom.js"></script>
</body>



</html>