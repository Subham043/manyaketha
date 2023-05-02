@extends('main.layouts.index')

    @section('content')

    @include('main.includes.preloader')

    @include('main.includes.header')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{asset('assets/images/background/bg-3.jpg')}});">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Latest News</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Our Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title -->

    <!-- Latest News -->
    <section class="latest-news-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-details.html"><img src="{{asset('assets/images/resource/news-3.jpg')}}" alt=""></a>
                            <div class="date"><strong>19</strong> <br> MAY</div>
                        </div>
                        <div class="content-box">
                            <div class="top-content">
                                <ul class="post-meta">
                                    <li>John Smith </li>
                                    <li class="category">Roofing, Coating</li>
                                </ul>
                                <a href="blog-details.html"><h4>Reviewing a Residential <br> Roof’s Warrenty</h4></a>
                                <div class="text">Magna aliqa enim sed ipsum ipsum guids <br> dolor sit amet tempor lore adipisicing elit <br> sed eiusmod enim ...</div>
                            </div>
                            <div class="bottom-content">
                                <div class="row m-0 justify-content-between">
                                    <div class="read-more-btn"><a href="blog-details.html" class="theme-btn">Read more</a></div>
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
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-details.html"><img src="{{asset('assets/images/resource/news-4.jpg')}}" alt=""></a>
                            <div class="date"><strong>19</strong> <br> MAY</div>
                        </div>
                        <div class="content-box">
                            <div class="top-content">
                                <ul class="post-meta">
                                    <li>John Smith </li>
                                    <li class="category">Roofing, Coating</li>
                                </ul>
                                <a href="blog-details.html"><h4>Asphalt Roof Cleaning & <br> Repairing Do’s</h4></a>
                                <div class="text">Magna aliqa enim sed ipsum ipsum guids <br> dolor sit amet tempor lore adipisicing elit <br> sed eiusmod enim ...</div>
                            </div>
                            <div class="bottom-content">
                                <div class="row m-0 justify-content-between">
                                    <div class="read-more-btn"><a href="blog-details.html" class="theme-btn">Read more</a></div>
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
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-details.html"><img src="{{asset('assets/images/resource/news-5.jpg')}}" alt=""></a>
                            <div class="date"><strong>19</strong> <br> MAY</div>
                        </div>
                        <div class="content-box">
                            <div class="top-content">
                                <ul class="post-meta">
                                    <li>John Smith </li>
                                    <li class="category">Roofing, Coating</li>
                                </ul>
                                <a href="blog-details.html"><h4>Our Roofing Services Pride <br> Itself Of The Best</h4></a>
                                <div class="text">Magna aliqa enim sed ipsum ipsum guids <br> dolor sit amet tempor lore adipisicing elit <br> sed eiusmod enim ...</div>
                            </div>
                            <div class="bottom-content">
                                <div class="row m-0 justify-content-between">
                                    <div class="read-more-btn"><a href="blog-details.html" class="theme-btn">Read more</a></div>
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
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-details.html"><img src="{{asset('assets/images/resource/news-6.jpg')}}" alt=""></a>
                            <div class="date"><strong>19</strong> <br> MAY</div>
                        </div>
                        <div class="content-box">
                            <div class="top-content">
                                <ul class="post-meta">
                                    <li>John Smith </li>
                                    <li class="category">Roofing, Coating</li>
                                </ul>
                                <a href="blog-details.html"><h4>Reviewing a Residential <br> Roof’s Warrenty</h4></a>
                                <div class="text">Magna aliqa enim sed ipsum ipsum guids <br> dolor sit amet tempor lore adipisicing elit <br> sed eiusmod enim ...</div>
                            </div>
                            <div class="bottom-content">
                                <div class="row m-0 justify-content-between">
                                    <div class="read-more-btn"><a href="blog-details.html" class="theme-btn">Read more</a></div>
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
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-details.html"><img src="{{asset('assets/images/resource/news-7.jpg')}}" alt=""></a>
                            <div class="date"><strong>19</strong> <br> MAY</div>
                        </div>
                        <div class="content-box">
                            <div class="top-content">
                                <ul class="post-meta">
                                    <li>John Smith </li>
                                    <li class="category">Roofing, Coating</li>
                                </ul>
                                <a href="blog-details.html"><h4>Asphalt Roof Cleaning & <br> Repairing Do’s</h4></a>
                                <div class="text">Magna aliqa enim sed ipsum ipsum guids <br> dolor sit amet tempor lore adipisicing elit <br> sed eiusmod enim ...</div>
                            </div>
                            <div class="bottom-content">
                                <div class="row m-0 justify-content-between">
                                    <div class="read-more-btn"><a href="blog-details.html" class="theme-btn">Read more</a></div>
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
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-details.html"><img src="{{asset('assets/images/resource/news-8.jpg')}}" alt=""></a>
                            <div class="date"><strong>19</strong> <br> MAY</div>
                        </div>
                        <div class="content-box">
                            <div class="top-content">
                                <ul class="post-meta">
                                    <li>John Smith </li>
                                    <li class="category">Roofing, Coating</li>
                                </ul>
                                <a href="blog-details.html"><h4>Our Roofing Services Pride <br> Itself Of The Best</h4></a>
                                <div class="text">Magna aliqa enim sed ipsum ipsum guids <br> dolor sit amet tempor lore adipisicing elit <br> sed eiusmod enim ...</div>
                            </div>
                            <div class="bottom-content">
                                <div class="row m-0 justify-content-between">
                                    <div class="read-more-btn"><a href="blog-details.html" class="theme-btn">Read more</a></div>
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
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-details.html"><img src="{{asset('assets/images/resource/news-9.jpg')}}" alt=""></a>
                            <div class="date"><strong>15</strong> <br> MAY</div>
                        </div>
                        <div class="content-box">
                            <div class="top-content">
                                <ul class="post-meta">
                                    <li>John Smith </li>
                                    <li class="category">Roofing, Coating</li>
                                </ul>
                                <a href="blog-details.html"><h4>Reviewing a Residential <br> Roof’s Warrenty</h4></a>
                                <div class="text">Magna aliqa enim sed ipsum ipsum guids <br> dolor sit amet tempor lore adipisicing elit <br> sed eiusmod enim ...</div>
                            </div>
                            <div class="bottom-content">
                                <div class="row m-0 justify-content-between">
                                    <div class="read-more-btn"><a href="blog-details.html" class="theme-btn">Read more</a></div>
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
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-details.html"><img src="{{asset('assets/images/resource/news-10.jpg')}}" alt=""></a>
                            <div class="date"><strong>19</strong> <br> MAY</div>
                        </div>
                        <div class="content-box">
                            <div class="top-content">
                                <ul class="post-meta">
                                    <li>John Smith </li>
                                    <li class="category">Roofing, Coating</li>
                                </ul>
                                <a href="blog-details.html"><h4>Asphalt Roof Cleaning & <br> Repairing Do’s</h4></a>
                                <div class="text">Magna aliqa enim sed ipsum ipsum guids <br> dolor sit amet tempor lore adipisicing elit <br> sed eiusmod enim ...</div>
                            </div>
                            <div class="bottom-content">
                                <div class="row m-0 justify-content-between">
                                    <div class="read-more-btn"><a href="blog-details.html" class="theme-btn">Read more</a></div>
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
                <div class="col-lg-4 col-md-6 news-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-details.html"><img src="{{asset('assets/images/resource/news-11.jpg')}}" alt=""></a>
                            <div class="date"><strong>19</strong> <br> MAY</div>
                        </div>
                        <div class="content-box">
                            <div class="top-content">
                                <ul class="post-meta">
                                    <li>John Smith </li>
                                    <li class="category">Roofing, Coating</li>
                                </ul>
                                <a href="blog-details.html"><h4>Our Roofing Services Pride <br>Itself Of The Best</h4></a>
                                <div class="text">Magna aliqa enim sed ipsum ipsum guids <br> dolor sit amet tempor lore adipisicing elit <br> sed eiusmod enim ...</div>
                            </div>
                            <div class="bottom-content">
                                <div class="row m-0 justify-content-between">
                                    <div class="read-more-btn"><a href="blog-details.html" class="theme-btn">Read more</a></div>
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

