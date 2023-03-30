<header>
    <div class="hidden-tablet-landscape-up">
        <div class="header header-mobile-1">
            <div class="top-header">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="/">
                            <img src="{{URL::asset('images/icons/ril-logo-02.png')}}" alt="Consulting" />
                        </a>
                    </div>
                    <div class="search-widget search-widget-1">
                        <div class="icon-search">
                            <i class="icon_search"></i>
                        </div>
                        <input class="animated" type="text" placeholder="Search" />
                    </div>
                    <button class="hamburger hamburger--spin hidden-tablet-landscape-up" id="toggle-icon">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="au-navbar-mobile navbar-mobile-1">
                <ul class="au-navbar-menu">
                   <li>
                        <a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                    </li>
                    <li>
                        <a href="/about" class="{{ (request()->is('about')) ? 'active' : '' }}">Who we are</a>
                    </li>
                    <li class="drop">
                        <a href="#" class="{{ (request()->is('service*')) ? 'active' : '' }}">Industry Expertise</a>
                        <span class="arrow">
                            <i></i>
                        </span>
                        <ul class="drop-menu bottom-right">
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
                    </li>
                    <li>
                        <a href="/contact" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section hidden-tablet-landscape bg-gradient section-navbar-1 section-navbar-2 section-navbar-3 section-navbar-4 section-navbar-5" id="js-navbar-fixed">
        <div class="container-fluid">
            <div class="header header-2 header-3 light">
                <div class="block-left">
                    <div class="logo">
                        <a href="/">
                            <img src="{{URL::asset('images/icons/ril-logo-01.png')}}" alt="Consulting" />
                        </a>
                    </div>
                </div>
                <div class="block-center">
                    <div class="au-navbar navbar-1 navbar-2">
                        <ul class="au-navbar-menu">
                            <li>
                                <a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                            </li>
                            <li>
                                <a href="/about" class="{{ (request()->is('about')) ? 'active' : '' }}">Who we are</a>
                            </li>
                            <li class="drop">
                                <a href="#" class="{{ (request()->is('service*')) ? 'active' : '' }}">Industry Expertise</a>
                                <ul class="drop-menu bottom-right promise">
                                    <li >
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
                            </li>
                            <li>
                                <a href="/contact" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block-right hidden-desktop-large">
                    <div class="contact-widget contact-widget-2 contact-widget-3">
                        <div class="icon-box icon-box-4">
                        <span class="icon icon_phone"></span>
                        <span>1-800-123-6889</span>
                        </div>
                        <a class="au-btn au-btn-primary" href="/contact">Talk With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>