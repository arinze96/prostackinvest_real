<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
 @include('includes.home_css');
    <title>FAQs | frequently asked questions </title>
</head>

<body>
    <div class="preloader">
        <div class="reverse-spinner"></div>
    </div>
    
    <div id="wrapper" class="wrapper clearfix">
        @include('includes.home_header');

        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="{{ asset("assets/images/page-titles/4.jpg") }}" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="title  text-center">
                            <div class="title--heading">
                                <h1>Frequently Asked Questions</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">about</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                            </ol>
                        </div><!-- .title end -->
                    </div><!-- .col-lg-8 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </section><!-- #page-title end -->

        <section id="faqs" class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="accordion accordion-1" id="accordion01">
                            <!-- Panel 01 -->
                            <div class="card">
                                <div class="card-heading">
                                    <a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01"
                                        href="#collapse01-1">WHAT IS THE WITHDRAWAL PROCEDURE??</a>
                                </div>
                                <div id="collapse01-1" class="collapse" data-parent="#accordion01">
                                    <div class="card-body">You may make withdrawal requests at any time. Withdrawing funds is safe and simple with Master Trade. You can request for a withdrawal either from your account or by contacting your account manager. You will be required to submit proper documents in order to begin the process. Our accounting department will process the requests once you request for withdrawel of Funds
                                    </div>
                                </div>
                            </div>
                            <!-- Panel 02 -->
                            <div class="card">
                                <div class="card-heading">
                                    <a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01"
                                        href="#collapse01-2">HOW DO I DEPOSIT FUNDS?? </a>
                                </div>
                                <div id="collapse01-2" class="collapse" data-parent="#accordion01">
                                    <div class="card-body">Funding your Prostackinvest account is simple and secure. You can fund your account through multiple payment methods including MoneyGram, WesternUnion, Bitcoin and Perfectmoney.
                                    </div>
                                </div>
                            </div>
                            <!-- Panel 03 -->
                            <div class="card">
                                <div class="card-heading">
                                    <a class="card-link " data-toggle="collapse" data-parent="#accordion01"
                                        href="#collapse01-3">HOW LONG DOES IT TAKE TO CLOSE MY ACCOUNT AND GET A REFUND?</a>
                                </div>
                                <div id="collapse01-3" class="collapse show" data-parent="#accordion01">
                                    <div class="card-body">30 days - 90 days. Depending on the amount invested.
                                    </div>
                                </div>
                            </div>
                            <!-- Panel 04 -->
                            <div class="card">
                                <div class="card-heading">
                                    <a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01"
                                        href="#collapse01-4">ARE THERE ANY HIDDEN CHARGES OR FEES?</a>
                                </div>
                                <div id="collapse01-4" class="collapse" data-parent="#accordion01">
                                    <div class="card-body">No. There are absolutely no hidden fees or extra charges.
                                    </div>
                                </div>
                            </div>
                            <!-- Panel 05 -->
                            <div class="card">
                                <div class="card-heading">
                                    <a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01"
                                        href="#collapse01-5">How DO I GET STARTED?</a>
                                </div>
                                <div id="collapse01-5" class="collapse" data-parent="#accordion01">
                                    <div class="card-body">The steps involved in this process are really simple. All you need to do is: Investors in Master Trade must be at least 18 years of age. We guarantee the safety of personal data of users. The administration is not responsible for the transfer of your personal data to third parties. If you loose your password, click “forgot password” to your email address you will receive an activation email. IRek Wealth Investment prohibits the creation of numerous accounts without notifying the admin. You must understand the possible risks associated with investing, so don’t invest a higher amount than you can afford to loose. Invest from your heart. Any other related questions, enquires and suggestions arising during the services, you can put in a letter/ mail by contacting customer support. We will investigate the issue and you will receive a response as quickly as possible. IRek Wealth Investment will help you gain your financial freedom so do not worry and always be positive as we WIN.
                                    </div>
                                </div>
                            </div>
                            <!-- Panel 06 -->
                            <div class="card">
                                <div class="card-heading">
                                    <a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion06"
                                        href="#collapse01-6">WHEN DO I GET PAID??</a>
                                </div>
                                <div id="collapse01-6" class="collapse" data-parent="#accordion01">
                                    <div class="card-body">Our standard payment plan provides for monthly payments. At the end of each month, all accumulated funds are transfered to your account. The minimum amount of your balance should be at least 70 USD.
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>

                </div>
            </div>
        </section>

        @include('includes.home_footer');


        <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
    </div><!-- #wrapper end -->
    @include('includes.home_script');
</body>

</html>
