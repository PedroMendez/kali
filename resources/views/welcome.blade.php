<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Colectivo Holístico Kali</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
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
                margin-bottom: 22rem;
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

            .m-b-md {
                margin-bottom: 30px;
            }

            @media only screen and (max-width: 600px) {
              .m-t-sm {
                margin-top: 28rem;
              }
            }
        </style>
    </head>
    <body style="background-image: url({{ asset('/svg/Kali_eyes.svg') }}); background-repeat: no-repeat; background-position: center; background-size: cover;">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                        <a href="{{ url('info') }}">{{ __('Agenda') }}</a>
                        <a href="{{ url('about') }}">{{ __('Quienes Somos') }}</a>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else   
                        <a href="{{ route('login') }}">Ingresar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarme</a>
                        @endif
                    
                    @endauth
                
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md m-t-sm">
                    Colectivo Holístico Kali
                </div>
            </div>
        </div>
    </body>
</html>
