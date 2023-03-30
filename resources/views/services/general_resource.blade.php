@extends('layouts.frontend', ['title' => 'General Resource &amp; Material Needs'])

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'General Resource &amp; Material Needs', 'subtitle' => 'General Resource &amp; Material Needs'])
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
                            General Resource &amp; Material Needs
                        </h3>
                        <p class="text-block m-b-30">
                            Nulla commodo iaculis ligula, ac dapibus quam ornare ut.
                            Praesent ac hendrerit sem, et tempus sem. Donec sit amet elit
                            a felis tristique eleifend. Aliquam erat volutpat . Cras metus
                            ipsum, tincidunt in bibendum vitae, fringilla ac ipsum. Sed at
                            eros quis mi pulvinar lacinia eget sed ex. Vestibulum eget
                            ipsum porttitor, cursus urna nec, ultrices enim. Sed eget
                            dignissim nulla, non facilisis augue. Fusce nec dictum nunc.
                            Maecenas hendrerit tempus magna eu ultricies. Cum sociis
                            natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Maecenas eros ligula, porta non leo porttitor,
                            laoreet mollis nisl.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="text-block text-bold text-black text-med-sm m-b-20">
                                    IT Strategy
                                </h4>
                                <p class="text-block m-b-30">
                                    Duis nunc tortor, condimentum porta leo id, tempus mollis
                                    nulla. Suspendisse blandit congue rutrum. Proin nec
                                    porttitor arcu. Etiam a dictum odio. Vivamus massa purus,
                                    dignissim vitae volutpat ac, fringilla in orci. Nulla
                                    faecenas blandit bibendum laoreet. Nam justo arcu, tempor
                                    eu dolor nec, suscipit laoreet odio. Donec mattis est eget
                                    sem euismod, in cursus massa ullamcorper.
                                </p>
                                <h4 class="text-block text-bold text-black text-med-sm m-b-20">
                                    IT Performance Check
                                </h4>
                                <p class="text-block">
                                    Morbi eros augue, euismod non posuere vel, accumsan at
                                    nulla. Mauris sit amet tempus orci. Sed vel bibendum urna,
                                    in blandit nunc. Praesent eget mauris auctor, efficitur
                                    justo sed, consectetur dolor. Cras aliquet mi vitae
                                    convallis luctus. Aenean imperdiet mi et eleifend
                                    efficitur.
                                </p>
                            </div>
                            <div class="col-md-6 js-waypoint">
                                <h4 class="text-block text-bold text-black text-med-sm m-b-20">
                                    IT Performance Improvement
                                </h4>
                                <p class="text-block m-b-30">
                                    Sed vel bibendum urna, in blandit nunc. Praesent eget
                                    mauris auctor, efficitur justo sed, consectetur dolor.
                                    Cras aliquet mi vitae convallis luctus. Aenean imperdiet
                                    mi et eleifend efficitur.
                                </p>
                                <div class="progress-box progress-box-3 m-r-25">
                                    <div class="au-progress au-progress-3 vertical">
                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="39">
                                            <span></span>
                                        </div>
                                    </div>
                                    <p class="progress-label">Income</p>
                                </div>
                                <div class="progress-box progress-box-3 m-r-25">
                                    <div class="au-progress au-progress-3 vertical">
                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="75">
                                            <span></span>
                                        </div>
                                    </div>
                                    <p class="progress-label">Save Money</p>
                                </div>
                                <div class="progress-box progress-box-3">
                                    <div class="au-progress au-progress-3 vertical">
                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="100">
                                            <span></span>
                                        </div>
                                    </div>
                                    <p class="progress-label">Satisfaction</p>
                                </div>
                            </div>
                        </div>
                        <div class="post-content-accordion m-b-50 m-t-50">
                            <div class="accordion-box accordion-box-1" data-accordion-group>
                                <div class="accordion open m-b-10" data-accordion>
                                    <div class="accordion-title" data-control>
                                        <span></span>
                                        <p class="text-bold text-block">Staffing Solution</p>
                                    </div>
                                    <div class="accordion-content animated" data-content>
                                        <div class="content-inner">
                                            <p>
                                                Fusce ornare mi vel risus porttitor dignissim. Nunc
                                                eget risus at ipsum blandit ornare vel sed velit.
                                                Proin gravida arcu nisl, a dignissim mauris placerat
                                                id. Vivamus interdum urna at sapien varius
                                                elementum. Suspendisse ut mi felis et interdum
                                                libero lacinia vel.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion m-b-10" data-accordion>
                                    <div class="accordion-title" data-control>
                                        <span></span>
                                        <p class="text-bold text-block">
                                            Understand Your Business and Objectives
                                        </p>
                                    </div>
                                    <div class="accordion-content animated" data-content>
                                        <div class="content-inner">
                                            <p>
                                                Fusce ornare mi vel risus porttitor dignissim. Nunc
                                                eget risus at ipsum blandit ornare vel sed velit.
                                                Proin gravida arcu nisl, a dignissim mauris placerat
                                                id. Vivamus interdum urna at sapien varius
                                                elementum. Suspendisse ut mi felis et interdum
                                                libero lacinia vel.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion m-b-10" data-accordion>
                                    <div class="accordion-title" data-control>
                                        <span></span>
                                        <p class="text-bold text-block">
                                            Develop a Plan & Implementation
                                        </p>
                                    </div>
                                    <div class="accordion-content animated" data-content>
                                        <div class="content-inner">
                                            <p>
                                                Fusce ornare mi vel risus porttitor dignissim. Nunc
                                                eget risus at ipsum blandit ornare vel sed velit.
                                                Proin gravida arcu nisl, a dignissim mauris placerat
                                                id. Vivamus interdum urna at sapien varius
                                                elementum. Suspendisse ut mi felis et interdum
                                                libero lacinia vel.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion m-b-10" data-accordion>
                                    <div class="accordion-title" data-control>
                                        <span></span>
                                        <p class="text-bold text-block">
                                            Become a value added Partner
                                        </p>
                                    </div>
                                    <div class="accordion-content animated" data-content>
                                        <div class="content-inner">
                                            <p>
                                                Fusce ornare mi vel risus porttitor dignissim. Nunc
                                                eget risus at ipsum blandit ornare vel sed velit.
                                                Proin gravida arcu nisl, a dignissim mauris placerat
                                                id. Vivamus interdum urna at sapien varius
                                                elementum. Suspendisse ut mi felis et interdum
                                                libero lacinia vel.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" data-accordion>
                                    <div class="accordion-title" data-control>
                                        <span></span>
                                        <p class="text-bold text-block">Work Hard & Success</p>
                                    </div>
                                    <div class="accordion-content animated" data-content>
                                        <div class="content-inner">
                                            <p>
                                                Fusce ornare mi vel risus porttitor dignissim. Nunc
                                                eget risus at ipsum blandit ornare vel sed velit.
                                                Proin gravida arcu nisl, a dignissim mauris placerat
                                                id. Vivamus interdum urna at sapien varius
                                                elementum. Suspendisse ut mi felis et interdum
                                                libero lacinia vel.
                                            </p>
                                        </div>
                                    </div>
                                </div>
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
                    <li>
                        <a href="{{route('service.human.resource.management')}}" class="{{ (request()->is('service/human/resource/management')) ? 'active' : '' }}">Human Resource Management</a>
                    </li>
                    <li>
                        <a href="{{route('service.financial.service')}}" class="{{ (request()->is('service/financial/services')) ? 'active' : '' }}">Financial Services</a>
                    </li>
                    <li>
                        <a href="{{route('service.information.technology')}}" class="{{ (request()->is('service/information/technology')) ? 'active' : '' }}">Information Technology</a>
                    </li>
                    <li>
                        <a href="{{route('service.general.resource')}}" class="{{ (request()->is('service/general/resouce')) ? 'active' : '' }}">General Resource &amp; Material Needs</a>
                    </li>
                    <li>
                        <a href="{{route('service.waste.management')}}" class="{{ (request()->is('service/waste/management')) ? 'active' : '' }}">Waste Management</a>
                    </li>
                    <li>
                        <a href="{{route('service.professional.service')}}" class="{{ (request()->is('service/professional/services')) ? 'active' : '' }}">Professional Services</a>
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
            <p class="text-block text-med">The focus of our business is people.</p>
        </div>
        <div class="block-right">
            <a class="au-btn au-btn-border au-btn-border-light" href="/contact">Talk With Us</a>
        </div>
    </div>
</div>
@endsection