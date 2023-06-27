@if(count($feature)>0)
<div class="row theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
    @foreach($feature as $feature)
    <div class="col-xl-12 col-md-12 feature-block-three">
        <div class="icon-box">
            <div class="icon"><img src="{{$feature->image_link}}" class="featured_image" alt=""></div>
            <h4>{!!$feature->title!!}</h4>
            <a href="#" class="read-more-btn"><i class="fas fa-long-arrow-right"></i>Read More</a>
            <div class="overlay">
                <div class="icon"><img src="{{$feature->image_link}}" class="featured_image" alt=""></div>
                <h4>{!!$feature->title!!}</h4>
                <div class="text">{!!$feature->description!!}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
