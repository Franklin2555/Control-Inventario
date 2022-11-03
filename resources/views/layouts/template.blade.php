@php
/* ------------------ Encabezados del sistema ----------------------*/
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
        
    </title>
    <link rel="icon" href="{{ asset('img/logo.svg') }}" type="image/svg" />
    <script src="{{ asset('js/main.js') }}" defer></script>
    <!-- .................................................................................................. -->

    <!-- .................................................................................................. -->
    <!-- Estilo CSS -->
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
    <!-- .................................................................................................. -->
</head>

<!-- Llamando la barra de navegación horizontal -->
<body>
    <!-- .................................................................................................. -->
    <!-- Barra lateral / Menú lateral -->
    @if (Auth::check())
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                
                <div class="logo_name"> Menú </div>
            </div>
            <i class="fa fa-bars" id="sideMenu" aria-hidden="true"></i>
        </div>
        <!-- .................................................................................................. -->
        <!-- Lista de opciones para navegación del sistema -->
        <ul class="nav_list">
            <li>
                <a href="#">
                    <i class="fas fa-question-circle fa-lg"></i>
                    <span class="routes_name"> Ayuda </span>
                </a>
                <span class="tooltip"> Ayuda </span>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user-tie" aria-hidden="true"></i>
                    <span class="routes_name"> Administración </span>
                </a>
                <span class="tooltip"> Administración </span>
            </li>
            <li>
                <a class="nav-link" href="{{ route('categoria.index') }}">
                    <i class="fa fa-egg" aria-hidden="true"></i>
                    <span class="routes_name"> Categoria </span>
                </a>
                <span class="tooltip"> Categoria </span>
            </li>
            <li>
                <a class="nav-link" href="{{ route('inventario.index') }}">
                    <i class="fa fa-money-bill" aria-hidden="true"></i>
                    <span class="routes_name"> Inventario </span>
                </a>
                <span class="tooltip"> Inventario </span>
            </li>
            <li>
                <a class="nav-link" href="{{ route('producto.index') }}">
                    <i class="fa fa-suitcase" aria-hidden="true"></i>
                    <span class="routes_name"> Productos </span>
                </a>
                <span class="tooltip"> Productos </span>
            </li>
            <li>
                <a class="nav-link" href="{{ route('ventas.index') }}">
                    <i class="fa fa-suitcase" aria-hidden="true"></i>
                    <span class="routes_name"> Ventas </span>
                </a>
                <span class="tooltip"> Ventas </span>
            </li>
        </ul>
        <!-- .................................................................................................. -->
    </div>
    @endif
    <!-- .................................................................................................. -->

    <!-- .................................................................................................. -->
    <!-- Script JS -->
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
    <!-- .................................................................................................. -->
</body>
