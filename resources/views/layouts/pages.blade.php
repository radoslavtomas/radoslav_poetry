<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    @yield('styles')
</head>
<body class="loading">
<div id="app">
    <header class="nav-header">
        <div class="navbar is-transparent">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{ route('index') }}">
                        <img src="{{ asset('img/logo-1.png') }}" alt="Radoslav Tomas Logo" class="m-r-10">
                        <span class="title is-poiret is-size-3-desktop is-size-5-touch">Radoslav Tomas</span>
                    </a>

                    <button class="button navbar-burger" data-target="navMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <div class="navbar-menu" id="navMenu">
                    <div class="navbar-start">
                        {{--content--}}
                    </div>
                    <div class="navbar-end">
                        <a href="#" class="navbar-item is-tab">Home</a>
                        <a href="#" class="navbar-item is-tab">About me</a>
                        <a href="#" class="navbar-item is-tab">Books</a>
                        <a href="#" class="navbar-item is-tab">Links</a>
                        <a href="#" class="navbar-item is-tab">Contact</a>
                        <hr class="dropdown-divider">
                        <div class="navbar-item lan">
                            <a href="#" class="m-r-5">sk</a>/
                            <a href="#" class="m-l-5">en</a>
                        </div>
                    </div>
                </div>
            </div>{{--container ends--}}
        </div>{{--navbar ends--}}
    </header>{{--header ends--}}

    <main class="p-t-30">
        @yield('content')
    </main>

</div>{{--#app ends--}}

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
