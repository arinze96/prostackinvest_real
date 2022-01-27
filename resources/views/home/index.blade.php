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
        @include('includes.home_header1')

        <section id="slider" class="slider slide-overlay-dark">
            <!-- START REVOLUTION SLIDER 5.0 -->
            <div class="rev_slider_wrapper">
                <div id="slider1" class="rev_slider" data-version="5.0">
                    <ul>
                        <!-- slide 1 -->
                        <li data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/images/sliders/slide-bg/crypto2.jpg') }}"
                                alt="Slide Background Image" width="1920" height="1280">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption" data-x="['left','left','left','left']"
                                data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-110','-100','-110','-110']" data-fontsize="['16','16','16','12']"
                                data-lineheight="['25','25','25','25']" data-whitespace="nowrap" data-width="none"
                                data-height="none"
                                data-frames='[{"delay":750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--subheadline">Free and impartial money advice</div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" data-x="['left','left','left','left']"
                                data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-5','-5','-5','10']" data-fontsize="['60', '50', '40', '30']"
                                data-lineheight="['60','60','60','60']" data-width="none" data-height="none"
                                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--headline">Experienced In Cryptocurrency <br> And Financial Advice!
                                </div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption" data-x="['left','left','left','left']"
                                data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['100','100','100','100']" data-fontsize="['16', '16', '16', '12']"
                                data-lineheight="['25','25','25','25']" data-width="none" data-height="none"
                                data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--bio">The market is incredibly competitive and hard to understand
                                    what exactly is on offer.</div>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['left','left','left','left']"
                                data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['176','176','200','210']" data-width="none" data-height="none"
                                data-whitespace="nowrap"
                                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide-action">
                                    <a class="btn btn--gradient btn--rounded mr-30"
                                        href="{{ route('user.pages.view', ['register']) }}">Get Started</a>
                                </div>
                            </div>
                        </li>

                        <!-- slide 2 -->
                        <li data-transition="zoomin" data-slotamount="default" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/images/sliders/slide-bg/crypto3.jpg') }}"
                                alt="Slide Background Image" width="1920" height="1280">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption" data-x="['left','left','left','left']"
                                data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-110','-100','-110','-110']" data-fontsize="['16','16','16','12']"
                                data-lineheight="['25','25','25','25']" data-whitespace="nowrap" data-width="none"
                                data-height="none"
                                data-frames='[{"delay":750,"speed":750,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--subheadline">Instant, Secure & Private</div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" data-x="['left','left','left','left']"
                                data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-13','-13','-13','10']" data-fontsize="['60', '50', '40', '30']"
                                data-lineheight="['60','60','60','60']" data-width="none" data-height="none"
                                data-transform_idle="o:1;"
                                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--headline">Smart & Proffesional <br>Solutions For Your Business!
                                </div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption" data-x="['left','left','left','left']"
                                data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['100','100','100','100']" data-fontsize="['16', '16', '16', '12']"
                                data-lineheight="['60','60','60','60']" data-width="none" data-height="none"
                                data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--bio">Buy And Sell Cryptocurrency Near You!</div>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['left','left','left','left']"
                                data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['176','176','200','210']" data-width="none" data-height="none"
                                data-whitespace="nowrap"
                                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide-action">
                                    <a class="btn btn--primary btn--bordered btn--rounded"
                                        href="{{ route('user.pages.view', ['register']) }}">Get Started</a>
                                </div>
                            </div>
                        </li>

                        <!-- slide 3 -->
                        <li data-transition="slideoverleft" data-slotamount="default" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/images/sliders/slide-bg/crypto3.jpg') }}"
                                alt="Slide Background Image" width="1920" height="1280">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption" data-x="['left','left','left','left']"
                                data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-110','-100','-110','-110']" data-fontsize="['16','16','16','12']"
                                data-lineheight="['25','25','25','25']" data-whitespace="nowrap" data-width="none"
                                data-height="none"
                                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--subheadline">Instant, Secure & Private</div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" data-x="['left','left','left','left']"
                                data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-5','-5','-5','10']" data-fontsize="['60', '50', '40', '30']"
                                data-lineheight="['6','60','60','60']" data-width="none" data-height="none"
                                data-transform_idle="o:1;"
                                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--headline">We Are The Leaders Of <br>Financial Investment Market!
                                </div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption" data-x="['left','left','left','left']"
                                data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['100','100','100','100']" data-fontsize="['16', '16', '16', '12']"
                                data-lineheight="['60','60','60','60']" data-width="none" data-height="none"
                                data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--bio">Buy And Sell Cryptocurrency Near You!</div>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['left','left','left','left']"
                                data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['176','176','200','210']" data-width="none" data-height="none"
                                data-whitespace="nowrap"
                                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide-action">
                                    <a class="btn btn--white btn--bordered btn--rounded"
                                        href="{{ route('user.pages.view', ['register']) }}">Get Started</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
            <!-- END OF SLIDER WRAPPER -->
        </section>

        <section id="featured4" class="featured featured-4 featured-left pt-110 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="row">
                            <!-- Feature Card #1 -->
                            <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="feature-card">
                                    <div class="feature-card-icon">
                                        <i class="icon-puzzle"></i>
                                    </div>
                                    <div class="feature-card-content">
                                        <h3 class="feature-card-title">Creative Solutions</h3>
                                        <p class="feature-card-desc">We will go ahead that extra mile to ensure our
                                            clients welfare, our working hours convenient to our Client's needs from our
                                            first contact.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-6 end -->
                            <!-- Feature Card #2 -->
                            <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="feature-card">
                                    <div class="feature-card-icon">
                                        <i class="icon-flag"></i>
                                    </div>
                                    <div class="feature-card-content">
                                        <h3 class="feature-card-title">Professional Team</h3>
                                        <p class="feature-card-desc">We have the most famous experts in reputable
                                            company providing great advice on Wills, Lasting Power of Attorney and Debt
                                            Solut.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-6 end -->
                            <!-- Feature Card #3 -->
                            <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="feature-card">
                                    <div class="feature-card-icon">
                                        <i class="icon-layers"></i>
                                    </div>
                                    <div class="feature-card-content">
                                        <h3 class="feature-card-title">Diverse Approach</h3>
                                        <p class="feature-card-desc">We don’t believe in the sales culture, but instead
                                            we believe in the service culture. Yes, time is precious, but we make the
                                            right decision.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-6 end -->
                            <!-- Feature Card #4 -->
                            <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="feature-card">
                                    <div class="feature-card-icon">
                                        <i class="icon-clipboard"></i>
                                    </div>
                                    <div class="feature-card-content">
                                        <h3 class="feature-card-title">Detailed Reports</h3>
                                        <p class="feature-card-desc">Our experts are always available over the phone
                                            and online. Web chat is available from 8am to 8pm or you can give us a call
                                            for free.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-6 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .col-lg-8 end -->
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="contact-box">
                            <div class="contat-heading">
                                <h3>Contact Us</h3>
                            </div>
                            <form class="mb-0">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="contact-name" id="contact-name"
                                            placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col">
                                        <input type="email" class="form-control" name="contact-email"
                                            id="contact-email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="form-control" name="contact-message" id="contact-message"
                                            rows="2" placeholder="Request"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" value="Submit Request" name="submit"
                                            class="btn btn--secondary btn--block">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <div class="contact-result"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- form end -->
                        </div>
                    </div>
                    <!-- .col-lg-4 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
            {{-- <div class="container">
                <div class="clients clients-1 pt-30 pb-0 row">
                    
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 client">
                        <img src="{{ asset("assets/images/clients/1.png") }}" alt="client">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 client">
                        <img src="{{ asset("assets/images/clients/2.png") }}" alt="client">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 client">
                        <img src="{{ asset("assets/images/clients/3.png") }}" alt="client">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 client">
                        <img src="{{ asset(("assets/images/clients/4.png")) }}" alt="client">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 client">
                        <img src="{{ asset("assets/images/clients/5.png") }}" alt="client">
                    </div>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-2 client">
                        <img src="{{ asset("assets/images/clients/6.png") }}" alt="client">
                    </div>
                </div>
            </div> --}}
        </section>
        <!-- #featured4 end -->

        <!-- video  #2
