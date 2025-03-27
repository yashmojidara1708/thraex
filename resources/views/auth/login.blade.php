<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">



<!-- Mirrored from laravelui.spruko.com/tailwind/ynex/signin-basic by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Mar 2025 11:44:43 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Description" content="Ynex –Laravel Tailwind CSS Responsive Admin Web Dashboard Template">
    <meta name="keywords"
        content="admin panel in laravel, tailwind, tailwind template admin, laravel admin panel, tailwind css dashboard, admin dashboard template, admin template, tailwind laravel, template dashboard, admin panel tailwind, tailwind css admin template, laravel tailwind template, laravel tailwind, tailwind admin dashboard">

    <!-- TITLE -->
    <title> Ynex - Laravel Tailwind CSS Admin & Dashboard Template </title>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('assets/admin/assets/build/assets/images/brand-logos/favicon.ico') }}"
        type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{ asset('assets/admin/assets/build/assets/iconfonts/icons.css') }}" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="{{ asset('assets/admin/assets/build/assets/app-698853b8.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/build/assets/app-698853b8.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- MAIN JS -->
    <script src="{{ asset('assets/admin/assets/build/assets/authentication-main.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <div class="container">
        <div
            class="flex justify-center authentication authentication-basic items-center h-full text-defaultsize text-defaulttextcolor">
            <div class="grid grid-cols-12">
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-6 sm:col-span-8 col-span-12">
                    <div class="my-[2.5rem] flex justify-center">
                        <a href="/">
                            @if (!empty($data['logo']))
                                <img src="{{ asset('assets/admin/assets/build/assets/images/uploads/logo/' . $data['logo']) }}"
                                    alt="Company Logo" style="max-width: 100%; height: auto;">
                            @endif
                        </a>
                    </div>
                    <div class="box">
                        <div class="box-body !p-[3rem]">
                            <p class="h5 font-semibold mb-2 text-center">Sign In</p>
                            <p class="mb-4 text-gray-500 font-normal text-center">Welcome back!</p>

                            <!-- Login Form -->
                            <form id="loginForm" name="loginForm" method="POST" onsubmit="return false;">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label text-default">Email</label>
                                    <input type="text" class="form-control form-control-lg w-full !rounded-md"
                                        id="email" name="email" placeholder="Enter email">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label text-default block">Password</label>
                                    <input type="password" class="form-control form-control-lg w-full !rounded-md"
                                        id="password" name="password" placeholder="Enter password">
                                </div>

                                <div class="grid mt-2">
                                    <button type="submit"
                                        class="ti-btn ti-btn-primary !bg-primary btn-wave !text-white !font-medium w-full">Sign
                                        In</button>
                                </div>
                            </form>
                            <!-- End Login Form -->

                            <!-- Error Message -->
                            <div id="errorMessage" class="text-red-500 mt-2 hidden"></div>
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/auth/js/login.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>

<!-- Mirrored from laravelui.spruko.com/tailwind/ynex/signin-basic by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Mar 2025 11:44:43 GMT -->

</html>
