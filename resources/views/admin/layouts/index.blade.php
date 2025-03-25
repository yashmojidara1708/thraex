<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light"
    data-menu-styles="dark">


<!-- Mirrored from laravelui.spruko.com/tailwind/ynex/alerts by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Mar 2025 11:44:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Description" content="Laravel Tailwind CSS Responsive Admin Web Dashboard Template">
    <meta name="keywords"
        content="admin panel in laravel, tailwind, tailwind template admin, laravel admin panel, tailwind css dashboard, admin dashboard template, admin template, tailwind laravel, template dashboard, admin panel tailwind, tailwind css admin template, laravel tailwind template, laravel tailwind, tailwind admin dashboard">

    <!-- TITLE -->
    <title> @yield('admin-title') </title>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('assets/admin/assets/build/assets/images/brand-logos/favicon.ico') }}"
        type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{ asset('assets/admin/assets/build/assets/iconfonts/icons.css') }}" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="{{ asset('assets/admin/assets/build/assets/app-698853b8.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/build/assets/app-698853b8.css') }}" />

    <!-- NODE WAVES CSS -->
    <link href="{{ asset('assets/admin/assets/build/assets/libs/node-waves/waves.min.css') }}" rel="stylesheet">

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/build/assets/libs/simplebar/simplebar.min.css') }}">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/build/assets/libs/%40simonwep/pickr/themes/nano.min.css') }}">

    <!-- MAIN JS -->
    <script src="{{ asset('assets/admin/assets/build/assets/main.js') }}"></script>


    <!-- Prism CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/build/assets/libs/prismjs/themes/prism-coy.min.css') }}">

    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> --}}

    {{-- <link rel="stylesheet" href="https://cdn.ckeditor.com/4.25.1-lts/standard/skins/moono-lisa/editor.css"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div id="toastContainer" class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1050;"></div>


    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('admin.layouts.navbar')

            @include('admin.layouts.sidebar')
            <!-- Layout container -->
            <div class="layout-page">


                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div id="loader-container">
                        <div class="loader"></div>
                    </div>
                    {{-- @yield('admin-content') --}}

                    <div class="content">
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header md:flex">
                                <div>
                                    <h3
                                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                                        @yield('page-main-title')</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-[0.813rem] ps-[0.5rem]">
                                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                                            href="javascript:void(0);">Dashboard<i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                                        aria-current="page">
                                         @yield('page-sub-title')
                                    </li>
                                </ol>
                            </div>
                            @yield('admin-content')


                            <div class="content-backdrop fade"></div>
                        </div>
                        <!-- Content wrapper -->
                    </div>
                    <!-- / Layout page -->
                </div>

                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>

            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


            <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
            <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

            <!-- POPPER JS -->
            <script src="{{ asset('assets/admin/assets/build/assets/libs/%40popperjs/core/umd/popper.min.js') }}"></script>

            <!-- NODE WAVES JS -->
            <script src="{{ asset('assets/admin/assets/build/assets/libs/node-waves/waves.min.js') }}"></script>

            <!-- COLOR PICKER JS -->
            <script src="{{ asset('assets/admin/assets/build/assets/libs/%40simonwep/pickr/pickr.es5.min.js') }}"></script>

            <!-- SWITCH JS -->
            <script src="{{ asset('assets/admin/assets/build/assets/switch.js') }}"></script>

            <!-- PRELINE JS -->
            <script src="{{ asset('assets/admin/assets/build/assets/libs/preline/preline.js') }}"></script>

            <!-- SIMPLEBAR JS -->
            <script src="{{ asset('assets/admin/assets/build/assets/libs/simplebar/simplebar.min.js') }}"></script>

            <!-- Prism JS -->
            <script src="{{ asset('assets/admin/assets/build/assets/libs/prismjs/prism.js') }}"></script>
            <link rel="modulepreload"
                href="{{ asset('assets/admin/assets/build/assets/prism-custom-a13018d8.js') }}" />
            <script type="module" src="{{ asset('assets/admin/assets/build/assets/prism-custom-a13018d8.js') }}"></script>


            <!-- STICKY JS -->
            <script src="{{ asset('assets/admin/assets/build/assets/sticky.js') }}"></script>

            {{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> --}}

            <!-- APP JS -->
            <link rel="modulepreload" href="{{ asset('assets/admin/assets/build/assets/app-23e8aa1f.js') }}" />
            <script type="module" src="{{ asset('assets/admin/assets/build/assets/app-23e8aa1f.js') }}"></script>

            <!-- CUSTOM-SWITCHER JS -->
            <link rel="modulepreload"
                href="{{ asset('assets/admin/assets/build/assets/custom-switcher-c2a0a9d1.js') }}" />
            <script type="module" src="{{ asset('assets/admin/assets/build/assets/custom-switcher-c2a0a9d1.js') }}"></script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>

            {{-- <link rel="modulepreload" href="{{ asset('assets/admin/assets/build/assets/datatable-d0054720.js') }}" /> --}}
            {{-- <script type="module" src="{{ asset('assets/admin/assets/build/assets/datatable-d0054720.js') }}"></script> --}}

            <!-- END SCRIPTS -->
            {{-- <script src="{{ asset('assets/admin/assets/js/service.js') }}"></script> --}}

            <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
            <script>
                // CKEDITOR.replace('content');
                CKEDITOR.replace('content', {
                    versionCheck: false // Disables version check error
                });
            </script>

            @yield('admin-footer')
            @include('admin.layouts.footer')
</body>

</html>
