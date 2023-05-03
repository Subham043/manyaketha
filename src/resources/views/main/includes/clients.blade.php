<!-- Clients Logo Section -->
@if(count($partner)>0)
<section
    @class([
        'clients-logo-section',
        'style-two' => $styleTwo
    ])
>
    <div class="auto-container">
        <!--Sponsors Carousel-->
        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
            @foreach($partner as $partner)
            <div class="slide-item"><div class="image"><img src="{{$partner->image_link}}" alt="{{$partner->alt}}" title="{{$partner->title}}"></div></div>
            @endforeach
        </div>
    </div>
</section>
@endif
