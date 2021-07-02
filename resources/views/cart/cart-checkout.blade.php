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
                            <h2>Detalle de compra</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <section class="checkout_area section_padding">
        <div class="container">
            <div class="billing_details">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    @endforeach
                @endif
                <form method="POST" action="{{ route('purchase.store') }}" class="row">
                    @csrf
                    <div class="col-lg-8">
                        <h3>Datos de envío</h3>
                        <div class="row contact_form">
                            <div class="col-md-6 form-group p_star">
                                <input value="{{ auth()->user()->name }}" readonly type="text" class="form-control"
                                    placeholder="{{ auth()->user()->name }}" required />
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="phone" placeholder="Teléfono" required />
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="country" placeholder="País" required />
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="state" placeholder="Estado" required />
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" name="street" placeholder="Calle" required />
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="number" class="form-control" name="int_number" placeholder="Número interior"
                                    required />
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="ext_number" placeholder="Número exterior" />
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="number" class="form-control" name="zipcode" placeholder="Código postal"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Tu compra</h2>
                            <ul class="list">
                                <li>
                                    <a href="#">Producto
                                        <span>Total</span>
                                    </a>
                                </li>
                                @foreach ($cart->products as $p)
                                    <li>
                                        <a href="#">{{ $p->name }}
                                            <span class="middle">x {{ $p->pivot->quantity }}</span>
                                            <span class="last">${{ $p->total * $p->pivot->quantity }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <ul class="list list_2">
                                <li>
                                    <a href="#">Subtotal
                                        <span>${{ $total }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Envío
                                        <span>Gratis</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Total
                                        <span>${{ $total }}</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <label> <b>TIPO DE PAGO</b> </label>
                                </div>
                            </div>
                            <div class="payment_item">
                                @foreach ($payments as $p)
                                    <div class="radion_btn">
                                        <input required type="radio" id="f-option{{ $p->id }}"
                                            value="{{ $p->id }}" name="payment_id" />
                                        <label for="f-option{{ $p->id }}">{{ $p->name }}</label>
                                        <div class="check"></div>
                                    </div>
                                @endforeach
                                <p>
                                    Por favor, revise que todos los datos ingresados sean correctos
                                    antes de continuar con el pago
                                </p>
                            </div>

                            <input type="hidden" name="total" value="{{ $total }}">
                            <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <button type="submit" class="btn_3">Proceder a pagar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
