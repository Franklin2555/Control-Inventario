@extends('layouts.app')
@php
/* ------------------ Plantilla de Login ----------------------*/
@endphp

@yield('conten_login')
<!-- ................................................................................................... -->
<!-- Botón de registro -->
<div id="rgtr">
    <button class="uk-button-default rgtr">
        <a class="btn btn-link login-text" href="{{ route('register') }}">{{ __('Registrar') }}</a>
    </button>
</div>
<!-- ................................................................................................... -->

<!-- ................................................................................................... -->
<div class="login-wrap cover">
    <div class="container-login">
        <img class="logo_ndp" src="/img/logo.png">
        <p class="login-text">
            Inicie sesión con su cuenta
        </p>
        <!-- ................................................................................................... -->
        <!-- Formulario de inicio de sesión -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <legend class="uk-legend"> Usuario </legend>
            <div class="uk-inline">
                <span class="uk-form-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <!-- Campo de correo electrónico -->
                <input class="uk-input inputSt" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <legend class="uk-legend"> Contraseña </legend>
            <div class="uk-inline">
                <span class="uk-form-icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                <!-- Campo de contraseña -->
                <input class="uk-input inputSt" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="row">
                <div class="uk-inline">
                    <label class="form-check-label" for="remember" style="color: white; text-align: center">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        {{ __('Recuérdame') }}
                    </label>
                </div>
            </div>
            <div class="uk-margin">
                <button class="uk-button-default buttonSt" type="submit">
                    {{ __('Iniciar sesión') }}
                </button>
            </div>
            <div class="uk-inline">
                @if (Route::has('password.request'))
                <button class="uk-button-default buttonPw">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Olvide la contraseña') }}
                    </a>
                </button>
                @endif
            </div>
        </form>
        <!-- ................................................................................................... -->
    </div>
</div>
<!-- ................................................................................................... -->