@if($about)
<!-- About Section -->
<section @class(["about-section-two", "pt-0"=>$ptop])>
    {{-- <div class="shape-one"><img src="{{asset('assets/images/shape/shape-2.png')}}" alt=""></div> --}}
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="image-block">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="image"><img src="{{$about->image_link}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="content-block">
                    <div class="sec-title">
                        <div class="sub-title">{!!$about->sub_heading!!}</div>
                        <h2>{!!$about->heading!!}</h2>
                    </div>
                    <div class="text">
                        {!!$about->description!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
