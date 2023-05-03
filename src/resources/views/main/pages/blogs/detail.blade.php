@extends('main.layouts.index')

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    @include('main.includes.breadcrumb')

    <!-- sidebar-page-container -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 content-side order-lg-2">
                    <div class="news-block-three blog-single-post">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{$data->image_link}}" alt="">
                            </div>
                            <div class="content-box">
                                <div class="bottom-content">
                                    <div class="date"><strong>{{$data->created_at->format('j')}}</strong> <br> {{$data->created_at->format('F')}}</div>
                                    <h2>{!!$data->heading!!}</h2>
                                </div>
                                <div class="text">
                                    {!!$data->description!!}
                                </div>
                                <div class="post-share-info row no-gutters justify-content-between">
                                    <div class="left-column">
                                        <div class="tag">
                                            <span>Tags:</span>
                                            <a href="#">Roofing</a>
                                            <a href="#">Coating</a>
                                            <a href="#">Maintainence</a>
                                        </div>
                                    </div>
                                    <div class="left-column">
                                        <div class="share-icon style-two post-share-icon">
                                            <div class="share-btn"><span class="fas fa-share-alt"></span></div>
                                            <ul class="social-links">
                                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-lg-4 sidebar">
                    <div class="blog-sidebar">
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
                        <div class="widget widget_cta">
                            <div class="widget-content">
                                <div class="image"><img src="{{asset('assets/images/resource/news-16.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="text">Commercial & <br> Specialty Roofing <br> Contractors</div>
                                    <a href="#" class="theme-btn btn-style-one style-three"><span>Learn More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->

    <!-- CTA Section Two -->
    <section class="cta-section-two">
        <div class="auto-container">
            <div class="wrapper-box">
                <h3>Need Roof Service & Maintenance Or Have <br> Any Questions? We are Ready to Help!</h3>
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-three"><span>Learn More</span></a></div>
                <div class="icon"><img src="{{asset('assets/images/icons/icon-12.png')}}" alt=""></div>
            </div>
        </div>
    </section>

    @include('main.includes.footer')

    @stop

