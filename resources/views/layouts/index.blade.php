<!DOCTYPE html>
<html>

<!-- Mirrored from wp.hostlin.com/nijmegan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 06:13:08 GMT -->

<head>
    <meta charset="utf-8">
    <title>Thraex | {{ $companyDetails->company_name }}</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/revolution-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader"></div> --}}

        <!-- Main Header-->
        @include('layouts.header')
        <!--End Main Header -->

        <!--Main Slider-->
        {{-- @include('layouts.slider') --}}
        <!--End Main Slider-->

        <!--About Section-->
        @include('layouts.about')
        <!--End About Section-->

        <!--Services Section-->
        @include('layouts.service')
        <!--End Services Section-->

        <!--Services Section Two-->
        <section class="services-section-two">
            <div class="auto-container">
                <!--Sec Title Two-->
                <div class="sec-title-two">
                    <div class="title">Our Services</div>
                    <h2>OUR INDUSTRY TARGET</h2>
                </div>
                <div class="row clearfix">

                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/images/resource/service-1.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ asset('assets/images/resource/service-1.jpg') }}" class="lightbox-image"
                                        data-fancybox-group="services-block"><span
                                            class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="services-single.html">Agricultural Processing</a></h3>
                                <div class="text">Graphical user interface learning curve user experience agile
                                    development responsive web design.</div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/images/resource/service-2.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ asset('assets/images/resource/service-1.jpg') }}"
                                        class="lightbox-image" data-fancybox-group="services-block"><span
                                            class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="services-single.html">Chemical Research</a></h3>
                                <div class="text">Graphical user interface learning curve user experience agile
                                    development responsive web design.</div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/images/resource/service-3.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ asset('assets/images/resource/service-1.jpg') }}"
                                        class="lightbox-image" data-fancybox-group="services-block"><span
                                            class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="services-single.html">Material Engineering</a></h3>
                                <div class="text">Graphical user interface learning curve user experience agile
                                    development responsive web design.</div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/images/resource/service-4.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ asset('assets/images/resource/service-1.jpg') }}"
                                        class="lightbox-image" data-fancybox-group="services-block"><span
                                            class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="services-single.html">Mechanical Engineering</a></h3>
                                <div class="text">Graphical user interface learning curve user experience agile
                                    development responsive web design.</div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/images/resource/service-5.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ asset('assets/images/resource/service-1.jpg') }}"
                                        class="lightbox-image" data-fancybox-group="services-block"><span
                                            class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="services-single.html">Petroleum and Gas</a></h3>
                                <div class="text">Graphical user interface learning curve user experience agile
                                    development responsive web design.</div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/images/resource/service-6.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ asset('assets/images/resource/service-1.jpg') }}"
                                        class="lightbox-image" data-fancybox-group="services-block"><span
                                            class="icon flaticon-plus"></span></a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="services-single.html">Power and Energy</a></h3>
                                <div class="text">Graphical user interface learning curve user experience agile
                                    development responsive web design.</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="right-icon"><span class="icon flaticon-cogwheel-1"></span></div>
        </section>
        <!--End Services Section Two-->

        <!--Project Carousel Section-->
        {{-- <section class="project-carousel-section">
            <div class="clearfix">
                <!--Content Column-->
                <div class="content-column">
                    <!--sec title three-->
                    <div class="sec-title-three">
                        <div class="title">Our Works</div>
                        <h2>RECENT PROJECTS</h2>
                    </div>
                    <div class="text">Iteration business model canvas marketing traction holy grail series A
                        financing. Stock focus success accelerator market partnership funding.</div>
                    <a href="project-single.html" class="theme-btn btn-style-two">VIEW MORE</a>
                </div>
                <!--Carousel Column-->
                <div class="carousel-column">

                    <div class="three-item-carousel owl-carousel owl-theme">

                        <!--Project Block-->
                        <div class="project-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <img src="{{ asset('assets/images/resource/project-12.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <a href="{{ asset('assets/images/resource/project-12.jpg') }}"
                                            class="lightbox-image" data-fancybox-group="project-block"><span
                                                class="icon flaticon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project Block-->
                        <div class="project-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <img src="{{ asset('assets/images/resource/project-12.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <a href="{{ asset('assets/images/resource/project-12.jpg') }}"
                                            class="lightbox-image" data-fancybox-group="project-block"><span
                                                class="icon flaticon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project Block-->
                        <div class="project-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <img src="{{ asset('assets/images/resource/project-12.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <a href="{{ asset('assets/images/resource/project-12.jpg') }}"
                                            class="lightbox-image" data-fancybox-group="project-block"><span
                                                class="icon flaticon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project Block-->
                        <div class="project-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <img src="{{ asset('assets/images/resource/project-12.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <a href="{{ asset('assets/images/resource/project-12.jpg') }}"
                                            class="lightbox-image" data-fancybox-group="project-block"><span
                                                class="icon flaticon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project Block-->
                        <div class="project-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <img src="{{ asset('assets/images/resource/project-12.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <a href="{{ asset('assets/images/resource/project-12.jpg') }}"
                                            class="lightbox-image" data-fancybox-group="project-block"><span
                                                class="icon flaticon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project Block-->
                        <div class="project-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <img src="{{ asset('assets/images/resource/project-14.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <a href="{{ asset('assets/images/resource/project-14.jpg') }}"
                                            class="lightbox-image" data-fancybox-group="project-block"><span
                                                class="icon flaticon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section> --}}
        <!--End Project Carousel Section-->

        <!--Main Footer-->
        @include('layouts.footer')
        <!--End Main Footer-->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span
            class="icon fa fa-long-arrow-up"></span></div>
    <script src="{{ asset('assets/js/jquery.js') }}') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/validate.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

<!-- Mirrored from wp.hostlin.com/nijmegan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 06:13:43 GMT -->

</html>
