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

    <style>
        .language button {
            border: 1px solid #ccc;
            background-color: transparent;
        }

        @media (max-width: 1024px) {
            .dropdown.is-right .dropdown-menu {
                left: 0;
                right: auto;
            }
        }

        .footer {
            background-color: #353535;
            color: black;
            padding: 1rem;
            border-top: 1px solid #ccc;
        }

        .footer .is-pulled-left {
            font-size: 1.15rem;
            line-height: 1.15rem;
        }

        .footer .is-pulled-left span {
            font-size: 1rem;
            line-height: 1rem;
        }

        .footer .is-pulled-left a {
            color: black;
        }

        .footer .is-pulled-left a:hover {
            color: grey;
        }

        .footer .is-pulled-right a:nth-child(1) {
            color: hsl(141, 71%, 48%);
        }

        .footer .is-pulled-right a:nth-child(2) {
            color: #365899;
        }

        .footer .is-pulled-right a:nth-child(3) {
            color: #00AFF0;
        }
    </style>
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

                        <div class="navbar-item">
                            <div class="dropdown is-right is-hoverable language">
                                <div class="dropdown-trigger">
                                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                        <span>en</span>
                                        <span class="m-l-5">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="#" class="dropdown-item">english</a>
                                        <a class="dropdown-item">slovak</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>{{--container ends--}}
        </div>{{--navbar ends--}}
    </header>{{--header ends--}}

    <main>
        @yield('content')
    </main>

    <footer class="footer form-bg">
        <div class="container is-clearfix">
            <p class="is-pulled-left is-poiret"><a href="{{ route('index') }}">Radoslav Tomas</a> | <span><?php echo date("Y"); ?></span></p>
            <div class="is-pulled-right">
                <a class="m-r-20">
                    <i class="fa fa-envelope-o"></i>
                </a>
                <a class="m-r-20">
                    <i class="fa fa-facebook"></i>
                </a>
                <a>
                    <i class="fa fa-skype"></i>
                </a>
            </div>
        </div>
    </footer>
    {{--<div class="post-footer has-text-centered form-bg">--}}
        {{--<p><em>Bratislava (SK)</em> | <em>Liverpool (UK)</em> 2017</p>--}}
    {{--</div>--}}

</div>{{--#app ends--}}

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
