<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from www.websiteprofs.com/assets/images/html/Consultancy/consultivo-consulting-investments/MAIN_FILES/Consultivo/page-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 23:10:07 GMT -->

<head>
    @include('includes.home_css')
    <title>About us</title>
</head>

<body>
    <div class="preloader">
        <div class="reverse-spinner"></div>
    </div>

    <div id="wrapper" class="wrapper clearfix">
        {{-- @includes('includes.home_header') --}}
        @include("includes.home_header")

        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="{{ asset('assets/images/page-titles/office.jpg') }}" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>about us</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('app.home')  }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-lg-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>


        <section id="team1" class="team team-1 pb-50">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12 ">
                        <div class="heading  mb-50 text--center">
                            <h2 class="heading--title" style="color:black">About Us</h2>
                            <p class="heading--desc mb-0">We are ProStack Invest, majorly focused on trading Crypto currency day in day out to make substantial profit.

                                ProStack invest is located at Zentralstrasse 17, 6002 Luzern, Switzerland. Our headquarters is located at 26 Saint-Catherine St W, Montreal, Quebec H2X 1Z5, Canada. It was incorporated on the 22nd of July 2016 with aims to reach out to everyone offering a guaranteed return on any investment carried out in the company. 
                                
                                ProStack is an investment platform where your investment returns are guaranteed and is received as early as 7 days only. ProStack invest also engages in real estate investment and development with 30 years of experience in construction services, forex trading, medical equipments, crypto currency investment, architecture, manufacturing and structural engineering.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="featured3" class="featured featured-2 featured-3 featured-left bg-dark3 pt-0 pb-0">
            <div class="container-fluid pr-0 pl-0">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-content">
                        <div class="heading">
                            <h2 class="heading--title color-white">We Are Here To Ease<br>The Financial Obstacles!</h2>
                            <p class="heading--desc color-white">The choice is in your hands: Where do you go to get an
                                advice and where you purchase products?!!</p>
                        </div>
                        <!-- Feature Card #1 -->
                        <div class="feature-card wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-card-icon">
                                <i class="icon-refresh"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Innovative Solutions</h3>
                                <p class="feature-card-desc">Innovative Solutions offers services, development services
                                    and consulting to help you make the best technology.</p>
                            </div>
                        </div>
                        <!-- feature-card end -->
                        <!-- Feature Card #2 -->
                        <div class="feature-card wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-card-icon">
                                <i class="icon-speedometer"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">On Time Services</h3>
                                <p class="feature-card-desc">Mutual funds from many investors to purchase broad range
                                    of investments, such as stocks, goals, and dreams.</p>
                            </div>
                        </div>
                        <!-- feature-card end -->
                        <!-- Feature Card #3 -->
                        <div class="feature-card wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-card-icon">
                                <i class="icon-lifesaver"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Best Support</h3>
                                <p class="feature-card-desc">We bring the right people business solutions to challenge
                                    established thinking and drive transformation.</p>
                            </div>
                        </div>
                        <!-- feature-card end -->
                    </div>
                    <!-- .col-lg-6 end -->
                    <div class="col-sm-12 col-md-12 col-lg-6 pr-0">
                        <div class="banner--img">
                            <img src="{{ asset('assets/images/banners/1.jpg') }}" alt="banner img">
                        </div>
                    </div>
                    <!-- .col-lg-6 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #featured3 end -->

        <!-- CTA #1
============================================= -->
        <section id="cta1" class="cta cta-1 bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <h3>Doing the Right Thing, at the Right Time!</h3>
                    </div>
                    <!-- .col-lg-9 -->
                    <div class="col-sm-12 col-md-12 col-lg-3 text-right">
                        <a href="#" class="btn btn--white btn--bordered btn--rounded">Get Started</a>
                    </div>
                    <!-- .col-lg-3 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>


        @include("includes.home_footer")


        <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
    </div><!-- #wrapper end -->
    @include("includes.home_script")


</body>

</html>
