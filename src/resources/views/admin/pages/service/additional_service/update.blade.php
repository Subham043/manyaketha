@extends('admin.layouts.dashboard')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        @include('admin.includes.breadcrumb', ['page'=>'Additional Service', 'page_link'=>route('service_page.additional_service.paginate.get', $service_id), 'list'=>['Update']])
        <!-- end page title -->

        <div class="row" id="image-container">
            @include('admin.includes.back_button', ['link'=>route('service_page.additional_service.paginate.get', $service_id)])
            <div class="col-lg-12">
                <form id="countryForm" method="post" action="{{route('service_page.additional_service.update.post', [$service_id, $data->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Service Detail</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-3 col-md-3">
                                    @include('admin.includes.input', ['key'=>'name', 'label'=>'Name', 'value'=>$data->name])
                                </div>
                                <div class="col-xxl-3 col-md-3">
                                    @include('admin.includes.input', ['key'=>'slug', 'label'=>'Slug', 'value'=>$data->slug])
                                </div>
                                <div class="col-xxl-3 col-md-3">
                                    @include('admin.includes.input', ['key'=>'heading', 'label'=>'Heading', 'value'=>$data->heading])
                                </div>
                                <div class="col-xxl-3 col-md-3">
                                    @include('admin.includes.file_input', ['key'=>'image', 'label'=>'Image'])
                                    @if(!empty($data->image_link))
                                        <img src="{{$data->image_link}}" alt="" class="img-preview">
                                    @endif
                                </div>
                                <div class="col-xxl-12 col-md-12">
                                    @include('admin.includes.quill', ['key'=>'description', 'label'=>'Description', 'value'=>$data->description])
                                </div>

                            </div>
                            <!--end row-->
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Service Seo Detail</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-4 col-md-4">
                                    @include('admin.includes.textarea', ['key'=>'meta_title', 'label'=>'Meta Title', 'value'=>$data->meta_title])
                                </div>
                                <div class="col-xxl-4 col-md-4">
                                    @include('admin.includes.textarea', ['key'=>'meta_keywords', 'label'=>'Meta Keywords', 'value'=>$data->meta_keywords])
                                </div>
                                <div class="col-xxl-4 col-md-4">
                                    @include('admin.includes.textarea', ['key'=>'meta_description', 'label'=>'Meta Description', 'value'=>$data->meta_description])
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    @include('admin.includes.textarea', ['key'=>'meta_header_script', 'label'=>'Meta Header Script', 'value'=>$data->meta_header_script])
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    @include('admin.includes.textarea', ['key'=>'meta_footer_script', 'label'=>'Meta Footer Script', 'value'=>$data->meta_footer_script])
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    @include('admin.includes.textarea', ['key'=>'meta_header_no_script', 'label'=>'Meta Header No Script', 'value'=>$data->meta_header_no_script])
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    @include('admin.includes.textarea', ['key'=>'meta_footer_no_script', 'label'=>'Meta Footer No Script', 'value'=>$data->meta_footer_no_script])
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
<script src="{{ asset('admin/js/pages/plugins/quill.min.js' ) }}"></script>


<script type="text/javascript" nonce="{{ csp_nonce() }}">
    const myViewer = new ImgPreviewer('#image-container',{
      // aspect ratio of image
        fillRatio: 0.9,
        // attribute that holds the image
        dataUrlKey: 'src',
        // additional styles
        style: {
            modalOpacity: 0.6,
            headerOpacity: 0,
            zIndex: 99
        },
        // zoom options
        imageZoom: {
            min: 0.1,
            max: 5,
            step: 0.1
        },
        // detect whether the parent element of the image is hidden by the css style
        bubblingLevel: 0,

    });
</script>

<script type="text/javascript" nonce="{{ csp_nonce() }}">

var quillDescription = new Quill('#description_quill', {
    theme: 'snow',
    modules: {
        toolbar: QUILL_TOOLBAR_OPTIONS
    },
});

quillDescription.on('text-change', function(delta, oldDelta, source) {
  if (source == 'user') {
    document.getElementById('description').value = quillDescription.root.innerHTML
  }
});

