@extends('layouts.main')
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
                            <h2>Carrito</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================Cart Area =================-->
    <section class="cart_area section_padding">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart->products()->with('files')->get()
        as $p)
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="{{ asset('storage/' . $p->files[0]->route) }}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="{{ route('product.show', $p) }}">
                                                    <p>{{ $p->name }}</p>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>${{ $p->total }}</h5>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            {{ $p->pivot->quantity }}
                                        </div>
                                    </td>
                                    <td>
                                        <h5>
                                            ${{ $p->total * $p->pivot->quantity }}
                                        </h5>
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="bottom_button">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="cupon_text float-right">
                                        <a class="btn_1" href="{{ route('cart.clear', $cart) }}">Vaciar carrito</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Total</h5>
                                </td>
                                <td>
                                    <h5>${{ $total }}</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="checkout_btn_inner float-right">
                        <a class="btn_1 checkout_btn_1" href="{{ route('cart.checkout', $cart, $total) }}">Pagar carrito</a>
                    </div>
                </div>
            </div>
    </section>
    <!--================End Cart Area =================-->

@endsection
