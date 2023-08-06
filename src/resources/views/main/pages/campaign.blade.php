<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Responsive -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    @cspMetaTag(App\Http\Policies\ContentSecurityPolicy::class)
    <!-- App Css-->
    @vite(['resources/css/campaign.css'])

    <title>{{$data->meta_title}}</title>
    <meta name="description" content="{{$data->meta_description}}"/>
    <meta name="keywords" content="{{$data->meta_keywords}}"/>

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="profile" />
    <meta property="og:title" content="{{$data->meta_title}}" />
    <meta property="og:description" content="{{$data->meta_description}}" />
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:site_name" content="{{$data->meta_title}}" />
    <meta property="og:image" content="{{$data->header_logo_link}}" />
    <meta name="twitter:card" content="{{$data->header_logo_link}}" />
    <meta name="twitter:label1" content="{{$data->meta_title}}" />
    <meta name="twitter:data1" content="{{$data->meta_description}}" />

    <link rel="icon" href="{{$data->header_logo_link}}" sizes="32x32" />
    <link rel="icon" href="{{$data->header_logo_link}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{$data->header_logo_link}}" />

    {!!$data->meta_header_script_nonce!!}
    {!!$data->meta_header_no_script_nonce!!}

    <style nonce="{{ csp_nonce() }}">
        .campaign-banner {
            background-image: url('{{$data->banner_image_link}}');
            background-position: center;
        }
    </style>
</head>


