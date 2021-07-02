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
                            <h2>Iniciar sesión</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================login_part Area =================-->
    <section class="login_part section_padding ">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Bienvenido</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a class="btn_3" href="{{ route('register') }}">
                                {{ __('¿No tienes cuenta?') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>¡Bienvenido de vuelta! <br>
                                Por favor, inicia sesión ahora</h3>

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

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="row contact_form" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="col-md-12 form-group p_star">
                                    <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                        required placeholder="{{ __('Correo') }}" />
                                </div>

                                <div class="col-md-12 form-group p_star">
                                    <input id="password" class="form-control" type="password" name="password" required
                                        autocomplete="current-password" placeholder={{ __('Contraseña') }} />
                                </div>

                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="remember_me" name="remember">
                                        <label for="f-option">Recordarme</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">
                                        {{ __('Iniciar sesión') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="lost_pass" href="{{ route('password.request') }}">
                                            {{ __('¿Olvidaste tu contraseña?') }}</a>
                                    @endif

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
@endsection
