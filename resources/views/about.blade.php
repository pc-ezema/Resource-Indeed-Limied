@extends('layouts.frontend', ['title' => 'About Us'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'About Us', 'subtitle' => 'About Us'])
@endsection

@section('page-content')
<section class="section p-t-70 p-b-30 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="heading-section heading-section-2 dark left">
                    <h3>WHO WE ARE</h3>
                </div>
                <p class="text-block p-r-10 m-b-20">
                    A leading global provider of outsourced recruitment and consultancy solutions,
                    {{config('app.name')}} supports organisations to build, connect and optimise their
                    workforce to face the challenges of tomorrow.
                </p>
                <p class="text-block p-r-10">
                    Sed id fermentum lectus, vel sollicitudin ipsum. Nulla porttitor, dolor ut sagittis lacinia,
                    nulla mauris elementum leo, at viverra massa sapien id diam. Phasellus et ornare sem. Integer
                    dictum imperdiet luctus.
                </p>
            </div>
            <div class="col-md-6">
                <div class="plyr-video m-b-50">
                    <img class="img-responsive" src="{{URL::asset('images/about-post-02.jpg')}}" alt="Post Image">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section bg-grey-light p-t-100 p-b-70">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="number-box dark">
                    <span class="number counterUp">100</span>
                    <span class="title">Employees</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="number-box dark">
                    <span class="number">
                        <span class="counterUp">10</span>
                        <span class="sub">+</span>
                    </span>
                    <span class="title">Countries Recruited Into</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="number-box dark">
                    <span class="number counterUp">2000</span>
                    <span class="title">Remps Under Management</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="number-box dark">
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

<section class="section bg-white p-t-70 p-b-20">
    <div class="container">
        <div class="heading-section heading-section-2 dark left">
            <h3>Our Mission</h3>
        </div>
        <div class="p-b-20">
            <p>We are proud to be on a continuous journey with our clients, candidates, corporate partners and employees to foster and build a more diverse vision for the future.
                Our global workforce now comprises 65 nationalities and at {{config('app.name')}} we take equality, diversity and inclusion (ED&I) very seriously.</p>
            <p>Our equality, diversity & inclusion mission is to ensure our business is always striving to create a world-class culture, in which everyone is empowered to be their authentic self in the workplace.
                In order to ensure we remain focused on this and to help us measure our success we are committed to:</p>
        </div>
        <div class="post-content">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-block text-bold text-black text-med-sm m-b-20">Raising Awareness</h4>
                    <p class="text-block m-b-30">
                        Raising awareness and cultural learning amongst all our people across our business, to ensure we embrace each other’s uniqueness and the value that our diverse organisational make-up brings to our business.
                    </p>
                    <h4 class="text-block text-bold text-black text-med-sm m-b-20">Best processes</h4>
                    <p class="text-block">
                        Ensuring the best processes and policies are in place across our business to support our people to bring their whole self to work with transparency and fairness at the heart of all we do.
                    </p>
                </div>
                <div class="col-md-6 js-waypoint">
                    <h4 class="text-block text-bold text-black text-med-sm m-b-20">Driving ED&I agendas</h4>
                    <p class="text-block m-b-30">
                        Working with our clients to not only support but drive their ED&I agendas for their own business.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section section-split bg-black">
    <div class="section-split-left bg-cover matchHeigh" style="background: url(images/bg-contact-form-02.jpg) center center no-repeat;"></div>
    <div class="section-split-right matchHeigh">
        <div class="we-work-section">
            <div class="heading-section heading-section-1 light">
                <h3>WHY CHOOSE US</h3>
            </div>
            <div class="accordion-box accordion-box-1 accordion-box-2" data-accordion-group>
                <div class="accordion open m-b-5" data-accordion>
                    <div class="accordion-title" data-control>
                        <p>01. Client Focused</p>
                    </div>
                    <div class="accordion-content animated" data-content>
                        <div class="content-inner">
                            <p>Our unsurpassed knowledge of our clients ensures we are able to offer them world-class bespoke solutions. We go beyond merely satisfying our clients by wowing them with every aspect of what we offer.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion m-b-5" data-accordion>
                    <div class="accordion-title" data-control>
                        <p>02. Dedicated</p>
                    </div>
                    <div class="accordion-content animated" data-content>
                        <div class="content-inner">
                            <p>We are dedicated to evolving the meaning of best, always striving to go beyond what our clients thought was possible. It is our goal to be seen as the recruitment outsourcing provider that goes one step further.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion m-b-5" data-accordion>
                    <div class="accordion-title" data-control>
                        <p>03. Proud</p>
                    </div>
                    <div class="accordion-content animated" data-content>
                        <div class="content-inner">
                            <p>We take pride in our rich heritage, our success, and our unrivalled growth. Our people are proud ambassadors for {{config('app.name')}}, representing us and embodying our values across the globe.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion m-b-5" data-accordion>
                    <div class="accordion-title" data-control>
                        <p>04. United</p>
                    </div>
                    <div class="accordion-content animated" data-content>
                        <div class="content-inner">
                            <p>We are one united team, working collaboratively across the globe. We work together to solve any problem through fresh, innovative thinking and produce completely bespoke solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion m-b-5" data-accordion>
                    <div class="accordion-title" data-control>
                        <p>05. Inclusive</p>
                    </div>
                    <div class="accordion-content animated" data-content>
                        <div class="content-inner">
                            <p>We are committed to providing a culture built on inclusion and equality, where diversity is an expectation, not an exception. Our people are empowered to be bold advocates for justice and respect for all.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<div class="section bg-primary p-t-25 p-b-25 cta-section-1 cta-section-2">
    <div class="container">
        <div class="block-left">
            <p class="text-block text-med">The focus of our business is people.</p>
        </div>
        <div class="block-right">
            <a class="au-btn au-btn-border au-btn-border-light" href="/contact">Talk With Us</a>
        </div>
    </div>
</div>
@endsection