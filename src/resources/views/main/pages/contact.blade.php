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
        'page' => 'Contact Us',
        'data' => [
            'Contact Us' => null
        ]
    ])

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-area mb-30">
                        <div class="sec-title mb-30">
                            <h2><strong>Contact Us</strong></h2>
                        </div>
                        @include('main.includes.common_contact_info')
                        <ul class="social-links">
                            @include('main.includes.common_social_info')
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form-area mb-30">
                        <div class="sec-title mb-30">
                            <h2><strong>Get Free Consultation</strong></h2>
                            <div class="text">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea duis aute irure dolor <br> in reprehenderit in voluptate.</div>
                        </div>
                        <form action="assets/inc/sendmail.php" class="contact-form" id="contact-form" method="post">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input name="form_name" placeholder="name" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input name="form_email" placeholder="Email" type="email" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input name="form_phone" placeholder="Phone" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <select class="selectpicker form-control" name="form_subject">
                                        <option value="*">Subject / Discuss About Service</option>
                                        <option value=".category-1">Roof Maintenance</option>
                                        <option value=".category-2">Roof Inspection</option>
                                        <option value=".category-3">Insulation & Repairs</option>
                                        <option value=".category-4">Roof Replacement</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12">
                                    <textarea name="form_message" placeholder="Message" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="theme-btn btn-style-one w-100" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3071.2910802067827!2d90.45905169331171!3d23.691532202989123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1577214205224!5m2!1sen!2sbd" width="600" height="705" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>


    @include('main.includes.cta2')

    @include('main.includes.footer')

    @stop

    @section('js')

        {!!$seo->meta_footer_script_nonce!!}
        {!!$seo->meta_footer_no_script_nonce!!}

    @stop
