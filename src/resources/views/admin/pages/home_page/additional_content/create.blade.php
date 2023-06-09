@extends('admin.layouts.dashboard')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        @can('list home page additional content')
        @include('admin.includes.breadcrumb', ['page'=>'Additional Content', 'page_link'=>route('home_page.additional_content.paginate.get'), 'list'=>['Create']])
        @endcan
        <!-- end page title -->

        <div class="row">
            @include('admin.includes.back_button', ['link'=>route('home_page.additional_content.paginate.get')])
            <div class="col-lg-12">
                <form id="countryForm" method="post" action="{{route('home_page.additional_content.create.post')}}" enctype="multipart/form-data">
                @csrf
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Additional Content Detail</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-4 col-md-4">
                                        @include('admin.includes.input', ['key'=>'heading', 'label'=>'Heading', 'value'=>old('heading')])
                                    </div>
                                    <div class="col-xxl-4 col-md-4">
                                        @include('admin.includes.input', ['key'=>'sub_heading', 'label'=>'Sub-Heading', 'value'=>old('sub_heading')])
                                    </div>
                                    <div class="col-xxl-4 col-md-4">
                                        @include('admin.includes.file_input', ['key'=>'image', 'label'=>'Image'])
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        @include('admin.includes.input', ['key'=>'button_text', 'label'=>'Button Text', 'value'=>old('button_text')])
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        @include('admin.includes.input', ['key'=>'button_link', 'label'=>'Button Link', 'value'=>old('button_link')])
                                    </div>
                                    <div class="col-xxl-12 col-md-12">
                                        @include('admin.includes.quill', ['key'=>'description', 'label'=>'Description', 'value'=>old('description')])
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mt-4 mt-md-0">
                                            <div>
                                                <div class="form-check form-switch form-check-right mb-2">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="is_draft" name="is_draft" checked>
                                                    <label class="form-check-label" for="is_draft">Additional Content Status</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-md-12">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light" id="submitBtn">Create</button>
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
  .addField('#heading', [
    {
      rule: 'required',
      errorMessage: 'Heading is required',
    },
    {
        rule: 'customRegexp',
        value: COMMON_REGEX,
        errorMessage: 'Heading is invalid',
    },
  ])
  .addField('#sub_heading', [
    {
      rule: 'required',
      errorMessage: 'Sub-Heading is required',
    },
    {
        rule: 'customRegexp',
        value: COMMON_REGEX,
        errorMessage: 'Sub-Heading is invalid',
    },
  ])
  .addField('#button_text', [
    {
      rule: 'required',
      errorMessage: 'Button Text is required',
    },
    {
        rule: 'customRegexp',
        value: COMMON_REGEX,
        errorMessage: 'Button Text is invalid',
    },
  ])
  .addField('#button_link', [
    {
      rule: 'required',
      errorMessage: 'Button Link is required',
    },
    {
        rule: 'customRegexp',
        value: COMMON_REGEX,
        errorMessage: 'Button Link is invalid',
    },
  ])
  .addField('#image', [
    {
      rule: 'required',
      errorMessage: 'Image is required',
    },
    {
        rule: 'minFilesCount',
        value: 1,
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
  .addField('#description', [
    {
      rule: 'required',
      errorMessage: 'Description is required',
    },
  ])
  .onSuccess(async (event) => {
    var submitBtn = document.getElementById('submitBtn')
    submitBtn.innerHTML = spinner
    submitBtn.disabled = true;
    try {
        var formData = new FormData();
        formData.append('is_draft',document.getElementById('is_draft').checked ? 1 : 0)
        formData.append('heading',document.getElementById('heading').value)
        formData.append('sub_heading',document.getElementById('sub_heading').value)
        formData.append('button_text',document.getElementById('button_text').value)
        formData.append('button_link',document.getElementById('button_link').value)
        formData.append('description',quillDescription.root.innerHTML)
        formData.append('description_unfiltered',quillDescription.getText())
        if((document.getElementById('image').files).length>0){
            formData.append('image',document.getElementById('image').files[0])
        }

        const response = await axios.post('{{route('home_page.additional_content.create.post')}}', formData)
        successToast(response.data.message)
        event.target.reset();
        quillDescription.root.innerHTML = '';
    }catch (error){
        if(error?.response?.data?.errors?.heading){
            validation.showErrors({'#heading': error?.response?.data?.errors?.heading[0]})
        }
        if(error?.response?.data?.errors?.sub_heading){
            validation.showErrors({'#sub_heading': error?.response?.data?.errors?.sub_heading[0]})
        }
        if(error?.response?.data?.errors?.button_text){
            validation.showErrors({'#button_text': error?.response?.data?.errors?.button_text[0]})
        }
        if(error?.response?.data?.errors?.description){
            validation.showErrors({'#description': error?.response?.data?.errors?.description[0]})
        }
        if(error?.response?.data?.errors?.button_link){
            validation.showErrors({'#button_link': error?.response?.data?.errors?.button_link[0]})
        }
        if(error?.response?.data?.errors?.image){
            validation.showErrors({'#image': error?.response?.data?.errors?.image[0]})
        }
        if(error?.response?.data?.message){
            errorToast(error?.response?.data?.message)
        }
    }finally{
        submitBtn.innerHTML =  `
            Create
            `
        submitBtn.disabled = false;
    }
  });

</script>

@stop
