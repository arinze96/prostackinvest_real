<header id="navbar-spy" class="header header-1 header-transparent">
    <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light navbar-bordered">
        <div class="container">
                <a href="{{ route('app.home')}}">
                    <img class="logo logo-light" width="150px" height="150px" src="{{ asset("assets/ProStack-01.png") }}" alt="Prostackinvest Logo" >
                </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="google_translate_element"
            style="position:fixed;margin-top:10px; left:20px; bottom: 20px"></div>

        <script type="text/javascript">
            var duplicate_google_translate_counter = 0; //this stops google adding button multiple times

            function googleTranslateElementInit() {
                if (duplicate_google_translate_counter == 0) {
                    new google.translate.TranslateElement({
                        pageLanguage: 'en'
                    }, 'google_translate_element');
                }
                duplicate_google_translate_counter++;
            }
        </script>
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <!-- Home Menu-->
                    <li class="has-dropdown active">
                        <a href="{{ route('app.home')}}"  class=" menu-item">Home</a>
                    </li>
                    
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item"
                            data-hover="pages">About Us</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('user.pages.view', ['about']) }}">About US</a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('user.pages.view', ['team']) }}">Our Team</a>
                            </li> --}}
                            <li>
                                <a href="{{ route('user.pages.view', ['security']) }}">Security</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['our_portfolio']) }}">Our Portfolio</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['our_history']) }}">Our History</a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('user.pages.view', ['anti_fraud']) }}">Anti Fraud</a>
                            </li> --}}
                        </ul>
                    </li>
                    <!-- li end -->
                    <!-- Services Menu-->
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">services</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('user.pages.view', ['cryptocurrency']) }}">Cryptocurrency</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['forex']) }}">Forex</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['real_estate']) }}">Real Estate</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['escrow']) }}">Escrow Services</a>
                            </li>
                            <li>
                                <a href="{{ route('user.pages.view', ['personal_loan']) }}">Personal Loans</a>
                            </li>
                           
                        </ul>
                    </li>
                    
                    <li class="has-dropdown">
                        <a href="{{ route('user.pages.view', ['pricing']) }}" class=" menu-item">Pricing</a>
                    </li>

                    <li class="has-dropdown">
                        <a href="{{ route('user.pages.view', ['faq']) }}" class=" menu-item">FAQs</a>
                    </li>
                    
                    <li class="has-dropdown">
                        <a href="{{ route('user.pages.view', ['login']) }}" class="menu-item"
                            data-hover="shop">Login</a>
                      
                    </li>
                    
                    <li class="has-dropdown mega-dropdown">
                        <a href="{{ route('user.pages.view', ['register']) }}" class=" menu-item">Register</a>
                    </li>


                    <li class="has-dropdown mega-dropdown">
                        <a href="{{ route('user.pages.view', ['personal_loan']) }}" class=" menu-item">Loan</a>
                    </li>
                </ul>
            
                <div class="module-container">
                    <div class="module module-consultation pull-left">
                        <a class="btn" href="{{ route('user.pages.view', ['contact']) }}">Contact Us</a>
                    </div>
                    <div class="module module-search pull-left">
                        <div class="module-icon search-icon">
                            <i class="lnr lnr-magnifier"></i>
                            <span class="title">search</span>
                        </div>
                    </div>
                    {{-- <div id="google_translate_element"></div> 
      
                    <script type="text/javascript" src=
                "https://translate.google.com/translate_a/element.js?
                        cb=googleTranslateElementInit">
                    </script>
                    <script type="text/javascript"> 
                        function googleTranslateElementInit() { 
                            new google.translate.TranslateElement(
                                {pageLanguage: 'en'}, 
                                'google_translate_element'
                            ); 
                        } 
                    </script>  --}}
                      
                     

                   
                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>
</header>