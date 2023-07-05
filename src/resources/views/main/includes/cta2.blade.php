<!-- CTA Section Two -->
@if($data)
<section class="cta-section-two">
    <div class="auto-container">
        <div class="wrapper-box">
            <div class="text-white">
                {!!$data->description!!}
            </div>
            <div class="link-btn"><a href="{{route('contact_page.get')}}" class="theme-btn btn-style-one style-three"><span>Learn More</span></a></div>
            <div class="icon"><img src="{{asset('assets/images/icons/icon-12.png')}}" alt=""></div>
        </div>
    </div>
</section>
@endif
