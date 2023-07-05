@if($data)
<div class="row align-items-center justify-content-between m-0">
    <div class="sec-title col-lg-6 col-sm-12 p-0 mb-3">
        <div class="sub-title">{{$data->sub_heading}}</div>
        <h2>{{$data->heading}}</h2>
    </div>
    <div class="text col-lg-6 col-sm-12 p-0 mb-3">{{$data->description}}</div>
</div>
@endif
