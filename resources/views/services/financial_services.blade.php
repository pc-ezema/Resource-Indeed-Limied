@extends('layouts.frontend', ['title' => 'Financial Services'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Financial Services', 'subtitle' => 'Financial Services'])
@endsection

@section('page-content')
<div class="page-content p-t-80 p-b-30">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <section class="section post-section-1 p-l-10">
                    <div class="post-image owl-carousel dark nav-style-3 dots-style-1 m-b-35" data-carousel-nav="true" data-carousel-dots="true" data-carousel-loop="true" data-carousel-items="1" data-carousel-sm="1" data-carousel-xs="1" data-carousel-lg="1" data-carousel-md="1" data-carousel-autoplay="true">
                        <img class="img-responsive" src="{{URL::asset('images/service-02.jpg')}}" alt="Post Image" />
                        <img class="img-responsive" src="{{URL::asset('images/service-03.jpg')}}" alt="Post Image" />
                        <img class="img-responsive" src="{{URL::asset('images/service-04.jpg')}}" alt="Post Image" />
                        <img class="img-responsive" src="{{URL::asset('images/service-05.jpg')}}" alt="Post Image" />
                        <img class="img-responsive" src="{{URL::asset('images/service-06.jpg')}}" alt="Post Image" />
                        <img class="img-responsive" src="{{URL::asset('images/service-07.jpg')}}" alt="Post Image" />
                        <img class="img-responsive" src="{{URL::asset('images/service-08.jpg')}}" alt="Post Image" />
                        <img class="img-responsive" src="{{URL::asset('images/service-09.jpg')}}" alt="Post Image" />
                        <img class="img-responsive" src="{{URL::asset('images/service-10.jpg')}}" alt="Post Image" />
                    </div>
                    <div class="post-content">
                        <h3 class="text-block text-bold text-black text-med-large m-b-25">
                            Financial Services
                        </h3>
                        <p class="text-block m-b-30">
                            Achieve financial excellence with our dedicated Financial Services. Our team of financial experts collaborates with you to streamline your financial processes, optimize resource allocation, and enhance profitability. Whether you're a startup seeking financial stability or an established business looking to expand, our services are tailored to your unique financial objectives.
                        </p>
                        <div class="row">
                            <div class="col-12">
                                <h4 class="text-block text-bold text-black text-med-sm m-b-20">
                                    Our Financial Services include:
                                </h4>
                                <ol>
                                    <li>Financial Analysis and Reporting</li>
                                    <li>Budgeting and Forecasting</li>
                                    <li>Investment Strategy Consulting</li>
                                    <li>Tax Planning and Compliance</li>
                                </ol>
                                <p class="text-block m-b-30">Experience financial peace of mind and unlock new opportunities with our strategic financial solutions.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-3 col-md-pull-9">
                <h4 class="text-bold text-bold text-med m-t-0 m-b-30">
                    What We Do
                </h4>
                <ul class="post-tabs post-tabs-1 m-b-40">
                    <li>
                        <a href="#">All Services</a>
                    </li>
                    <li >
                        <a href="{{route('service.human.capital.development')}}" class="{{ (request()->is('service/human/capital/development')) ? 'active' : '' }}">Human Capital Development</a>
                    </li>
                    <li>
                        <a href="{{route('service.financial.services')}}" class="{{ (request()->is('service/financial/services')) ? 'active' : '' }}">Financial Services</a>
                    </li>
                    <li>
                        <a href="{{route('service.ict.solutions')}}" class="{{ (request()->is('service/ict/solutions')) ? 'active' : '' }}">ICT Solutions</a>
                    </li>
                    <li>
                        <a href="{{route('service.general.resources')}}" class="{{ (request()->is('service/general/resouces')) ? 'active' : '' }}">General Resources</a>
                    </li>
                </ul>
                <div class="banner-contact m-b-50">
                    <h4>How can we help you?</h4>
                    <p class="m-b-20">
                        To discuss how our team can help your business achieve true
                        results, please
                    </p>
                    <a class="au-btn au-btn-border au-btn-border-light au-btn-block" href="/contact">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section bg-primary p-t-25 p-b-25 cta-section-1 cta-section-2">
    <div class="container">
        <div class="block-left">
            <p class="text-block text-med">We are your partners in driving success.</p>
        </div>
        <div class="block-right">
            <a class="au-btn au-btn-border au-btn-border-light" href="/contact">Talk With Us</a>
        </div>
    </div>
</div>
@endsection