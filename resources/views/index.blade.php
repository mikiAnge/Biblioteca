<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="{{ asset('assets/icons/book.ico')}}" />
    <script src="{{ asset('js/sweet-alert.min.js')}}"></script>

    <!-- hoja de style y font -->

    <link rel="stylesheet" href="{{ asset('css/sweet-alert.cs')}}s">
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- hoja de style para login -->
    <link rel="stylesheet" href="{{ asset('css/login.css')}}"/>

    <script src="{{ asset('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')}}"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('js/jquery-1.11.2.min.js')}}"><\/script>')</script>
    <script src="{{ asset('js/modernizr.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</head>

<!-- body -->
<body class="full-cover-background" style="background-image:url(assets/img/font-login.jpg);">
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
            <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
        </p>
        <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
        <form>
            <div class="group-material-login">
                <input type="text" class="material-login-control" required="" maxlength="70">
                <span class="highlight-login"></span>
                <span class="bar-login"></span>
                <label><i class="zmdi zmdi-account"></i> &nbsp; Nombres</label>
            </div><br>
            <div class="group-material-login">
                <input type="password" class="material-login-control" required="" maxlength="70">
                <span class="highlight-login"></span>
                <span class="bar-login"></span>
                <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            <div class="group-material">
                <select class="material-control-login">
                    <option value="" disabled="" selected="">Tipo de usuario</option>
                    <option value="Student">Estudiante</option>
                    <option value="Teacher">Docente</option>
                    <option value="Personal">Personal administrativo</option>
                    <option value="Admin">Administrador</option>
                </select>
            </div>
            <button class="btn-login" type="submit">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
        </form>
    </div>
</body>
</html>
