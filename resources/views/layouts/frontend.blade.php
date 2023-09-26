<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}} - {{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{URL::asset('fonts/fonts.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/elegant-icons/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/css-hamburgers/dist/hamburgers.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/chosen/chosen.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/plyr/plyr.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/colors/primary.css')}}" rel="stylesheet" id="colors">
    <link href="{{URL::asset('css/retina.css')}}" rel="stylesheet">

    {!! SEO::generate() !!}

    <link rel="shortcut icon" href="{{URL::asset('images/icons/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{URL::asset('images/icons/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('images/icons/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('images/icons/apple-touch-icon-114x114.png')}}">
    <script src="{{URL::asset('js/modernizr-custom.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>
</head>

<body>
    <div class="page-loader">
        <div class="loader"></div>
    </div>
    
    <!-- Header -->
    @includeIf('layouts.header')
    <!-- Header Ends -->

    <!-- Banner -->
    @yield('banner')
    <!-- Banner Ends -->

    <!-- Breadcrumb -->
    @yield('breadcrumb')
    <!-- Breadcrumb Ends -->

    <!-- Page-Content -->
    @yield('page-content')
    <!-- Page-Content Ends -->

    <!-- Footer -->
    @includeIf('layouts.footer')
    <!-- Footer Ends -->

    <div id="up-to-top">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11345584943"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-11345584943');
    </script>

    <script src="{{URL::asset('vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{URL::asset('vendor/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('vendor/headroom/headroom.min.js')}}"></script>
    <script src="{{URL::asset('vendor/matchHeight/dist/jquery.matchHeight-min.js')}}"></script>
    <script src="{{URL::asset('vendor/SmoothScroll/SmoothScroll.js')}}"></script>
    <script src="{{URL::asset('vendor/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('vendor/plyr/plyr.min.js')}}"></script>
    <script src="{{URL::asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('vendor/jquery-accordion/js/jquery.accordion.js')}}"></script>
    <script src="{{URL::asset('vendor/chosen/chosen.jquery.js')}}"></script>
    <script src="{{URL::asset('vendor/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('vendor/paroller.js/jquery.paroller.min.js')}}"></script>
    <script src="{{URL::asset('vendor/retinajs/dist/retina.min.js')}}"></script>
    <script src="{{URL::asset('js/owl-custom.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{URL::asset('js/switcher-custom.js')}}"></script>
    <script src="{{URL::asset('vendor/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{URL::asset('vendor/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('vendor/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('vendor/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{URL::asset('js/revo-slider-custom.js')}}"></script>

</body>
</html>