<footer id="footer">
    <div class="footer footer-1 bg-black">
        <div class="top-footer p-t-50 p-b-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-block-1">
                            <div class="logo">
                                <img src="{{URL::asset('images/icons/ril-logo-01.png')}}" alt="Consulting" />
                            </div>
                            <div class="quick-link">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <ul>
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
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <ul>
                                            <li>
                                                <a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                                            </li>
                                            <li>
                                                <a href="/about" class="{{ (request()->is('about')) ? 'active' : '' }}">Who we are</a>
                                            </li>
                                            <li>
                                                <a href="/contact" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact Us</a>
                                            </li>
                                            <li>
                                                <a href="/training" class="{{ (request()->is('training')) ? 'active' : '' }}">Training</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-block-2">
                            <div class="title">
                                <h3>Contact us</h3>
                            </div>
                            <div class="contact-list">
                                <ul>
                                    <li>Address 1: 19, Sanyaolu Street, Off Kudirat Abiola way, Oregun, Lagos, Nigeria.</li>
                                    <li>Phone 1: +2348037224228</li>
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
                                    <li>Address 2: 133B, Blades Enterprise Centre, Sheffield. S2 4SW United Kingdom.</li>
                                    <li>Phone 2: +44 7404 948 746</li>
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>