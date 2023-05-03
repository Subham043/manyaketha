@if(count($additionalContent)>0)
<!-- Features Section Two -->
<section @class(["features-section-two", "style-two"=>$styleTwo])>
    <div class="auto-container">
        @foreach($additionalContent as $additionalContent)
        <div class="single-block">
            <div class="row">
                <div class="col-lg-6 image-column">
                    <div class="image"><img src="{{$additionalContent->image_link}}" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <div class="sec-title">
                            <div class="sub-title">{!!$additionalContent->sub_heading!!}</div>
                            <h2>{!!$additionalContent->heading!!}</h2>
                            <div class="text">{!!$additionalContent->description!!}</div>
                            <div class="link-btn"><a href="{{$additionalContent->button_link}}" class="theme-btn btn-style-one"><span>{{$additionalContent->button_text}}</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif
