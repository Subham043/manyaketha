@extends('main.layouts.index')

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    @include('main.includes.breadcrumb')

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
                        @if(count($service)>0)
                        <div class="widget widget_categories_two">
                            <div class="widget-content">
                                <ul>
                                    @foreach($service as $service)
                                    <li @class(["current"=>$data->slug==$service->slug])><a href="{{route('services_detail.get', $service->slug)}}">{!!$service->name!!}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                        <div class="widget contact-widget style-two">
                            <div class="widget-content">
                                <h3 class="widget-title">Get in touch</h3>
                                <ul class="contact-info">
                                    <li>
                                        <div class="icon"><span class="flaticon-gps"></span></div>
                                        <div class="text">2912  Carolyns Circle <br>Dallas TX - 75234</div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="flaticon-phone"></span></div>
                                        <div class="text">
                                            <a href="tel:1(258)985-703">1 (258) 985-703</a> <br>
                                            <a href="tel:1(258)985-706">1 (258) 985-706</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="flaticon-comment"></span></div>
                                        <div class="text">
                                            <a href="mailto:support@rofalco.com">support@rofalco.com</a> <br>
                                            <a href="mailto:info@my-domain.com">info@my-domain.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @if($data->brochure)
                        <div class="widget widget_brochure">
                            <div class="widget-content">
                                <div class="single-brochure"><div class="icon"><img src="{{asset('assets/images/icons/icon-29.png')}}" alt=""></div><a href="{{$data->brochure_link}}" download>Download Brochure</a></div>
                            </div>
                        </div>
                        @endif
                        <div class="widget widget_contact-form">
                            <h3 class="widget-title">Request a Free Quote</h3>
                            <div class="text">Fill-in the form & send for a quick estimate</div>
                            <form action="#" class="">
                                <div class="form-group">
                                    <input placeholder="name" type="text">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Email" type="email">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Phone" type="text">
                                </div>
                                <div class="form-group">
                                    <select class="selectpicker" name="subject">
                                        <option value="*">Service Required</option>
                                        @if(count($serviceOption)>0)
                                            @foreach($serviceOption as $serviceOption)
                                            <option value="{!!$serviceOption->name!!}">{!!$serviceOption->name!!}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-style-one w-100"><span>Submit Now</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    @include('main.includes.cta2')

    @include('main.includes.footer')

    @stop

