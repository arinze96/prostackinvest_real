<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    @include('includes.home_css')
    <title>Portfolio | our portfolio</title>
</head>

<body>
    <div class="preloader">
        <div class="reverse-spinner"></div>
    </div>


    <div id="wrapper" class="wrapper clearfix">
        @include('includes.home_header')

        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="{{ asset('assets/images/page-titles/portfolio.jpg') }}" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>SECURITY</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('app.home')  }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('user.pages.view', ['our_portfolio'])  }}">Our Portfolio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Portfolio</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-lg-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>

        <section id="case-study-single" class="case-study case-study-single">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3">

                        <div class="widget widget-categories">
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li class="active"><a href="#">All services</a></li>
                                    <li><a href="#">Protection & Security</a></li>
                                    <li><a href="#">Licensed Exchange</a></li>
                                    <li><a href="#">Recurring Buys</a></li>
                                    <li><a href="#">Unlimited Free Transfers</a></li>
                                    <li><a href="#">Multi Currency Accounts</a></li>
                                    <li><a href="#">Blockchain Smart Contracts</a></li>
                                </ul>
                            </div>
                        </div>


                    </div><!-- .col-lg-3 end -->
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <p>
                                    Prostackinvest is an independent financial company that is known for providing best financial practices to protect the interests of both already established and upcoming businesses. Our approach towards managing investments is designed to give our clients the best services in line with global best practices that will further boost their portfolio. Presently, our company is managing about USD 4.3bn worth of investments for our clients and has a USD 1.4bn worth insurance package. Of the total assets we manage, majority of them are invested in a range of modified implementations worth about USD 4.1bn just as we have series of fund and client specific managed account vehicles.
                                    </p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>


                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <p>Safeguards to protect against unauthorized activity.</p>
                                    <p>Prostackinvest is committed to safeguarding and protecting your account from fraud and all other unauthorized activities. Report as soon as you notice an illegal activity in your account and our company will move in swiftly to ensure you recover whatever loss that may arise as a result of such illegal activity.</p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <p>Since ProstackInvest came on board in 2016, the company has successfully managed several investments for our numerous clients. With the feat achieved so far, we have resolved to indeed, showcase our business to the global community by carrying everybody along. Not only are we desirous of giving out our services but that our clients will on every side, benefit from us too. We welcome you to Prostackinvest Welcome to the future of the Investment Banking…</p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>

                        </div>
                    </div>
                    <!-- .col-md-9 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>

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

        @include('includes.home_footer')


        <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
    </div>
    @include('includes.home_script')
</body>


</html>
