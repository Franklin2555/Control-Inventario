@php
/* ------------------ Encabezados del login ----------------------*/
@endphp

@yield('header')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- .................................................................................................. -->
    <!-- Especificaciones y configuración inicial de la página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login
    </title>
    <link rel="icon" href="{{ asset('img/logo.svg') }}" type="image/svg" />
    <!-- .................................................................................................. -->

    <!-- .................................................................................................. -->
    <!-- Estilo CSS -->
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
    <!-- .................................................................................................. -->
    
    <!-- .................................................................................................. -->
    <!-- Script JS -->
    <script type="text/javascript" src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
    <!-- .................................................................................................. -->
</head>