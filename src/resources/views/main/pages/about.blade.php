@extends('main.layouts.index')

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    @include('main.includes.breadcrumb')

    <!-- About Section -->
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="image-block">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="image"><img src="{{asset('assets/images/resource/image-12.jpg')}}" alt=""></div>
                            </div>
                            <div class="col-md-6">
                                <div class="image"><img src="{{asset('assets/images/resource/image-13.jpg')}}" alt=""></div>
                            </div>
                            <div class="col-md-6">
                                <div class="image"><img src="{{asset('assets/images/resource/image-14.jpg')}}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content-block">
                        <div class="sec-title">
                            <div class="sub-title">Dependable & Sincere Company</div>
                            <h2>Best Choice For Your <br> Commercial Residential <br> <strong>Roof Installation Projects</strong> </h2>
                        </div>
                        <h4>Tempor incididunt ut labore et dolore magna aliquat enim adys minim <br> veniam quis nostrud exercitation ullamco laboris.</h4>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. </p>
                            <p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span>What we do</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section Three -->
    <section class="features-section-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Dependable & Sincere Company</div>
                <h2><strong>Our Advantages</strong></h2>
                <div class="text">Incididunt ut labore et dolore magna aliqua quis nostrud exercitation ullamco laboris <br> nisi ut aliquip ex ea consequat duis aute irure dolor reprehenderit </div>
            </div>
            @include('main.includes.feature')
        </div>
    </section>

    <!-- Features Section Two -->
    <section class="features-section-two">
        <div class="auto-container">
            <div class="single-block">
                <div class="row">
                    <div class="col-lg-6 image-column">
                        <div class="image"><img src="{{asset('assets/images/resource/image-15.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content">
                            <div class="sec-title">
                                <div class="sub-title">Dependable & Sincere Company</div>
                                <h2><strong>Rofalco</strong> - Exceptional <br> Roofing Services</h2>
                                <div class="text">Magna aliqa enim sed ipsum nisi ainy veniam quis nostrul aliqua enim lorem ipsum gui dolor sit amet tempor. Lorem ipsum dolor sit ametys consecteturadipisicing elit, sed eiusmod tempor incididunt ut labore dolore magna aliq sed ipsum ua dolor exercitation ullamco.</div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span>Learn More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-block">
                <div class="row">
                    <div class="col-lg-6 image-column">
                        <div class="image"><img src="{{asset('assets/images/resource/image-16.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content">
                            <div class="sec-title">
                                <div class="sub-title">Dependable & Sincere Company</div>
                                <h2><strong>Rofalco</strong> The Leading <br> Roofing Contractor </h2>
                                <div class="text">Magna aliqa enim sed ipsum nisi ainy veniam quis nostrul aliqua enim lorem ipsum gui dolor sit amet tempor. Lorem ipsum dolor sit ametys consecteturadipisicing elit, sed eiusmod tempor incididunt ut labore dolore magna aliq sed ipsum ua dolor exercitation ullamco.</div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span>Learn More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA Section Three -->
    <section class="cta-section-three">
        <div class="auto-container">
            <h3><i class="fas fa-phone"></i>Need Emergency Repair? Call Us 24/7 For Expert Help <strong>1500.963.321</strong></h3>
        </div>
    </section>

    @include('main.includes.team')

    <!-- Clients Logo Section -->
    <section class="clients-logo-section style-two">
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
                <div class="slide-item"><div class="image"><img src="{{asset('assets/images/resource/clients-1.png')}}" alt=""></div></div>
                <div class="slide-item"><div class="image"><img src="{{asset('assets/images/resource/clients-2.png')}}" alt=""></div></div>
                <div class="slide-item"><div class="image"><img src="{{asset('assets/images/resource/clients-3.png')}}" alt=""></div></div>
                <div class="slide-item"><div class="image"><img src="{{asset('assets/images/resource/clients-4.png')}}" alt=""></div></div>
                <div class="slide-item"><div class="image"><img src="{{asset('assets/images/resource/clients-5.png')}}" alt=""></div></div>
            </div>
        </div>
    </section>

    @include('main.includes.cta2')

    @include('main.includes.footer')

    @stop

