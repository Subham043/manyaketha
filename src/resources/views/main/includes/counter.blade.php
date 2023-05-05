<!-- Funfacts Section -->
@if(count($counter)>0)
<section class="funfacts-section pt-0 style-two">
    <div class="auto-container">
        <div class="row">

            @foreach($counter as $counter)
            <!--Column-->
            <div class="column counter-column col-xl-3 col-lg-6 col-md-6">
                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon"><img src="{{$counter->image_link}}" alt=""></div>
                    <div class="content">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="{{$counter->counter}}">0</span><span>+</span>
                        </div>
                        <div class="text">{{$counter->title}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
