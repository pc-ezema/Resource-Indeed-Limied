<footer id="footer">
    <div class="footer footer-1 bg-black">
        <div class="top-footer p-t-50 p-b-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="footer-block-1">
                            <div class="logo">
                                <img src="{{URL::asset('images/icons/ril-logo-01.png')}}" alt="Consulting" />
                            </div>
                            <div class="quick-link">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <ul>
                                            <li>
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
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <ul>
                                            <li>
                                                <a href="/about" class="{{ (request()->is('about')) ? 'active' : '' }}">Who we are</a>
                                            </li>
                                            <li>
                                                <a href="/contact" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact Us</a>
                                            </li>
                                            <li>
                                                <a href="/training/continuous/course" class="{{ (request()->is('training')) ? 'active' : '' }}">Continuous Course</a>
                                            </li>
                                            <li>
                                                <a href="/training/e-learning-form" class="{{ (request()->is('/e-learning-form')) ? 'active' : '' }}">E-Learning</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-block-2">
                            <div class="title">
                                <h3>Contact us</h3>
                            </div>
                            <div class="contact-list">
                                <ul>
                                    <li>Address: 133B, Blades Enterprise Centre, Sheffield. S2 4SW United Kingdom.</li>
                                    <li>Phone: +44 7404 948 746</li>
                                    <li>Email: <a href="mailto:contact@resourceindeed.com" style="color:#aaa">contact@resourceindeed.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-block-2">
                            <div class="title">
                                <h3>Follow us</h3>
                            </div>
                            <div class="contact-list">
                                <ul>
                                    <li>Address: 133B, Blades Enterprise Centre, Sheffield. S2 4SW United Kingdom.</li>
                                    <li>Phone: +44 7404 948 746</li>
                                </ul>
                            </div>
                            <div id="social-list">
                                <ul>
                                    <li>
                                        <a href="https://www.instagram.com/resourceindeed?utm_source=qr&igsh=cGJ0c3p2OXpndnZt" ><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/98648430/admin/dashboard/" ><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bot-footer">
            <div class="container">
                <div class="block-inner p-t-35 p-b-60">
                    <div class="block-left">
                        <span>© {{ date('Y') }} {{config('app.name')}}. All rights reserved. <a href="mailto:promiseezema11@gmail.com" target="_blank" class="text-white">Site Credit</a></span>
                    </div>
                    <div class="block-right">
                        <div class="quick-link">
                            <ul>
                                <li>
                                    <a href="/about">About</a>
                                </li>
                                <li>
                                    <a href="/contact">Contact Us</a>
                                </li>
                                <li>
                                    <a href="/jobs">Jobs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    #social-list ul {
        display: flex;
        list-style: none;
        padding: 0;
    }

    #social-list ul li {
        margin-right: 10px;
        /* Adjust spacing between icons */
    }

    #social-list ul li:last-child {
        margin-right: 0;
        /* Removes margin for the last item */
    }

    #social-list a{
        color: #f58634 !important;
    }
</style>
