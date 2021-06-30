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
    @yield('preloader')
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
                                        <li><a href="#">Lista de deseos </a></li>
                                        <li><a href="#">Shopping</a></li>
                                        <li><a href="#">Carrito de compras</a></li>
                                        <li><a href="#">Checkout</a></li>
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
                                    <a href="/">
                                        <img src="{{ asset('img/logo/logo.png') }}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">Página princial</a></li>
                                            <li><a href=" {{ route('product.index') }} ">Categorías</a>
                                                <ul class="submenu">
                                                    @foreach ($categories as $c)
                                                        <li>
                                                            <a href="{{ route('product.filter', $c) }}">{{ $c->name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                    <li>
                                                        <a href="{{ route('product.index') }}">Todos</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="hot"><a href="#">Lo más nuevo</a>
                                                <ul class="submenu">
                                                    <li><a href=" {{ route('product.index') }} "> Lista de
                                                            productos</a></li>
                                                    <li><a href=" {{ route('product.create') }} "> Nuevo producto</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="#">Iniciar sesión</a></li>
                                                    <li><a href="#">Card</a></li>
                                                    <li><a href="#">Elementos</a></li>
                                                    <li><a href="#">Acerca de</a></li>
                                                    <li><a href="#">Confirmación</a></li>
                                                    <li><a href="#">Carrito de compras</a></li>
                                                    <li><a href="#">Product Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Contacto</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right autocomplete">
                                            <input type="text" name="myCountry" id="myInput" placeholder="Buscar">
                                            <a id="search-value" href="#">
                                                <div class="search-icon">
                                                    <i class="fas fa-search special-tag">
                                                    </i>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    @auth
                                        <li class=" d-none d-xl-block">
                                            <div class="favorit-items">
                                                <i class="far fa-heart"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-card">
                                                <a href="{{ route('cart.show') }}">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                            <style>
                                                .shopping-card::before {
                                                    content: "02"
                                                }

                                            </style>
                                        </li>
                                    @endauth
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

    <!-- Latest Offers Start -->
    <div class="latest-wrapper lf-padding">
        <div class="latest-area latest-height d-flex align-items-center"
            data-background="{{ asset('img/collection/latest-offer.png') }}">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                        <div class="latest-caption">
                            <h2>Recibe nuestras<br>últimas ofertas y novedades</h2>
                            <p>¡Suscríbete ya!</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6 ">
                        <div class="latest-subscribe">
                            <form action="#">
                                <input type="email" placeholder="Correo electrónico">
                                <button>Comprar ahora</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- man Shape -->
            <div class="man-shape">
                <img src="{{ asset('img/collection/latest-man.png') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Latest Offers End -->
    <!-- Shop Method Start-->
    <div class="shop-method-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-package"></i>
                        <h6>Envío gratuito</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-unlock"></i>
                        <h6>Sistema de pago seguro</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-reload"></i>
                        <h6>Recibe lo que buscas</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Method End-->
    <!-- Gallery Start-->
    <div class="gallery-wrapper lf-padding">
        <div class="gallery-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="gallery-items">
                        <img src="{{ asset('img/gallery/gallery1.jpg') }}" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{ asset('img/gallery/gallery2.jpg') }}" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{ asset('img/gallery/gallery3.jpg') }}" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{ asset('img/gallery/gallery4.jpg') }}" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{ asset('img/gallery/gallery5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End-->

    @extends('layouts/footer')

</body>

</html>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>

<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/animated.headline.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('js/contact.js') }}"></script>
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].name.substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].name.substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].name.substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i].name + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    var s = document.getElementById("search-value");
                    s.setAttribute('href', '/product/' + arr[i].id);
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        document.getElementById('search-value').click();
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                //e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }

                document.getElementById('search-value').click();
            }
        });

        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function(e) {
            closeAllLists(e.target);
        });
    }

    /*An array containing all the country names in the world:*/
    var products = {!! json_encode($products->toArray()) !!};

    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    autocomplete(document.getElementById("myInput"), products);
</script>
