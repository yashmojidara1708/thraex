<!DOCTYPE html>
<html>

<!-- Mirrored from wp.hostlin.com/nijmegan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 06:13:08 GMT -->

<head>
    <meta charset="utf-8">
    <title>Thraex | {{ isset($companyDetails->company_name) ? $companyDetails->company_name : ''  }}</title>
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

        <!--Page Title-->
        <section class="page-title" style="background-image:url({{ asset('assets/images/background/5.jpg') }});">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title -->
                    <div class="title-column col-md-6 col-sm-6 col-xs-12">
                        <h1>CONTACT</h1>
                    </div>
                    <!--Bread Crumb -->
                    <div class="breadcrumb-column col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <section class="contact-form-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="column col-md-7 col-sm-12 col-sm-12">
                        <h2>SEND US MESSAGE</h2>
                        <div class="text">Product management twitter rockstar mass market value proposition pivot venture partnership social proof hypotheses innovator founders.</div>

                        <!-- Contact Form -->
                        <div class="contact-form">

                            <!--Comment Form-->
                            <form method="post" action="https://wp.hostlin.com/nijmegan/sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="username" placeholder="Name">
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">Submit Now</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                        <!--End Contact Form -->

                    </div>
                    <div class="column col-md-5 col-sm-12 col-sm-12">
                        <h2>Location</h2>
                        <div class="map-outer">
                            <!--Map Canvas-->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58766.54569357297!2d72.61903266121467!3d22.990369659999526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e7d33ad0c6c77%3A0x12776b71042b5eb8!2sBALAJI%20ENGINEERING%20WORKS!5e0!3m2!1sen!2sin!4v1742363162844!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <!--Contact Info-->
                        <ul class="contact-info">
                            <li><div class="icon"><span class="flaticon-location-pin"></span></div>20 Park St, Sydney, Australia</li>
                            <li><div class="icon"><span class="flaticon-smartphone-1"></span></div>41 0235 6789</li>
                            <li><div class="icon"><span class="flaticon-e-mail-envelope"></span></div>info@industry.com</li>
                            <li><div class="icon"><span class="flaticon-clock"></span></div>Mon - Sat: 10am - 5pm</li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>

        <!--Main Slider-->
        {{-- @include('layouts.slider') --}}
        <!--End Main Slider-->

        <!--About Section-->
        {{-- @include('layouts.about') --}}
        <!--End About Section-->

        <!--Services Section-->
        {{-- @include('layouts.service') --}}
        <!--End Services Section-->

        <!--Services Section Two-->

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
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
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
