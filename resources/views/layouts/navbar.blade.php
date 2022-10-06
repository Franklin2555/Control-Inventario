@php 
/* ------------------ Barra de navegación del sistema ----------------------*/
@endphp
@yield('navbar')
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-center">
        <a class="uk-logo uk-navbar-item" href="/">
            <img class="logo" src="{{ asset('img/logo.png') }}">
        </a>
        <!-- 
        <ul class="uk-navbar-nav">
            <li>
                <i class="fas fa-home"></i> Home </a>
            </li>
            <li>
                <i class="fas fa-user-astronaut"></i> Administración </a>
            </li>
            <li>
                <i class="fas fa-feather"></i> Productos </a>
            </li>
            <li>
                <i class="fab fa-youtube"></i> Ventas </a>
            </li>
        </ul>
        -->
    </div>
</nav>