<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<head>
    @include('includes.home_css')
    <style>
        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
            #cert {
                width: 390px;
                height: 600px;
            }
        }

    </style>

    <title>Home | want to make pofitable investments? signup on our platform</title>
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
                            {{-- <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="feature-card">
                                    <div class="feature-card-icon">
                                        <i class="icon-clipboard"></i>
                                    </div>
                                    <div class="feature-card-content">
                                        <h3 class="feature-card-title">Referral Bonuses</h3>
                                        <p class="feature-card-desc">Our comany give a 10% referral bonuses for referring you friends to gain from our platform.</p>
                                    </div>
                                </div>
                            </div> --}}
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
                                <i class="icon-grid"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Personal Loans</h3>
                                <p class="feature-card-desc">Support major currencies: USD, EUR, GBP, and various
                                    Cryptocurrencies. Loans and Funds exchanged between currencies are available at
                                    market rate.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="feature-card">
                            <div class="feature-card-icon">
                                <i class="icon-bargraph"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Referral Bonuses</h3>
                                <p class="feature-card-desc">Our comany give a 10% referral bonuses for referring you
                                    friends to gain from our platform.</p>
                            </div>
                        </div>
                    </div>
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
                                        <p style="font-size:50px"><span
                                                class="currency"></span>{{ $plan->roi }}%
                                        </p>
                                        <p style="text-align: center;font-size:16px; margin-top:-5px; margin-bottom:50px">Per Day</p>
                                        
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Min: &nbsp; $</span>{{ number_format($plan->min, 0, '.', ',') }}
                                        </div>
                                        <div style="margin-bottom: 15px"></div>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Max: &nbsp; $</span>{{ number_format($plan->max, 0, '.', ',') }}
                                        </div>
                                        <div style="margin-bottom: 15px"></div>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Total Returns: {{ $plan->roi * 7 }}%
                                        </div>
                                        <div style="margin-bottom: 15px"></div>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Duration: {{ $plan->duration }}
                                        </div>
                                        <div style="margin-bottom: 15px"></div>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Referral Commision: 10%
                                        </div>
                                        <div style="margin-bottom: 15px"></div>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Capital Return: YES
                                        </div>
                                        <div style="margin-bottom: 15px"></div>
                                        <div class="pricing--desc" style="margin-bottom:0px">
                                            Instant Withdrawal: YES
                                        </div>
                                        <div style="margin-bottom: 15px"></div>
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

                </div>
            </div>
            <div class="section-divider"></div>
        </section>
        <!-- #pricing1 end -->
        <section id="contact1" class="contact contact-1 pt-110 pb-110 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                        <form class="mb-0">
                            <div class="row">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                                        <div class="heading heading-2 mb-50 text--center">
                                            <p class="heading--subtitle">Have A Question?</p>
                                            <h2 class="heading--title">Get in touch</h2>
                                            <p class="heading--desc mb-0">We understand the importance of approaching
                                                each work
                                                integrally and believe in the power of simple and easy communication.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- .col-lg-6 end -->
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6" style="background-color: black; height:315px">
                                    <h1 style="color: white; margin-top:30px; font-size:40px">If you are wandering how
                                        it all works? watch this video</h1>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6" style="background-color: black; height:315px">
                                    <iframe width="470" height="315" src="https://www.youtube.com/embed/5Uh720poZ8w"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>

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
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
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
                            <p class="heading--desc mb-0">We are ProStack Invest, majorly focused on trading Crypto
                                currency day in day out to make substantial profit.

                                ProStack invest is located at Zentralstrasse 17, 6002 Luzern, Switzerland. Our
                                headquarters is located at 26 Saint-Catherine St W, Montreal, Quebec H2X 1Z5, Canada. It
                                was incorporated on the 22nd of July 2016 with aims to reach out to everyone offering a
                                guaranteed return on any investment carried out in the company.

                                ProStack is an investment platform where your investment returns are guaranteed and is
                                received as early as 7 days only. ProStack invest also engages in real estate investment
                                and development with 30 years of experience in construction services, forex trading,
                                medical equipments, crypto currency investment, architecture, manufacturing and
                                structural engineering.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
                            <img src="{{ asset('assets/images/about/picz.jpg') }}" width="640px" id="cert"
                                height="800p" alt="banner img">
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

        @include('includes.home_footer')


        <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
    </div>
    @include('includes.home_script')
</body>

</html>
