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
    @stop

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    @include('main.includes.breadcrumb', [
        'page' => 'Blogs',
        'data' => [
            'Blogs' => null
        ]
    ])

    <!-- Latest News -->
    <section class="latest-news-section">
        <div class="auto-container">
            @include('main.includes.row_heading', ['data'=>$blogHeading])
            @if($blogs->total() > 0)
            <div class="row">
                @foreach ($blogs->items() as $k => $v)
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{route('blogs_detail.get', $v->slug)}}"><img src="{{$v->image_link}}" alt=""></a>
                            <div class="date"><strong>{{$v->created_at->format('j')}}</strong> <br> {{$v->created_at->format('F')}}</div>
                        </div>
                        <div class="content-box">
                            <div class="top-content">
                                <a href="{{route('blogs_detail.get', $v->slug)}}"><h4>{{Str::limit($v->name, 20)}}</h4></a>
                                <div class="text">{{Str::limit($v->description_unfiltered, 100)}}</div>
                            </div>
                            <div class="bottom-content">
                                <div class="row m-0 justify-content-between">
                                    <div class="read-more-btn"><a href="{{route('blogs_detail.get', $v->slug)}}" class="theme-btn">Read more</a></div>
                                    <div class="share-icon style-two post-share-icon">
                                        <div class="share-btn"><span class="fas fa-share-alt"></span></div>
                                        <ul class="social-links">
                                            <li><a href="https://www.facebook.com/share.php?u={{route('blogs_detail.get', $v->slug)}}&title={{$v->name}}"><span class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="https://twitter.com/share?text={{$v->name}}&url={{route('blogs_detail.get', $v->slug)}}"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{route('blogs_detail.get', $v->slug)}}&title={{$v->name}}&source={{$v->name}}"><span class="fab fa-linkedin"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    @include('main.includes.cta2', ['data' => $callToAction])

    @include('main.includes.footer')

    @stop

    @section('js')

        {!!$seo->meta_footer_script_nonce!!}
        {!!$seo->meta_footer_no_script_nonce!!}

    @stop

