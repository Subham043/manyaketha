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
</head>


<body>
    <header>
        <img src="{{ asset('logo.png') }}" alt="">
    </header>
    <section class="campaign-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form class="banner-form">
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
                            <button type="submit" class="custom-btn btn-15">Submit</button>
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
                    <img src="https://www.drfixit.co.in/images/blogs/15922252655ee76df1c7909.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-content">
                        <h2 class="title">Painting is not waterproofing</h2>
                        <p>Decorative paints only beautify your walls, and if the layer underneath the painted wall is
                            not well protected from water, there is a good chance of damage to your walls.</p>
                        <p>The thickness of the waterproofing coating ensures the extent of wall protection. Thicker the
                            coating, fewer are the chances of water seeping through. Dr. Fixit Raincoat consists of a
                            coating which builds a film of 110-120 micron thickness.</p>
                        <p>Just protecting the walls might not be enough as specific areas in your home such as
                            bathroom/roof/tank would need special waterproofing care.</p>
                        <p>In India where rainy and summer seasons are long and harsh, you need a customized
                            waterproofing solution from a waterproofing expert after an audit of your home.</p>
                        <p>In India where rainy and summer seasons are long and harsh, you need a customized
                            waterproofing solution from a waterproofing expert after an audit of your home.</p>
                        <div class="text-center">
                            <a href="#form-content" class="custom-btn btn-15">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-section" id="why-content">
        <div class="container">
            <h2 class="title">Why Choose Us?</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://www.drfixit.co.in/images/blogs/15920495555ee4bf938db6d.png"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://www.drfixit.co.in/images/blogs/15920495555ee4bf938db6d.png"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://www.drfixit.co.in/images/blogs/15920495555ee4bf938db6d.png"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://www.drfixit.co.in/images/blogs/15920495555ee4bf938db6d.png"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://www.drfixit.co.in/images/blogs/15920495555ee4bf938db6d.png"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://www.drfixit.co.in/images/blogs/15920495555ee4bf938db6d.png"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="choose-section" id="choose-content">
        <div class="container">
            <h2 class="title">Have queries? Follow these steps</h2>
            <div class="steps-wrapper">
                <ul class="steps-list d-flex flexAlignItemsStart">
                    <li><span>1</span>
                        <h3>Get in touch</h3>
                        <p class="lp-description">Fill the form given on this page for a Dr. Fixit expert to contact
                            you.</p>
                    </li>
                    <li><span>2</span>
                        <h3>Enquire</h3>
                        <p class="lp-description">An expert from the Dr. Fixit Advisory Center will contact you to
                            understand and address your waterproofing query.</p>
                    </li>
                    <li><span>3</span>
                        <h3>Schedule a visit</h3>
                        <p class="lp-description">As per your request, the expert will schedule a visit from a local
                            representative to audit your home and provide waterproofing solutions.</p>
                    </li>
                    <li><span>4</span>
                        <h3>Get the job done</h3>
                        <p class="lp-description">Local representative will provide complete support with product,
                            dealers and trained contractor to make your home leak-free for years to come.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="form-section" id="form-content">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 class="title">Hear from our happy customers</h2>
                    <div class="testimonial-slider owl-theme owl-carousel"
                        data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                        <div class="card">
                            <img class="card-img-top"
                                src="https://manyakethaventures.in/storage/testimonials/DYHOeqkL4VEncFqm1u7QzOJfocTXyztynUu07jsF.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Naveen</h5>
                                <p class="card-text">Before I enlisted the services of Manyaketha Waterproofing
                                    Services in Bangalore, I was constantly plagued by water leakage issues in my
                                    basement. Every rainy season turned into a nightmare. The team thoroughly assessed
                                    the problem areas and recommended a comprehensive waterproofing solution. I was
                                    amazed at the meticulousness with which they applied the waterproofing materials.
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                src="https://manyakethaventures.in/storage/testimonials/DYHOeqkL4VEncFqm1u7QzOJfocTXyztynUu07jsF.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Praveen</h5>
                                <p class="card-text">Before I enlisted the services of Manyaketha Waterproofing
                                    Services in Bangalore, I was constantly plagued by water leakage issues in my
                                    basement. Every rainy season turned into a nightmare. The team thoroughly assessed
                                    the problem areas and recommended a comprehensive waterproofing solution. I was
                                    amazed at the meticulousness with which they applied the waterproofing materials.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <form class="banner-form">
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
                                <textarea name="message" id="message" class="form-control" cols="30" rows="2"
                                    placeholder="Enter message"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="custom-btn btn-15">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section" id="service-content">
        <div class="container">
            <h2 class="title">Our Services</h2>
            <div class="row service-slider owl-theme owl-carousel"
                data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://www.drfixit.co.in/images/blogs/15920495555ee4bf938db6d.png"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://www.drfixit.co.in/images/blogs/15920495555ee4bf938db6d.png"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://www.drfixit.co.in/images/blogs/15920495555ee4bf938db6d.png"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://www.drfixit.co.in/images/blogs/15920495555ee4bf938db6d.png"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://www.drfixit.co.in/images/blogs/15920495555ee4bf938db6d.png"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://www.drfixit.co.in/images/blogs/15920495555ee4bf938db6d.png"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section" id="gallery-content">
        <div class="container">
            <h2 class="title">Project Gallery</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="https://manyakethaventures.in/storage/projects/3NwR4pfzyvRtXhqMkJ130JRGbVsRXgP2K3ga0UJj.png"
                        alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="https://manyakethaventures.in/storage/projects/3NwR4pfzyvRtXhqMkJ130JRGbVsRXgP2K3ga0UJj.png"
                        alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="https://manyakethaventures.in/storage/projects/3NwR4pfzyvRtXhqMkJ130JRGbVsRXgP2K3ga0UJj.png"
                        alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="https://manyakethaventures.in/storage/projects/3NwR4pfzyvRtXhqMkJ130JRGbVsRXgP2K3ga0UJj.png"
                        alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="https://manyakethaventures.in/storage/projects/3NwR4pfzyvRtXhqMkJ130JRGbVsRXgP2K3ga0UJj.png"
                        alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="https://manyakethaventures.in/storage/projects/3NwR4pfzyvRtXhqMkJ130JRGbVsRXgP2K3ga0UJj.png"
                        alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="https://manyakethaventures.in/storage/projects/3NwR4pfzyvRtXhqMkJ130JRGbVsRXgP2K3ga0UJj.png"
                        alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="https://manyakethaventures.in/storage/projects/3NwR4pfzyvRtXhqMkJ130JRGbVsRXgP2K3ga0UJj.png"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section" id="faq-content">
        <div class="container">
            <h2 class="title">Frequently Asked Question</h2>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        A lot of companies provide paint services which take care of waterproofing. Why
                                        do I need to carry out a coating service additionally?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Should I waterproof my home at the time of construction or resolve the problem
                                        post construction?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        For How Long the Waterproofing Solution Lasts?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>(c) {{ date('Y') }} Manyaketha Ventures. All rights reserved.</p>
    </footer>


</body>

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('admin/js/pages/img-previewer.min.js') }}"></script>

<script nonce="{{ csp_nonce() }}">
    (function($) {
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

</html>
