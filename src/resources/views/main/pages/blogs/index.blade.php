@extends('main.layouts.index')

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    @include('main.includes.breadcrumb')

    <!-- Latest News -->
    <section class="latest-news-section">
        <div class="auto-container">
            @if($blogs->total() > 0)
            <div class="row">
                @foreach ($blogs->items() as $k => $v)
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{route('blogs_detail.get', $v->slug)}}"><img src="{{$v->image_link}}" alt=""></a>
                            <div class="date"><strong>{{$v->created_at->format('j')}}</strong> <br> {{$v->created_at->format('F')}}</div>
                        </div>
                        <div class="content-box">
                            <div class="top-content">
                                <a href="{{route('blogs_detail.get', $v->slug)}}"><h4>{{Str::limit($v->name, 20)}}</h4></a>
                                <div class="text">{{Str::limit($v->description_unfiltered, 100)}}</div>
                            </div>
                            <div class="bottom-content">
                                <div class="row m-0 justify-content-between">
                                    <div class="read-more-btn"><a href="{{route('blogs_detail.get', $v->slug)}}" class="theme-btn">Read more</a></div>
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
                @endforeach
            </div>
            @endif
        </div>
    </section>


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

