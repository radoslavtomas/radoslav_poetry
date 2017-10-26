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
</head>
<body>
    <div id="app">
        <header class="nav-header">
            <div class="navbar is-transparent">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="{{ route('home') }}">
                            <img src="{{ asset('img/logo-1.png') }}" alt="Radoslav Tomas Logo" class="m-r-10">
                            Radoslav Tomas
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
                            <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
                            <a href="{{ route('register') }}" class="navbar-item is-tab">Register</a>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link">Howdy Rado</a>

                                    <div class="navbar-dropdown">
                                        <a href="#" class="navbar-item">Profile</a>
                                        <a href="#" class="navbar-item">Settings</a>
                                        <hr class="navbar-divider">
                                        <a href="" class="navbar-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                                {{--<button class="dropdown nav-item is-tab">--}}
                                {{--Howdy Rado <span class="icon"><i class="fa fa-caret-down"></i></span>--}}

                                {{--<ul class="dropdown-menu is-open">--}}
                                {{--<li><a href="#">Profile</a></li>--}}
                                {{--<li><a href="#">Settings</a></li>--}}
                                {{--<li class="separator"></li>--}}
                                {{--<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>--}}


                                {{--</ul>--}}
                                {{--</button>--}}
                                @endguest
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
</body>
</html>
