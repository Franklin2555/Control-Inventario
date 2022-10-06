@php
/* ------------------ Plantilla de Login ----------------------*/
@endphp

<!-- .................................................................................................. -->
<!-- Contenido del Login -->
@yield('conten_login')
<div class="login-wrap cover">
    <div class="container-login">
        <img class="logo_ndp" src="/img/logo.png">
        <p class="login-text">
            Inicie sesión con su cuenta
        </p>

        <!-- .................................................................................................. -->
        <!-- Formulario de inicio de sesión -->
        <form action="/home">
            <legend class="uk-legend"> Usuario </legend>
            <div class="uk-inline">
                <span class="uk-form-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <input class="uk-input" type="text" placeholder="Usuario" name="user" autocomplete="off" required>
            </div>
            <legend class="uk-legend"> Contraseña </legend>
            <div class="uk-inline">
                <span class="uk-form-icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                <input class="uk-input" type="password" placeholder="Contraseña" name="passw" autocomplete="off" required>
            </div>
            <div class="uk-margin">
                <button class="uk-button uk-button-default"> Iniciar sesión </button>
            </div>
        </form>
        <!-- .................................................................................................. -->
        
    </div>
</div>
<!-- .................................................................................................. -->