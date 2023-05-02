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

    <!-- sidebar-page-container -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 content-side order-lg-2">
                    <div class="news-block-three blog-single-post">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{asset('assets/images/resource/news-12.jpg')}}" alt="">
                            </div>
                            <div class="content-box">
                                <ul class="post-meta">
                                    <li>John Smith </li>
                                    <li class="category">Roofing, Coating</li>
                                    <li>Comments(45)</li>
                                </ul>
                                <div class="bottom-content">
                                    <div class="date"><strong>19</strong> <br> MAY</div>
                                    <h2>Repair or install a new roof as <br>part of a restoration project</h2>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                                </div>
                                <ul class="list">
                                    <li>Aut odit aut fugit, sed quia consequuntur magni</li>
                                    <li>sequi nesciunt. Neque porro quisquam est</li>
                                    <li>Qui dolorem ipsum quia dolor sit amet, consectetur</li>
                                    <li>Adipisci velit, sed quia non numquam eius modi tempora </li>
                                    <li>Incidunt ut labore et dolore magnam aliquam</li>
                                </ul>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text">
                                            <p>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
                                            <p>Excepteur sint occaecat cupidatat proident. Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sity.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="image mb-30"><img src="{{asset('assets/images/resource/news-17.jpg')}}" alt=""></div>
                                    </div>
                                </div>
                                <h4>Re-Roofing or Roof Construction</h4>
                                <div class="text">Incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris aliquip. Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. </div>
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
                            <div class="comments-area">
                                <div class="comments-title">
                                    <h4>Comments</h4>
                                </div>
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb">
                                            <figure class="thumb"><img src="{{asset('assets/images/resource/author-4.jpg')}}" alt=""></figure>
                                        </div>
                                        <div class="info-wrap">
                                            <div class="info">
                                                <div class="name">Paul Steven</div>
                                                <div class="comment-date">20 Feb, 2020 At 10:30 pm</div>
                                            </div>
                                            <div class="text">Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip duis aute.</div>
                                            <div class="reply-btn"><a class="theme-btn btn-style-three" href="#"><span class="btn-title">Reply</span></a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb">
                                            <figure class="thumb"><img src="{{asset('assets/images/resource/author-5.jpg')}}" alt=""></figure>
                                        </div>
                                        <div class="info-wrap">
                                            <div class="info">
                                                <div class="name">Mark Anderson</div>
                                                <div class="comment-date">20 Feb, 2020 At 10:30 pm</div>
                                            </div>
                                            <div class="text">Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip duis aute.</div>
                                            <div class="reply-btn"><a class="theme-btn btn-style-three" href="#"><span class="btn-title">Reply</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-comments">
                                <div class="comments-title">
                                    <h4>Leave a Comment</h4>
                                </div>
                                <p>Your email address will not be published.*</p>
                                <div class="contact-form comment-form">
                                    <form method="post" action="contact.html">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Your Name" required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email" required="">
                                            </div>

                                            <div class="col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Your Comments"></textarea>
                                            </div>

                                            <div class="col-md-12 col-sm-12 form-group">
                                                <button type="submit" class="theme-btn btn-style-one style-two"><span class="btn-title">Post Comment</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-lg-4 sidebar">
                    <div class="blog-sidebar">
                        <div class="widget widget_search">
                            <form action="blog-2.html" method="post" class="search-form">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Search Blog" required="">
                                    <button type="search"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <div class="widget-content">
                                <ul class="categories-list">
                                    <li><a href="blog-details.html">Roof Maintenance</a></li>
                                    <li class="current"><a href="blog-details.html">Insulation & Repairs</a></li>
                                    <li><a href="blog-details.html">Roof Inspection</a></li>
                                    <li><a href="blog-details.html">Roof Replacement</a></li>
                                    <li><a href="blog-details.html">Roof Coating</a></li>
                                    <li><a href="blog-details.html">Roof Solar Systems</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Popular Posts-->
                        <div class="widget widget_popular_post">
                            <h3 class="widget-title">Recent Posts</h3>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="{{asset('assets/images/resource/post-thumb-1.jpg')}}" alt=""></a></figure>
                                <div class="content">
                                    <h5><a href="blog-details.html">The Home Roof <br> Warrenty</a></h5>
                                    <div class="post-info">March 18, 2020</div>
                                </div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="{{asset('assets/images/resource/post-thumb-2.jpg')}}" alt=""></a></figure>
                                <div class="content">
                                    <h5><a href="blog-details.html">Roof Cleaning & <br> Repairing Do’s</a></h5>
                                    <div class="post-info">March 18, 2020</div>
                                </div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="{{asset('assets/images/resource/post-thumb-3.jpg')}}" alt=""></a></figure>
                                <div class="content">
                                    <h5><a href="blog-details.html">The Home Roof <br> Warrenty</a></h5>
                                    <div class="post-info">March 18, 2020</div>
                                </div>
                            </article>
                        </div>
                        <!-- Tag-cloud Widget -->
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget-title">Popular Tags</h3>
                            <ul class="clearfix">
                                <li><a href="#">Roofing</a></li>
                                <li><a href="#">Repair</a></li>
                                <li><a href="#">Fix</a></li>
                                <li><a href="#">Leaks</a></li>
                                <li><a href="#">Maintenance</a></li>
                                <li><a href="#">Inspection</a></li>
                                <li><a href="#">Tile Roofing</a></li>
                                <li><a href="#">Reroof</a></li>
                                <li><a href="#">Coatings</a></li>
                            </ul>
                        </div>
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

