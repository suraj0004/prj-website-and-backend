<header id="header" class="header-one">
    <div class="bg-white">
        <div class="container">
            <div class="logo-area">
                <div class="row align-items-center">
                    <div class="logo col-3 text-center text-lg-left mb-md-5 mb-lg-0">
                        <a class="d-block" href={{ route('home') }}>
                            <img loading="lazy" src={{ asset('images/logo.png') }} alt="PRG Projects">
                        </a>
                    </div><!-- logo end -->

                    <div class="col-9 header-right">
                        <ul class="top-info-box">
                            <li class="mt-0">
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Call Us</p>
                                        <p class="info-box-subtitle">(+9) 847-291-4353</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Email Us</p>
                                        <p class="info-box-subtitle">office@Constra.com</p>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="last">
                                <div class="info-box last">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Global Certificate</p>
                                        <p class="info-box-subtitle">ISO 9001:2017</p>
                                    </div>
                                </div>
                            </li> --}}
                            <li class="header-get-a-quote">
                                <a class="btn btn-primary" href={{ route('contact-us') }}>Get A Quote</a>
                            </li>
                        </ul><!-- Ul end -->
                    </div><!-- header right end -->
                </div><!-- logo area end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </div>

    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark p-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav mr-auto">

                                <!-- Home link -->
                                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>



                                {{-- <li class="nav-item dropdown active">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Home <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="active"><a href="index.html">Home One</a></li>

                                    </ul>
                                </li> --}}
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Company
                                        <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('about-us') }}"
                                                class="{{ request()->routeIs('about-us') ? 'active' : '' }}">About
                                                Us</a></li>
                                        {{-- <li><a href="team.html">Our People</a></li> --}}
                                        <li><a href="{{ route('testimonials') }}"
                                                class="{{ request()->routeIs('testimonials') ? 'active' : '' }}">Testimonials</a>
                                        </li>
                                        <li><a href="{{ route('faq') }}"
                                                class="{{ request()->routeIs('faq') ? 'active' : '' }}">Faq</a></li>
                                        <li><a href="{{ route('pricing') }}"
                                                class="{{ request()->routeIs('pricing') ? 'active' : '' }}">Pricing</a>
                                        </li>
                                    </ul>
                                </li>
                                {{--

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects
                                        <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="projects.html">Projects All</a></li>
                                        <li><a href="projects-single.html">Projects Single</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services
                                        <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="services.html">Services All</a></li>
                                        <li><a href="service-single.html">Services Single</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Features
                                        <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent
                                                Menu</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">Child Menu 1</a></li>
                                                <li><a href="#!">Child Menu 2</a></li>
                                                <li><a href="#!">Child Menu 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                                        <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                                        <li><a href="news-single.html">News Single</a></li>
                                    </ul>
                                </li> --}}


                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('projects') }}">Projects</a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link" href="#">News</a>
                                </li>
                                <!-- Contact link -->
                                <li class="nav-item {{ request()->routeIs('contact-us') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('contact-us') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->
            {{--
            <div class="nav-search">
                <span id="search"><i class="fa fa-search"></i></span>
            </div><!-- Search end -->

            <div class="search-block" style="display: none;">
                <label for="search-field" class="w-100 mb-0">
                    <input type="text" class="form-control" id="search-field"
                        placeholder="Type what you want and enter">
                </label>
                <span class="search-close">&times;</span>
            </div>
            <!-- Site search end --> --}}
        </div>
        <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>
