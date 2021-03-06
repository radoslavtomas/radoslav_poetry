<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Official website of Radoslav Tomas - Poet">
    <meta name="keywords"  content="poet, poetry, poezia, liverpool, uk, slovakia, books, knihy, writing, pisanie" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title') |
        @if( App::getLocale() == 'en' )
            {{ $user->name }}
        @elseif( App::getLocale() == 'sk' )
            {{ $user->profile->name_sk }}
        @endif
    </title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-18678668-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-18678668-1');
    </script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                        <span class="title is-poiret is-size-3-desktop is-size-5-touch">
                            @if( app()->getLocale() == 'en' )
                                {{ $user->name }}
                            @elseif( app()->getLocale() == 'sk' )
                                {{ $user->profile->name_sk }}
                            @endif
                        </span>
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
                        <a href="{{ route('index') }}" class="navbar-item is-tab">{{ __('menu.home') }}</a>
                        <a href="{{ route('about') }}" class="navbar-item is-tab">{{ __('menu.about') }}</a>
                        <a href="{{ route('books') }}" class="navbar-item is-tab">{{ __('menu.books') }}</a>
                        <a href="{{ route('links')}}" class="navbar-item is-tab">{{ __('menu.links') }}</a>
                        <a href="{{ route('contact') }}" class="navbar-item is-tab">{{ __('menu.contact') }}</a>
                        <hr class="dropdown-divider">

                        <div class="navbar-item">
                            <div class="dropdown is-right is-hoverable language">
                                <div class="dropdown-trigger">
                                    <button class="button is-small" aria-haspopup="true" aria-controls="dropdown-menu">
                                        <span>
                                            {{ app()->getLocale() }}
                                        </span>
                                        <span class="m-l-5">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        @foreach( Config::get('language') as $lang => $language)
                                            <a href="{{ url('language', $lang) }}" class="dropdown-item">
                                                @if( $lang == App::getLocale() )
                                                    <strong>{{ $language }}</strong>
                                                @else
                                                    {{ $language }}
                                                @endif
                                            </a>
                                        @endforeach
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
            <p class="is-pulled-left is-poiret">
                <a href="{{ route('index') }}">
                    @if( app()->getLocale() == 'en' )
                        {{ $user->name }}
                    @elseif( app()->getLocale() == 'sk' )
                        {{ $user->profile->name_sk }}
                    @endif
                </a> | <span><?php echo date("Y"); ?></span></p>
            <div class="is-pulled-right">
                <a href="mailto:{{ $user->email }}" class="m-r-20">
                    <i class="fa fa-envelope-o"></i>
                </a>
                <a href="{{ $user->profile->facebook }}" target="_blank" class="m-r-20">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="skype:{{ $user->profile->skype }}?userinfo">
                    <i class="fa fa-skype"></i>
                </a>
            </div>
        </div>
    </footer>

</div>{{--#app ends--}}

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
