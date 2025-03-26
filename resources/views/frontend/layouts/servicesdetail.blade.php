<!DOCTYPE html>
<html>

<!-- Mirrored from wp.hostlin.com/nijmegan/services-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 06:14:15 GMT -->

<head>
    <meta charset="utf-8">
    <title> {{ $data['company_name'] ?? '' }} </title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/revolution-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/admin/assets/build/assets/images/uploads/icons/' . $data['favicon']) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/admin/assets/build/assets/images/uploads/icons/' . $data['favicon'])  }}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader"></div> --}}

        <!-- Main Header / Header Style Two-->
        @include('frontend.layouts.header')
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url({{ asset('assets/frontend/images/background/5.jpg') }});">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title -->
                    <div class="title-column col-md-6 col-sm-6 col-xs-12">
                        <h1>Our SERVICE</h1>
                    </div>
                    <!--Bread Crumb -->
                    <div class="breadcrumb-column col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!--Sidebar Page Container-->
        <section class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="sidebar">

                            <!--Services Widget-->
                            <div class="sidebar-widget sidebar-category">
                                <!--Sidebar Title-->
                                <div class="sidebar-title">
                                    <h2>SERVICE CATEGORIES</h2>
                                </div>
                                <!--List-->
                                <ul class="list">
                                    <li class="{{ request()->routeIs('equipment.noBakesand') ? 'active' : '' }}">
                                        <a href="{{ route('equipment.noBakesand') }}">
                                            <span class="icon flaticon-shape"></span>No Bake Sand Foundry Equipments
                                        </a>
                                    </li>
                                    <li class="{{ request()->routeIs('equipment.sandMixer') ? 'active' : '' }}">
                                        <a href="{{ route('equipment.sandMixer') }}">
                                            <span class="icon flaticon-shape mb-5"></span>Sand Mixer Unit
                                        </a>
                                    </li>
                                    <li class="{{ request()->routeIs('equipment.mouldhandaling') ? 'active' : '' }}">
                                        <a href="{{ route('equipment.mouldhandaling') }}">
                                            <span class="icon flaticon-shape"></span>Mould Handling System
                                        </a>
                                    </li>
                                    <li class="{{ request()->routeIs('equipment.greensand') ? 'active' : '' }}">
                                        <a href="{{ route('equipment.greensand') }}">
                                            <span class="icon flaticon-shape"></span>Green Sand Foundry Equipments
                                        </a>
                                    </li>
                                    <li class="{{ request()->routeIs('equipment.lostfoam') ? 'active' : '' }}">
                                        <a href="{{ route('equipment.lostfoam') }}">
                                            <span class="icon flaticon-shape"></span>Lost Foam Casting Plant
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            {{-- <!--Brochure-->
                            <div class="sidebar-widget sidebar-brochure">
                                <div class="brouchure">
                                    <a href="#"><span class="icon flaticon-file"></span> Download Brochure</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <!--Content Side-->
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        @yield('maincontent')
                    </div>

                </div>
            </div>
        </section>
        <!--End Sidebar Page Container-->

        <!--Main Footer-->
        @include('frontend.layouts.footer')
        <!--End Main Footer-->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span
            class="icon fa fa-long-arrow-up"></span></div>


    <script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/revolution.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/validate.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/appear.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
</body>

<!-- Mirrored from wp.hostlin.com/nijmegan/services-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 06:14:15 GMT -->

</html>
