@extends('main.layouts.index')

    @section('css')

        <title>{{$data->meta_title}}</title>
        <meta name="description" content="{{$data->meta_description}}"/>
        <meta name="keywords" content="{{$data->meta_keywords}}"/>

        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="profile" />
        <meta property="og:title" content="{{$data->meta_title}}" />
        <meta property="og:description" content="{{$data->meta_description}}" />
        <meta property="og:url" content="{{Request::url()}}" />
        <meta property="og:site_name" content="{{$data->meta_title}}" />
        <meta property="og:image" content="{{ asset('assets/images/logo.png')}}" />
        <meta name="twitter:card" content="{{ asset('assets/images/logo.png')}}" />
        <meta name="twitter:label1" content="{{$data->meta_title}}" />
        <meta name="twitter:data1" content="{{$data->meta_description}}" />

        <link rel="icon" href="{{ empty($generalSetting) ? asset('assets/images/favicon.png') : $generalSetting->website_favicon_link}}" sizes="32x32" />
        <link rel="icon" href="{{ empty($generalSetting) ? asset('assets/images/favicon.png') : $generalSetting->website_favicon_link}}" sizes="192x192" />
        <link rel="apple-touch-icon" href="{{ empty($generalSetting) ? asset('assets/images/favicon.png') : $generalSetting->website_favicon_link}}" />

        {!!$data->meta_header_script!!}
        {!!$data->meta_header_no_script!!}

    @stop

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    @include('main.includes.breadcrumb', [
        'page' => 'Blogs',
        'data' => [
            'Blogs' => route('blogs.get'),
            $data->name => null
        ]
    ])

    <!-- sidebar-page-container -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 content-side order-lg-2">
                    <div class="news-block-three blog-single-post">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{$data->image_link}}" alt="">
                            </div>
                            <div class="content-box">
                                <div class="bottom-content">
                                    <div class="date"><strong>{{$data->created_at->format('j')}}</strong> <br> {{$data->created_at->format('F')}}</div>
                                    <h2>{{$data->heading}}</h2>
                                </div>
                                <div class="text">
                                    {!!$data->description!!}
                                </div>
                                <div class="post-share-info row no-gutters justify-content-between">
                                    <div class="left-column">
                                        <div class="tag">
                                            <span>Tags:</span>
                                            <a href="#">Roofing</a>
                                            <a href="#">Coating</a>
                                            <a href="#">Maintainence</a>
                                        </div>
                                    </div>
                                    <div class="left-column">
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
                <aside class="col-lg-4 sidebar">
                    <div class="blog-sidebar">
                        <div class="widget contact-widget style-two">
                            <div class="widget-content">
                                <h3 class="widget-title">Get in touch</h3>
                                @include('main.includes.common_contact_info')
                            </div>
                        </div>
                        <div class="widget widget_cta">
                            <div class="widget-content">
                                <div class="image"><img src="{{asset('assets/images/resource/news-16.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="text">Commercial & <br> Specialty Roofing <br> Contractors</div>
                                    <a href="{{route('contact_page.get')}}" class="theme-btn btn-style-one style-three"><span>Learn More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->

    @include('main.includes.cta2')

    @include('main.includes.footer')

    @stop

    @section('js')

        {!!$data->meta_footer_script_nonce!!}
        {!!$data->meta_footer_no_script_nonce!!}

    @stop

