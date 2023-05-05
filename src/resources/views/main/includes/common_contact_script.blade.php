<script type="text/javascript" nonce="{{ csp_nonce() }}" defer>

    const errorToast = (message) =>{
        iziToast.error({
            title: 'Error',
            message: message,
            position: 'bottomCenter',
            timeout:7000
        });
    }
    const successToast = (message) =>{
        iziToast.success({
            title: 'Success',
            message: message,
            position: 'bottomCenter',
            timeout:6000
        });
    }

    const COMMON_REGEX = /^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\?\r\n+=,]+$/i;


// initialize the validation library
const validation = new JustValidate('#contactForm', {
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
  .addField('#phone', [
    {
      rule: 'required',
      errorMessage: 'Phone is required',
    },
    {
        rule: 'customRegexp',
        value: COMMON_REGEX,
        errorMessage: 'Phone is invalid',
    },
  ])
  .addField('#email', [
    {
        rule: 'required',
        errorMessage: 'Email is required',
    },
    {
        rule: 'email',
        errorMessage: 'Email is invalid!',
    },
  ])
  .addField('#service', [
    {
      rule: 'required',
      errorMessage: 'Service is required',
    },
  ])
  .addField('#message', [
    {
      rule: 'required',
      errorMessage: 'Message is required',
    },
    {
        rule: 'customRegexp',
        value: COMMON_REGEX,
        errorMessage: 'Message is invalid',
    },
  ])
  .onSuccess(async (event) => {
    var submitBtn = document.getElementById('submitBtn')
    submitBtn.innerText = 'Sending Message ...'
    submitBtn.disabled = true;
    try {
        var formData = new FormData();
        formData.append('name',document.getElementById('name').value)
        formData.append('email',document.getElementById('email').value)
        formData.append('phone',document.getElementById('phone').value)
        formData.append('service',document.getElementById('service').value)
        formData.append('message',document.getElementById('message').value)
        formData.append('page_url','{{Request::url()}}')

        const response = await axios.post('{{route('contact_page.post')}}', formData)
        successToast(response.data.message)
        event.target.reset();

    }catch (error){
        if(error?.response?.data?.errors?.name){
            validation.showErrors({'#name': error?.response?.data?.errors?.name[0]})
        }
        if(error?.response?.data?.errors?.email){
            validation.showErrors({'#email': error?.response?.data?.errors?.email[0]})
        }
        if(error?.response?.data?.errors?.phone){
            validation.showErrors({'#phone': error?.response?.data?.errors?.phone[0]})
        }
        if(error?.response?.data?.errors?.service){
            validation.showErrors({'#service': error?.response?.data?.errors?.service[0]})
        }
        if(error?.response?.data?.errors?.message){
            validation.showErrors({'#message': error?.response?.data?.errors?.message[0]})
        }
        if(error?.response?.data?.message){
            errorToast(error?.response?.data?.message)
        }
    }finally{
        submitBtn.innerText =  `Send Message`
        submitBtn.disabled = false;
    }
  });


</script>
