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

        <style>
            .fl-img{
                float: left;
                width: 45%;
                margin-right: 20px;
            }
            .fr-img{
                float: right;
                width: 45%;
                margin-left: 20px;
            }
            .clearfix {
                overflow: auto;
            }
        </style>

        {!!$data->meta_header_script!!}
        {!!$data->meta_header_no_script!!}

    @stop

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    @include('main.includes.breadcrumb', [
        'page' => 'Services',
        'data' => [
            'Services' => route('services.get'),
            $data->name => null
        ]
    ])

    <!-- Service Details -->
    <section class="services-details">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 content-side order-lg-2">
                    <div class="image mb-40"><img src="{{$data->image_link}}" alt=""></div>
                    <h2>{!! $data->heading !!}</h2>
                    <div class="text">
                        {!! $data->description !!}
                    </div>
                    @if($data->additional_contents->count()>0)
                        @if($data->additional_content_heading)
                            <h4>{!! $data->additional_content_heading->heading !!}</h4>
                            <div class="text">
                                {!! $data->additional_content_heading->description !!}
                            </div>
                        @endif
                        <div class="mt-4 mb-4">
                            @foreach($data->additional_contents as $key=>$val)
                                @if(($key+1)%2!=0)
                                    <div class="text row align-items-center clearfix mt-4">
                                        <div class="col-md-6 col-sm-12">
                                            <img fetchpriority="low" src="{{$val->image_link}}" alt="">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            {!!$val->description!!}
                                        </div>
                                    </div>
                                @else
                                    <div class="text row align-items-center clearfix mt-4">
                                        <div class="col-md-6 col-sm-12">
                                            {!!$val->description!!}
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img fetchpriority="low" src="{{$val->image_link}}" alt="">
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                    @if($data->additional_services->count()>0)
                        @if($data->additional_service_heading)
                            <h4>{!! $data->additional_service_heading->heading !!}</h4>
                            <div class="text">
                                {!! $data->additional_service_heading->description !!}
                            </div>
                        @endif
                        <div class="mt-4">
                            <div class="row">
                                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "2" }}}'>
                                    @foreach($data->additional_services as $additional_service)
                                    <div class="service-block-two col-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="{{$additional_service->image_link}}" alt="">
                                                <div class="overlay">
                                                    <div class="link-btn"><a href="{{route('additional_services_detail.get', [$data->slug, $additional_service->slug])}}"><i class="flaticon-add"></i></a></div>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <h4><span>{!!$additional_service->name!!}</span></h4>
                                                <div class="text">{{Str::limit($additional_service->description_unfiltered, 150)}}</div>
                                                <div class="read-more-btn"><a href="{{route('additional_services_detail.get', [$data->slug, $additional_service->slug])}}">Learn More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(count($testimonial)>0)
                    <div class="testimonial">
                        <h3>Service Testimonials</h3>
                        <div class="row">
                            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "2" }}}'>
                                @foreach($testimonial as $testimonial)
                                <div class="testimonial-block">
                                    <div class="inner-box">
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
                                        <div class="text">“{!!$testimonial->message!!}”</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                </div>
                <aside class="col-lg-4 sidebar">
                    <div class="service-sidebar">
                        @if(count($serviceOption)>0)
                        <div class="widget widget_categories_two">
                            <div class="widget-content">
                                <ul>
                                    @foreach($serviceOption as $v)
                                    <li @class(["current"=>$data->slug==$v->slug])><a href="{{route('services_detail.get', $v->slug)}}">{!!$v->name!!}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                        {{-- <div class="widget contact-widget style-two">
                            <div class="widget-content">
                                <h3 class="widget-title">Get in touch</h3>
                                @include('main.includes.common_contact_info')
                            </div>
                        </div> --}}
                        @include('main.includes.common_contact')
                        @if($data->brochure)
                        <div class="widget widget_brochure">
                            <div class="widget-content">
                                <div class="single-brochure"><div class="icon"><img src="{{asset('assets/images/icons/icon-29.png')}}" alt=""></div><a href="{{$data->brochure_link}}" download>Download Brochure</a></div>
                            </div>
                        </div>
                        @endif
                    </div>
                </aside>
            </div>
        </div>
    </section>

    @include('main.includes.cta2')

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
