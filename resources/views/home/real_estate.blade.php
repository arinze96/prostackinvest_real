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
                                <h1>Real Estate</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">Real Estate</a></li>
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
                                    
                                    <p>
                                        Real estate is one of the oldest and most popular asset classes. Most new investors in real estate know this, but what they don't know is how many different types of real estate investments exist.
                                    </p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>


                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <p>
                                        It goes without saying that each type of real estate investment has potential benefits and pitfalls, including unique quirks in cash flow cycles and lending traditions. Standards of what is considered appropriate or normal do exist, so you'll want to study opportunities well before you start adding them to your portfolio.
                                    </p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>
                            
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <p>
                                        Forming an entity to hold your real estate investments allows you to have an option to place that entity into bankruptcy without risking your personal property and holdings. This technique is called "asset separation" because it protects you and your holdings. These special legal structures can be set up for as much as only a few hundred dollars but can cost as much as a few thousand. The paperwork filing requirements aren't overwhelming, and you could use a different LLC for each real estate investment you owned.
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