<body>
    <div class="header-top">
        <div class="container">
            <div class="inner-container">
                <div class="left-column">
                    <div class="contact-info">
                        <li><a href="tel:{{ $data->phone}}"><i class="fas fa-phone"></i>Phone: {{ $data->phone}}</a></li>
                        <li><a href="mailto:{{ $data->email}}"><i class="far fa-envelope"></i>{{ $data->email}}</a></li>
                    </div>
                </div>
                <div class="right-column">
                    <div class="social-links">
                        <ul>
                            <li><a href="{{ $data->instagram}}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ $data->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $data->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{ $data->youtube}}"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <img src="{{ $data->header_logo_link }}" alt="">
    </header>
    <section class="campaign-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form class="banner-form" id="contactForm">
                        <div class="ag-neon_box">
                            <div class="ag-neon ag-neon_left">
                                <div class="ag-neon_inner"></div>
                            </div>
                            <div class="ag-neon_text">Enquire Now</div>
                            <div class="ag-neon ag-neon_right">
                                <div class="ag-neon_inner"></div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="phone" placeholder="Enter Phone">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="file" class="form-control" id="image">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" class="form-control" cols="30" rows="2" placeholder="Enter message"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="custom-btn btn-15" id="submitBtn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-cticky-nav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav gap-5 w-100 justify-content-even">
                <li class="nav-item about-content">
                    <a class="nav-link" href="#about-content">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item why-content">
                    <a class="nav-link" href="#why-content">Why Choose Us? <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item choose-content">
                    <a class="nav-link" href="#choose-content">Steps <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item form-content">
                    <a class="nav-link" href="#form-content">Testimonial <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item service-content">
                    <a class="nav-link" href="#service-content">Services <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item gallery-content">
                    <a class="nav-link" href="#gallery-content">Gallery <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item faq-content">
                    <a class="nav-link" href="#faq-content">FAQ <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="about-section" id="about-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{$data->about_image_link}}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-content">
                        <h2 class="title">{!!$data->heading!!}</h2>
                        <div>
                            {!!$data->description!!}
                        </div>
                        <div class="text-center">
                            <a href="#form-content" class="custom-btn btn-15">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(count($feature)>0)
    <section class="why-section" id="why-content">
        <div class="container">
            <h2 class="title">Why Choose Us?</h2>
            <div class="row">
                @foreach($feature as $feature)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="{{$feature->image_link}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{!!$feature->title!!}</h5>
                            <p class="card-text">{!!$feature->description!!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @if(count($procedure)>0)
    <section class="choose-section" id="choose-content">
        <div class="container">
            <h2 class="title">Have queries? Follow these steps</h2>
            <div class="steps-wrapper">
                <ul class="steps-list d-flex flexAlignItemsStart">
                    @foreach($procedure as $k => $v)
                    <li><span>{{$k+1}}</span>
                        <p class="lp-description">{{$v->title}}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    @endif

    <section class="form-section" id="form-content">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                @if(count($testimonial)>0)
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 class="title">Hear from our happy customers</h2>
                    <div class="testimonial-slider owl-theme owl-carousel"
                        data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                        @foreach($testimonial as $testimonial)
                        <div class="card">
                            <img class="card-img-top"
                                src="{{$testimonial->image_link}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$testimonial->name}}</h5>
                                <p class="card-text">{{$testimonial->message}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <form class="banner-form" id="contactForm2">
                        <div class="ag-neon_box">
                            <div class="ag-neon ag-neon_left">
                                <div class="ag-neon_inner"></div>
                            </div>
                            <div class="ag-neon_text">Enquire Now</div>
                            <div class="ag-neon ag-neon_right">
                                <div class="ag-neon_inner"></div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name2" placeholder="Enter name">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email2" placeholder="Enter email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="phone2" placeholder="Enter Phone">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="file" class="form-control" id="image2">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message2" class="form-control" cols="30" rows="2"
                                    placeholder="Enter message"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="custom-btn btn-15" id="submitBtn2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @if(count($services)>0)
    <section class="service-section" id="service-content">
        <div class="container">
            <h2 class="title">Our Services</h2>
            <div class="row service-slider owl-theme owl-carousel"
                data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                @foreach($services as $service)
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="{{$service->image_link}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{!!$service->name!!}</h5>
                            <p class="card-text">{{Str::limit($service->description_unfiltered, 140)}}</p>
                            <div class="text-center">
                                <a href="{{route('services_detail.get', $service->slug)}}" class="custom-btn btn-15">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @if($data->gallery->count()>0)
    <section class="gallery-section" id="gallery-content">
        <div class="container">
            <h2 class="title">Project Gallery</h2>
            <div class="row">
                @foreach($data->gallery as $v)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="{{$v->image_link}}"
                        alt="{{$v->image_title}}">
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @if($data->faq->count()>0)
    <section class="faq-section" id="faq-content">
        <div class="container">
            <h2 class="title">Frequently Asked Question</h2>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="accordion">
                        @foreach($data->faq as $k=>$v)
                        <div class="card">
                            <div class="card-header" id="heading{{$k}}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link {{$k==0 ? '' : 'collapsed'}}" data-toggle="collapse" data-target="#collapse{{$k}}"
                                        aria-expanded="true" aria-controls="collapse{{$k}}">
                                        {{$v->question}}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse{{$k}}" class="collapse {{$k==0 ? 'show' : ''}}" aria-labelledby="heading{{$k}}"
                                data-parent="#accordion">
                                <div class="card-body">
                                    {{$v->answer}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column col-lg-3 col-md-6">
                        <div class="widget about-widget">
                            <div class="logo"><a href="{{route('home_page.get')}}"><img src="{{ $data->footer_logo_link}}"></a></div>
                            <ul class="social-links">
                                <li><a href="{{ $data->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ $data->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $data->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{ $data->youtube}}"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column col-lg-3 col-md-6">
                        <div class="widget links-widget">
                            <h3 class="widget-title">Our Services</h3>
                            <div class="widget-content">
                                <ul>
                                    @foreach($serviceOption as $v)
                                    <li><a href="{{route('services_detail.get', $v->slug)}}">{{$v->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column col-lg-3 col-md-6">
                        <div class="widget links-widget">
                            <h3 class="widget-title">Quick links</h3>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="{{route('about_page.get')}}">About Us</a></li>
                                    <li><a href="{{route('services.get')}}">Services</a></li>
                                    <li><a href="{{route('projects.get')}}">Projects</a></li>
                                    <li><a href="{{route('blogs.get')}}">Blogs</a></li>
                                    <li><a href="{{route('contact_page.get')}}">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column col-lg-3 col-md-6">
                        <div class="widget contact-widget">
                            <h3 class="widget-title">Get in touch</h3>
                            <div class="widget-content">
                                <ul class="contact-info">
                                    <li class="d-flex align-items-center justify-content-between mb-2">
                                        <div class="icon col-auto p-0 m-0"><span class="flaticon-gps"></span></div>
                                        <div class="text col-10 p-0 m-0">{{ $data->address}}</div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mb-2">
                                        <div class="icon col-auto p-0 m-0"><span class="flaticon-phone"></span></div>
                                        <div class="text col-10 p-0 m-0">
                                            <a href="tel:{{ $data->phone}}">{{ $data->phone}}</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between mb-2">
                                        <div class="icon col-auto p-0 m-0"><span class="flaticon-comment"></span></div>
                                        <div class="text col-10 p-0 m-0">
                                            <a href="mailto:{{ $data->email}}">{{ $data->email}}</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <div class="text">(c) {{date('Y')}} Manyaketha Ventures. All rights reserved.</div>
                    <ul class="social-links d-flex gap-1 flex-wrap justify-content-center align-items-center">
                        @foreach($legal as $legal)
                            <li><a href="{{route('legal.get', $legal->slug)}}">{{$legal->page_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="contactModal" data-keyboard="false" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-wrap">
                    <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                        <img fetchpriority="low" aria-hidden="true" src="{{ asset('close.png') }}" data-img="{{ asset('close.png') }}">
                      </button>
                    <div class="col-12 mt-2 text-center">
                        <img fetchpriority="low" class="modal-img" src="{{ $data->header_logo_link }}" data-img="{{ $data->header_logo_link }}">
                        <div class="ag-neon_box">
                            <div class="ag-neon ag-neon_left">
                                <div class="ag-neon_inner"></div>
                            </div>
                            <div class="ag-neon_text">Enquire Now</div>
                            <div class="ag-neon ag-neon_right">
                                <div class="ag-neon_inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">

                    <form class="modal-banner-form" id="contactForm3">
                        <div class="row mt-3">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name3" placeholder="Enter name">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email3" placeholder="Enter email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="phone3" placeholder="Enter Phone">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="file" class="form-control" id="image3">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message3" class="form-control" cols="30" rows="2"
                                    placeholder="Enter message"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="custom-btn btn-15" id="submitBtn3">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <button type="button" class="popup_btn_modal"  data-toggle="modal" data-target="#contactModal"  data-dismiss="modal" aria-label="Close">
        <img src="{{asset('smartphone.svg')}}" style="height: 35px; width:35px;" />
    </button>


</body>

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('admin/js/pages/img-previewer.min.js') }}"></script>
<script src="{{ asset('admin/js/pages/just-validate.production.min.js') }}"></script>
<script src="{{ asset('admin/js/pages/iziToast.min.js') }}"></script>
<script src="{{ asset('admin/js/pages/axios.min.js') }}"></script>

{!!$data->meta_footer_script_nonce!!}
{!!$data->meta_footer_no_script_nonce!!}

<script nonce="{{ csp_nonce() }}">

    (function($) {

        window.addEventListener("load", (event) => {
            setTimeout(() => {
                // contactModal.show()
                $('#contactModal').modal('show');
            }, 5000);
        });
        // Single Image Carousel
        if ($('.testimonial-slider').length) {
            $(".testimonial-slider").each(function(index) {
                var $owlAttr = {},
                    $extraAttr = $(this).data("options");
                $.extend($owlAttr, $extraAttr);
                $(this).owlCarousel($owlAttr);
            });
        }
        if ($('.service-slider').length) {
            $(".service-slider").each(function(index) {
                var $owlAttr = {},
                    $extraAttr = $(this).data("options");
                $.extend($owlAttr, $extraAttr);
                $(this).owlCarousel($owlAttr);
            });
        }
    })(window.jQuery);

    const myViewer = new ImgPreviewer('#gallery-content',{
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

    const sections = document.querySelectorAll("section");
    const navLi = document.querySelectorAll("nav .nav-item");
    window.onscroll = () => {
        var current = "";

        sections.forEach((section) => {
            const sectionTop = section.offsetTop - 500;
            if (pageYOffset >= sectionTop ) {
                current = section.getAttribute("id");
            }
        });

        navLi.forEach((li) => {
            li.classList.remove("active");
            if (li.classList.contains(current)) {
                li.classList.add("active");
            }
        });
    };

</script>

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
  .onSuccess(async (event) => {
    var submitBtn = document.getElementById('submitBtn')
    submitBtn.innerText = 'Submitting ...'
    submitBtn.disabled = true;
    try {
        var formData = new FormData();
        formData.append('name',document.getElementById('name').value)
        formData.append('email',document.getElementById('email').value)
        formData.append('phone',document.getElementById('phone').value)
        formData.append('message',document.getElementById('message').value)
        if((document.getElementById('image').files).length>0){
            formData.append('image',document.getElementById('image').files[0])
        }
        formData.append('page_url','{{Request::url()}}')

        const response = await axios.post('{{route('campaign_detail.post')}}', formData)
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
        if(error?.response?.data?.errors?.message){
            validation.showErrors({'#message': error?.response?.data?.errors?.message[0]})
        }
        if(error?.response?.data?.errors?.image){
            validation.showErrors({'#image': error?.response?.data?.errors?.image[0]})
        }
        if(error?.response?.data?.message){
            errorToast(error?.response?.data?.message)
        }
    }finally{
        submitBtn.innerText =  `Send Message`
        submitBtn.disabled = false;
    }
  });


// initialize the validation library
const validation2 = new JustValidate('#contactForm2', {
      errorFieldCssClass: 'is-invalid',
});
// apply rules to form fields
validation2
  .addField('#name2', [
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
  .addField('#phone2', [
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
  .addField('#email2', [
    {
        rule: 'required',
        errorMessage: 'Email is required',
    },
    {
        rule: 'email',
        errorMessage: 'Email is invalid!',
    },
  ])
  .addField('#message2', [
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
  .addField('#image2', [
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
  .onSuccess(async (event) => {
    var submitBtn = document.getElementById('submitBtn2')
    submitBtn.innerText = 'Submitting ...'
    submitBtn.disabled = true;
    try {
        var formData = new FormData();
        formData.append('name',document.getElementById('name2').value)
        formData.append('email',document.getElementById('email2').value)
        formData.append('phone',document.getElementById('phone2').value)
        formData.append('message',document.getElementById('message2').value)
        if((document.getElementById('image2').files).length>0){
            formData.append('image',document.getElementById('image2').files[0])
        }
        formData.append('page_url','{{Request::url()}}')

        const response = await axios.post('{{route('campaign_detail.post')}}', formData)
        successToast(response.data.message)
        event.target.reset();

    }catch (error){
        if(error?.response?.data?.errors?.name){
            validation2.showErrors({'#name2': error?.response?.data?.errors?.name[0]})
        }
        if(error?.response?.data?.errors?.email){
            validation2.showErrors({'#email2': error?.response?.data?.errors?.email[0]})
        }
        if(error?.response?.data?.errors?.phone){
            validation2.showErrors({'#phone2': error?.response?.data?.errors?.phone[0]})
        }
        if(error?.response?.data?.errors?.message){
            validation2.showErrors({'#message2': error?.response?.data?.errors?.message[0]})
        }
        if(error?.response?.data?.errors?.image){
            validation2.showErrors({'#image2': error?.response?.data?.errors?.image[0]})
        }
        if(error?.response?.data?.message){
            errorToast(error?.response?.data?.message)
        }
    }finally{
        submitBtn.innerText =  `Send Message`
        submitBtn.disabled = false;
    }
  });

// initialize the validation library
const validation3 = new JustValidate('#contactForm3', {
      errorFieldCssClass: 'is-invalid',
});
// apply rules to form fields
validation3
  .addField('#name3', [
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
  .addField('#phone3', [
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
  .addField('#email3', [
    {
        rule: 'required',
        errorMessage: 'Email is required',
    },
    {
        rule: 'email',
        errorMessage: 'Email is invalid!',
    },
  ])
  .addField('#message3', [
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
  .addField('#image3', [
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
  .onSuccess(async (event) => {
    var submitBtn = document.getElementById('submitBtn3')
    submitBtn.innerText = 'Submitting ...'
    submitBtn.disabled = true;
    try {
        var formData = new FormData();
        formData.append('name',document.getElementById('name3').value)
        formData.append('email',document.getElementById('email3').value)
        formData.append('phone',document.getElementById('phone3').value)
        formData.append('message',document.getElementById('message3').value)
        if((document.getElementById('image3').files).length>0){
            formData.append('image',document.getElementById('image3').files[0])
        }
        formData.append('page_url','{{Request::url()}}')

        const response = await axios.post('{{route('campaign_detail.post')}}', formData)
        successToast(response.data.message)
        event.target.reset();
        $('#contactModal').modal('hide');

    }catch (error){
        if(error?.response?.data?.errors?.name){
            validation3.showErrors({'#name3': error?.response?.data?.errors?.name[0]})
        }
        if(error?.response?.data?.errors?.email){
            validation3.showErrors({'#email3': error?.response?.data?.errors?.email[0]})
        }
        if(error?.response?.data?.errors?.phone){
            validation3.showErrors({'#phone3': error?.response?.data?.errors?.phone[0]})
        }
        if(error?.response?.data?.errors?.message){
            validation3.showErrors({'#message3': error?.response?.data?.errors?.message[0]})
        }
        if(error?.response?.data?.errors?.image){
            validation3.showErrors({'#image3': error?.response?.data?.errors?.image[0]})
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

</html>
