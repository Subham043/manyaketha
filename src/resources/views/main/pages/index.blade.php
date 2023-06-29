@extends('main.layouts.index')

    @section('css')
        <title>{{$seo->meta_title}}</title>
        <meta name="description" content="{{$seo->meta_description}}"/>
        <meta name="keywords" content="{{$seo->meta_keywords}}"/>

        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="profile" />
        <meta property="og:title" content="{{$seo->meta_title}}" />
        <meta property="og:description" content="{{$seo->meta_description}}" />
        <meta property="og:url" content="{{Request::url()}}" />
        <meta property="og:site_name" content="{{$seo->meta_title}}" />
        <meta property="og:image" content="{{ asset('assets/images/logo.png')}}" />
        <meta name="twitter:card" content="{{ asset('assets/images/logo.png')}}" />
        <meta name="twitter:label1" content="{{$seo->meta_title}}" />
        <meta name="twitter:data1" content="{{$seo->meta_description}}" />

        <link rel="icon" href="{{ empty($generalSetting) ? asset('assets/images/favicon.png') : $generalSetting->website_favicon_link}}" sizes="32x32" />
        <link rel="icon" href="{{ empty($generalSetting) ? asset('assets/images/favicon.png') : $generalSetting->website_favicon_link}}" sizes="192x192" />
        <link rel="apple-touch-icon" href="{{ empty($generalSetting) ? asset('assets/images/favicon.png') : $generalSetting->website_favicon_link}}" />

        {!!$seo->meta_header_script_nonce!!}
        {!!$seo->meta_header_no_script_nonce!!}

        <style>
            .header-video-container{
                position: relative;
                width: 100%;
                padding-bottom: 56.25%;
            }
            .header-video-container:before{
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                /* background-color: #00000054; */
                z-index: 7;
                pointer-events:none;
                background-image: linear-gradient(0deg, rgba(27, 27, 27, 1) 10%, rgba(27, 27, 27, 0.2) 100%);
            }
            .header-video-container:hover:before{
                background-image: none;
            }
            .header-video {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: 0;
                z-index: 6;
            }
        </style>
    @stop

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    @if(count($banner)>0 && !$bannerVideo->is_draft)
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
                                <h1>{{$banner->title}}</h1>
                                <div class="link-box">
                                    <a href="{{$banner->button_link}}" class="theme-btn btn-style-one style-two"><span>{{$banner->button_text}}</span></a>
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
    @else
    <section class="banner-section style-two">
        <div class="header-video-container">
            <iframe src="{{$bannerVideo->banner_video}}?autoplay=1&mute=1&fs=0&loop=1&rel=0&showinfo=0&iv_load_policy=3&modestbranding=0&controls=1&enablejsapi=1" class="header-video" width="560" height="315" frameborder="0"></iframe>
        </div>
    </section>
    @endif

    @include('main.includes.about', ['about'=>$about, 'ptop' => false])

    @include('main.includes.counter', ['counter'=>$counter])

    @if(count($services)>0)
    <!-- Services Section Two -->
    <section class="services-section-two style-two pb-0">
        <div class="auto-container">
            @include('main.includes.row_heading', ['data'=>$headingService])
            <div class="row">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                    @foreach($services as $services)
                    <div class="service-block-two col-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{$services->image_link}}" alt="">
                                <div class="overlay">
                                    <div class="link-btn"><a href="{{route('services_detail.get', $services->slug)}}"><i class="flaticon-add"></i></a></div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4><span>{!!$services->name!!}</span></h4>
                                <div class="text">{{Str::limit($services->description_unfiltered, 150)}}</div>
                                <div class="read-more-btn"><a href="{{route('services_detail.get', $services->slug)}}">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Features Section Three -->
    <section class="features-section-three style-two pt-0">
        <div class="auto-container">
            @if($featureHeading)
            <div class="sec-title text-center">
                <div class="sub-title">{{$featureHeading->sub_heading}}</div>
                <h2>{{$featureHeading->heading}}</h2>
                <div class="text">{{$featureHeading->description}}</div>
            </div>
            @endif
            @include('main.includes.feature', ['feature'=>$feature])
        </div>
    </section>

    {{-- @include('main.includes.cta1') --}}

    @include('main.includes.project', [
        'project' => $project,
        'projectHeading' => $projectHeading,
    ])

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
                            <div class="sub-title">{{$testimonialHeading->sub_heading}}</div>
                            <h2>{{$testimonialHeading->heading}}</h2>
                        </div>
                        @endif
                        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                            @foreach($testimonial as $testimonial)
                            <div class="testimonial-block p-0 style-two">
                                <div class="inner-box">
                                    <div class="text">“{{$testimonial->message}}”</div>
                                    <div class="author-box">
                                        <div class="author-thumb"><img src="{{$testimonial->image_link}}" alt=""></div>
                                        <div class="content">
                                            <h4>{{$testimonial->name}}</h4>
                                            <div class="designation">{{$testimonial->designation}}</div>
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
                            <form method="post" id="contactForm">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input placeholder="name" id="name" name="name" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input placeholder="Email" id="email" name="email" type="email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input placeholder="Phone" id="phone" name="phone" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="selectpicker" name="service" id="service">
                                            <option value="">Service Required</option>
                                            @if(count($serviceOption)>0)
                                                @foreach($serviceOption as $v)
                                                <option value="{!!$v->name!!}">{!!$v->name!!}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input placeholder="Image" id="image" name="image" type="file" class="pt-2">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea name="form_message" id="message" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="theme-btn btn-style-one w-100"><span id="submitBtn">Submit Now</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('main.includes.clients', ['partner'=>$partner, 'styleTwo' => false])

    @if(count($blog)>0)
    <!-- Latest News -->
    <section class="latest-news-section">
        <div class="auto-container">
            @include('main.includes.row_heading', ['data'=>$blogHeading])
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
                                                <li><a href="https://www.facebook.com/share.php?u={{route('blogs_detail.get', $blog->slug)}}&title={{$blog->name}}"><span class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="https://twitter.com/share?text={{$blog->name}}&url={{route('blogs_detail.get', $blog->slug)}}"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{route('blogs_detail.get', $blog->slug)}}&title={{$blog->name}}&source={{$blog->name}}"><span class="fab fa-linkedin"></span></a></li>
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

    @section('js')

    <script src="{{ asset('admin/js/pages/just-validate.production.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/iziToast.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/axios.min.js') }}"></script>
    @include('main.includes.common_contact_script')

        {!!$seo->meta_footer_script_nonce!!}
        {!!$seo->meta_footer_no_script_nonce!!}

    @stop

