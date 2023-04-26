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
                        <a href="#" class="{{ (request()->is('service*')) ? 'active' : '' }}">Our Services</a>
                        <span class="arrow">
                            <i></i>
                        </span>
                        <ul class="drop-menu bottom-right">
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
                                <a href="#" class="{{ (request()->is('service*')) ? 'active' : '' }}">Our Services</a>
                                <ul class="drop-menu bottom-right promise">
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
                        <span>+2348037224228</span>
                        </div>
                        <a class="au-btn au-btn-primary" href="/contact">Talk With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>