@extends('main.layouts.index')

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    @include('main.includes.breadcrumb')

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

