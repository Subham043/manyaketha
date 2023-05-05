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
        'page' => 'Services',
        'data' => [
            'Services' => null
        ]
    ])

    <!-- Services Section Two -->
    <section class="services-section-two">
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
            @if($service->total() > 0)
                <div class="row">

                    @foreach ($service->items() as $k => $v)

                        <div class="col-lg-4 col-md-6 service-block-two">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{$v->image_link}}" alt="">
                                    <div class="overlay">
                                        <div class="link-btn"><a href="{{route('services_detail.get', $v->slug)}}"><i class="flaticon-add"></i></a></div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4><span>{!!$v->name!!}</span></h4>
                                <div class="text">{{Str::limit($v->description_unfiltered, 150)}}</div>
                                <div class="read-more-btn"><a href="{{route('services_detail.get', $v->slug)}}">Learn More</a></div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
                <div>
                    {{$service->onEachSide(5)->links('main.includes.pagination')}}
                </div>
            @endif
        </div>
    </section>

    @include('main.includes.cta3')

    @include('main.includes.procedure', ['procedure'=>$procedure, 'procedureHeading'=>$procedureHeading])


    @include('main.includes.cta2')

    @include('main.includes.footer')

    @stop

    @section('js')

        {!!$seo->meta_footer_script_nonce!!}
        {!!$seo->meta_footer_no_script_nonce!!}

    @stop

