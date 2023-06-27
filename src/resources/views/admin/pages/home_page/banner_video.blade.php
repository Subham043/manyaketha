@extends('admin.layouts.dashboard')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        @include('admin.includes.breadcrumb', ['page'=>'Banner Video', 'page_link'=>route('home_page.banner_video.get'), 'list'=>['Update']])
        <!-- end page title -->

        <div class="row" id="image-container">
            <div class="col-lg-12">
                <form id="countryForm" method="post" action="{{route('home_page.banner_video.post')}}" enctype="multipart/form-data">
                @csrf
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Banner Video Detail</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-4 col-md-4">
                                        @include('admin.includes.input', ['key'=>'banner_video', 'label'=>'Banner Video', 'value'=>!empty($data) ? (old('banner_video') ? old('banner_video') : $data->banner_video) : old('banner_video')])
                                        <div>
                                            <code>Video Link Format: </code>https://www.youtube.com/embed/GlUJUZb5ne8
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-4">
                                        @include('admin.includes.input', ['key'=>'banner_video_alt', 'label'=>'Video Alt', 'value'=>!empty($data) ? (old('banner_video_alt') ? old('banner_video_alt') : $data->banner_video_alt) : old('banner_video_alt')])
                                    </div>
                                    <div class="col-xxl-4 col-md-4">
                                        @include('admin.includes.input', ['key'=>'banner_video_title', 'label'=>'Video Title', 'value'=>!empty($data) ? (old('banner_video_title') ? old('banner_video_title') : $data->banner_video_title) : old('banner_video_title')])
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mt-4 mt-md-0">
                                            <div>
                                                <div class="form-check form-switch form-check-right mb-2">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="is_draft" name="is_draft" {{!empty($data) && $data->is_draft ? 'checked' : ''}}>
                                                    <label class="form-check-label" for="is_draft">Banner Video Status</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-md-12">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light" id="submitBtn">Update</button>
                                    </div>

                                </div>
                                <!--end row-->
                            </div>

                        </div>
                    </div>

                </form>
            </div>
            <!--end col-->
        </div>
        <!--end row-->



    </div> <!-- container-fluid -->
</div><!-- End Page-content -->



@stop


@section('javascript')

<script type="text/javascript" nonce="{{ csp_nonce() }}">

// initialize the validation library
const validation = new JustValidate('#countryForm', {
      errorFieldCssClass: 'is-invalid',
});
// apply rules to form fields
validation
 .addField('#banner_video', [
    {
      rule: 'required',
      errorMessage: 'Banner Video is required',
    },
  ])
 .addField('#banner_video_alt', [
    {
      rule: 'required',
      errorMessage: 'Banner Video Alt is required',
    },
  ])
 .addField('#banner_video_title', [
    {
      rule: 'required',
      errorMessage: 'Banner Video Title is required',
    },
  ])
  .onSuccess(async (event) => {
    var submitBtn = document.getElementById('submitBtn')
    submitBtn.innerHTML = spinner
    submitBtn.disabled = true;
    try {
        var formData = new FormData();
        formData.append('is_draft',document.getElementById('is_draft').checked ? 1 : 0)
        formData.append('banner_video',document.getElementById('banner_video').value)
        formData.append('banner_video_alt',document.getElementById('banner_video_alt').value)
        formData.append('banner_video_title',document.getElementById('banner_video_title').value)

        const response = await axios.post('{{route('home_page.banner_video.post')}}', formData)
        successToast(response.data.message)
        setInterval(location.reload(), 1500);
    }catch (error){
        if(error?.response?.data?.errors?.banner_video){
            validation.showErrors({'#banner_video': error?.response?.data?.errors?.banner_video[0]})
        }
        if(error?.response?.data?.errors?.banner_video_alt){
            validation.showErrors({'#banner_video_alt': error?.response?.data?.errors?.banner_video_alt[0]})
        }
        if(error?.response?.data?.errors?.banner_video_title){
            validation.showErrors({'#banner_video_title': error?.response?.data?.errors?.banner_video_title[0]})
        }
        if(error?.response?.data?.message){
            errorToast(error?.response?.data?.message)
        }
    }finally{
        submitBtn.innerHTML =  `
            Update
            `
        submitBtn.disabled = false;
    }
  });
</script>
@stop
