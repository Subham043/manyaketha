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
                                    <h2 class="col-auto">{{$data->heading}}</h2>
                                </div>
                                <div class="text mt-3">
                                    {!!$data->description!!}
                                </div>
                                <div class="post-share-info row no-gutters justify-content-between align-items-center">
                                    <a href="{{!empty($next) ? route('blogs_detail.get', $next->slug) : '#'}}" class="theme-btn btn-style">Previous Blog</a>

                                    <div class="left-column">
                                        <div class="share-icon style-two post-share-icon">
                                            <div class="share-btn"><span class="fas fa-share-alt"></span></div>
                                            <ul class="social-links">
                                                <li><a href="https://www.facebook.com/share.php?u={{route('blogs_detail.get', $data->slug)}}&title={{$data->name}}"><span class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="https://twitter.com/share?text={{$data->name}}&url={{route('blogs_detail.get', $data->slug)}}"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{route('blogs_detail.get', $data->slug)}}&title={{$data->name}}&source={{$data->name}}"><span class="fab fa-linkedin"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <a href="{{!empty($prev) ? route('blogs_detail.get', $prev->slug) : '#'}}" class="theme-btn btn-style">Next Blog</a>
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
                        @include('main.includes.common_contact')
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->

    @include('main.includes.cta2', ['data' => $callToAction])

    @include('main.includes.footer')

    @stop

    @section('js')

        <script src="{{ asset('admin/js/pages/just-validate.production.min.js') }}"></script>
        <script src="{{ asset('admin/js/pages/iziToast.min.js') }}"></script>
        <script src="{{ asset('admin/js/pages/axios.min.js') }}"></script>
        @include('main.includes.common_contact_script')

        {!!$data->meta_footer_script_nonce!!}
        {!!$data->meta_footer_no_script_nonce!!}

    @stop

