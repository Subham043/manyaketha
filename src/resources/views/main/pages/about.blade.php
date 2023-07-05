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
        'page' => 'About Us',
        'data' => [
            'About Us' => null
        ]
    ])

    @include('main.includes.about', ['about'=>$about, 'ptop' => false])

    <!-- Features Section Three -->
    <section class="features-section-three">
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

    @include('main.includes.additional_content', ['additionalContent'=>$additionalContent, 'styleTwo' => false])

    @include('main.includes.cta3')

    @include('main.includes.team')

    @include('main.includes.clients', ['partner'=>$partner, 'styleTwo' => true])

    @include('main.includes.cta2', ['data' => $callToAction])

    @include('main.includes.footer')

    @stop

    @section('js')

        {!!$seo->meta_footer_script_nonce!!}
        {!!$seo->meta_footer_no_script_nonce!!}

    @stop
