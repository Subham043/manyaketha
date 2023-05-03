@if(count($team)>0)
<!-- Team Section -->
<section class="team-section">
    <div class="shape-one"><img src="{{asset('assets/images/shape/shape-4.png')}}" alt=""></div>
    <div class="auto-container">
        @if($teamHeading)
        <div class="sec-title text-center row justify-content-center">
            <div class="col-lg-6 col-sm-12 text-center">
                <div class="sub-title">{!! $teamHeading->sub_heading !!}</div>
                <h2><strong>{!! $teamHeading->heading !!}</h2>
                <div class="text">{!! $teamHeading->description !!}</div>
            </div>
        </div>
        @endif
        <div class="row">
            @foreach($team as $team)
            <div class="col-lg-4 col-md-6 team-block-one">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{$team->image_link}}" alt="">
                        <div class="overlay-box">
                            <ul class="social-links">
                                <li><a href="{{$team->facebook}}"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="{{$team->twitter}}"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="{{$team->linkedin}}"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content">
                        <h4>{{$team->name}}</h4>
                        <div class="designation">{{$team->designation}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
