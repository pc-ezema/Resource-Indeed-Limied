@extends('layouts.frontend', ['title' => 'Experience. Expertise'])

@section('banner')
@includeIf('layouts.banner')
@endsection

@section('page-content')
<div class="section bg-primary p-t-30 p-b-30 cta-section-1 cta-section-2">
    <div class="container">
        <div class="block-left">
            <p class="text-block text-med-sm">At {{config('app.name')}}, we are your partners in driving success.</p>
        </div>
        <div class="block-right">
            <a class="au-btn au-btn-border au-btn-border-light" href="/about">Who we are</a>
        </div>
    </div>
</div>

<section class="section bg-white p-t-65 p-b-65">
    <div class="container">
        <div class="heading-section heading-section-2 dark">
            <h3>WE ARE YOUR PARTNERS IN DRIVING SUCCESS</h3>
        </div>
        <p class="text-block text-center relative p-l-100 p-r-100 m-b-40">With a commitment to excellence and a passion for innovation, we offer a suite of services that empower your business to thrive in today's competitive landscape.</p>
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
                        <a href="{{route('service.human.capital.development')}}">Human Capital Development</a>
                    </h3>
                    <p class="content">Empower your team with essential skills and leadership abilities.</p>
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
                        <a href="{{route('service.financial.services')}}">Financial Services</a>
                    </h3>
                    <p class="content">Optimize your finances for growth and stability.</p>
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
                        <a href="{{route('service.ict.solutions')}}">ICT Solutions</a>
                    </h3>
                    <p class="content">Embrace technology to drive efficiency and innovation.</p>
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
                        <a href="{{route('service.general.resources')}}">General Resources</a>
                    </h3>
                    <p class="content">Access insights and resources to navigate challenges.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section bg-cover bg-parallax p-t-180 p-b-160" style="background: url(images/banner-04.jpg) center center no-repeat;" data-paroller-type="background" data-paroller-factor="-0.3" data-paroller-direction="vertical">
    <div class="bg-overlay dark"></div>
    <div class="container">
        <div class="relative cta-section-3">
            <p class="text-block text-center text-white text-med-large m-b-40 p-l-200 p-r-200">Ready to take your business to new heights? Reach out to us today to explore how we can help you succeed.</p>
            <a class="au-btn au-btn-border au-btn-border-light" href="/contact">Contact Us</a>
        </div>
    </div>
</div>

