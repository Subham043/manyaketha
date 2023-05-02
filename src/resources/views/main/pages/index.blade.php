@extends('main.layouts.index')

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://html.tonatheme.com/2020/Rofalco/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Idea</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Growth</a></li>
                    <li><a href="#">Plan</a></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Bnner Section -->
    <section class="banner-section style-two">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url({{asset('assets/images/main-slider/image-3.jpg')}});">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h4>Dependable & Sincere Roofing Company</h4>
                                <h1>Committed To Roofing <br> Excellence From 15 Years</h1>
                                <div class="text">Eiusmod tempor incididunt labore dolore magna aliqua</div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span>Learn More</span></a>
                                    <a href="#" class="theme-btn btn-style-one style-four"><span>How It Works</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url({{asset('assets/images/main-slider/image-4.jpg')}});">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h4>Dependable & Sincere Company</h4>
                                <h1>Roofing Contractors of <br> High Choice Offering <br> The Highest Quality </h1>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span>Learn More</span></a>
                                    <a href="#" class="theme-btn btn-style-one style-four"><span>How It Works</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-nav">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="far fa-angle-left"></i></span></div>
            <div class="banner-slider-control banner-slider-button-next"><span><i class="far fa-angle-right"></i></span> </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Clients Logo Section -->
    <section class="clients-logo-section">
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

    <!-- Features Section Three -->
    <section class="features-section-three style-two">
        <div class="auto-container">
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

    <!-- About Section -->
    <section class="about-section-two pt-0">
        <div class="shape-one"><img src="{{asset('assets/images/shape/shape-2.png')}}" alt=""></div>
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

    <!-- Funfacts Section -->
    <section class="funfacts-section pt-0 style-two">
        <div class="auto-container">
            <div class="row">
                <!--Column-->
                <div class="column counter-column col-xl-3 col-lg-6 col-md-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon"><img src="{{asset('assets/images/icons/icon-21.png')}}" alt=""></div>
                        <div class="content">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="2">0</span><span>k+</span>
                            </div>
                            <div class="text">Residents Served</div>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class="column counter-column col-xl-3 col-lg-6 col-md-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon"><img src="{{asset('assets/images/icons/icon-22.png')}}" alt=""></div>
                        <div class="content">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="2">0</span><span>k+</span>
                            </div>
                            <div class="text">Consultations Offered</div>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class="column counter-column col-xl-3 col-lg-6 col-md-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon"><img src="{{asset('assets/images/icons/icon-23.png')}}" alt=""></div>
                        <div class="content">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="148">0</span>
                            </div>
                            <div class="text">Projects In Queue</div>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class="column counter-column col-xl-3 col-lg-6 col-md-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon"><img src="{{asset('assets/images/icons/icon-24.png')}}" alt=""></div>
                        <div class="content">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="3">0</span><span>k+</span>
                            </div>
                            <div class="text">Roofs Repaired Done</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Services Section Two -->
    <section class="services-section-two style-two">
        <div class="auto-container">
            <div class="row align-items-center justify-content-between m-0">
                <div class="sec-title">
                    <div class="sub-title">Dependable & Sincere Company</div>
                    <h2>Quality & Reability <br> <strong>With 100% Satisfaction</strong></h2>
                </div>
                <div class="text">Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat <br> duis aute irure dolor in reprehenderit in voluptate. </div>
            </div>
            <div class="row">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                    <div class="service-block-two col-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/resource/image-3.jpg')}}" alt="">
                                <div class="overlay">
                                    <div class="link-btn"><a href="service-details.html"><i class="flaticon-add"></i></a></div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><span>Roof Maintenance</span></h4>
                                <div class="text">Magna aliqa enim sed ipsum nisi ainy veniam quis nostrul aliqua enim lorem ipsum gui dolor sit amet tempor.</div>
                                <div class="read-more-btn"><a href="service-details.html">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two col-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/resource/image-4.jpg')}}" alt="">
                                <div class="overlay">
                                    <div class="link-btn"><a href="service-details.html"><i class="flaticon-add"></i></a></div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><span>Roof Inspection</span></h4>
                                <div class="text">Magna aliqa enim sed ipsum nisi ainy veniam quis nostrul aliqua enim lorem ipsum gui dolor sit amet tempor.</div>
                                <div class="read-more-btn"><a href="service-details.html">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two col-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/resource/image-5.jpg')}}" alt="">
                                <div class="overlay">
                                    <div class="link-btn"><a href="service-details.html"><i class="flaticon-add"></i></a></div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><span>Insulation & Repairs</span></h4>
                                <div class="text">Magna aliqa enim sed ipsum nisi ainy veniam quis nostrul aliqua enim lorem ipsum gui dolor sit amet tempor.</div>
                                <div class="read-more-btn"><a href="service-details.html">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two col-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/resource/image-3.jpg')}}" alt="">
                                <div class="overlay">
                                    <div class="link-btn"><a href="service-details.html"><i class="flaticon-add"></i></a></div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><span>Roof Maintenance</span></h4>
                                <div class="text">Magna aliqa enim sed ipsum nisi ainy veniam quis nostrul aliqua enim lorem ipsum gui dolor sit amet tempor.</div>
                                <div class="read-more-btn"><a href="service-details.html">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two col-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/resource/image-4.jpg')}}" alt="">
                                <div class="overlay">
                                    <div class="link-btn"><a href="service-details.html"><i class="flaticon-add"></i></a></div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><span>Roof Inspection</span></h4>
                                <div class="text">Magna aliqa enim sed ipsum nisi ainy veniam quis nostrul aliqua enim lorem ipsum gui dolor sit amet tempor.</div>
                                <div class="read-more-btn"><a href="service-details.html">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two col-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/resource/image-5.jpg')}}" alt="">
                                <div class="overlay">
                                    <div class="link-btn"><a href="service-details.html"><i class="flaticon-add"></i></a></div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><span>Insulation & Repairs</span></h4>
                                <div class="text">Magna aliqa enim sed ipsum nisi ainy veniam quis nostrul aliqua enim lorem ipsum gui dolor sit amet tempor.</div>
                                <div class="read-more-btn"><a href="service-details.html">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two col-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/resource/image-3.jpg')}}" alt="">
                                <div class="overlay">
                                    <div class="link-btn"><a href="service-details.html"><i class="flaticon-add"></i></a></div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><span>Roof Maintenance</span></h4>
                                <div class="text">Magna aliqa enim sed ipsum nisi ainy veniam quis nostrul aliqua enim lorem ipsum gui dolor sit amet tempor.</div>
                                <div class="read-more-btn"><a href="service-details.html">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two col-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/resource/image-4.jpg')}}" alt="">
                                <div class="overlay">
                                    <div class="link-btn"><a href="service-details.html"><i class="flaticon-add"></i></a></div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><span>Roof Inspection</span></h4>
                                <div class="text">Magna aliqa enim sed ipsum nisi ainy veniam quis nostrul aliqua enim lorem ipsum gui dolor sit amet tempor.</div>
                                <div class="read-more-btn"><a href="service-details.html">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-two col-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/resource/image-5.jpg')}}" alt="">
                                <div class="overlay">
                                    <div class="link-btn"><a href="service-details.html"><i class="flaticon-add"></i></a></div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><span>Insulation & Repairs</span></h4>
                                <div class="text">Magna aliqa enim sed ipsum nisi ainy veniam quis nostrul aliqua enim lorem ipsum gui dolor sit amet tempor.</div>
                                <div class="read-more-btn"><a href="service-details.html">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- CTA Section -->
    <section class="cta-section sp-two">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="logo"><img src="{{asset('assets/images/logo.png')}}" alt=""></div>
                <h2>Proud to be serving the <br> expertise you can trust</h2>
                <div class="link-btn">
                    <a href="#" class="theme-btn btn-style-one style-two"><span>Get In Touch</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section-two">
        <div class="auto-container">
            <div class="top-content">
                <div class="row m-0 justify-content-between align-items-end">
                    <div class="sec-title light">
                        <div class="sub-title">Dependable & Sincere Company</div>
                        <h2><strong>Featured Projects</strong></h2>
                        <div class="text">Incididunt ut labore et dolore magna aliqua enim ad minim veniam <br> quis nostrud exercitation ullamco laboris nisut aliquip.</div>
                    </div>
                    <!--Filter-->
                    <div class="filters clearfix">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="filter active" data-role="button" data-filter=".all">All <span class="count">0</span></li>
                            <li class="filter" data-role="button" data-filter=".cat-1">Residential <span class="count">0</span></li>
                            <li class="filter" data-role="button" data-filter=".cat-2">Commercial <span class="count">0</span></li>
                            <li class="filter" data-role="button" data-filter=".cat-3">Roof Repairs <span class="count">0</span></li>
                            <li class="filter" data-role="button" data-filter=".cat-4">Installation <span class="count">0</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Sortable Galery-->
            <div class="sortable-masonry">

                <div class="items-container row no-gutters">
                    <!-- Project Block -->
                    <div class="gallery-block-two masonry-item all cat-1 col-lg-3 col-md-6">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/gallery/image-13.jpg')}}" alt="">
                            </div>
                            <div class="overlay-content">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div>
                                    <h4>Roof Repairing</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project Block -->
                    <div class="gallery-block-two masonry-item all cat-4 col-lg-3 col-md-6">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/gallery/image-14.jpg')}}" alt="">
                            </div>
                            <div class="overlay-content">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div>
                                    <h4>Insulation</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project Block -->
                    <div class="gallery-block-two masonry-item all cat-1 cat-3 col-lg-3 col-md-6">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/gallery/image-15.jpg')}}" alt="">
                            </div>
                            <div class="overlay-content">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div>
                                    <h4>Roof Inspection</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project Block -->
                    <div class="gallery-block-two masonry-item all cat-2 col-lg-3 col-md-6">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/gallery/image-16.jpg')}}" alt="">
                            </div>
                            <div class="overlay-content">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div>
                                    <h4>Roof Replacement</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project Block -->
                    <div class="gallery-block-two masonry-item all cat-3 col-lg-3 col-md-6">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/gallery/image-17.jpg')}}" alt="">
                            </div>
                            <div class="overlay-content">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div>
                                    <h4>Roof Coating</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Working Process -->
    <section class="working-process style-two">
        <div class="shape-one"><img src="{{asset('assets/images/shape/shape-3.png')}}" alt=""></div>
        <div class="auto-container">
            <div class="top-content row align-items-center justify-content-between m-0">
                <div class="sec-title">
                    <div class="sub-title">Dependable & Sincere Company</div>
                    <h2>Quality & Reability <br> <strong>With 100% Satisfaction</strong></h2>
                </div>
                <div class="text">Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat <br> duis aute irure dolor in reprehenderit in voluptate. </div>
            </div>
            <div class="row">
                <div class="process-block col-lg-3 col-md-6">
                    <div class="inner-box wow fadeiInUp" wow-duration="1500ms">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/icon-25.png')}}" alt="">
                            <div class="count">1</div>
                        </div>
                        <div class="text">Request a Free <br> Project Estimate</div>
                    </div>
                </div>
                <div class="process-block col-lg-3 col-md-6">
                    <div class="inner-box wow fadeiInDown" wow-duration="1500ms">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/icon-26.png')}}" alt="">
                            <div class="count">2</div>
                        </div>
                        <div class="text">Pickup Your Roof <br> Maintenance Things</div>
                    </div>
                </div>
                <div class="process-block col-lg-3 col-md-6">
                    <div class="inner-box wow fadeiInUp" wow-duration="1500ms">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/icon-27.png')}}" alt="">
                            <div class="count">3</div>
                        </div>
                        <div class="text">Reliably Completing <br> The Roofing Project</div>
                    </div>
                </div>
                <div class="process-block col-lg-3 col-md-6">
                    <div class="inner-box wow fadeiInDown" wow-duration="1500ms">
                        <div class="icon">
                            <img src="{{asset('assets/images/icons/icon-28.png')}}" alt="">
                            <div class="count">4</div>
                        </div>
                        <div class="text">Enjoy Our Highest <br> Quality Rooftop Work</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section Two -->
    <section class="features-section-two style-two">
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
    <section class="cta-section-three" style="background-image: url({{asset('assets/images/background/bg-5.jpg')}});">
        <div class="auto-container">
            <h3><i class="fas fa-phone"></i>Need Emergency Repair? Call Us 24/7 For Expert Help <strong>1500.963.321</strong></h3>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="shape-one"><img src="{{asset('assets/images/shape/shape-4.png')}}" alt=""></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Dependable &amp; Sincere Company</div>
                <h2><strong>The Roofing Experts</strong></h2>
                <div class="text">Incididunt ut labore et dolore magna aliqua quis nostrud exercitation ullamco laboris <br> nisi ut aliquip ex ea consequat duis aute irure dolor reprehenderit </div>
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

    <!-- Two Column section -->
    <section class="two-column-section" style="background-image: url({{asset('assets/images/background/bg-4.jpg')}});">
        <div class="divider">ROFALCO</div>
        <div class="auto-container">
            <div class="row no-gutters">
                <div class="col-xl-6 left-column">
                    <div class="inner-container">
                        <div class="sec-title light">
                            <div class="sub-title">Dependable &amp; Sincere Company</div>
                            <h2>Words From Our <br><strong>Loving Customers</strong></h2>
                        </div>
                        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                            <div class="testimonial-block p-0 style-two">
                                <div class="inner-box">
                                    <div class="text">“Integer lobortis sem consequat consequat imperdiet <br> nulla sed viverra ut lorem dap ib consectetur bibenda <br> imperdiets. Aliquam era volutpat dolore eu fugiat null <br> pariatur excepteur sint occaecat.”</div>
                                    <div class="author-box">
                                        <div class="author-thumb"><img src="{{asset('assets/images/resource/author-1.jpg')}}" alt=""></div>
                                        <div class="content">
                                            <h4>Nick Jones</h4>
                                            <div class="designation">Building Owner</div>
                                            <div class="rating">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="testimonial-block p-0 style-two">
                                <div class="inner-box">
                                    <div class="text">“Integer lobortis sem consequat consequat imperdiet <br> nulla sed viverra ut lorem dap ib consectetur bibenda <br> imperdiets. Aliquam era volutpat dolore eu fugiat null <br> pariatur excepteur sint occaecat.”</div>
                                    <div class="author-box">
                                        <div class="author-thumb"><img src="{{asset('assets/images/resource/author-2.jpg')}}" alt=""></div>
                                        <div class="content">
                                            <h4>James Thomas</h4>
                                            <div class="designation">Building Owner</div>
                                            <div class="rating">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="testimonial-block p-0 style-two">
                                <div class="inner-box">
                                    <div class="text">“Integer lobortis sem consequat consequat imperdiet <br> nulla sed viverra ut lorem dap ib consectetur bibenda <br> imperdiets. Aliquam era volutpat dolore eu fugiat null <br> pariatur excepteur sint occaecat.”</div>
                                    <div class="author-box">
                                        <div class="author-thumb"><img src="{{asset('assets/images/resource/author-3.jpg')}}" alt=""></div>
                                        <div class="content">
                                            <h4>Truna Mathew</h4>
                                            <div class="designation">Building Owner</div>
                                            <div class="rating">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="testimonial-block p-0 style-two">
                                <div class="inner-box">
                                    <div class="text">“Integer lobortis sem consequat consequat imperdiet <br> nulla sed viverra ut lorem dap ib consectetur bibenda <br> imperdiets. Aliquam era volutpat dolore eu fugiat null <br> pariatur excepteur sint occaecat.”</div>
                                    <div class="author-box">
                                        <div class="author-thumb"><img src="{{asset('assets/images/resource/author-1.jpg')}}" alt=""></div>
                                        <div class="content">
                                            <h4>Nick Jones</h4>
                                            <div class="designation">Building Owner</div>
                                            <div class="rating">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="testimonial-block p-0 style-two">
                                <div class="inner-box">
                                    <div class="text">“Integer lobortis sem consequat consequat imperdiet <br> nulla sed viverra ut lorem dap ib consectetur bibenda <br> imperdiets. Aliquam era volutpat dolore eu fugiat null <br> pariatur excepteur sint occaecat.”</div>
                                    <div class="author-box">
                                        <div class="author-thumb"><img src="{{asset('assets/images/resource/author-2.jpg')}}" alt=""></div>
                                        <div class="content">
                                            <h4>James Thomas</h4>
                                            <div class="designation">Building Owner</div>
                                            <div class="rating">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 right-column">
                    <div class="inner-container">
                        <div class="estimate-form">
                            <div class="title">Get Free Consultation</div>
                            <div class="sub-title">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea duis aute irure dolor in reprehenderit in voluptate. </div>
                            <form action="#" class="">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input placeholder="name" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input placeholder="Email" type="email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input placeholder="Phone" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="selectpicker" name="subject">
                                            <option value="*">City</option>
                                            <option value=".category-1">New York</option>
                                            <option value=".category-2">California</option>
                                            <option value=".category-3">los angeles</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <select class="selectpicker" name="subject">
                                            <option value="*">Subject / Discuss About Service</option>
                                            <option value=".category-1">Roof Maintenance</option>
                                            <option value=".category-2">Roof Inspection</option>
                                            <option value=".category-3">Insulation & Repairs</option>
                                            <option value=".category-4">Roof Replacement</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="theme-btn btn-style-one w-100"><span>Submit Now</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section class="latest-news-section">
        <div class="auto-container">
            <div class="row align-items-center justify-content-between m-0">
                <div class="sec-title">
                    <div class="sub-title">Dependable & Sincere Company</div>
                    <h2>Latest News From <br> <strong>Rofalco Since 2005</strong></h2>
                </div>
                <div class="text">Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat <br> duis aute irure dolor in reprehenderit in voluptate. </div>
            </div>
            <div class="row">
                <div class="col-lg-6 news-block-one">
                    <div class="inner-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image"><a href="blog-details.html"><img src="{{asset('assets/images/resource/news-1.jpg')}}" alt=""></a></div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-box">
                                    <ul class="post-meta">
                                        <li>John Smith</li>
                                        <li>April 28, 2020</li>
                                    </ul>
                                    <a href="blog-details.html"><h4>Reviewing a Residential <br> Roof’s Warrenty</h4></a>
                                    <div class="text">Magna aliqa enim sed ipsum nisi ainy <br> ipsum gui dolor sit amet tempor lorem <br> adipisicing elit, sed eiusmod...</div>
                                    <div class="row m-0 justify-content-between">
                                        <div class="read-more-btn"><a href="blog-details.html" class="theme-btn">Read more</a></div>
                                        <div class="share-icon style-two post-share-icon">
                                            <div class="share-btn"><span class="fas fa-share-alt"></span></div>
                                            <ul class="social-links">
                                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 news-block-one">
                    <div class="inner-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image"><a href="blog-details.html"><img src="{{asset('assets/images/resource/news-2.jpg')}}" alt=""></a></div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-box">
                                    <ul class="post-meta">
                                        <li>John Smith</li>
                                        <li>April 28, 2020</li>
                                    </ul>
                                    <a href="blog-details.html"><h4>Asphalt Roof Cleaning <br> & Repairing Do’s</h4></a>
                                    <div class="text">Magna aliqa enim sed ipsum nisi ainy <br> ipsum gui dolor sit amet tempor lorem <br> adipisicing elit, sed eiusmod...</div>
                                    <div class="row m-0 justify-content-between">
                                        <div class="read-more-btn"><a href="blog-details.html" class="theme-btn">Read more</a></div>
                                        <div class="share-icon style-two post-share-icon">
                                            <div class="share-btn"><span class="fas fa-share-alt"></span></div>
                                            <ul class="social-links">
                                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

