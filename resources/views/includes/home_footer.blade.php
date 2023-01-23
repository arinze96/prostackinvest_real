   <!-- Footer #1
============================================= -->
<footer id="footer" class="footer footer-1">
    <!-- Widget Section
============================================= -->

    <div class="footer-widget">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12 col-md-6 col-lg-3 footer--widget widget-about">
                    <div class="widget-content">
                        <img class="footer-logo" src={{ asset("assets/ProStack-01.png") }} width="150px" height="150px" alt="logo">
                        <p>Experienced In Cryptocurrency And Financial Investment!We don’t believe in the sales culture,
                            but instead we believe in the service culture. </p>
                        <div class="social-icons">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://instagram.com/prostackinvest?igshid=YmMyMTA2M2Y=" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div><!-- .col-md-3 end -->
                <div class="col-12 col-sm-4 col-md-6 col-lg-2 footer--widget widget-links">
                    <div class="widget-title">
                        <h5>Company</h5>
                    </div>
                    <div class="widget-content">
                        <ul>
                            <li><a href="{{ route('user.pages.view', ['about']) }}">About Us</a></li>
                            <li><a href="{{ route('user.pages.view', ['team']) }}">Meet Our Team</a></li>
                            <li><a href="{{ route('user.pages.view', ['personal_loan']) }}">Apply For Loan</a></li>
                            <li><a href="{{ route('user.pages.view', ['pricing']) }}">Pricing</a></li>
                            <li><a href="{{ route('user.pages.view', ['contact']) }}">Contact Us</a></li>
                            <li><a href="{{ route('user.pages.view', ['faq']) }}">FAQs</a></li>
                            <li><a href="{{ route('user.pages.view', ['our_history']) }}">Our History</a></li>
                            <li><a href="{{ route('user.pages.view', ['our_portfolio']) }}">Our Portfolio</a></li>
                        </ul>
                    </div>
                </div><!-- .col-md-2 end -->

                <div class="col-12 col-sm-8 col-md-6 col-lg-4 footer--widget widget-links widget-links-inline">
                    <div class="widget-title">
                        <h5>Services</h5>
                    </div>
                    <div class="widget-content">
                        <ul>
                            <li><a href="{{ route('user.pages.view', ['cryptocurrency']) }}">Cryptocurrency</a></li>
                            <li><a href="{{ route('user.pages.view', ['forex']) }}">Forex</a></li>
                            <li><a href="{{ route('user.pages.view', ['real_estate']) }}">Real Estate</a></li>
                            <li><a href="{{ route('user.pages.view', ['escrow']) }}">Escrow Service</a></li>
                            <li><a href="{{ route('user.pages.view', ['personal_loan']) }}">Personal Loan</a></li>
                            <li><a href="{{ route('user.pages.view', ['anti_fraud']) }}">Anti Fraud</a></li>
                        </ul>
                    </div>
                </div><!-- .col-md-4 end -->

                <div class="col-12 col-md-6 col-lg-3 footer--widget widget-newsletter">
                    <div class="widget-title">
                        <h5>Stay Updated</h5>
                    </div>
                    <div class="widget-content">
                        <form class="form-newsletter mailchimp">
                            <input type="email" name="email" class="form-control"
                                placeholder="Subscribe Our Newsletter">
                            <button type="submit"><i class="fa fa-long-arrow-right"></i></button>
                        </form>
                        <div class="subscribe-alert"></div>
                        <div class="clearfix"></div>
                        <p>Get the latest updates and offers.</p>
                    </div>
                </div><!-- .col-md-3 end -->
                <div class="clearfix"></div>
            </div>
        </div><!-- .container end -->
    </div><!-- .footer-widget end -->

    <!-- Copyrights
============================================= -->
    <div class="footer--bar">
        <div class="row">
            <div class="col-12 col-md-12 col-md-12 text--center footer--copyright">
                <div class="copyright">
                    <span>©2016-2023, ProStack invest</span> <a
                        href="http://prostackinvest.com">prostackinvest.com</a>
                </div>
            </div>
        </div>
        <!-- .row end -->
    </div><!-- .footer-copyright end -->
</footer>