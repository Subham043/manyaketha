<!-- Main Header -->
<header class="main-header header-style-two">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="left-column">
                    <div class="contact-info">
                        <li><a href="tel:{{ empty($generalSetting) ? '' : $generalSetting->phone}}"><i class="fas fa-phone"></i>Phone: {{ empty($generalSetting) ? '' : $generalSetting->phone}}</a></li>
                        <li><a href="mailto:{{ empty($generalSetting) ? '' : $generalSetting->email}}"><i class="far fa-envelope"></i>{{ empty($generalSetting) ? '' : $generalSetting->email}}</a></li>
                    </div>
                </div>
                <div class="right-column">
                    <div class="social-links">
                        <ul>
                            @include('main.includes.common_social_info')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper style-two">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="{{route('home_page.get')}}"><img src="{{ empty($generalSetting) ? asset('assets/images/logo.png') : $generalSetting->website_logo_link}}" alt="{{ empty($generalSetting) ? '' : $generalSetting->website_logo_alt}}" title="{{ empty($generalSetting) ? '' : $generalSetting->website_logo_title}}"></a></div>
                </div>
                <div class="right-column">
                    <!--Nav Box-->
                    <div class="nav-outer">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><img src="{{asset('assets/images/icons/icon-bar.png')}}" alt=""></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation">
                                    <li><a href="{{route('home_page.get')}}">Home</a></li>
                                    <li><a href="{{route('about_page.get')}}">About Us</a></li>
                                    <li><a href="{{route('services.get')}}">Services</a></li>
                                    <li><a href="{{route('projects.get')}}">Projects</a></li>
                                    <li><a href="{{route('blogs.get')}}">Blogs</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="link-btn"><a href="{{route('contact_page.get')}}" class="theme-btn btn-style-one">Contact Us</a></div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header floating-header main-menu">
        <div class="auto-container">
            <div class="inner-container">
                <div class="nav-outer">
                    <div class="logo-box">
                        <div class="logo"><a href="{{route('home_page.get')}}"><img src="{{ empty($generalSetting) ? asset('assets/images/logo.png') : $generalSetting->website_logo_link}}" alt="{{ empty($generalSetting) ? '' : $generalSetting->website_logo_alt}}" title="{{ empty($generalSetting) ? '' : $generalSetting->website_logo_title}}"></a></div>
                    </div>
                    {{-- <button type="button" class="theme-btn search-toggler"><span class="far fa-search"></span></button> --}}
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
                    <!-- Main Menu End-->
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-remove"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{route('home_page.get')}}"><img src="{{ empty($generalSetting) ? asset('assets/images/logo.png') : $generalSetting->website_logo_link}}" alt="{{ empty($generalSetting) ? '' : $generalSetting->website_logo_alt}}" title="{{ empty($generalSetting) ? '' : $generalSetting->website_logo_title}}"></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

    <div class="nav-overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
</header>
<!-- End Main Header -->
