<!-- CTA Section -->
<section class="cta-section sp-two">
    <div class="auto-container">
        <div class="wrapper-box">
            <div class="logo"><img src="{{ empty($generalSetting) ? asset('assets/images/logo.png') : $generalSetting->website_logo_link}}" alt=""></div>
            <h2>Proud to be serving the <br> expertise you can trust</h2>
            <div class="link-btn">
                <a href="{{route('contact_page.get')}}" class="theme-btn btn-style-one style-two"><span>Get In Touch</span></a>
            </div>
        </div>
    </div>
</section>
