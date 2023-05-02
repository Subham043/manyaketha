@extends('main.layouts.index')

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-3.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>About Rofalco</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="index.html">Home</a></li>
                        <li>About Rofalco</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title -->

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
            <div class="row">
                <div class="col-xl-3 col-md-6 feature-block-three">
                    <div class="icon-box">
                        <div class="icon"><img src="{{asset('assets/images/icons/icon-13.png')}}" alt=""></div>
                        <h4>Safety & Reliability</h4>
                        <a href="#" class="read-more-btn"><i class="fas fa-long-arrow-right"></i>Read More</a>
                        <div class="overlay">
                            <div class="icon"><img src="{{asset('assets/images/icons/icon-17.png')}}" alt=""></div>
                            <h4>Safety & Reliability</h4>
                            <div class="text">Lonse gatetur adipisicing elitya sed <br> eius mod tempor incididunt ut labore <br> dolore magna aliqua minis. </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 feature-block-three">
                    <div class="icon-box">
                        <div class="icon"><img src="{{asset('assets/images/icons/icon-14.png')}}" alt=""></div>
                        <h4>Long-Term Plans</h4>
                        <a href="#" class="read-more-btn"><i class="fas fa-long-arrow-right"></i>Read More</a>
                        <div class="overlay">
                            <div class="icon"><img src="{{asset('assets/images/icons/icon-18.png')}}" alt=""></div>
                            <h4>Long-Term Plans</h4>
                            <div class="text">Lonse gatetur adipisicing elitya sed <br> eius mod tempor incididunt ut labore <br> dolore magna aliqua minis. </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 feature-block-three">
                    <div class="icon-box">
                        <div class="icon"><img src="{{asset('assets/images/icons/icon-15.png')}}" alt=""></div>
                        <h4>Fully Experienced</h4>
                        <a href="#" class="read-more-btn"><i class="fas fa-long-arrow-right"></i>Read More</a>
                        <div class="overlay">
                            <div class="icon"><img src="{{asset('assets/images/icons/icon-19.png')}}" alt=""></div>
                            <h4>Fully Experienced</h4>
                            <div class="text">Lonse gatetur adipisicing elitya sed <br> eius mod tempor incididunt ut labore <br> dolore magna aliqua minis. </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 feature-block-three">
                    <div class="icon-box">
                        <div class="icon"><img src="{{asset('assets/images/icons/icon-16.png')}}" alt=""></div>
                        <h4>Quality Materials</h4>
                        <a href="#" class="read-more-btn"><i class="fas fa-long-arrow-right"></i>Read More</a>
                        <div class="overlay">
                            <div class="icon"><img src="{{asset('assets/images/icons/icon-20.png')}}" alt=""></div>
                            <h4>Quality Materials</h4>
                            <div class="text">Lonse gatetur adipisicing elitya sed <br> eius mod tempor incididunt ut labore <br> dolore magna aliqua minis. </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Skills Section -->
    <section class="skills-section">
        <div class="auto-container">
            <div class="row no-gutters">
                <div class="col-xl-6 left-column">
                    <div class="inner-container">
                        <div class="content">
                            <div class="sec-title light">
                                <div class="sub-title">Dependable & Sincere Company</div>
                                <h2>Need Any Kind Roofing? <br> <strong>Your Trusted Partner</strong></h2>
                                <div class="text">Magna aliqa enim sed ipsum nisi ainy veniam quis nostrul aliqua enim lorem ipsum gui dolor sit amet tempor. Lorem ipsum dolor sit ametys consectetur adipisicing elit sed eiusmod tempor incididunt ut labore dolore magna sed. </div>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <h5>re-Roofing</h5>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="88"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                                <!--Skill Box-->
                                <div class="progress-box wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <h5>Leak repairs</h5>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="65"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                                <!--Skill Box-->
                                <div class="progress-box wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <h5>Roof coating</h5>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="75"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="image"><img src="{{asset('assets/images/resource/image-10.jpg')}}" alt=""></div>
                            <div class="lower-content">
                                <h2>Rofalco is critical <br> for any new roofing <br> Project.</h2>
                                <div class="icon"><img src="{{asset('assets/images/icons/icon-10.png')}}" alt=""></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="lower-content style-two">
                                <h2>Committed to <br> provide the roofing <br> excellence.</h2>
                                <div class="icon"><img src="{{asset('assets/images/icons/icon-11.png')}}" alt=""></div>
                            </div>
                            <div class="image"><img src="{{asset('assets/images/resource/image-11.jpg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Dependable & Sincere Company</div>
                <h2><strong>The Roofing Experts</strong></h2>
                <div class="text">Incididunt ut labore et dolore magna aliqua quis nostrud exercitation ullamco laboris <br> nisi ut aliquip ex ea consequat duis aute irure dolor reprehenderit</div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 team-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('assets/images/resource/team-1.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4>James Logan</h4>
                            <div class="designation">CEO | Director</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 team-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('assets/images/resource/team-2.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4>Kathrine Daniel</h4>
                            <div class="designation">Chief exective</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 team-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('assets/images/resource/team-3.jpg')}}" alt="">
                            <div class="overlay-box">
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4>Paul Steven</h4>
                            <div class="designation">CEO | partner</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- CTA Section Two -->
    <section class="cta-section-two">
        <div class="auto-container">
            <div class="wrapper-box">
                <h3>Need Roof Service & Maintenance Or Have <br> Any Questions? We are Ready to Help!</h3>
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-three"><span>Learn More</span></a></div>
                <div class="icon"><img src="{{asset('assets/images/icons/icon-12.png')}}" alt=""></div>
            </div>
        </div>
    </section>

    @include('main.includes.footer')

    @stop

