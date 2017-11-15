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
    @yield('styles')
</head>
<body>
    <div id="app">
        <header class="nav-header">
            <div class="navbar is-transparent">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item animLogo" href="{{ route('index') }}">
                            <img src="{{ asset('img/logo-1.png') }}" alt="Radoslav Tomas Logo" class="logo animated m-r-10">
                            <span class="title is-poiret is-size-3-desktop is-size-5-touch">{{ $user->name }}</span>
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
                            @guest
                                <span class="navbar-item">Welcome to your login</span>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link">Howdy Rado</a>

                                    <div class="navbar-dropdown">
                                        <a href="{{ route('getProfile') }}" class="navbar-item">Profile</a>
                                        <a href="{{ route('getBackgrounds') }}" class="navbar-item">Backgrounds</a>
                                        <a href="{{ route('getLinks') }}" class="navbar-item">Links</a>
                                        <hr class="navbar-divider">
                                        <a href="" class="navbar-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>{{--container ends--}}
            </div>{{--navbar ends--}}
        </header>{{--header ends--}}

        <main>
            @if(Session::has('success'))
                <toast-component msg="{{ Session::get('success') }}"></toast-component>
            @endif

            <div class="container">
                @yield('content')
            </div>
        </main>

    </div>{{--#app ends--}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
