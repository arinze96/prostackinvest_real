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
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>Our Team</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                            </ol>
                        </div><!-- .title end -->
                    </div><!-- .col-lg-8 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </section><!-- #page-title end -->

        <section id="team1" class="team team-1 pb-50">
            <div class="container">
                <div class="row">
                    <!-- Member #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('assets/images/team/grid/1.jpg') }}" alt="member">
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div><!-- .memebr-ovelay end -->
                            </div><!-- .member-img end -->
                            <div class="member-info">
                                <h5>James Wane</h5>
                                <h6>Consultant</h6>
                            </div><!-- .member-info end -->
                        </div><!-- .member end -->
                    </div><!-- .col-md-4 end -->

                    <!-- Member #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset("assets/images/team/grid/2.jpg") }}" alt="member">
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div><!-- .memebr-ovelay end -->
                            </div><!-- .member-img end -->
                            <div class="member-info">
                                <h5>John Tommy</h5>
                                <h6>Marketing</h6>
                            </div><!-- .member-info end -->
                        </div><!-- .member end -->
                    </div><!-- .col-md-4 end -->

                    <!-- Member #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset("assets/images/team/grid/3.jpg") }}" alt="member">
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div><!-- .memebr-ovelay end -->
                            </div><!-- .member-img end -->
                            <div class="member-info">
                                <h5>Marko Smith</h5>
                                <h6>Cheif Officer</h6>
                            </div><!-- .member-info end -->
                        </div><!-- .member end -->
                    </div><!-- .col-md-3 end -->

                    <!-- Member #4 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset("assets/images/team/grid/4.jpg") }}" alt="member">
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div><!-- .memebr-ovelay end -->
                            </div><!-- .member-img end -->
                            <div class="member-info">
                                <h5>Martin Hope</h5>
                                <h6>Planning</h6>
                            </div><!-- .member-info end -->
                        </div><!-- .member end -->
                    </div><!-- .col-md-4 end -->

                    <!-- Member #5 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset("assets/images/team/grid/5.jpg") }}" alt="member">
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div><!-- .memebr-ovelay end -->
                            </div><!-- .member-img end -->
                            <div class="member-info">
                                <h5>Jennifer Tom</h5>
                                <h6>Managment</h6>
                            </div><!-- .member-info end -->
                        </div><!-- .member end -->
                    </div><!-- .col-md-4 end -->

                    <!-- Member #6 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset("assets/images/team/grid/6.jpg") }}" alt="member">
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div><!-- .memebr-ovelay end -->
                            </div><!-- .member-img end -->
                            <div class="member-info">
                                <h5>John Peter</h5>
                                <h6>HR</h6>
                            </div><!-- .member-info end -->
                        </div><!-- .member end -->
                    </div><!-- .col-md-4 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </section><!-- #team1 end -->


        <section id="featured2" class="featured featured-2 featured-left pt-110 pb-110 bg-overlay bg-overlay-dark3">
            <div class="bg-section"><img src="{{ asset("assets/images/background/1.jpg") }}" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
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
                                <p class="feature-card-desc ">Innovative Solutions offers services, development
                                    services and consulting to help you make the best technology.</p>
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
                                <p class="feature-card-desc ">Mutual funds from many investors to purchase broad range
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
                                <p class="feature-card-desc ">We bring the right people business solutions to challenge
                                    established thinking and drive transformation.</p>
                            </div>
                        </div>
                        <!-- feature-card end -->
                    </div>
                    <!-- .col-lg-6 end -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="contact-box">
                            <div class="contat-heading">
                                <h3>Get a Free Quote</h3>
                            </div>
                            <form class="mb-0">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <input type="text" class="form-control" name="contact-name" id="name"
                                            placeholder="Name" required="">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <input type="email" class="form-control" name="contact-email" id="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <input type="text" class="form-control" name="contact-phone" id="Phone"
                                            placeholder="Phone">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-select">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="strategySelect" id="strategySelect" class="form-control">
                                                <option value="0">Strategy & Planning</option>
                                                <option value="1">Planning</option>
                                                <option value="2">Strategy</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <textarea class="form-control" name="contact-message" id="message" rows="2"
                                            placeholder="Request"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="submit" value="Submit Request" name="submit"
                                            class="btn btn--secondary btn--block">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="contact-result"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- form end -->
                        </div>
                    </div>
                    <!-- .col-lg-6 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
      
        <section id="blog" class="blog blog-grid pb-60">
            <div class="container">
                <div class="row  wow flipInX" data-wow-delay="100ms">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-2 mb-50 text--center">
                            <p class="heading--subtitle">Don’t Miss Latest</p>
                            <h2 class="heading--title">News & Headlines</h2>
                            <p class="heading--desc mb-0">Follow our latest news and thoughts which focuses exclusively
                                on investment strategy guide, blockchain tech, crypto-trading and mining.</p>
                        </div>
                    </div>
                    <!-- .col-lg-6 end -->
                </div>
                <div class="row wow fadeIn" data-wow-delay="100ms">
                    <!-- Blog Entry #1 -->
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="{{ asset("assets/images/blog/grid/1.jpg") }}" alt="entry image" />
                                    <div class="entry--overlay"></div>
                                </a>
                            </div><!-- .entry-img end -->
                            <div class="entry--content">
                                <div class="entry--meta">
                                    <a href="#">Investment tips</a>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#">Four ways to cheer yourself up on Blue Monday!</a></h4>
                                </div>
                                <div class="entry--date">
                                    Apr 15, 2018
                                </div>
                                <div class="entry--bio">
                                    <p> The third Monday of January is supposed to be most depressing day of the year.
                                        Whether you believe that or not, the long nights, cold weather and trying to...
                                    </p>
                                </div>
                                <div class="entry--more">
                                    <a href="#"><i class="fa fa-plus"></i>Read More</a>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Blog Entry #2 -->
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="{{ asset("assets/images/blog/grid/2.jpg") }}" alt="entry image" />
                                    <div class="entry--overlay"></div>
                                </a>
                            </div><!-- .entry-img end -->
                            <div class="entry--content">
                                <div class="entry--meta">
                                    <a href="#">Consulting</a>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#">In the news: this week’s top money stories</a></h4>
                                </div>
                                <div class="entry--date">
                                    Apr 12, 2018
                                </div>
                                <div class="entry--bio">
                                    <p>The weather has taken a turn for the worse and January pay day still seems far
                                        away. But you don’t have to venture outdoors or spend any money today sit back,
                                        relax... </p>
                                </div>
                                <div class="entry--more">
                                    <a href="#"><i class="fa fa-plus"></i>Read More</a>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Blog Entry #3 -->
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="{{ asset("assets/images/blog/grid/3.jpg") }}" alt="entry image" />
                                    <div class="entry--overlay"></div>
                                </a>
                            </div><!-- .entry-img end -->
                            <div class="entry--content">
                                <div class="entry--meta">
                                    <a href="#">Financial</a>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#">How does your household spend compare to the UK?</a></h4>
                                </div>
                                <div class="entry--date">
                                    Apr 12, 2018
                                </div>
                                <div class="entry--bio">
                                    <p>The ‘cost of living’ is a phrase that’s rarely out of the news, and our wallets
                                        and bills appear to back up the claims that our household spending is on the
                                        rise... </p>
                                </div>
                                <div class="entry--more">
                                    <a href="#"><i class="fa fa-plus"></i>Read More</a>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->
                    </div>
                    <!-- .col-md-4 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
      
        <section id="cta1" class="cta cta-1 bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-9 col-md-9">
                        <h3>Doing the Right Thing, at the Right Time!</h3>
                    </div>
                    <!-- .col-lg-9 -->
                    <div class="col-12 col-sm-3 col-md-3 text-right">
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
    </div><!-- #wrapper end -->
@include('includes.home_script')
</body>



</html>
