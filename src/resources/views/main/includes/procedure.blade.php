<!-- Working Process -->
@if(count($procedure)>0)
<section class="working-process style-two">
    <div class="shape-one"><img src="{{asset('assets/images/shape/shape-3.png')}}" alt=""></div>
    <div class="auto-container">
        @if($procedureHeading)
        <div class="row">
            <div class="top-content row align-items-center justify-content-between m-0">
                <div class="sec-title col-lg-6 col-sm-12">
                    <div class="sub-title">{{$procedureHeading->sub_heading}}</div>
                    <h2>{{$procedureHeading->heading}}</h2>
                </div>
                <div class="text col-lg-6 col-sm-12">{{$procedureHeading->description}}</div>
            </div>
        </div>
        @endif
        <div class="row">
            @foreach($procedure as $k => $v)
            <div class="process-block col-lg-3 col-md-6">
                <div class="inner-box wow fadeiInUp" wow-duration="1500ms">
                    <div class="icon">
                        <img src="{{$v->image_link}}" alt="">
                        @if($k+1!=count($procedure))
                        <div class="count">{{$k+1}}</div>
                        @endif
                    </div>
                    <div class="text">{{$v->title}}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
