<footer class="main-footer">
    <div class="auto-container">
        <!--Upper Box-->
        <div class="upper-box">
            <div class="row clearfix">

                <!--Footer Info Box-->
                <div class="footer-info-box col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-smartphone-1"></span>
                        </div>
                        <div class="text">Call Us Anytime</div>
                        <h3>+91 {{ $data['phone'] ?? '' }}</h3>
                    </div>
                </div>

                <!--Footer Info Box-->
                <div class="footer-info-box col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-clock"></span>
                        </div>
                        <div class="text">Useful Links</div>
                        <h3>Mon - Sat: 10am - 5pm</h3>
                    </div>
                </div>

                <!--Footer Info Box-->
                <div class="footer-info-box col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-e-mail-envelope"></span>
                        </div>
                        <div class="text">Mail Us</div>
                        <h3>{{ $data['email1'] ?? '' }}<br> {{ $data['email2'] ?? '' }} </h3>
                    </div>
                </div>

            </div>
        </div>
        <!--End Upper Box-->

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget about-widget">
                                <h2>ABOUT Comapny</h2>
                                <div class="widget-content">
                                    <div class="text">
                                        <p>THRAEX CO. is a ingenious company, consistently working on technology innovation of foundry equipment /
                                            heavy-duty process equipment & plant.</p>
                                    </div>
                                </div>
                                <div class="social-links-two">
                                    {{-- <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-pinterest-p"></span></a>
                                    <a href="#"><span class="fa fa-linkedin"></span></a> --}}
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        {{-- <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <h2>USEFUL LINKS</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Services</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Site Map</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>

                <!--Big Column-->
                {{-- <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget twitter-widget">
                                <h2>TWITTER FEED</h2>
                                <div class="widget-content">
                                    <div class="feed">
                                        <div class="text"><span class="icon fa fa-twitter"></span> Research
                                            & development seed round busines interaction advisor success...
                                        </div>
                                        <span class="month"><a href="#">https://t.co/NgHF6TL31Q</a></span>
                                        <div class="date-box">Nov 07, 2016</div>
                                    </div>
                                    <div class="feed">
                                        <div class="text"><span class="icon fa fa-twitter"></span> Research
                                            & development seed round busines interaction advisor success...
                                        </div>
                                        <span class="month"><a href="#">https://t.co/NgHF6TL31Q</a></span>
                                        <div class="date-box">Nov 07, 2016</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget subscribe-widget">
                                <h2>NEWSLETTER</h2>
                                <div class="widget-content">
                                    <div class="text">Alpha influencer responsive is web design deployment
                                        business user experiencing agreement infrastructure pivot.</div>
                                    <div class="newsletter-form">
                                        <form method="post" action="https://wp.hostlin.com/nijmegan/contact.html">
                                            <div class="form-group">
                                                <input type="email" name="email" value=""
                                                    placeholder="Enter your email.." required>
                                                <button type="submit" class="theme-btn"><span
                                                        class="fa fa-long-arrow-right"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}

            </div>
        </div>

    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">Copyright &copy; 2017 {{ isset($companyDetails->company_name) ? $companyDetails->company_name : "" }}. All Rights Reserved</div>
        </div>
    </div>

</footer>
