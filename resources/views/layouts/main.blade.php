<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | United Nations Diplomatic Courier</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('favicon.png') }}">

    <!-- LOAD CSS FILES -->
    <link href="{{ asset('main/css/main.css') }}" rel="stylesheet" type="text/css">
    <script src="//code.jivosite.com/widget/nAk1DmrPDs" async></script>

</head>

<body>
<div id="preloader"></div>
<div id="wrapper">
    <!-- header begin -->
    <div align="center" id="google_translate_element"></div>
    <header>
        <div class="container">
            <span id="menu-btn"></span>
            <div class="row">
                <div class="col-md-3">
                    <!-- logo begin -->
                    <div id="logo">
                        <div class="inner">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('un_diplomatic_courier_logo.png') }}" alt="" class="logo-1">
                                <img src="{{ asset('un_diplomatic_courier_logo.png') }}" alt="" class="logo-2">
                            </a>

                        </div>
                    </div>
                    <!-- logo close -->
                </div>

                <div class="col-md-9">

                    <!-- mainmenu begin -->
                    <nav id="mainmenu-container">
                        <ul id="mainmenu">
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('about') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ url('services') }}">Services</a>
                            </li>
                            <li>
                                <a href="{{ url('track-shipment') }}">Track Shipment</a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- mainmenu close -->

                    <!-- social icons -->
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </div>
                    <!-- social icons close -->

                </div>
            </div>

        </div>
    </header>
    <!-- header close -->

    @yield('contents')

    <!-- footer begin -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <h3>Our Services</h3>
                    <div class="tiny-border"></div>
                    <ul>
                        <li><a href="{{ url('services') }}">Ocean Freight</a></li>
                        <li><a href="{{ url('services') }}">Sky Freight</a></li>
                        <li><a href="{{ url('services') }}">Cargo Express</a></li>
                        <li><a href="{{ url('services') }}">Logistics</a></li>
                        <li><a href="{{ url('services') }}">Warehousing</a></li>
                        <li><a href="{{ url('services') }}">Custom Brokerage</a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h3>Location</h3>
                    <div class="tiny-border"></div>
                    Head/Corporate Office:305 East 47th Street,3 Dag Plaza,4th Floor United States of America.<br>
                    Branch office: 3962 Anahiem DR 3962 Anahiem Street,Bsarlbbx Kabul Afghanistan.<br>
                    T. +1(650)487-0645<br>
                    E. info@uncourierdeliveryservices.org
                </div>

                <div class="col-md-4">
                    <h3>Social</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="divider"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="spacer-single"></div>
                    &copy; Copyright {{ date('Y') }} - United Nations Diplomatic Courier
                </div>
            </div>
        </div>
    </footer>
    <!-- footer close -->
</div>

<!-- LOAD JS FILES -->
<script src="{{ asset('main/js/jquery.min.js') }}"></script>
<script src="{{ asset('main/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('main/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('main/js/easing.js') }}"></script>
<script src="{{ asset('main/js/jquery.ui.totop.js') }}"></script>
<script src="{{ asset('main/js/ender.js') }}"></script>
<script src="{{ asset('main/js/owl.carousel.js') }}"></script>
<script src="{{ asset('main/js/jquery.fitvids.js') }}"></script>
<script src="{{ asset('main/js/jquery.plugin.js') }}"></script>
<script src="{{ asset('main/js/wow.min.js') }}"></script>
<script src="{{ asset('main/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('main/js/jquery.stellar.js') }}"></script>
<script src="{{ asset('main/js/typed.js') }}"></script>
<script src="{{ asset('main/js/jquery.scrollto.js') }}"></script>
<script src="{{ asset('main/js/custom.js') }}"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{ asset('main/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('main/js/revslider-custom.js') }}"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
