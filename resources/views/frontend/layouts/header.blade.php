<header class="main-header">
    <!-- Header Top -->
    {{-- <div class="header-top">
        <div class="auto-container clearfix">
            <!--Top Left-->
            <div class="top-left pull-left">
                <ul class="links-nav clearfix">
                    <li>Worlds Leading Industrial Solution Provider</li>
                </ul>
            </div>

            <!--Top Right-->
            <div class="top-right pull-right">
                <div class="social-links clearfix">
                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                    <a href="#"><span class="fa fa-pinterest-p"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Header Top End -->

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-outer">
                    <div class="logo">
                            @if (!empty($data['logo']))
                                <img src="{{ asset('assets/admin/assets/build/assets/images/uploads/logo/' . $data['logo']) }}"
                                    alt="Company Logo">
                            @endif
                        </div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-pin"></span></div>
                        <ul>
                            <li><strong>Location</strong></li>

                            <li>{{ $data['address'] ?? '' }}</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-smartphone-1"></span></div>
                        <ul>
                            <li><strong>CALL US</strong></li>
                            <li>{{ $data['phone'] ?? '' }}</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    {{-- <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-clock"></span></div>
                        <ul>
                            <li><strong>TIMING</strong></li>
                            <li>Mon - Sat: 10am - 5pm</li>
                        </ul>
                    </div> --}}

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Header Lower-->
    <div class="header-lower">

        <div class="auto-container">
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class=" {{ request()->routeIs('home') ? 'active' : '' }}"><a
                                    href="{{ route('home') }}">Home</a>
                                {{-- <ul>
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
                                </ul> --}}
                            </li>
                            <li class=" {{ request()->routeIs('about') ? 'active' : '' }}">
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li class=" {{ request()->routeIs('equipment.show') ? 'active' : '' }}"><a
                                    href="{{ route('equipment.show') }}">Services</a>
                                <ul>
                                    {{-- <li><a href="services.html">Our Services</a></li>
                                    <li><a href="services-single.html">Agricultural Processing</a></li>
                                    <li><a href="services-single.html">Chemical Research</a></li>
                                    <li><a href="services-single.html">Material Engineering</a></li>
                                    <li><a href="services-single.html">Mechanical Engineering</a></li>
                                    <li><a href="services-single.html">Petroleum and Gas</a></li>
                                    <li><a href="services-single.html">Power and Energy</a></li> --}}
                                </ul>
                            </li>
                            <li class=" {{ request()->routeIs('contact') ? 'active' : '' }}"><a
                                    href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!--End Header Lower-->
</header>
