<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{  'Portal do Aluno' }}</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="shortcut icon" href="{{asset('imagens/logo-unime.png')}}" />

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->

    <script src="{{asset('metronic/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/mask.js') }}"></script>

    <style>
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 37px;
        }

        .select2-container .select2-selection--single {
            height: 38px;
        }

        .select2-selection__placeholder {
            font-size: 16px;
        }
    </style>

</head>

<body style="background-color: #a0b4c9!important">

    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">

                        <div class="text-center" style="padding-top: 25px; padding-bottom: 20px">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{asset('imagens/logo-unime.png')}}" class="logo-default" width="300">
                            </a>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

