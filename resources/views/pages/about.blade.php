@extends('layouts.pages')


@section('content')


        <section class="hero is-medium">
            <div class="container">
            <div class="hero-body">
                <div class="wrapper" id="rev-3">
                    <h1 class="title is-poiret">
                        About me
                    </h1>
                    <h2 class="subtitle">
                        and my poetry
                    </h2>

                </div>
            </div>
            </div>
        </section>
        <section class="section is-about">
            <div class="columns">
                <div class="column is-8 is-offset-2">

                    <div class="content">
                        {{ $user->profile->about }}
                    </div>

                </div>
            </div>
        </section>
@stop

@section('styles')
    <style>
        .hero {
            background: url('/img/about.jpg') center center no-repeat;
            background-size: cover;
            /*background-attachment: fixed;*/
        }

        .hero h1 {
            color: white;

        }
        .hero h2 {
            color: white;
        }
        .wrapper {
            display: inline-block;
            padding: 15px 25px;
            background-color: rgba(0,0,0,.4);
        }
    </style>

@stop

@section('scripts')

            <script src="/js/anime.min.js"></script>
            <script src="/js/main.js"></script>

            <script>
                var rev1 = new RevealFx(document.querySelector('#rev-3'), {
                    revealSettings: {
                        bgcolor: '#1de9b6',
                        duration: 1000,
                        onCover: function (contentEl, revealerEl) {
                            contentEl.style.opacity = 1;
                        }
                    }
                });
                rev1.reveal();
            </script>

@stop