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
                            <h2>Registrarse</h2>
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
                            <a class="btn_3" href="{{ route('login') }}">
                                {{ __('¿Ya tienes cuenta?') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>¡Sé parte de nosotros!<br>
                                Crea una cuenta y no te pierdas de nada</h3>
                            <x-jet-validation-errors class="mb-4" />
                            <form class="row contact_form" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="col-md-12 form-group p_star">
                                    <input id="name" class="form-control" type="text" name="name" :value="old('name')"
                                        required autofocus autocomplete="name" placeholder="{{ __('Name') }}" />
                                </div>

                                <div class="col-md-12 form-group p_star">
                                    <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                        required placeholder="{{ __('Email') }}" />
                                </div>

                                <div class="col-md-12 form-group p_star">
                                    <input id="password" class="form-control" type="password" name="password" required
                                        autocomplete="new-password" placeholder={{ __('Password') }} />
                                </div>

                                <div class="col-md-12 form-group p_star">
                                    <input id="password_confirmation" class="form-control" type="password"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="{{ __('Confirm Password') }}" />
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-jet-label for="terms">
                                            <div class="flex items-center">
                                                <x-jet-checkbox name="terms" id="terms" />

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', ['terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>', 'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>']) !!}
                                                </div>
                                            </div>
                                        </x-jet-label>
                                    </div>
                                @endif

                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        {{ __('Register') }}
                                    </button>
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
