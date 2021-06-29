@extends('layouts/main')
@section('content')
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center"
            data-background="{{ asset('img/hero/category.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Listado de productos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <section class="latest-product-area latest-padding">
        <div class="container">
            <div class="row product-btn d-flex justify-content-between">
                <div class="properties__button">
                    <!--Nav Button  -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Todos</a>
                            @foreach ($categories as $c)
                                <a class="nav-item nav-link" id="nav-{{ $c->id }}-tab" data-toggle="tab"
                                    href="#nav-{{ $c->id }}" role="tab" aria-controls="nav-{{ $c->id }}"
                                    aria-selected="false">{{ $c->name }}</a>
                            @endforeach
                        </div>
                    </nav>
                    <!--End Nav Button  -->
                </div>
                <div class="select-this d-flex">
                    <div class="featured">
                        <span>Ordenar por: </span>
                    </div>
                    <form action="#">
                        <div class="select-itms">
                            <select name="select" id="select1">
                                <option value="">Nombre</option>
                                <option value="">Fecha</option>
                                <option value="">Precio</option>
                                <option value="">Stock</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        @foreach ($products as $p)
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="{{ asset('storage/' . $p->files[0]->route) }}" alt="">
                                        <div class="new-product">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            @for ($i = 0; $i < 4; $i++)
                                                @if ($p->stars > $i) <i
                                                class="far fa-star"></i>
                                            @else
                                                <i class="far fa-star low-star"></i> @endif
                                            @endfor

                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4> <a href=" {{ route('product.show', $p->id) }} "> {{ $p->name }}
                                            </a>
                                        </h4>
                                        <p> {{ $p->description }} </p>
                                        <div class="price">
                                            <ul>
                                                <li>${{ $p->total }}</li>
                                                <li class="discount">$60.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                @foreach ($categories as $c)
                    <div class="tab-pane fade show active" id="nav-{{ $c->id }}" role="tabpanel"
                        aria-labelledby="nav-{{ $c->id }}-tab">
                        <div class="row">
                            @foreach ($c->products as $p)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-product mb-60">
                                        <div class="product-img">
                                            <img src="{{ asset('storage/' . $p->files[0]->route) }}" alt="">
                                            <div class="new-product">
                                                <span>New</span>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-ratting">
                                                @for ($i = 0; $i < 4; $i++)
                                                    @if ($p->stars > $i) <i
                                                    class="far fa-star"></i>
                                                @else
                                                    <i class="far fa-star low-star"></i> @endif
                                                @endfor

                                                <i class="far fa-star low-star"></i>
                                            </div>
                                            <h4> <a href=" {{ route('product.show', $p->id) }} ">
                                                    {{ $p->name }}
                                                </a>
                                            </h4>
                                            <p> {{ $p->description }} </p>
                                            <div class="price">
                                                <ul>
                                                    <li>${{ $p->total }}</li>
                                                    <li class="discount">$60.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- End Nav Card -->
        </div>
    </section>
@endsection
