@extends('main.layouts.index')

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    @include('main.includes.breadcrumb')

    @include('main.includes.about', ['about'=>$about, 'ptop' => false])

    <!-- Features Section Three -->
    <section class="features-section-three">
        <div class="auto-container">
            @if($featureHeading)
            <div class="sec-title text-center">
                <div class="sub-title">{!!$featureHeading->sub_heading!!}</div>
                <h2>{!!$featureHeading->heading!!}</h2>
                <div class="text">{!!$featureHeading->description!!}</div>
            </div>
            @endif
            @include('main.includes.feature', ['feature'=>$feature])
        </div>
    </section>

    @include('main.includes.additional_content', ['additionalContent'=>$additionalContent, 'styleTwo' => false])

    @include('main.includes.cta3')

    @include('main.includes.team')

    @include('main.includes.clients', ['partner'=>$partner, 'styleTwo' => true])

    @include('main.includes.cta2')

    @include('main.includes.footer')

    @stop

