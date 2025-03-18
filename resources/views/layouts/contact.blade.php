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
        {{-- @include('layouts.header') --}}
        <!--End Main Header -->

        <header class="main-header header-style-two">
            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container clearfix">
                    <!--Top Left-->
                    <div class="top-left pull-left">
                        <ul class="links-nav clearfix">
                            <li>World’s Leading Industrial Solution Provider</li>
                        </ul>
                    </div>

                    <!--Top Right-->
                    <div class="top-right pull-right">
                        <ul class="links-nav clearfix">
                            <li><a href="#"><span class="icon flaticon-smartphone-1"></span> 41 0235 6789</a></li>
                            <li><a href="#"><span class="icon flaticon-clock"></span> Mon - Sat: 10am - 5pm</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Header Top End -->

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-outer">
                            <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                        </div>

                        <div class="pull-right upper-right clearfix">

                            <div class="nav-outer clearfix">
                                <!-- Main Menu -->
                                <nav class="main-menu">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class="dropdown"><a href="#">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Homepage Style One</a></li>
                                                    <li><a href="index-2.html">Homepage Style Two</a></li>
                                                    <li><a href="index-3.html">Homepage Style Three</a></li>
                                                    <li class="dropdown"><a href="#">Header Styles</a>
                                                        <ul>
                                                            <li><a href="index.html">Header Style One</a></li>
                                                            <li><a href="index-2.html">Header Style Two</a></li>
                                                            <li><a href="index-3.html">Header Style Three</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">About</a>
                                                <ul>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="team.html">Our Team</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Services</a>
                                                <ul>
                                                    <li><a href="services.html">Our Services</a></li>
                                                    <li><a href="services-single.html">Agricultural Processing</a></li>
                                                    <li><a href="services-single.html">Chemical Research</a></li>
                                                    <li><a href="services-single.html">Material Engineering</a></li>
                                                    <li><a href="services-single.html">Mechanical Engineering</a></li>
                                                    <li><a href="services-single.html">Petroleum and Gas</a></li>
                                                    <li><a href="services-single.html">Power and Energy</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Project</a>
                                                <ul>
                                                    <li><a href="project.html">Project</a></li>
                                                    <li><a href="project-single.html">Project Single</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Shop</a>
                                                <ul>
                                                    <li><a href="shop.html">Our Shop</a></li>
                                                    <li><a href="shop-single.html">Shop Single</a></li>
                                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog-grid.html">Our Blog</a></li>
                                                    <li><a href="blog-single.html">Blog Detail</a></li>
                                                    <li><a href="error-page.html">Error Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="current"><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </nav><!-- Main Menu End-->

                                <!--Quote Button-->
                                <div class="btn-outer">
                                    <!--Search Box-->
                                    <div class="search-box-outer">
                                        <div class="dropdown">
                                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                                <li class="panel-outer">
                                                    <div class="form-container">
                                                        <form method="post" action="https://wp.hostlin.com/nijmegan/blog.html">
                                                            <div class="form-group">
                                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="#">Home</a>
                                        <ul>
                                            <li><a href="index.html">Homepage Style One</a></li>
                                            <li><a href="index-2.html">Homepage Style Two</a></li>
                                            <li><a href="index-3.html">Homepage Style Three</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">About</a>
                                        <ul>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="team.html">Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="services.html">Our Services</a></li>
                                            <li><a href="services-single.html">Agricultural Processing</a></li>
                                            <li><a href="services-single.html">Chemical Research</a></li>
                                            <li><a href="services-single.html">Material Engineering</a></li>
                                            <li><a href="services-single.html">Mechanical Engineering</a></li>
                                            <li><a href="services-single.html">Petroleum and Gas</a></li>
                                            <li><a href="services-single.html">Power and Energy</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Project</a>
                                        <ul>
                                            <li><a href="project.html">Project</a></li>
                                            <li><a href="project-single.html">Project Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Our Shop</a></li>
                                            <li><a href="shop-single.html">Shop Single</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog-grid.html">Our Blog</a></li>
                                            <li><a href="blog-single.html">Blog Detail</a></li>
                                            <li><a href="error-page.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="current"><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->

        </header>

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
