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
                    <li class="drop">
                        <a href="#">Home</a>
                        <span class="arrow">
                            <i></i>
                        </span>
                    </li>
                    <li>
                        <a href="about-v3.html">Who we are</a>
                    </li>
                    <li class="drop">
                        <a href="#">Services</a>
                        <span class="arrow">
                            <i></i>
                        </span>
                        <ul class="drop-menu bottom-right">
                            <li class="drop">
                                <a href="#">Services List</a>
                                <ul class="drop-menu top-right">
                                    <li>
                                        <a href="services-v1.html">Services List v1</a>
                                    </li>
                                    <li>
                                        <a href="services-v2.html">Services List v2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="drop">
                                <a href="#">Services Details</a>
                                <ul class="drop-menu top-right">
                                    <li>
                                        <a href="service-v1.html">Services Details v1</a>
                                    </li>
                                    <li>
                                        <a href="service-v2.html">Services Details v2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="testinmonials.html">Testinmonials</a>
                    </li>
                    <li class="drop">
                        <a href="#">Projects</a>
                        <span class="arrow">
                            <i></i>
                        </span>
                        <ul class="drop-menu bottom-right">
                            <li>
                                <a href="portfolios.html">Projects List</a>
                            </li>
                            <li>
                                <a href="portfolio-single.html">Projects Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="drop">
                        <a href="#">News</a>
                        <span class="arrow">
                            <i></i>
                        </span>
                        <ul class="drop-menu bottom-right">
                            <li>
                                <a href="blogs.html">News List</a>
                            </li>
                            <li>
                                <a href="blog-single.html">News Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                    <li class="drop">
                        <a href="#">Pages</a>
                        <span class="arrow">
                            <i></i>
                        </span>
                        <ul class="drop-menu bottom-right">
                            <li>
                                <a href="about-v1.html">About Page v1</a>
                            </li>
                            <li>
                                <a href="about-v2.html">About Page v2</a>
                            </li>
                            <li>
                                <a href="about-v3.html">About Page v3</a>
                            </li>
                            <li>
                                <a href="about-history.html">About History</a>
                            </li>
                            <li>
                                <a href="about-partnerships.html">About Partnerships</a>
                            </li>
                            <li>
                                <a href="about-leadership.html">About Leadership</a>
                            </li>
                            <li>
                                <a href="about-teammember.html">About Teammember</a>
                            </li>
                            <li>
                                <a href="about-careers.html">About Careers</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="container-fluid">
                <div class="contact-widget contact-widget-1">
                    <div class="icon-box icon-box-1">
                        <div class="icon">
                            <i class="icon_phone"></i>
                        </div>
                        <div class="content">
                            <p>1-800-123-6889</p>
                            <p><a href="https://freebw.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2f4c40415b4e4c5b6f5c465b4a014c4042">[email&#160;protected]</a></p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-1">
                        <div class="icon">
                            <i class="icon_pin"></i>
                        </div>
                        <div class="content">
                            <p>8th floor, 379 Hudson St</p>
                            <p>New York, NY 10018</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-1">
                        <div class="icon">
                            <i class="icon_clock"></i>
                        </div>
                        <div class="content">
                            <p>09:30 am – 06:00 pm</p>
                            <p>Every Day</p>
                        </div>
                    </div>
                    <a class="hidden-tablet-landscape au-btn au-btn-primary" href="#">Get A Quote</a>
                </div>
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
                                <a href="#" class="{{ (request()->is('')) ? 'active' : '' }}">Industry Expertise</a>
                                <ul class="drop-menu bottom-right">
                                    <li>
                                        <a href="#">Human Resource Management</a>
                                    </li>
                                    <li>
                                        <a href="#">Financial Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Information Technology</a>
                                    </li>
                                    <li>
                                        <a href="#">General Resource &amp; Material Needs</a>
                                    </li>
                                    <li>
                                        <a href="#">Waste Management</a>
                                    </li>
                                    <li>
                                        <a href="#">Professional Services</a>
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
        </div>
    </div>

</header>