<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset('assets/images/background/bg-3.jpg')}});">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>{{$page}}</h1>
                </div>
                <ul class="bread-crumb">
                    <li><a href="index.html">Home</a></li>
                    @foreach($data as $k => $v)
                        @if($v)
                            <li><a href="{{$v}}">{{$k}}</a></li>
                        @else
                        <li>{{$k}}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Page Title -->
