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
        'page' => 'Projects',
        'data' => [
            'Projects' => null
        ]
    ])

    <!-- Portfolio Section -->
    <section class="portfolio-section">
        <div class="auto-container">
            <div class="top-content">
                @if($projectHeading)
                    <div class="row align-items-center justify-content-between m-0">
                        <div class="sec-title col-lg-6 col-sm-12 p-0">
                            <div class="sub-title">{{$projectHeading->sub_heading}}</div>
                            <h2>{{$projectHeading->heading}}</h2>
                        </div>
                        <div class="text col-lg-6 col-sm-12 p-0">{{$projectHeading->description}}</div>
                    </div>
                @endif
            </div>
            <!--Sortable Galery-->
            <div class="sortable-masonry">
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="filter active" data-role="button" data-filter=".all">All <span class="count">0</span></li>
                        @foreach($project as $p)
                            <li class="filter" data-role="button" data-filter=".{{$p->slug}}">{{$p->title}} <span class="count">0</span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="items-container row clearfix">
                    <!-- Project Block -->

                    @foreach($project as $p)
                        @foreach($p->project as $v)
                        <div class="gallery-block masonry-item all {{$p->slug}} col-lg-3 col-md-6">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{$v->image_link}}" alt="">
                                </div>
                                <div class="overlay-content">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div>
                                        <h4>{{$v->image_title}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>
    </section>


    @include('main.includes.cta2')

    @include('main.includes.footer')

    @stop

    @section('js')
        {!!$seo->meta_footer_script_nonce!!}
        {!!$seo->meta_footer_no_script_nonce!!}
    @stop
