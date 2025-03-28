<!DOCTYPE html>
<html>

<!-- Mirrored from wp.hostlin.com/nijmegan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 06:13:08 GMT -->

<head>
    <meta charset="utf-8">
    <title>{{ !empty($data['company_name']) ? $data['company_name'] : 'Thraex' }}</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/revolution-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <!--Favicon-->
    @if(!empty($data['favicon']))
        <link rel="shortcut icon" href="{{ asset('assets/admin/assets/build/assets/images/uploads/icons/' . $data['favicon']) }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('assets/admin/assets/build/assets/images/uploads/icons/' . $data['favicon']) }}" type="image/x-icon">
    @else
        <link rel="shortcut icon" href="{{ asset('assets/admin/assets/build/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('assets/admin/assets/build/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">
    @endif
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        @include('frontend.layouts.header')
        <!--End Main Header -->

        <!--Main Slider-->
        @include('frontend.layouts.slider')
        <!--End Main Slider-->

        <!--About Section-->
        {{-- @include('layouts.about') --}}
        <!--End About Section-->

        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Column-->
                    <div class="content-column col-md-6 col-sm-12 col-xs-12">
                        <div class="icon-box"><span class="icon flaticon-helmet"></span></div>
                        <div class="inner-box">
                            <!--Sec Title-->
                            <div class="sec-title">
                                <div class="title">Who we are</div>
                                <h2>ABOUT <span>Company</span></h2>
                            </div>
                            <div class="text">
                                <p class="dark-text">THRAEX CO. is a ingenious company, consistently working on
                                    technology
                                    innovation of foundry equipment /
                                    heavy-duty process equipment & plant. Through this expertise we are supplying
                                    equipment with
                                    consulting &
                                    engineering support for Green Sand Foundry Equipment and also Lost Foam Casting
                                    Foundry
                                    Equipment. </p>
                                <p>Through adequate technical knowledge & an extrovert team, we can offer customised
                                    solutions
                                    for Foundry
                                    equipment & plant to customers. With decade`s of exposure in Foundry stream we are
                                    able to
                                    Design & Develop
                                    special applications in NO-BAKE SAND PLANT with semi auto & fully auto operation
                                    system. We
                                    at THRAEX CO. </p>
                            </div>
                            <a href="#" class="theme-btn btn-style-two">Read More</a>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                        <!-- Video Box -->
                        <div class="video-box about-video-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="image">
                                <video controls class="about-video">
                                    <source src="{{ asset('assets/frontend/video/about1-vid.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </figure>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Services Section-->
        @include('frontend.layouts.service')
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
                                <img src="{{ asset('assets/frontend/images/resource/n_mixandn-Bmix123.jpeg') }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ route('equipment.noBakesand') }}" class="lightbox-image"
                                        data-fancybox-group="services-block">
                                    </a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="{{ route('equipment.noBakesand') }}">No Bake Sand Foundry Equipments</a></h3>
                                <div class="text">Graphical user interface learning curve user experience agile
                                    development responsive web design.</div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/frontend/images/resource/ser123.jpeg') }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ route('equipment.sandMixer') }}"
                                        class="lightbox-image" data-fancybox-group="services-block">
                                    </a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="{{ route('equipment.sandMixer') }}">Sand Mixer Unit</a></h3>
                                <div class="text">Graphical user interface learning curve user experience agile
                                    development responsive web design.</div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/frontend/images/resource/Carousel_Unit123.jpeg') }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ route('equipment.mouldhandaling') }}"
                                        class="lightbox-image" data-fancybox-group="services-block">
                                    </a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="{{ route('equipment.mouldhandaling') }}">Mould Handling System</a></h3>
                                <div class="text">Graphical user interface learning curve user experience agile
                                    development responsive web design.</div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/frontend/images/resource/green_sand123.jpeg') }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ route('equipment.greensand') }}"
                                        class="lightbox-image" data-fancybox-group="services-block">
                                    </a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="{{ route('equipment.greensand') }}">Green Sand Foundry Equipments</a></h3>
                                <div class="text">Graphical user interface learning curve user experience agile
                                    development responsive web design.</div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/frontend/images/resource/lost4image123.jpeg') }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ route('equipment.lostfoam') }}"
                                        class="lightbox-image" data-fancybox-group="services-block">
                                    </a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="{{ route('equipment.lostfoam') }}">Lost Foam Casting Plant</a></h3>
                                <div class="text">Graphical user interface learning curve user experience agile
                                    development responsive web design.</div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Two-->
                    {{-- <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('assets/images/resource/service-6.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ asset('assets/images/resource/service-1.jpg') }}"
                                        class="lightbox-image" data-fancybox-group="services-block">
                                    </a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="services-single.html">Power and Energy</a></h3>
                                <div class="text">Graphical user interface learning curve user experience agile
                                    development responsive web design.</div>
                            </div>
                        </div>
                    </div> --}}

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
        @include('frontend.layouts.footer')
        <!--End Main Footer-->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span
            class="icon fa fa-long-arrow-up"></span></div>

    <script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
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

<!-- Mirrored from wp.hostlin.com/nijmegan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 06:13:43 GMT -->

</html>
