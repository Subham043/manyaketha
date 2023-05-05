<!-- Main Footer -->
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="column col-lg-3 col-md-6">
                    <div class="widget about-widget">
                        <div class="logo"><a href="{{route('home_page.get')}}"><img src="{{ empty($generalSetting) ? asset('assets/images/logo.png') : $generalSetting->website_footer_logo_link}}" alt="{{ empty($generalSetting) ? '' : $generalSetting->website_logo_alt}}" title="{{ empty($generalSetting) ? '' : $generalSetting->website_logo_title}}"></a></div>
                        <ul class="social-links">
                            @include('main.includes.common_social_info')
                        </ul>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-lg-3 col-md-6">
                    <div class="widget links-widget">
                        <h3 class="widget-title">Our Services</h3>
                        <div class="widget-content">
                            <ul>
                                @foreach($serviceOption as $v)
                                <li><a href="{{route('services_detail.get', $v->slug)}}">{{$v->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-lg-3 col-md-6">
                    <div class="widget links-widget">
                        <h3 class="widget-title">Quick links</h3>
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{route('about_page.get')}}">About Us</a></li>
                                <li><a href="{{route('services.get')}}">Services</a></li>
                                <li><a href="{{route('services.get')}}">Projects</a></li>
                                <li><a href="{{route('contact_page.get')}}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-lg-3 col-md-6">
                    <div class="widget contact-widget">
                        <h3 class="widget-title">Get in touch</h3>
                        <div class="widget-content">
                            @include('main.includes.common_contact_info')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">
                <div class="text">(c) {{date('Y')}} {{ empty($generalSetting) ? '' : $generalSetting->website_name}}. All rights reserved.</div>
                <ul class="social-links d-flex gap-1 flex-wrap justify-content-center align-items-center">
                    @foreach($legal as $legal)
                        <li><a href="{{route('legal.get', $legal->slug)}}">{{$legal->page_name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
