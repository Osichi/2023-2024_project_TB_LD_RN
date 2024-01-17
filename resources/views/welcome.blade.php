<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <title>Minden Egy Helyen</title>

        
    </head>
    <body>
        <style>
            input {
                text-align: center;
                position: static;
            }
        </style>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="fentivalami">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- Itt helyezd el a képet -->
                    <img src="/imgs/logo.png" alt="Logo" style="width: 100%;">
                </li>
                @if (Session::has('nev'))
                        <li class="nav-item">
                            {{ Session::get('nev') }}
                        </li>
                        <li>
                            <a href="/logout" class="nav-link">
                               <button class="btn btn-primary btn-rounded">Kijelentkezés</button> 
                            </a>
                        </li>
                        @else
                <li class="nav-item">
                    <a href="/register" id="reg" class="nav-link">
                        <button class="btn btn-primary btn-rounded">Regisztráció</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/login" id="log" class="nav-link">
                        <button class="btn btn-primary btn-rounded">Bejelentkezés</button>
                    </a>
                </li>
                @endif
            </ul>
            <div class="container">
                <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                        <div class="form">
                            <i class="fa fa-search"></i>
                            <input type="text" class="form-control form-input" placeholder="Search anything..." style="width: 100%">
                            <span class="left-pan"><i class="fa fa-microphone"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
    </body>
</html>
