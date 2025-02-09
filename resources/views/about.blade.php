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
                    Welcome to {{config('app.name')}}, your trusted partner in Human Resource Services, Training, Recruitment, and Business Consultation. With a passion for helping businesses thrive, we bring a wealth of experience and a commitment to excellence to every client we serve.
                </p>
                <div class="heading-section heading-section-2 dark left">
                    <h3>OUR SERVICES</h3>
                </div>
                <div class="post-content">
                    <div class="col-12">
                        <h4 class="text-block text-bold text-black text-med-sm m-b-20">HR Training</h4>
                        <p class="text-block m-b-30">
                            Our dynamic training programs cover a wide range of HR topics, equipping your team with the knowledge and skills needed to excel in today's competitive business landscape.
                        </p>
                        <h4 class="text-block text-bold text-black text-med-sm m-b-20">Recruitment Solutions</h4>
                        <p class="text-block">
                            We specialize in connecting businesses with the right talent. Our proven recruitment strategies ensure you find candidates who not only meet the job requirements but also fit seamlessly into your company culture.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="plyr-video m-b-50">
                    <img class="img-responsive" src="{{URL::asset('images/about-post-02.jpg')}}" alt="Post Image">
                </div>
                <div class="col-12 js-waypoint">
                    <h4 class="text-block text-bold text-black text-med-sm m-b-20">Financial and Operational Consultation</h4>
                    <p class="text-block m-b-30">
                        Our financial experts and consultants dive deep into your operations, identifying areas for improvement and implementing strategies to enhance efficiency, reduce costs, and maximize profits.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section p-t-100 p-b-70" style="background-color: #f58634;">
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

<section class="section bg-white p-t-70 p-b-20">
    <div class="container">
        <div class="heading-section heading-section-2 dark left">
            <h3>Our Mission</h3>
        </div>
        <div class="p-b-20">
            <p>At {{config('app.name')}}, our mission is simple yet powerful: to empower businesses by delivering innovative solutions that optimize their human capital, streamline operations, and enhance financial performance. We believe that a strong foundation of well-trained employees, strategic recruitment, and efficient operations is key to achieving sustainable success.</p>
        </div>
    </div>
</section>

<section class="section bg-white p-t-20 p-b-20">
    <div class="container">
        <div class="heading-section heading-section-2 dark left">
            <h3>Our Vision</h3>
        </div>
        <div class="p-b-20">
            <p>We envision a future where businesses of all sizes can achieve sustainable growth through strategic HR management, talent acquisition, and operational excellence. By partnering with {{config('app.name')}}, you're taking a significant step toward realizing that vision.</p>
        </div>
    </div>
</section>

<div class="section section-split bg-black">
    <div class="section-split-left bg-cover matchHeigh" style="background: url(images/bg-contact-form-02.jpg) center center no-repeat;"></div>
    <div class="section-split-right matchHeigh">
        <div class="we-work-section">
            <div class="heading-section heading-section-1 light">
                <h3>WHAT SETS US APART</h3>
            </div>
            <div class="accordion-box accordion-box-1 accordion-box-2" data-accordion-group>
                <div class="accordion open m-b-5" data-accordion>
                    <div class="accordion-title" data-control>
                        <p>01. Expertise</p>
                    </div>
                    <div class="accordion-content animated" data-content>
                        <div class="content-inner">
                            <p>With years of industry experience, our team of HR specialists, recruitment experts, and seasoned consultants brings a deep understanding of the challenges businesses face today. We leverage this knowledge to tailor solutions that address your unique needs.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion m-b-5" data-accordion>
                    <div class="accordion-title" data-control>
                        <p>02. Comprehensive Solutions</p>
                    </div>
                    <div class="accordion-content animated" data-content>
                        <div class="content-inner">
                            <p>From comprehensive HR training programs that equip your team with essential skills to strategic recruitment services that connect you with top-tier talent, and from financial analysis to operational optimization, our suite of services covers the entire spectrum of your business needs.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion m-b-5" data-accordion>
                    <div class="accordion-title" data-control>
                        <p>03. Client-Centric Approach</p>
                    </div>
                    <div class="accordion-content animated" data-content>
                        <div class="content-inner">
                            <p>Your success is our top priority. We take the time to listen, understand, and collaborate closely with each client. This personalized approach allows us to craft solutions that align perfectly with your goals and aspirations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section bg-grey-light p-t-70 p-b-20">
    <div class="container">
        <div class="relative">
            <div class="p-b-15">
                <div class="heading-section heading-section-2 dark">
                    <h3>LET'S CONNECT</h3>
                </div>
            </div>
            <!-- <div class="owl-carousel dark nav-style-2" data-carousel-margin="30" data-carousel-nav="true" data-carousel-loop="true" data-carousel-items="5" data-carousel-autoplay="true">
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
            </div> -->
        </div>
    </div>
</section>

<div class="section bg-primary p-t-25 p-b-25 cta-section-1 cta-section-2">
    <div class="container text-center">
        <div class="block-left">
            <p class="text-block text-med m-b-30">Whether you're a small startup or an established enterprise, we're here to guide you on your journey to success. Let's work together to build a stronger, more efficient, and more prosperous future for your business.</p>
            <a class="au-btn au-btn-border au-btn-border-light" href="/contact">Talk With Us</a>
        </div>
    </div>
</div>
@endsection
