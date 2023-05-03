@if(count($feature)>0)
<div class="row">
    @foreach($feature as $feature)
    <div class="col-xl-3 col-md-6 feature-block-three">
        <div class="icon-box">
            <div class="icon"><img src="{{$feature->image_link}}" alt=""></div>
            <h4>{!!$feature->title!!}</h4>
            <a href="#" class="read-more-btn"><i class="fas fa-long-arrow-right"></i>Read More</a>
            <div class="overlay">
                <div class="icon"><img src="{{$feature->image_link}}" alt=""></div>
                <h4>{!!$feature->title!!}</h4>
                <div class="text">{!!$feature->description!!}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
