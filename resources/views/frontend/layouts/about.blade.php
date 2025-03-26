<!DOCTYPE html>
<html>

<!-- Mirrored from wp.hostlin.com/nijmegan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 06:13:08 GMT -->

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">

        <!-- Main Header-->
        @include('frontend.layouts.header')
        <!--End Main Header -->

        {{-- <section class="about-section">
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
                        <!--video-box-->
                        <div class="video-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="image">
                                <img src="{{ asset('assets/images/resource/about.jpg') }}" alt="" />
                            </figure>
                            <a href="https://www.youtube.com/watch?v=0e1uTwSRGgI"
                                class="lightbox-image overlay-box"><span class="flaticon-arrows-5"></span></a>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}

        <div class="container my-5 py-5">
            <h2 class="section-title">Company Profile</h2>
            <p class="text-justify text-lg">
                THRAEX CO. is a company consistently working on technology innovation of foundry equipment /
                heavy-duty process equipment & plant. Through this expertise we are supplying equipment with consulting
                &
                engineering support for Green Sand Foundry Equipment and also Lost Foam Casting Foundry Equipment.
            </p>
            <p class="text-justify text-lg">
                Through adequate technical knowledge & an extrovert team, we can offer customized solutions for Foundry
                equipment & plant to customers. With decades of exposure in Foundry stream we are able to Design &
                Develop
                special applications in NO-BAKE SAND PLANT with semi-auto & fully auto operation system. We at THRAEX
                CO.
                manufacture tailor-made mould handling system to improvement in casting production.
            </p>

            <div class="vision-box d-flex mt-4">
                <div class="icon-container me-4">
                    <i class="fas fa-bullseye vision-icon"></i>
                </div>
                <div class="line me-3"></div>
                <div class="text-container">
                    <h4 class="vision-title">Vision</h4>
                    <p>Our Company Mission is to create the most compelling foundry automation equipment company of the
                        21st century by serving the most popular foundry.</p>
                </div>
            </div>

            <div class="image-gallery">
                <img src="{{ asset('assets/frontend/images/resource/about1.jpg') }}" alt="about1" class="gallery-img">
                <img src="{{ asset('assets/frontend/images/resource/about2.jpg') }}" alt="about2" class="gallery-img">
            </div>

            <div class="mission-box d-flex mt-4">
                <div class="icon-container me-4">
                    <i class="fas fa-gem mission-icon"></i>
                </div>
                <div class="line me-3"></div>
                <div class="text-container">
                    <h4 class="mission-title">Mission</h4>
                    <p>Our Company Vision is to accelerate automation in foundry for more accurate easy performance. We
                        believe that every step of foundry process can be made accurately by adding automation without
                        compromising safety.</p>
                </div>
            </div>

            <div class="custom-video-gallery">
                <div class="custom-video-box">
                    <video controls>
                        <source src="{{ asset('assets/frontend/video/about1-vid.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="custom-video-box">
                    <video controls>
                        <source src="{{ asset('assets/frontend/video/about2-vid.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<!-- Mirrored from wp.hostlin.com/nijmegan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 06:13:43 GMT -->

</html>