============================================= -->
        {{-- <section id="video2" class="video-2 bg-overlay bg-overlay-dark2 text-center pb-0">
            <div class="bg-section"><img src="{{ asset("assets/images/background/3.jpg") }}" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                        <div class="heading">
                            <p class="heading--subtitle">Profitable And Successful Investments</p>
                            <h2 class="heading--title color-white mb-0">Internal Accounting, Sales Data & Market
                                Economic Indicators</h2>
                        </div>
                    </div>
                    <!-- .col-lg-10 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="video--content text-center">
                            <div class="bg-section">
                                <img src="assets/images/video/1.jpg" alt="Background" />
                            </div>
                            <div class="video--button">
                                <div class="video-overlay">
                                    <div class="pos-vertical-center">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
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
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
            <div class="section-divider"></div>
        </section> --}}
        <!-- #video2 end -->

        <!-- Info Cards
============================================= -->
        {{-- <section id="infoCards" class="info-cards pt-80 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="info-card">
                            <div class="info-card-step">01.</div>
                            <div class="info-card-content">
                                <h4 class="info-card-subtitle">We are helpers</h4>
                                <h3 class="info-card-title">Advice and guides</h3>
                                <p class="info-card-desc">Taking the time to manage your money better can really pay
                                    off. It can help you stay on top of your bills and save £1,000s each year.</p>
                                <a class="info-card-links" href="#"><i class="fa fa-plus"></i>Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="info-card">
                            <div class="info-card-step">02.</div>
                            <div class="info-card-content">
                                <h4 class="info-card-subtitle">Quick & smart</h4>
                                <h3 class="info-card-title">Tools and calculators</h3>
                                <p class="info-card-desc">Use our Budget planner to keep on top of your spending, use
                                    our tool to work out what you have left after paying your most important bills.</p>
                                <a class="info-card-links" href="#"><i class="fa fa-plus"></i>Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="info-card">
                            <div class="info-card-step">03.</div>
                            <div class="info-card-content">
                                <h4 class="info-card-subtitle">Friendly support</h4>
                                <h3 class="info-card-title">Support in person</h3>
                                <p class="info-card-desc">Support in person, over the phone and online. Web chat is
                                    available from 8am to 8pm or you can give us a call for free money advice.</p>
                                <a class="info-card-links" href="#"><i class="fa fa-plus"></i>Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- Featured #1
============================================= -->
        <section id="about1" class="about about-1 bg-gray pt-110 pb-50">
            <div class="container">
                <h1 style="text-align: center; color:#98cb2b">Company Milestone</h1>
                <!-- .row end -->
                <div class="counter counter-1">
                    <div class="row">
                        <!-- count #1 -->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="count-box text-center">
                                <div class="counting">1,538</div>
                                <div class="count-title">No of Investors and counting</div>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->
                        <!-- count #2 -->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="count-box text-center">
                                <div class="counting">5,124</div>
                                <div class="count-title">Deposit</div>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->
                        <!-- count #3 -->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="count-box text-center">
                                <div class="counting">13,128</div>
                                <div class="count-title">Withdrawals</div>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->
                        <!-- count #4 -->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="count-box text-center">
                                <div class="counting">29,534</div>
                                <div class="count-title">Working Hours</div>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .counter end -->
            </div>
            <!-- .container end -->
        </section>
        <section id="featured1" class="featured featured-1 text-center pt-110">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading  mb-50 text--center">
                            <p class="heading--subtitle">What We Do!</p>
                            <h2 class="heading--title" style="color:black">Our Services</h2>
                            <p class="heading--desc mb-0">When your people get up every day wanting to come to work,
                                success happens, we help you to ensure everyone makes the right investments.</p>
                        </div>
                    </div>
                    <!-- .col-lg-6 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- Feature Card #1 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-card-icon">
                                <i class="icon-presentation"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Forex</h3>
                                <p class="feature-card-desc">Stop loss and take profit orders will help secure your
                                    investment. The system will automatically execute trades to realise gains.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .col-lg-4 end -->
                    <!-- Feature Card #2 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-card-icon">
                                <i class="icon-search"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Cryptocurrency</h3>
                                <p class="feature-card-desc">Our customers perform transactions not only in
                                    cryptocurrency, but the major world currencies supported by the system.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .col-lg-4 end -->
                    <!-- Feature Card #3 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-card-icon">
                                <i class="icon-piechart"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Escrow Services</h3>
                                <p class="feature-card-desc">Invest in digital currency slowly over time by scheduling
                                    buys weekly or monthly, allows a trader to profit from a market move.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .col-lg-4 end -->
                    <!-- Feature Card #4 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-card-icon">
                                <i class="icon-map"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Real Estate Planning </h3>
                                <p class="feature-card-desc">Estate planning is the process of anticipating and
                                    arranging, during a person's life, for the management and disposal.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .col-lg-4 end -->
                    <!-- Feature Card #5 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-card-icon">
                                <i class="icon-bargraph"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Personal Loans</h3>
                                <p class="feature-card-desc">Support major currencies: USD, EUR, GBP, and various
                                    Cryptocurrencies. Loans and Funds exchanged between currencies are available at
                                    market rate.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .col-lg-4 end -->
                    <!-- Feature Card #6 -->
                    {{-- <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-card-icon">
                                <i class="icon-shield"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Insurance & Retirement</h3>
                                <p class="feature-card-desc">The first thing to know about blockchain smart contracts
                                    is they're not contracts, smart, nor necessarily on a blockchain.</p>
                            </div>
                        </div>
                    </div> --}}
                    <!-- .col-lg-4 end -->
                </div>
                <!-- .row end -->
                <div class="row ">
                    <div class="col-sm-12 col-md-12 col-lg-12 text--center">
                        <a href="{{ route('user.pages.view', ['register']) }}"
                            class="btn btn--gradient btn--rounded">Get Started</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing1" class="pricing pricing-1 bg-overlay bg-overlay-dark2 pt-110 pb-0">
            <div class="bg-section">
                <img src="{{ asset('assets/images/background/2.jpg') }}" alt="background">
            </div>
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-md-3">
                        <div class="heading heading-1 text--center mb-40">
                            <p class="heading--subtitle">Get Started Now</p>
                            <h2 class="heading--title text-white" style="color:black">Our Pricing Plans</h2>
                            <p class="heading--desc heading--light mb-0">Get started now with us to earn every day and
                                forever in your business. We accept Investment from all over the world.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invest-area bg-color area-padding-2">
                <div class="container">

                    {{-- @if (!$Plans->isEmpty())
                        <div class="container">
                            <div class="section-title"
                                style="text-align: center !important; margin-bottom: 30px !important;">
                                <h2>Trade Plan</h2>
                                <hr class="center">
                            </div>
                            <div class="row">
                                @foreach ($Plans as $plan)
                                    <div class="col-md-3 mb-5">
                                        <div class="pricing-table"
                                            style="-webkit-box-shadow: 0 0 10px rgb(204 204 204 / 60%); border-radius: 5px; text-align: center; padding-bottom: 30px; margin-top:30px">
                                            <div class="table-header"
                                                style="height: 200px !important; background: rgb(56, 17, 127) !important; padding: 40px 0px !important;">
                                                <div class="price-plan-media">
                                                    <img src="{{ asset('assets/images/plans/' . random_int(1, 5) . '.svg') }}"
                                                        style="width: 70px; height:70px; margin-top:-30px" alt="">
                                                </div>
                                                <h4
                                                    style="color: #FFF !important; text-align: center; font-size: 2.8rem !important; font-weight: 900;">
                                                    {{ ucwords($plan->name) }}</h4>
                                                <h2
                                                    style="color: #FFF !important; text-align: center; font-size: 30px !important;">
                                                    <span>$</span>{{ number_format($plan->min, 0, '.', ',') }}+
                                                </h2>
                                            </div>
                                            <div class="table-list" style="margin: 30px 0px;">
                                                <p
                                                    style="text-align: center; color: #fff; font-size: 15px; font-family: 'Poppins', sans-serif;">
                                                    {{ $plan->roi }} ROI</p>
                                                <p
                                                    style="text-align: center; color: #fff; font-size: 15px; font-family: 'Poppins', sans-serif;">
                                                    MoneyBack Guarantee</p>
                                                <p
                                                    style="text-align: center; color: #fff; font-size: 15px; font-family: 'Poppins', sans-serif;">
                                                    24/7 support</p>
                                                <p
                                                    style="text-align: center; color: #fff; font-size: 15px; font-family: 'Poppins', sans-serif;">
                                                    {{ $plan->commission }}% Trade commission</p>
                                                <p
                                                    style="text-align: center; color: #fff; font-size: 15px; font-family: 'Poppins', sans-serif;">
                                                    5% Referral Bonus</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    @endif --}}

                </div>
            </div>
            <div class="container pt-40">
                <div class="row">
                    @if (!$Plans->isEmpty())
                        @foreach ($Plans as $plan)
                            <div class="col-sm-12 col-md-4 col-lg-4 price-table pricing-active">
                                <div class="pricing-panel">
                                    <!--  Pricing heading  -->
                                    <div class="pricing--heading text--center">
                                        <div class="pricing--icon">
                                            <i class="icon-global"></i>
                                        </div>
                                        <h4>{{ ucwords($plan->name) }}</h4>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Minimum Investment
                                        </div>
                                        <p style="font-size:50px"><span
                                                class="currency">$</span>{{ number_format($plan->min, 0, '.', ',') }}
                                        </p>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Maximum Investment
                                        </div>
                                        <p style="font-size:50px"><span
                                                class="currency">$</span>{{ number_format($plan->max, 0, '.', ',') }}
                                        </p>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Daily ROI: {{ $plan->roi }}%
                                        </div>
                                        <div style="margin-bottom: 10px"></div>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Duration: {{ $plan->duration }}%
                                        </div>
                                        <div style="margin-bottom: 10px"></div>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Referral Commision: {{ $plan->commission }}%
                                        </div>
                                        <div style="margin-bottom: 10px"></div>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Capital Return: YES
                                        </div>
                                        <div style="margin-bottom: 10px"></div>
                                        <div class="pricing--desc" style="margin-bottom:0px">
                                            Instant Withdrawal: YES
                                        </div>
                                        <div style="margin-bottom: 10px"></div>
                                        <div class="pricing--desc" style="margin-bottom: 0px">
                                            24/7 Live Support
                                        </div>
                                        {{-- <a class="btn btn--secondary btn--bordered btn--rounded"
                                        href="{{ route('user.pages.view', ['register']) }}">Get Started</a> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    {{-- <div class="col-sm-12 col-md-4 col-lg-4 price-table pricing-active">
                        <div class="pricing-panel">
                            <!--  Pricing heading  -->
                            <div class="pricing--heading text--center">
                                <div class="pricing--icon">
                                    <i class="icon-global"></i>
                                </div>
                                <h4>Basic Plan</h4>
                                <p><span class="currency">$</span>165</p>
                                <div class="pricing--desc">
                                    Full Business analyzing, next generation accounting, and training sessions.
                                </div>
                                <a class="btn btn--white btn--bordered btn--rounded"
                                    href="{{ route('user.pages.view', ['register']) }}">Get Started</a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col-sm-12 col-md-4 col-lg-4 price-table">
                        <div class="pricing-panel">
                            <div class="pricing--heading text--center">
                                <div class="pricing--icon">
                                    <i class="icon-global"></i>
                                </div>
                                <h4>Advanced Plan</h4>
                                <p><span class="currency">$</span>195</p>
                                <div class="pricing--desc">
                                    Full Business analyzing, next generation accounting, and training sessions.
                                </div>
                                <a class="btn btn--secondary btn--bordered btn--rounded"
                                    href="{{ route('user.pages.view', ['register']) }}">Get Started</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="section-divider"></div>
        </section>
        <!-- #pricing1 end -->

        <!-- Testimonial #1
============================================= -->
        <section id="testimonial1" class="testimonial testimonial-1 pt-70 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                        <div id="testimonial-wide" class="carousel owl-carousel" data-slide="1" data-slide-rs="1"
                            data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="true"
                            data-speed="800">
                            <!-- Testimonial #1 -->
                            <div class="testimonial-panel">
                                <div class="testimonial--img">
                                    <img src="{{ asset('assets/images/testimonial/2.png') }}"
                                        alt="Testimonial Author">
                                </div>
                                <div class="testimonial--body">
                                    <div class="testimonial--icon2"></div>
                                    <!-- .testimonial-icon end -->
                                    <p>Investing in ProStack has been been great. The company is a true 24/7 investment
                                        platform that is innovative, reliable and secure!</p>
                                </div>
                                <!-- .testimonial-body end -->
                                <div class="testimonial--icon"></div>
                                <!-- .testimonial-icon end -->
                                <div class="testimonial--meta">
                                    <h4>Mahmoud Baghagho</h4>
                                    <p>Montreal</p>
                                </div>
                                <!-- .testimonial-meta end -->
                            </div>
                            <!-- .testimonial-panel end -->

                            <!-- Testimonial #2 -->
                            <div class="testimonial-panel">
                                <div class="testimonial--img">
                                    <img src="{{ asset('assets/images/testimonial/1.png') }}"
                                        alt="Testimonial Author">
                                </div>
                                <div class="testimonial--body">
                                    <div class="testimonial--icon2"></div>
                                    <!-- .testimonial-icon end -->
                                    <p>I have been investing in ProStack since July 2021, They are truly amazing and are
                                        a key to me being able to retire from my job! I love their professionalism and
                                        responsiveness..!</p>
                                </div>
                                <!-- .testimonial-body end -->
                                <div class="testimonial--icon"></div>
                                <!-- .testimonial-icon end -->
                                <div class="testimonial--meta">
                                    <h4>ayman fikry</h4>
                                    <p>isreal</p>
                                </div>
                                <!-- .testimonial-meta end -->
                            </div>
                            <!-- .testimonial-panel end -->

                            <!-- Testimonial #3 -->
                            <div class="testimonial-panel">
                                <div class="testimonial--img">
                                    <img src="{{ asset('assets/images/testimonial/3.png') }}"
                                        alt="Testimonial Author">
                                </div>
                                <div class="testimonial--body">
                                    <div class="testimonial--icon2"></div>
                                    <!-- .testimonial-icon end -->
                                    <p>The past couple of months I have invested with ProStack invest I have been very
                                        pleased with their superb investment model and their professional & outstanding
                                        staff.
                                    </p>
                                </div>
                                <!-- .testimonial-body end -->
                                <div class="testimonial--icon"></div>
                                <!-- .testimonial-icon end -->
                                <div class="testimonial--meta">
                                    <h4>Fouad badawy</h4>
                                    <p>Panama</p>
                                </div>
                                <!-- .testimonial-meta end -->
                            </div>
                            <!-- .testimonial-panel end -->
                        </div>
                    </div>
                    <!-- .col-lg-10 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #testimonial1 end -->

        <!-- Team #1
============================================= -->
        <section id="team1" class="team team-1 pt-110 pb-60">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading  mb-50 text--center">
                            <p class="heading--subtitle">Our Experts</p>
                            <h2 class="heading--title" style="color:black">Meet Our Team</h2>
                            <p class="heading--desc mb-0">We love what we do and we do it with passion. We value the
                                reformation of the message, and the smart incentives.</p>
                        </div>
                    </div>
                    <!-- .col-lg-6 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- Member #1 -->
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('assets/images/team/grid/person1.jpg') }}" alt="member">
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                                <!-- .memebr-ovelay end -->
                            </div>
                            <!-- .member-img end -->
                            <div class="member-info">
                                <h5>Jessica Wane</h5>
                                <h6>Consultant</h6>
                            </div>
                            <!-- .member-info end -->
                        </div>
                        <!-- .member end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Member #2 -->
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('assets/images/team/grid/person2.jpg') }}" alt="member">
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                                <!-- .memebr-ovelay end -->
                            </div>
                            <!-- .member-img end -->
                            <div class="member-info">
                                <h5>John Tommy</h5>
                                <h6>Marketing</h6>
                            </div>
                            <!-- .member-info end -->
                        </div>
                        <!-- .member end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Member #3 -->
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('assets/images/team/grid/person3.jpg') }}" alt="member">
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                                <!-- .memebr-ovelay end -->
                            </div>
                            <!-- .member-img end -->
                            <div class="member-info">
                                <h5>Marko Smith</h5>
                                <h6>Cheif Officer</h6>
                            </div>
                            <!-- .member-info end -->
                        </div>
                        <!-- .member end -->
                    </div>
                    <!-- .col-md-4 end -->

                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #team1 end -->

        <section id="case" class="case case-standard case-3col pt-110 bg-gray">
            <div class="container">
                <div class="row flipInX" data-wow-delay="100ms">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-2 mb-30 text--center">
                            <p class="heading--subtitle">Our Lattest Transactions</p>
                            <h2 class="heading--title" style="color:black">DEPOSIT</h2>
                            <p class="heading--desc mb-0">We monitor the spectrum of available business investment and
                                alert our users to market moving events as and when it happens.</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-rs="1"
                            data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true"
                            data-speed="800">
                            <div class="case-carousel-grid">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-customer filter-tips">
                                        <div class="case-item-container">
                                            <div class="case--img">
                                                <img src="assets/images/case/3col/1.jpg" alt="case Item">
                                                <div class="case--hover">
                                                    <div class="case--action">
                                                        <a href="#" title="case Item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case--content">
                                                <div class="case--cat">
                                                    <a href="#">Business Tips</a><a href="#">Consulting</a>
                                                </div>
                                                <div class="case--title">
                                                    <h4><a href="case-study-single.html">Grow your business with an
                                                            unexpected niche!</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-Investment">
                                        <div class="case-item-container">
                                            <div class="case--img">
                                                <img src="assets/images/case/3col/2.jpg" alt="case Item">
                                                <div class="case--hover">
                                                    <div class="case--action">
                                                        <a href="#" title="case Item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case--content">
                                                <div class="case--cat">
                                                    <a href="#">Investment</a><a href="#">Tips</a>
                                                </div>
                                                <div class="case--title">
                                                    <h4><a href="case-study-single.html">Use credit reporting to improve
                                                            client relationships.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-tips filter-Consulting">
                                        <div class="case-item-container">
                                            <div class="case--img">
                                                <img src="assets/images/case/3col/3.jpg" alt="case Item">
                                                <div class="case--hover">
                                                    <div class="case--action">
                                                        <a href="#" title="case Item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case--content">
                                                <div class="case--cat">
                                                    <a href="#">Customer Service</a><a href="#">Consulting</a>
                                                </div>
                                                <div class="case--title">
                                                    <h4><a href="case-study-single.html">State stamp duty surcharges for
                                                            foreign buyers.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-6 col-lg-4 case-item filter-environment filter-Consulting">
                                        <div class="case-item-container">
                                            <div class="case--img">
                                                <img src="{{ asset('assets/images/case/3col/4.jpg') }}"
                                                    alt="case Item">
                                                <div class="case--hover">
                                                    <div class="case--action">
                                                        <a href="#" title="case Item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case--content">
                                                <div class="case--cat">
                                                    <a href="#">Environment </a>
                                                </div>
                                                <div class="case--title">
                                                    <h4><a href="case-study-single.html">Government changes on transfer
                                                            of land or duty. </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-tips">
                                        <div class="case-item-container">
                                            <div class="case--img">
                                                <img src="{{ asset('assets/images/case/3col/5.jpg') }}"
                                                    alt="case Item">
                                                <div class="case--hover">
                                                    <div class="case--action">
                                                        <a href="#" title="case Item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case--content">
                                                <div class="case--cat">
                                                    <a href="#">Business Growth</a><a href="#">Investment</a>
                                                </div>
                                                <div class="case--title">
                                                    <h4><a href="case-study-single.html">How to explain the ASIC inquiry
                                                            to clients!</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-consulting">
                                        <div class="case-item-container">
                                            <div class="case--img">
                                                <img src="{{ asset('assets/images/case/3col/6.jpg') }}"
                                                    alt="case Item">
                                                <div class="case--hover">
                                                    <div class="case--action">
                                                        <a href="#" title="case Item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case--content">
                                                <div class="case--cat">
                                                    <a href="#">Financial Services</a>
                                                </div>
                                                <div class="case--title">
                                                    <h4><a href="case-study-single.html">How blockchain technology will
                                                            impact the broking?</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="case-carousel-grid">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-customer filter-tips">
                                        <div class="case-item-container">
                                            <div class="case--img">
                                                <img src="{{ asset('assets/images/case/3col/1.jpg') }}"
                                                    alt="case Item">
                                                <div class="case--hover">
                                                    <div class="case--action">
                                                        <a href="#" title="case Item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case--content">
                                                <div class="case--cat">
                                                    <a href="#">Business Tips</a><a href="#">Consulting</a>
                                                </div>
                                                <div class="case--title">
                                                    <h4><a href="case-study-single.html">Grow your business with an
                                                            unexpected niche!</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-Investment">
                                        <div class="case-item-container">
                                            <div class="case--img">
                                                <img src="{{ asset('assets/images/case/3col/2.jpg') }}"
                                                    alt="case Item">
                                                <div class="case--hover">
                                                    <div class="case--action">
                                                        <a href="#" title="case Item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case--content">
                                                <div class="case--cat">
                                                    <a href="#">Investment</a><a href="#">Tips</a>
                                                </div>
                                                <div class="case--title">
                                                    <h4><a href="case-study-single.html">Use credit reporting to improve
                                                            client relationships.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-tips filter-Consulting">
                                        <div class="case-item-container">
                                            <div class="case--img">
                                                <img src="{{ asset('assets/images/case/3col/3.jpg') }}"
                                                    alt="case Item">
                                                <div class="case--hover">
                                                    <div class="case--action">
                                                        <a href="#" title="case Item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case--content">
                                                <div class="case--cat">
                                                    <a href="#">Customer Service</a><a href="#">Consulting</a>
                                                </div>
                                                <div class="case--title">
                                                    <h4><a href="case-study-single.html">State stamp duty surcharges for
                                                            foreign buyers.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-6 col-lg-4 case-item filter-environment filter-Consulting">
                                        <div class="case-item-container">
                                            <div class="case--img">
                                                <img src="{{ asset('assets/images/case/3col/4.jpg') }}"
                                                    alt="case Item">
                                                <div class="case--hover">
                                                    <div class="case--action">
                                                        <a href="#" title="case Item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case--content">
                                                <div class="case--cat">
                                                    <a href="#">Environment </a>
                                                </div>
                                                <div class="case--title">
                                                    <h4><a href="case-study-single.html">Government changes on transfer
                                                            of land or duty. </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-tips">
                                        <div class="case-item-container">
                                            <div class="case--img">
                                                <img src="{{ asset('assets/images/case/3col/5.jpg') }}"
                                                    alt="case Item">
                                                <div class="case--hover">
                                                    <div class="case--action">
                                                        <a href="#" title="case Item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case--content">
                                                <div class="case--cat">
                                                    <a href="#">Business Growth</a><a href="#">Investment</a>
                                                </div>
                                                <div class="case--title">
                                                    <h4><a href="case-study-single.html">How to explain the ASIC inquiry
                                                            to clients!</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-consulting">
                                        <div class="case-item-container">
                                            <div class="case--img">
                                                <img src="{{ asset('assets/images/case/3col/6.jpg') }}"
                                                    alt="case Item">
                                                <div class="case--hover">
                                                    <div class="case--action">
                                                        <a href="#" title="case Item"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="case--content">
                                                <div class="case--cat">
                                                    <a href="#">Financial Services</a>
                                                </div>
                                                <div class="case--title">
                                                    <h4><a href="case-study-single.html">How blockchain technology will
                                                            impact the broking?</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="payment-history-area bg-color fix area-padding-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="section-headline text-center">
                                    <h3>Deposite and withdrawals history</h3>
                                    <p>Help agencies to define their new business objectives and then create professional
                                        software.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="deposite-content">
                                    <div class="diposite-box">
                                        <h3>Last deposite</h3>
                                        <span><i class="flaticon-005-savings"></i></span>
                                        <div class="deposite-table">
                                            <table>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Currency</th>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/home/icon/m.png') }}" alt="">Admond
                                                        sayhel</td>
                                                    <td><?php echo date('d F, Y (l)'); ?></td>
                                                    <td>$1000</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/home/icon/m1.png') }}" alt="">Jonshon
                                                    </td>
                                                    <td><?php echo date('d F, Y (l)'); ?></td>
                                                    <td>$5000</td>
                                                    <td>USD</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/home/icon/m2.png') }}" alt="">Hopper
                                                    </td>
                                                    <td><?php echo date('d F, Y (l)'); ?></td>
                                                    <td>$4000</td>
                                                    <td>Ripple</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/home/icon/m3.png') }}" alt="">Admond
                                                        sayhel</td>
                                                    <td><?php echo date('d F, Y (l)'); ?></td>
                                                    <td>$3000</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/home/icon/m4.png') }}" alt="">Anjel
                                                        july</td>
                                                    <td><?php echo date('d F, Y (l)'); ?></td>
                                                    <td>$500</td>
                                                    <td>USD</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/home/icon/m5.png') }}" alt="">Lagisha
                                                    </td>
                                                    <td><?php echo date('d F, Y (l)'); ?></td>
                                                    <td>$5000</td>
                                                    <td>Bitcoin</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="deposite-content">
                                    <div class="diposite-box">
                                        <h3>Last withdrawals</h3>
                                        <span><i class="flaticon-042-wallet"></i></span>
                                        <div class="deposite-table">
                                            <table>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Currency</th>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/home/icon/m.png') }}" alt="">Arnold
                                                    </td>
                                                    <td><?php echo date('d F, Y (l)'); ?></td>
                                                    <td>$1000</td>
                                                    <td>USD</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/home/icon/m1.png') }}" alt="">Jhon
                                                        Abra</td>
                                                    <td><?php echo date('d F, Y (l)'); ?></td>
                                                    <td>$6000</td>
                                                    <td>USD</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/home/icon/m2.png') }}" alt="">Lanisha
                                                    </td>
                                                    <td><?php echo date('d F, Y (l)'); ?></td>
                                                    <td>$5000</td>
                                                    <td>USD</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/home/icon/m3.png') }}" alt="">Gongales
                                                    </td>
                                                    <td><?php echo date('d F, Y (l)'); ?></td>
                                                    <td>$2000</td>
                                                    <td>USD</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/home/icon/m4.png') }}" alt="">Admond
                                                        sayhel</td>
                                                    <td><?php echo date('d F, Y (l)'); ?></td>
                                                    <td>$1000</td>
                                                    <td>USD</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="{{ asset('assets/images/home/icon/m5.png') }}" alt="">Remond
                                                    </td>
                                                    <td><?php echo date('d F, Y (l)'); ?></td>
                                                    <td>$3000</td>
                                                    <td>USD</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <h2 style="color:black">Last Deposits</h2>
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Amout Deposited</th>
                                <th>Currency</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Admond
                                    sayhel</td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$21000</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jonshon idaho</td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$5000</td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jerry Hopper
                                </td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$4000</td>
                                <td>Ripple</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Anjel
                                    july</td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$500</td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Lagisha Benson
                                </td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$5000</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Jovic Mavro
                                </td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$5600</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Carol Denica
                                </td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$7000</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Laqisha jones
                                </td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$5000</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>John Carrick
                                </td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$25000</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Sermone White
                                </td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$7500</td>
                                <td>USD</td>
                            </tr>
                        <tbody>
                    </table>
                </div>
            </div>
        </section>
        <section id="case" class="case case-standard case-3col pt-110 bg-gray">
            <div class="container">
                <div class="row flipInX" data-wow-delay="100ms">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-2 mb-30 text--center">
                            <p class="heading--subtitle">Our Lattest Withdrawal Transactions</p>
                            <h2 class="heading--title" style="color:black">Withdrawal</h2>
                            <p class="heading--desc mb-0">We monitor the spectrum of available business investment and
                                alert our users to market moving events as and when it happens.</p>
                        </div>
                    </div>
                </div>
                <h2 style="color:black">Last Withdrawal</h2>
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Amout Withdrawn</th>
                                <th>Currency</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ahmed Saheed</td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$500</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Bannon</td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$600</td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Johnson Klint</td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$450</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Angel Banahas</td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$4500</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Lagisha Benson </td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$4300</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Jovic Mavro</td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$500</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Carol Denica</td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$900</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Laqisha jones
                                </td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$5000</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>John Carrick
                                </td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$2000</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Sermone White
                                </td>
                                <td><?php echo date('d F, Y (l)'); ?></td>
                                <td>$700</td>
                                <td>USD</td>
                            </tr>
                        <tbody>
                    </table>
                </div>
            </div>
        </section>

        <section id="featured3" class="featured featured-2 featured-3 featured-left bg-dark3 pt-0 pb-0">
            <div class="container-fluid pr-0 pl-0">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-content">
                        <div class="heading">
                            <h2 class="heading--title color-white">We Are Here To Ease<br>The Investment Obstacles!
                            </h2>
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
                                <p class="feature-card-desc">Prostackinvest offers services, development services
                                    and consulting to help you make the best investment decisions.</p>
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
                        <a href="{{ route('user.pages.view', ['contact']) }}"
                            class="btn btn--white btn--bordered btn--rounded">Get Started</a>
                    </div>
                    <!-- .col-lg-3 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #cta1 end -->

        <!-- Blog Grid