<div class="section bg-white p-t-70 p-b-40">
    <div class="container">
        <div class="heading-section heading-section-2 dark">
            <h3>WHY CHOOSE US?</h3>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-2">
                    <div class="icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <div class="title">
                        <h3>Tailored Solutions</h3>
                    </div>
                    <div class="content">
                        <p>Every business is unique, and so are our solutions. We listen, understand, and create strategies that align with your goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-2">
                    <div class="icon">
                        <i class="fa fa-black-tie"></i>
                    </div>
                    <div class="title">
                        <h3>Experienced Team</h3>
                    </div>
                    <div class="content">
                        <p>Our experts bring years of industry knowledge to the table, ensuring you receive the best guidance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-2">
                    <div class="icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="title">
                        <h3>Comprehensive Approach</h3>
                    </div>
                    <div class="content">
                        <p>From training and recruitment to financial strategy and technology implementation, we cover it all.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="icon-box icon-box-2">
                    <div class="icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="title">
                        <h3>Proven Results</h3>
                    </div>
                    <div class="content">
                        <p>Our track record of success stories showcases the impact we've made on businesses across various industries.</p>
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
                @if(Session::has('success'))
                <div class="alert alert-success messages m-r-40" id="status">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method="post" action="{{ route('query.store') }}">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    @honeypot
                    <div class="contact-form-section m-r-40 bg-white">
                        <div class="heading-section heading-section-2 dark left">
                            <h3>REQUEST A CALL BACK</h3>
                        </div>
                        <p class="text-block m-b-30">If you need to speak to us about a general query fill in the form below and we will call you back within the same working day.</p>
                        <p class="text-block m-b-5">How can we help?</p>
                        <div class="au-select au-select-2 m-b-20">
                            @if ($errors->has('service'))
                            <span class="help-block with-errors">
                                {{ $errors->first('service') }}
                            </span>
                            @endif
                            <select class="chosen-select" name="service" style="display: none;">
                                <option value="Financial Services">Discussions with Financial Experts</option>
                                <option value="Human Resource Management">Discussions with Human Resource Management Experts</option>
                                <option value="Information Technology">Discussions with Information Technology Experts</option>
                                <option value="General Resource &amp; Material Needs">Discussions with General Resource &amp; Material Needs Experts</option>
                                <option value="Waste Management">Discussions with Waste Management Experts</option>
                                <option value="Professional Services">Discussions with Professional Experts</option>
                            </select>
                        </div>
                        <p class="text-block m-b-5">Your Name:</p>
                        @if ($errors->has('name'))
                        <span class="help-block with-errors">
                            {{ $errors->first('name') }}
                        </span>
                        @endif
                        <input class="au-input au-input-2 m-b-20" name="name" type="text">
                        <p class="text-block m-b-5">Your Phone Number:</p>
                        @if ($errors->has('phone'))
                        <span class="help-block with-errors">
                            {{ $errors->first('phone') }}
                        </span>
                        @endif
                        <input class="au-input au-input-2 m-b-30" name="phone" type="text">
                        <input class="au-input-submit au-btn au-btn-primary m-b-0" type="submit" value="Submit">
                    </div>
                </form>
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
                                <p>How does {{config('app.name')}} handle the recruitment process?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="transition: max-height 400ms ease-in-out 0s; max-height: 182px;">
                                <div class="content-inner">
                                    <p>At {{config('app.name')}}, we follow a comprehensive recruitment process that includes job profiling, sourcing, screening, interviewing, and selection. Our aim is to find the right candidates who align with your company's values and requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion m-b-10" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>What industries do you specialize in for recruitment?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="max-height: 0px; overflow: hidden;">
                                <div class="content-inner">
                                    <p>We have experience across a wide range of industries, including technology, healthcare, finance, manufacturing, and more. Our adaptable approach ensures we can cater to various sectors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion m-b-10" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>How long does the recruitment process typically take?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="max-height: 0px; overflow: hidden;">
                                <div class="content-inner">
                                    <p>The duration of the recruitment process varies depending on factors such as the role's complexity, the level of the position, and the availability of suitable candidates. We prioritize quality over speed to ensure the best.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion m-b-10" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>What types of training programs does {{config('app.name')}} offer?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="max-height: 0px; overflow: hidden;">
                                <div class="content-inner">
                                    <p>We offer a diverse range of training programs, including leadership development, soft skills enhancement, technical training, and customized workshops tailored to your company's specific needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>Are your training programs customizable to our company's requirements?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="max-height: 0px; overflow: hidden;">
                                <div class="content-inner">
                                    <p>Absolutely! We believe in creating training solutions that align with your company's goals and challenges. Our team works closely with you to tailor the content and delivery to address your unique needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>How do you ensure the effectiveness of your training programs?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="max-height: 0px; overflow: hidden;">
                                <div class="content-inner">
                                    <p>We design our training programs with a focus on interactive learning, real-world scenarios, and practical application. Additionally, we gather feedback and assess outcomes to continually refine and improve our training offerings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>What areas of business consultancy does {{config('app.name')}} cover?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="max-height: 0px; overflow: hidden;">
                                <div class="content-inner">
                                    <p>Our business consultancy services encompass a wide spectrum, including strategic planning, process optimization, market research, financial analysis, and more. We aim to provide holistic solutions for your business challenges.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>How can business consultancy services benefit my company?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="max-height: 0px; overflow: hidden;">
                                <div class="content-inner">
                                    <p>Our experienced consultants bring fresh perspectives and expertise to identify growth opportunities, streamline operations, and enhance overall business performance. We work collaboratively to drive sustainable success.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" data-accordion="">
                            <div class="accordion-title" data-control="">
                                <span></span>
                                <p>Is there a one-size-fits-all approach to business consultancy?</p>
                            </div>
                            <div class="accordion-content animated" data-content="" style="max-height: 0px; overflow: hidden;">
                                <div class="content-inner">
                                    <p>Not at all. We understand that every business is unique. Our consultancy approach is highly adaptable, and we tailor our strategies to your specific industry, goals, and challenges.</p>
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
                            <img src="{{URL::asset('images/fortpremium.png')}}" height="120" alt="our partner" />
                        </a>
                    </div>
                </div>
                <div class="icon-box icon-box-3">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/kininsoKoncepts.jpg')}}" height="120" alt="our partner" />
                        </a>
                    </div>
                </div>
                <div class="icon-box icon-box-3">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/lairHealthcare.png')}}"  alt="our partner" />
                        </a>
                    </div>
                </div>
                <div class="icon-box icon-box-3">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/nardusHealthcare.png')}}" height="120" alt="our partner" />
                        </a>
                    </div>
                </div>
                <div class="icon-box icon-box-3">
                    <div class="icon">
                        <a href="#">
                            <img src="{{URL::asset('images/primenest.png')}}" height="120" alt="our partner" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection