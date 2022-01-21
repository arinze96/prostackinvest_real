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
                <img src="{{ asset('assets/images/page-titles/map.jpg') }}" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>Cryptocurrency</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">Cryptocurrencies</a></li>
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

                    </div><!-- .col-lg-3 end -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    
                                    <p>Cryptocurrencies are sets of software protocols for generating digital tokens and for tracking transactions in a way that makes it hard to counterfeit or re-use tokens. Therefore, cryptocurrency trading involves trading on digital currencies/tokens. This form of trading has in fact only been around for a few years.
                                    </p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>


                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <p>
                                        One of the most common forms of digital currency is the Bitcoin which was released in 2009. It's initial price was set at less than 1 cent as at 2010. While it is still to experience its boom phase, it has quickly become a popular way of trading for many. One of the big benefits of this form of trading is the money that there is to be made. The bitcoin, for example, hit a market cap of $160 billion by November, 2017. There are considerably a few people trading cryptocurrencies which is an advantage because the market is yet to be saturated by others trying to get in on the game.
                                    </p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>
                            
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <p>
                                        Deutsche bank has shown an increasing appreciation for the transformative potential of both blockchain technology—becoming one of the first to spearhead the development of its own Ethereum-based blockchain—and the cryptocurrencies based on it. Just like Deutsche bank, Germany offers forex broker service, we also have cryptocurrency traders that specialize in the trading of this digital cash. Our job is to test them all out, put them through their paces and then present our information, for better result.
                                    </p>
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
