@extends('layouts.frontend', ['title' => 'Experience. Expertise'])

@section('banner')
@includeIf('layouts.banner')
@endsection

@section('page-content')
<div class="section bg-primary p-t-30 p-b-30 cta-section-1 cta-section-2">
    <div class="container">
        <div class="block-left">
            <p class="text-block text-med-sm">Helping you achieve your goals and identify new opportunities.</p>
        </div>
        <div class="block-right">
            <a class="au-btn au-btn-border au-btn-border-light" href="/about">Who we are</a>
        </div>
    </div>
</div>

<section class="section bg-white p-t-65 p-b-65">
    <div class="container">
        <div class="heading-section heading-section-2 dark">
            <h3>WE ARE HELP YOU TO GROW YOUR BUSINESS</h3>
        </div>
        <p class="text-block text-center relative p-l-100 p-r-100 m-b-40">Our focus is to not only deliver strategies that perform, but to identify new opportunities using data, <br>expertise and technology resulting in simpler, smarter and faster talent solutions.</p>
        <div class="row">
            <div class="col-sm-4">
                <img class="img-responsive m-b-15" src="{{URL::asset('images/we-are-01.jpg')}}" alt="we are">
            </div>
            <div class="col-sm-4">
                <img class="img-responsive m-b-15" src="{{URL::asset('images/we-are-02.jpg')}}" alt="we are">
            </div>
            <div class="col-sm-4">
                <img class="img-responsive" src="{{URL::asset('images/we-are-03.jpg')}}" alt="we are">
            </div>
        </div>
    </div>
</section>

<section class="section bg-grey-light p-t-70 p-b-20">
    <div class="container">
        <div class="heading-section heading-section-2 dark">
            <h3>OUR SERVICES</h3>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-6">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/icons/ic-services-03.png')}}" alt="Human Resource Management" />
                        </a>
                    </div>
                    <h3 class="title">
                        <a href="#">Human Resource Management</a>
                    </h3>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae rutrum sem. Mauris convallis non elit non scelerisque.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-6">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/icons/ic-services-05.png')}}" alt="Financial Services" />
                        </a>
                    </div>
                    <h3 class="title">
                        <a href="#">Financial Services</a>
                    </h3>
                    <p class="content">Nunc suscipit tempor odio, a accumsan mauris placerat in. Proin condimentum sem vel vestibulum lacinia. Integer eleifend neque</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-6">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/icons/ic-services-06.png')}}" alt="Information Technology" />
                        </a>
                    </div>
                    <h3 class="title">
                        <a href="#">Information Technology </a>
                    </h3>
                    <p class="content">Maecenas placerat lobortis nulla, et mattis nibh semper ac. Ut ut tristique dui. Maecenas scelerisque mollis felis, at tincidunt nisi</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-6">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/icons/ic-services-04.png')}}" alt="General Resource &amp; Material Needs" />
                        </a>
                    </div>
                    <h3 class="title">
                        <a href="#">General Resource &amp; Material Needs</a>
                    </h3>
                    <p class="content">Quisque eget lectus gravida, consectetur odio ut, mollis lorem. Integer semper, neque ut auctor luctus, tellus metus</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-6">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/icons/ic-services-02.png')}}" alt="Waste Management" />
                        </a>
                    </div>
                    <h3 class="title">
                        <a href="#">Waste Management</a>
                    </h3>
                    <p class="content">Aliquam erat volutpat. Integer enim justo, tempor eget placerat ut, molestie non ipsum. Cras nec dolor dolor</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-6">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/icons/ic-services-01.png')}}" alt="Professional Services" />
                        </a>
                    </div>
                    <h3 class="title">
                        <a href="#">Professional Services</a>
                    </h3>
                    <p class="content">Quisque eget lectus gravida, consectetur odio ut, mollis lorem. Integer semper, neque ut auctor luctus, tellus metus dictum mi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section bg-cover bg-parallax p-t-180 p-b-160" style="background: url(images/banner-04.jpg) center center no-repeat;" data-paroller-type="background" data-paroller-factor="-0.3" data-paroller-direction="vertical">
    <div class="bg-overlay dark"></div>
    <div class="container">
        <div class="relative cta-section-3">
            <p class="text-block text-center text-white text-med-large m-b-40 p-l-200 p-r-200">Our rich understanding of each industry’s talent needs is supported by years of experience, enabling us to deliver bespoke solutions for your organisation.</p>
            <a class="au-btn au-btn-border au-btn-border-light" href="/contact">Contact Us</a>
        </div>
    </div>
</div>

