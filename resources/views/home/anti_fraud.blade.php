<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    @include('includes.home_css')
    <title>Consultivo | Consulting Business Consulting Finance Html5 Template</title>
</head>

<body>
    <div class="preloader">
        <div class="reverse-spinner"></div>
    </div>


    <div id="wrapper" class="wrapper clearfix">
        @include('includes.home_header')

        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="{{ asset('assets/images/page-titles/5.jpg') }}" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>How to explain inquiry to clients!</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">Case Studies</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Single Case Studies</li>
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

                        <div class="widget widget-info">
                            <div class="widget--content">
                                <div class="info--title pull-left">
                                    Download<br>Our Brochures
                                </div>
                                <div class="info--icon pull-right">
                                    <img src="assets/images/icons/pdficon.jpg" alt="icon">
                                </div>
                            </div>
                        </div> <!-- .widget-info end -->
                    </div><!-- .col-lg-3 end -->
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <h3>Overview</h3>
                                    <p>We all need a little help from our friends from time to time. Although we offer
                                        the one-stop convenience of an integrated range of legal, financial services
                                        under one roof, there are occasions when our clients need specialist advice
                                        beyond the scope of our own expertise. That’s why we’ve developed close working
                                        relationships with a number of strategic partners who can bring additional
                                        skills to the table to complement our own, carefully selected as leaders in
                                        their respective fields whose outlook and approach to client care mirror our own
                                        high standards.</p>
                                    <p>It’s all part our commitment to provide Financial Expert clients with a complete
                                        support service for every stage of life – in other words, if we can’t give you
                                        the answers you’re looking for, then you can count on us to know someone who can
                                    </p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>
                            <!-- .col-lg-12 end -->
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-45">
                                <div class="video--content text-center">
                                    <div class="bg-section">
                                        <img src="{{ asset('assets/images/video/1.jpg') }}" alt="Background" />
                                    </div>
                                    <div class="video--button">
                                        <div class="video-overlay">
                                            <div class="pos-vertical-center">
                                                <a class="popup-video"
                                                    href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                                    <span class="btn--animation"></span>
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                            <!-- .video-player end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- .video-content end -->
                            </div>
                            <!-- .col-lg-12 end -->
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="row  mb-50">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="case--study-text">
                                            <p>Experts offers the one-stop-shop convenience of integrated range of
                                                financial and legal services under one roof. We are passionate about
                                                what we do and how we do it. We understand that our clients are not just
                                                the most important part of our business strategy and policy.</p>
                                            <p>There are occasions when our clients need specialist advice beyond the
                                                scope of our own expertise. That’s why we’ve developed close working
                                                relationships and managment.</p>
                                        </div>
                                        <!-- .case-study-text end -->
                                    </div>
                                    <!-- .col-lg-6 end -->
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="chart--img">
                                            <img src="{{ asset('assets/images/charts/1.png') }}" alt="chart"
                                                class="img-fluid">
                                        </div>
                                        <!-- .chart-img end -->
                                    </div>
                                    <!-- .col-lg-6 end -->
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .col-lg-12 end -->
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <h3>Strategy</h3>
                                    <p>We all need a little help from our friends from time to time. Although we offer
                                        the one-stop convenience of an integrated range of legal, financial services
                                        under one roof, there are occasions when our clients need specialist advice
                                        beyond the scope of our own expertise. That’s why we’ve developed close working
                                        relationships with a number of strategic partners who can bring additional
                                        skills to the table to complement our own, carefully selected as leaders in
                                        their respective fields whose outlook and approach to client care mirror our own
                                        high standards.</p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>
                            <!-- .col-lg-12 end -->
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="accordion accordion-1 mb-50" id="accordion01">
                                    <!-- Panel 01 -->
                                    <div class="card">
                                        <div class="card-heading">
                                            <a class="card-link collapsed" data-toggle="collapse"
                                                data-parent="#accordion01" href="#collapse01-1">Which Plan Is Right For
                                                Me?</a>
                                        </div>
                                        <div id="collapse01-1" class="collapse" data-parent="#accordion01">
                                            <div class="card-body">Trends, vision dominates a lot of our
                                                subconscious interpretation of the world around us. On top it, pleasing
                                                images create a better user experience. Rounding up a bunch of specific
                                                designs.Trends, vision dominates a lot of our subconscious
                                                interpretation of the world around us. </div>
                                        </div>
                                    </div>
                                    <!-- Panel 02 -->
                                    <div class="card">
                                        <div class="card-heading">
                                            <a class="card-link collapsed" data-toggle="collapse"
                                                data-parent="#accordion01" href="#collapse01-2">Do I have to commit to a
                                                contract? </a>
                                        </div>
                                        <div id="collapse01-2" class="collapse" data-parent="#accordion01">
                                            <div class="card-body">Trends, vision dominates a lot of our
                                                subconscious interpretation of the world around us. On top it, pleasing
                                                images create a better user experience. Rounding up a bunch of specific
                                                designs.Trends, vision dominates a lot of our subconscious
                                                interpretation of the world around us. </div>
                                        </div>
                                    </div>
                                    <!-- Panel 03 -->
                                    <div class="card">
                                        <div class="card-heading">
                                            <a class="card-link" data-toggle="collapse" data-parent="#accordion01"
                                                href="#collapse01-3">What Payment Methods Are Available? </a>
                                        </div>
                                        <div id="collapse01-3" class="collapse show" data-parent="#accordion01">
                                            <div class="card-body">With any financial product that you buy, it is
                                                important that you know you are getting the best advice from a reputable
                                                company as often you will have to provide sensitive information online
                                                or over the internet.</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .Accordion-->
                            </div>
                            <!-- .col-lg-12 end -->
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <h3>Desired Results</h3>
                                    <p>Experts offers the one-stop-shop convenience of integrated range of financial and
                                        legal services under one roof. We understand that our clients are not just the
                                        most important part of our business.</p>
                                </div>
                                <!-- .case-study-text end -->
                                <div class="chart--img">
                                    <img src="{{ asset('assets/images/charts/2.png') }}" alt="chart"
                                        class="img-fluid">
                                </div>
                                <!-- .chart-img end -->
                            </div>
                            <!-- .col-lg-12 end -->
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
