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

    @if(count($banner)>0)
    <!-- Bnner Section -->
    <section class="banner-section style-two">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                @foreach($banner as $banner)
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url({{$banner->banner_image_link}});">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h4>{!!$banner->sub_title!!}</h4>
                                <h1>{!!$banner->title!!}</h1>
                                <div class="text">{!!$banner->description!!}</div>
                                <div class="link-box">
                                    <a href="{{$banner->button_link}}" class="theme-btn btn-style-one style-four"><span>View Detail</span></a>
                                    <a href="{{route('contact_page.get')}}" class="theme-btn btn-style-one style-two"><span>Contact Us</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="banner-slider-nav">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="far fa-angle-left"></i></span></div>
            <div class="banner-slider-control banner-slider-button-next"><span><i class="far fa-angle-right"></i></span> </div>
        </div>
    </section>
    <!-- End Bnner Section -->
    @endif

    @include('main.includes.clients', ['partner'=>$partner, 'styleTwo' => false])

    <!-- Features Section Three -->
    <section class="features-section-three style-two">
        <div class="auto-container">
            @include('main.includes.feature', ['feature'=>$feature])
        </div>
    </section>

    @include('main.includes.about', ['about'=>$about, 'ptop' => true])

    @include('main.includes.counter', ['counter'=>$counter])

    @if(count($service)>0)
    <!-- Services Section Two -->
    <section class="services-section-two style-two pb-0">
        <div class="auto-container">
            @if($headingService)
            <div class="row align-items-center justify-content-between m-0">
                <div class="sec-title col-lg-6 col-sm-12 p-0">
                    <div class="sub-title">{!!$headingService->sub_heading!!}</div>
                    <h2>{!!$headingService->heading!!}</h2>
                </div>
                <div class="text col-lg-6 col-sm-12 p-0">{!!$headingService->description!!}</div>
            </div>
            @endif
            <div class="row">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                    @foreach($service as $service)
                    <div class="service-block-two col-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{$service->image_link}}" alt="">
                                <div class="overlay">
                                    <div class="link-btn"><a href="{{route('services_detail.get', $service->slug)}}"><i class="flaticon-add"></i></a></div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><span>{!!$service->name!!}</span></h4>
                                <div class="text">{{Str::limit($service->description_unfiltered, 150)}}</div>
                                <div class="read-more-btn"><a href="{{route('services_detail.get', $service->slug)}}">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

    @include('main.includes.cta1')

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

    @include('main.includes.procedure', ['procedure'=>$procedure, 'procedureHeading'=>$procedureHeading])


    @include('main.includes.additional_content', ['additionalContent'=>$additionalContent, 'styleTwo' => true])

    @include('main.includes.team', ['team'=>$team, 'teamHeading'=>$teamHeading])

    <!-- Two Column section -->
    <section class="two-column-section">
        <div class="divider">MANYAKETHA VENTURES</div>
        <div class="auto-container">
            <div class="row no-gutters">
                @if(count($testimonial)>0)
                <div class="col-xl-6 left-column">
                    <div class="inner-container">
                        @if($testimonialHeading)
                        <div class="sec-title light">
                            <div class="sub-title">{!!$testimonialHeading->sub_heading!!}</div>
                            <h2>{!!$testimonialHeading->heading!!}</h2>
                        </div>
                        @endif
                        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                            @foreach($testimonial as $testimonial)
                            <div class="testimonial-block p-0 style-two">
                                <div class="inner-box">
                                    <div class="text">“{!!$testimonial->message!!}”</div>
                                    <div class="author-box">
                                        <div class="author-thumb"><img src="{{asset('assets/images/resource/author-1.jpg')}}" alt=""></div>
                                        <div class="content">
                                            <h4>{!!$testimonial->name!!}</h4>
                                            <div class="designation">{!!$testimonial->designation!!}</div>
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
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
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

    @if(count($blog)>0)
    <!-- Latest News -->
    <section class="latest-news-section">
        <div class="auto-container">
            @if($blogHeading)
            <div class="row align-items-center justify-content-between m-0">
                <div class="sec-title col-lg-6 col-sm-12">
                    <div class="sub-title">{!!$blogHeading->sub_heading!!}</div>
                    <h2>{!!$blogHeading->heading!!}</h2>
                </div>
                <div class="text col-lg-6 col-sm-12">{!!$blogHeading->description!!}</div>
            </div>
            @endif
            <div class="row">
                @foreach($blog as $blog)
                <div class="col-lg-6 news-block-one">
                    <div class="inner-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image"><a href="{{route('blogs_detail.get', $blog->slug)}}"><img src="{{$blog->image_link}}" alt=""></a></div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-box">
                                    <ul class="post-meta">
                                        <li>{{$blog->created_at->format('j F, Y')}}</li>
                                    </ul>
                                    <a href="{{route('blogs_detail.get', $blog->slug)}}"><h4>{{Str::limit($blog->name, 20)}}</h4></a>
                                    <div class="text">{{Str::limit($blog->description_unfiltered, 100)}}</div>
                                    <div class="row m-0 justify-content-between">
                                        <div class="read-more-btn"><a href="{{route('blogs_detail.get', $blog->slug)}}" class="theme-btn">Read more</a></div>
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
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @include('main.includes.cta2')

    @include('main.includes.footer')

    @stop