<div class="section bg-white p-t-70 p-b-40">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-2">
                    <div class="icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <div class="title">
                        <h3>Experts in people</h3>
                    </div>
                    <div class="content">
                        <p>People are the heart of any business. We're focused on finding the right talent for yours.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-2">
                    <div class="icon">
                        <i class="fa fa-black-tie"></i>
                    </div>
                    <div class="title">
                        <h3>Powerful partners</h3>
                    </div>
                    <div class="content">
                        <p>Drive your talent agenda forward. Leverage our knowledge, technology and expertise and evolve faster.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-2">
                    <div class="icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="title">
                        <h3>Simpler, smarter, faster </h3>
                    </div>
                    <div class="content">
                        <p>Intelligent talent solutions. Solve the “now”, and take advantage of “what's next”.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section bg-parallax p-t-100 p-b-70 bg-cover" data-paroller-type="background" data-paroller-factor="-0.3" data-paroller-direction="vertical">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="number-box light">
                    <span class="number counterUp">100</span>
                    <span class="title">Employees</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="number-box light">
                    <span class="number">
                        <span class="counterUp">10</span>
                        <span class="sub">+</span>
                    </span>
                    <span class="title">Countries Recruited Into</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="number-box light">
                    <span class="number counterUp">2000</span>
                    <span class="title">Remps Under Management</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="number-box light">
                    <span class="number">
                        <span class="counterUp">1000</span>
                        <span class="sub">%</span>
                    </span>
                    <span class="title">Satisfied Client</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section p-t-70 p-b-80 bg-grey-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form-section m-r-40 bg-white">
                    <div class="heading-section heading-section-2 dark left">
                        <h3>REQUEST A CALL BACK</h3>
                    </div>
                    <p class="text-block m-b-30">If you need to speak to us about a general query fill in the form below and we will call you back within the same working day.</p>
                    <p class="text-block m-b-5">How can we help?</p>
                    <div class="au-select au-select-2 m-b-20">
                        <select class="chosen-select" style="display: none;">
                            <option value="" disabled="" selected="">Discussions with Financial Experts</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <p class="text-block m-b-5">Your Name:</p>
                    <input class="au-input au-input-2 m-b-20" type="text">
                    <p class="text-block m-b-5">Your Phone Number:</p>
                    <input class="au-input au-input-2 m-b-30" type="text">
                    <input class="au-input-submit au-btn au-btn-primary m-b-0" type="submit" value="Submit">
                </div>
            </div>
            <div class="col-md-6">
                <div class="faqs-section m-t-35">
                    <div class="heading-section heading-section-2 dark left">
                        <h3>FREQUENTLY ASKED QUESTIONS</h3>
                    </div>
                    <div class="accordion-box accordion-box-1" data-accordion-group="">
                        <div class="accordion open m-b-10" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>What nulla accumsan libero ac elit mattis?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="transition: max-height 400ms ease-in-out 0s; max-height: 182px;">
                                <div class="content-inner">
                                    <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse
                                        ut mi felis et interdum libero lacinia vel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion m-b-10" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>Mauris euismod est elit, vel mattis est dapibus?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="max-height: 0px; overflow: hidden;">
                                <div class="content-inner">
                                    <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse
                                        ut mi felis et interdum libero lacinia vel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion m-b-10" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>Nullam vitae volutpat risus?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="max-height: 0px; overflow: hidden;">
                                <div class="content-inner">
                                    <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse
                                        ut mi felis et interdum libero lacinia vel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion m-b-10" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>What lorem ipsum dolor sit amet?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="max-height: 0px; overflow: hidden;">
                                <div class="content-inner">
                                    <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse
                                        ut mi felis et interdum libero lacinia vel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>What lorem ipsum dolor sit amet?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="max-height: 0px; overflow: hidden;">
                                <div class="content-inner">
                                    <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse
                                        ut mi felis et interdum libero lacinia vel.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-grey-light p-t-70 p-b-70">
    <div class="container">
        <div class="relative">
            <div class="p-b-15">
                <div class="heading-section heading-section-2 dark">
                    <h3>OUR PARTNER</h3>
                </div>
            </div>
            <div class="owl-carousel dark nav-style-2" data-carousel-margin="30" data-carousel-nav="true" data-carousel-loop="true" data-carousel-items="5" data-carousel-autoplay="true">
                <div class="icon-box icon-box-3">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/partner-01.png')}}" alt="our partner" />
                        </a>
                    </div>
                </div>
                <div class="icon-box icon-box-3">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/partner-02.png')}}" alt="our partner" />
                        </a>
                    </div>
                </div>
                <div class="icon-box icon-box-3">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/partner-03.png')}}" alt="our partner" />
                        </a>
                    </div>
                </div>
                <div class="icon-box icon-box-3">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/partner-04.png')}}" alt="our partner" />
                        </a>
                    </div>
                </div>
                <div class="icon-box icon-box-3">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/partner-05.png')}}" alt="our partner" />
                        </a>
                    </div>
                </div>
                <div class="icon-box icon-box-3">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/partner-06.png')}}" alt="our partner" />
                        </a>
                    </div>
                </div>
                <div class="icon-box icon-box-3">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/partner-07.png')}}" alt="our partner" />
                        </a>
                    </div>
                </div>
                <div class="icon-box icon-box-3">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/partner-08.png')}}" alt="our partner" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection