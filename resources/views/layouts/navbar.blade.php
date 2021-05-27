<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tienda de ropa online </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">

    <!-- CSS here -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slicknav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Preloader Start-->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('img/logo/logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <div class="flag">
                                        <img width="27px" height="16px" src="{{ asset('img/icon/mexico.png') }}"
                                            alt="">
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select1">
                                                    <option value="">MEX</option>
                                                    <option value="">USA</option>
                                                    <option value="">CDA</option>
                                                    <option value="">USD</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="contact-now">
                                        <li>+52 33 26 14 56 87</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul>
                                        @if (Route::has('login'))
                                            @auth
                                                <li><a href="{{ url('/dashboard') }}">Tablero</a></li>
                                            @else
                                                <li><a href="{{ route('login') }}">Iniciar sesión</a>
                                                </li>

                                                @if (Route::has('register'))
                                                    <li><a href="{{ route('register') }}">Registrarse</a>
                                                    </li>
                                                @endif
                                            @endauth
                                        @endif
                                        <li><a href="product_list.html">Lista de deseos </a></li>
                                        <li><a href="cart.html">Shopping</a></li>
                                        <li><a href="cart.html">Carrito de compras</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                    <a href="index.html">
                                        <h2>Logotipo</h2>
                                        <!--<img src="{{ asset('img/logo/logo.png') }}" -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Página princial</a></li>
                                            <li><a href="Catagori.html">Categoria</a></li>
                                            <li class="hot"><a href="#">Lo más nuevo</a>
                                                <ul class="submenu">
                                                    <li><a href="product_list.html"> Lista de productos</a></li>
                                                    <li><a href="single-product.html"> Detalle de producto</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="login.html">Iniciar sesión</a></li>
                                                    <li><a href="cart.html">Card</a></li>
                                                    <li><a href="elements.html">Elementos</a></li>
                                                    <li><a href="about.html">Acerca de</a></li>
                                                    <li><a href="confirmation.html">Confirmación</a></li>
                                                    <li><a href="cart.html">Carrito de compras</a></li>
                                                    <li><a href="checkout.html">Product Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contacto</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=" d-none d-xl-block">
                                        <div class="favorit-items">
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-card">
                                            <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    @yield('content')

    @extends('layouts/footer')

</body>

</html>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="{{ 'js/vendor/modernizr-3.5.0.min.js' }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ 'js/vendor/jquery-1.12.4.min.js' }}"></script>
<script src="{{ 'js/popper.min.js' }}"></script>
<script src="{{ 'js/bootstrap.min.js' }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ 'js/jquery.slicknav.min.js' }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ 'js/owl.carousel.min.js' }}"></script>
<script src="{{ 'js/slick.min.js' }}"></script>

<!-- One Page, Animated-HeadLin -->
<script src="{{ 'js/wow.min.js' }}"></script>
<script src="{{ 'js/animated.headline.js' }}"></script>
<script src="{{ 'js/jquery.magnific-popup.js' }}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{ 'js/jquery.scrollUp.min.js' }}"></script>
<script src="{{ 'js/jquery.nice-select.min.js' }}"></script>
<script src="{{ 'js/jquery.sticky.js' }}"></script>

<!-- contact js -->
<script src="{{ 'js/contact.js' }}"></script>
<script src="{{ 'js/jquery.form.js' }}"></script>
<script src="{{ 'js/jquery.validate.min.js' }}"></script>
<script src="{{ 'js/mail-script.js' }}"></script>
<script src="{{ 'js/jquery.ajaxchimp.min.js' }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ 'js/plugins.js' }}"></script>
<script src="{{ 'js/main.js' }}"></script>
