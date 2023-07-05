<!-- Portfolio Section -->
<section class="portfolio-section-two">
    <div class="auto-container">
        <div class="top-content">
            <div class="row m-0 justify-content-between align-items-center">
                @if($projectHeading)
                    <div class="sec-title light col-lg-6 col-md-6 mb-3">
                        <div class="sub-title">{{$projectHeading->sub_heading}}</div>
                        <h2>{{$projectHeading->heading}}</h2>
                    </div>
                    <div class="text col-lg-6 col-md-6 col-sm-12 p-0 mb-3">{{$projectHeading->description}}</div>
                @endif
                <!--Filter-->
                <div class="filters clearfix col-12">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="filter active" data-role="button" data-filter=".all">All <span class="count">0</span></li>
                        @foreach($project as $p)
                        <li class="filter" data-role="button" data-filter=".{{$p->slug}}">{{$p->title}} <span class="count">0</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!--Sortable Galery-->
        <div class="sortable-masonry">

            <div class="items-container row no-gutters">
                <!-- Project Block -->
                @foreach($project as $p)
                    @foreach($p->project as $v)
                    <div class="gallery-block-two masonry-item all {{$p->slug}} col-lg-3 col-md-6">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{$v->image_link}}" alt="">
                            </div>
                            <div class="overlay-content">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div>
                                    <h4>{{$v->image_title}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endforeach
                <!-- Project Block -->

            </div>
        </div>
    </div>
</section>