======================================= -->
        <section id="blog" class="blog blog-grid pt-110 pb-60">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading  mb-50 text--center">
                            <p class="heading--subtitle">Don’t Miss Latest</p>
                            <h2 class="heading--title" style="color:black">News & Headlines</h2>
                            <p class="heading--desc mb-0">Follow our latest news and thoughts which focuses exclusively
                                on design, art, vintage, and also our latest work updates.</p>
                        </div>
                    </div>
                    <!-- .col-lg-6 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- Blog Entry #1 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="{{ asset('assets/images/blog/grid/blog2.jpeg') }}" alt="entry image" />
                                    <div class="entry--overlay"></div>
                                </a>
                            </div>
                            <!-- .entry-img end -->
                            <div class="entry--content">
                                <div class="entry--meta">
                                    <a href="#">Investment tips</a>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#">Four ways to discover 10x altcoin by yourself in 2022!</a></h4>
                                </div>
                                <div class="entry--date">
                                    Jan 15, 2022
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
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="{{ asset('assets/images/blog/grid/blog1.png') }}" alt="entry image" />
                                    <div class="entry--overlay"></div>
                                </a>
                            </div>
                            <!-- .entry-img end -->
                            <div class="entry--content">
                                <div class="entry--meta">
                                    <a href="#">Consulting</a>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#">Coinbase can now serve as a payment gateway for business</a></h4>
                                </div>
                                <div class="entry--date">
                                    Dec 30, 2021
                                </div>
                                <div class="entry--bio">
                                    <p>Aside serving as an exchange for cryptocurrency transaction, coinbase has now a
                                        platform where you can integrate into your platform which will smoothly
                                        outsource your payment system... </p>
                                </div>
                                <div class="entry--more">
                                    <a href="#"><i class="fa fa-plus"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="{{ asset('assets/images/blog/grid/blog3.jpg') }}" alt="entry image" />
                                    <div class="entry--overlay"></div>
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--meta">
                                    <a href="#">Financial</a>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#">Important structures that you need to have to make a wise
                                            investment</a></h4>
                                </div>
                                <div class="entry--date">
                                    Apr 12, 2021
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('includes.home_footer')


        <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
    </div>
    @include('includes.home_script')
</body>

</html>
