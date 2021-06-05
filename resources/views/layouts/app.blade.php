<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"
        integrity="sha512-9UR1ynHntZdqHnwXKTaOm1s6V9fExqejKvg5XMawEMToW4sSw+3jtLrYfZPijvnwnnE8Uol1O9BcAskoxgec+g=="
        crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    @livewireScripts

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    @livewireStyles

    <style>
        .label {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out,
                background-color 0.15s ease-in-out,
                border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .label-info {
            color: #212529;
            background-color: #5bc0de;
        }

    </style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @can('patient.profile.show')
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('patient.profile.show', auth()->user()->patientProfile->id) }}">
                                    Perfil
                                </a>
                            </li>
                        @endcan
                        @can('nutritionist.profile.index')
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('nutritionist.profile.show', auth()->user()->nutritionistProfile->id) }}">
                                    Perfil
                                </a>
                            </li>
                        @endcan
                        @can('patient.my_nutritionist.index')
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('my_nutritionist', auth()->user()->patientProfile->id) }}">
                                    Mi nutriólgo
                                </a>
                            </li>
                        @endcan
                        @can('nutritionist.my_patients.index')
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('my_patients', auth()->user()->nutritionistProfile->id) }}">
                                    Mis pacientes
                                </a>
                            </li>
                        @endcan
                        @can('patient.medical_history.index')
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('medical_history.index', auth()->user()->patientProfile->id) }}">
                                    Historias clínicas
                                </a>
                            </li>
                        @endcan
                        @can('posts.all')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('posts') }}">Posts</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('posts.index') }}">Mis posts</a>
                                </div>
                            </li>
                        @endcan
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Eventos
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Register
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('register.patient') }}">Register patient</a>
                                    <a class="dropdown-item" href="{{ route('register.nutritionist') }}">Register
                                        nutritionist</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
