@extends('main.layouts.index')

    @section('css')

        <title>{{$data->page_name}}</title>

        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="profile" />
        <meta property="og:title" content="{{$data->page_name}}" />
        <meta property="og:url" content="{{Request::url()}}" />
        <meta property="og:site_name" content="{{$data->page_name}}" />
        <meta property="og:image" content="{{ empty($generalSetting) ? asset('assets/images/logo.png') : $generalSetting->website_logo_link}}" />
        <meta name="twitter:card" content="{{ empty($generalSetting) ? asset('assets/images/logo.png') : $generalSetting->website_logo_link}}" />
        <meta name="twitter:label1" content="{{$data->page_name}}" />

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
        'page' => $data->page_name,
        'data' => [
            $data->page_name => null
        ]
    ])

    <!-- Service Details -->
    <section class="services-details">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 content-side order-lg-2">
                    <h2>{{ $data->heading }}</h2>
                    <div class="text">
                        {!! $data->description !!}
                    </div>

                </div>
                <aside class="col-lg-4 sidebar">
                    <div class="service-sidebar">
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

    @include('main.includes.cta2', ['data' => $callToAction])

    @include('main.includes.footer')

    @stop

    @section('js')
        <script src="{{ asset('admin/js/pages/just-validate.production.min.js') }}"></script>
        <script src="{{ asset('admin/js/pages/iziToast.min.js') }}"></script>
        <script src="{{ asset('admin/js/pages/axios.min.js') }}"></script>
        @include('main.includes.common_contact_script')
    @stop
