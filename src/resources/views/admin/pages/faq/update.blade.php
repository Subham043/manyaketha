@extends('admin.layouts.dashboard')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        @can('list campaigns')
        @include('admin.includes.breadcrumb', ['page'=>'Faq', 'page_link'=>route('faq.paginate.get', $campaign_id), 'list'=>['Update']])
        @endcan
        <!-- end page title -->

        <div class="row" id="image-container">
            @include('admin.includes.back_button', ['link'=>route('faq.paginate.get', $campaign_id)])
            <div class="col-lg-12">
                <form id="countryForm" method="post" action="{{route('faq.update.post', [$campaign_id, $data->id])}}" enctype="multipart/form-data">
                @csrf
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Faq Detail</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-12 col-md-12">
                                        @include('admin.includes.input', ['key'=>'question', 'label'=>'Question', 'value'=>$data->question])
                                    </div>
                                    <div class="col-xxl-12 col-md-12">
                                        @include('admin.includes.textarea', ['key'=>'answer', 'label'=>'Answer', 'value'=>$data->answer])
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="mt-4 mt-md-0">
                                            <div>
                                                <div class="form-check form-switch form-check-right mb-2">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="is_draft" name="is_draft" {{$data->is_draft==false ? '' : 'checked'}}>
                                                    <label class="form-check-label" for="is_draft">Faq Status</label>
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
.addField('#question', [
    {
      rule: 'required',
      errorMessage: 'Question is required',
    },
  ])
  .addField('#answer', [
    {
      rule: 'required',
      errorMessage: 'Answer is required',
    },
  ])
  .onSuccess(async (event) => {
    var submitBtn = document.getElementById('submitBtn')
    submitBtn.innerHTML = spinner
    submitBtn.disabled = true;
    try {
        var formData = new FormData();
        formData.append('is_draft',document.getElementById('is_draft').checked ? 1 : 0)
        formData.append('question',document.getElementById('question').value)
        formData.append('answer',document.getElementById('answer').value)

        const response = await axios.post('{{route('faq.update.post', [$campaign_id, $data->id])}}', formData)
        successToast(response.data.message)
        setInterval(location.reload(), 1500);
    }catch (error){
        if(error?.response?.data?.errors?.question){
            validation.showErrors({'#question': error?.response?.data?.errors?.question[0]})
        }
        if(error?.response?.data?.errors?.answer){
            validation.showErrors({'#answer': error?.response?.data?.errors?.answer[0]})
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
