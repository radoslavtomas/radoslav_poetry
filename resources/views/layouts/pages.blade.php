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
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    @yield('styles')
</head>
<body class="loading">
<div id="app">
    <header class="nav-header">
        <div class="navbar is-transparent">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item animLogo" href="{{ route('index') }}">
                        <img src="{{ asset('img/logo-1.png') }}" alt="Radoslav Tomas Logo" class="logo animated m-r-10">
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
                        <a href="{{ route('index') }}" class="navbar-item is-tab">Home</a>
                        <a href="{{ route('about') }}" class="navbar-item is-tab">About me</a>
                        <a href="{{ route('books') }}" class="navbar-item is-tab">Books</a>
                        <a href="{{ route('links')}}" class="navbar-item is-tab">Links</a>
                        <a href="{{ route('contact') }}" class="navbar-item is-tab">Contact</a>
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

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container has-text-centered">
            <div class="content columns">
                <div class="column is-6 has-text-centered">
                    <p><em>Bratislava (SK)</em> | <em>Liverpool (UK)</em></p>
                </div>
                {{--<div class="column is-4 has-text-centered fck-trigger">--}}
                    {{--<p><span class="fck animated">╭∩╮</span>(︶︿︶)<span class="fck animated">╭∩╮</span></p>--}}
                    {{--<p class="is-poiret" style="font-weight: 800;">poetry rocks!</p>--}}
                {{--</div>--}}
                <div class="column is-6 has-text-centered">
                    <p><a href="mailto:radoslav.tomas@gmail.com">radoslav.tomas@gmail.com</a></p>
                </div>
            </div>
        </div>
    </footer>
    <div class="post-footer has-text-centered">
        <p>☕ 2017</p>
    </div>

</div>{{--#app ends--}}

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