// initialize the validation library
const validation = new JustValidate('#countryForm', {
      errorFieldCssClass: 'is-invalid',
});
// apply rules to form fields
validation
.addField('#name', [
    {
      rule: 'required',
      errorMessage: 'Name is required',
    },
    {
        rule: 'customRegexp',
        value: COMMON_REGEX,
        errorMessage: 'Name is invalid',
    },
  ])
  .addField('#slug', [
    {
      rule: 'required',
      errorMessage: 'Slug is required',
    },
    {
        rule: 'customRegexp',
        value: COMMON_REGEX,
        errorMessage: 'Slug is invalid',
    },
  ])
  .addField('#heading', [
    {
      rule: 'required',
      errorMessage: 'Heading is required',
    },
  ])
  .addField('#description', [
    {
        rule: 'required',
        errorMessage: 'Description is required',
    },
  ])
  .addField('#image', [
    {
        rule: 'minFilesCount',
        value: 0,
    },
    {
        rule: 'maxFilesCount',
        value: 1,
    },
    {
        rule: 'files',
        value: {
        files: {
            extensions: ['jpeg', 'jpg', 'png', 'webp'],
            maxSize: 500000,
            minSize: 1,
            types: ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'],
        },
        },
    },
  ])

  .addField('#meta_title', [
    {
        validator: (value, fields) => true,
    },
  ])
  .addField('#meta_keywords', [
    {
        validator: (value, fields) => true,
    },
  ])
  .addField('#meta_description', [
    {
        validator: (value, fields) => true,
    },
  ])
  .addField('#meta_header_script', [
    {
        validator: (value, fields) => true,
    },
  ])
  .addField('#meta_footer_script', [
    {
        validator: (value, fields) => true,
    },
  ])
  .addField('#meta_header_no_script', [
    {
        validator: (value, fields) => true,
    },
  ])
  .addField('#meta_footer_no_script', [
    {
        validator: (value, fields) => true,
    },
  ])
  .onSuccess(async (event) => {
    var submitBtn = document.getElementById('submitBtn')
    submitBtn.innerHTML = spinner
    submitBtn.disabled = true;
    try {
        var formData = new FormData();
        formData.append('name',document.getElementById('name').value)
        formData.append('slug',document.getElementById('slug').value)
        formData.append('heading',document.getElementById('heading').value)
        formData.append('description',quillDescription.root.innerHTML)
        formData.append('description_unfiltered',quillDescription.getText())
        formData.append('meta_title',document.getElementById('meta_title').value)
        formData.append('meta_keywords',document.getElementById('meta_keywords').value)
        formData.append('meta_description',document.getElementById('meta_description').value)
        formData.append('meta_header_script',document.getElementById('meta_header_script').value)
        formData.append('meta_footer_script',document.getElementById('meta_footer_script').value)
        formData.append('meta_header_no_script',document.getElementById('meta_header_no_script').value)
        formData.append('meta_footer_no_script',document.getElementById('meta_footer_no_script').value)
        if((document.getElementById('image').files).length>0){
            formData.append('image',document.getElementById('image').files[0])
        }

        const response = await axios.post('{{route('service_page.additional_service.update.post', [$service_id, $data->id])}}', formData)
        successToast(response.data.message)
        setInterval(location.reload(), 1500);
    }catch (error){
        if(error?.response?.data?.errors?.name){
            validation.showErrors({'#name': error?.response?.data?.errors?.name[0]})
        }
        if(error?.response?.data?.errors?.slug){
            validation.showErrors({'#slug': error?.response?.data?.errors?.slug[0]})
        }
        if(error?.response?.data?.errors?.heading){
            validation.showErrors({'#heading': error?.response?.data?.errors?.heading[0]})
        }
        if(error?.response?.data?.errors?.description){
            validation.showErrors({'#description': error?.response?.data?.errors?.description[0]})
        }
        if(error?.response?.data?.errors?.image){
            validation.showErrors({'#image': error?.response?.data?.errors?.image[0]})
        }
        if(error?.response?.data?.errors?.meta_title){
            validation.showErrors({'#meta_title': error?.response?.data?.errors?.meta_title[0]})
        }
        if(error?.response?.data?.errors?.meta_keywords){
            validation.showErrors({'#meta_keywords': error?.response?.data?.errors?.meta_keywords[0]})
        }
        if(error?.response?.data?.errors?.meta_header_script){
            validation.showErrors({'#meta_header_script': error?.response?.data?.errors?.meta_header_script[0]})
        }
        if(error?.response?.data?.errors?.meta_header_no_script){
            validation.showErrors({'#meta_header_no_script': error?.response?.data?.errors?.meta_header_no_script[0]})
        }
        if(error?.response?.data?.errors?.meta_description){
            validation.showErrors({'#meta_description': error?.response?.data?.errors?.meta_description[0]})
        }
        if(error?.response?.data?.errors?.meta_footer_script){
            validation.showErrors({'#meta_footer_script': error?.response?.data?.errors?.meta_footer_script[0]})
        }
        if(error?.response?.data?.errors?.meta_footer_no_script){
            validation.showErrors({'#meta_footer_no_script': error?.response?.data?.errors?.meta_footer_no_script[0]})
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
