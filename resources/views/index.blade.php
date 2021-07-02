@extends('layouts/main')
@section('preloader')
    <!-- Preloader Start -->
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
    <!-- Preloader Start -->
@endsection
@section('content')
    <main>

        <!-- slider Area Start -->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height" data-background="{{ asset('img/hero/h1_hero.jpg') }}">
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="{{ asset('img/hero/hero_man.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInRight" data-delay=".4s">Nuevos productos</span>
                                    <h1 data-animation="fadeInRight" data-delay=".6s">Colección de <br> mujeres</h1>
                                    <p data-animation="fadeInRight" data-delay=".8s">Mejor colección de ropa 2021!</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                        <a href="{{ route('product.index') }}" class="btn hero-btn">Comprar ahora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Category Area Start-->
        <section class="category-area section-padding30">
            <div class="container-fluid">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-85">
                            <h2>Comprar por categoría</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-category mb-30">
                            <div class="category-img">
                                <img src="{{ asset('img/categori/cat1.jpg') }}" alt="">
                                <div class="category-caption">
                                    <h2>Mujeres</h2>
                                    <span class="best"><a href="product/filter/2">Mejores
                                            ofertas</a></span>
                                    <span class="collection">Nueva colección</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-category mb-30">
                            <div class="category-img text-center">
                                <img src="{{ asset('img/categori/cat2.jpg') }}" alt="">
                                <div class="category-caption">
                                    <span class="collection">Descuenntos!</span>
                                    <h2>Ropa de Invierno</h2>
                                    <p>Nueva colección</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-category mb-30">
                            <div class="category-img">
                                <img src="{{ asset('img/categori/cat3.jpg') }}" alt="">
                                <div class="category-caption">
                                    <h2>Hombres</h2>
                                    <span class="best"><a href="product/filter/1">Mejores
                                            ofertas</a></span>
                                    <span class="collection">Nueva colección</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category Area End-->

        <!-- Best Product Start -->
        <div class="best-product-area lf-padding">
            <div class="product-wrapper bg-height" style="background-image: url('/img/categori/card.png')">
                <div class="container position-relative">
                    <div class="row justify-content-between align-items-end">
                        <div class="product-man position-absolute d-none d-lg-block">
                            <img src="{{ asset('img/categori/card-man.png') }}" alt="">
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">
                            <div class="vertical-text">
                                <span>Hombres</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="best-product-caption">
                                <h2>Encuentra el mejor producto<br> de nuestra tienda</h2>
                                <p>Con la mejor calidad y estilo</p>
                                <a href="{{ route('product.index') }}" class="black-btn">Comprar ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape -->
            <div class="shape bounce-animate d-none d-md-block">
                <img src="{{ asset('img/categori/card-shape.png') }}" alt="">
            </div>
        </div>
        <!-- Best Product End-->
    </main>

@endsection
