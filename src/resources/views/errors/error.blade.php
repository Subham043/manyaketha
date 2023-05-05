@extends('main.layouts.index')

@section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    <!-- 404 Section  -->

    <section class="cta-section services-section-two style-two">
        <div class="auto-container">
            <div class="wrapper-box justify-content-center error-404">
                <div class="sec-title mb-30 text-center">
                    <h1><strong>{{$status_code}}</strong></h1>
                    <h2 class="text">{{$message}}!</h2>
                    <div class="link-btn mt-5">
                        <a href="{{route('contact_page.get')}}" class="theme-btn btn-style-one style-two"><span>Get In Touch</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('main.includes.footer')

    {{-- @include('main.includes.common_contact') --}}
@stop
