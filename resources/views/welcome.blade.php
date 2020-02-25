<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IfxNetworks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                background: #001a34;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .logogrande{
                width: 50%;
                height: 50%;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>

                     <!--   @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    
                    <img class="logogrande" src="../../images/logo.svg">
                </div>
               
                <div class="links">
                    <a href="https://laravel.com/docs">Nosotros</a>
                    <a href="https://laracasts.com">Cobertura</a>
                    <a href="https://laravel-news.com">Soluciones</a>
                    <a href="https://blog.laravel.com">Noticias</a>
                    <a href="https://nova.laravel.com">Contáctenos</a>
                    <a href="https://forge.laravel.com">Socios</a>
                    <a href="https://vapor.laravel.com">Mnformacion legal</a>
                    <a href="https://github.com/laravel/laravel">Mi portal</a>
                </div>
            </div>
        </div>
    </body>
    
</html>
