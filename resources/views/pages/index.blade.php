@extends('layouts.pages')


@section('content')

    <div class="container">
        <section class="section">
            <div class="columns">
                <div class="column is-index is-poiret has-text-centered is-8-desktop is-offset-2-desktop is-10-touch is-offset-1-touch">

                    <h2 id="rev-1" class="title text-center is-size-1-desktop is-size-3-touch">Radoslav Tomas</h2>
                    <br>
                    <h4 id="rev-2" class="is-size-4-desktop is-size-5-touch">Poet</h4>

                    <div class="reveal-later">
                        <img src="/img/logo-1.png" alt="Radoslav Tomas Logo" class="image is-96x96">
                        <div class="m-t-50">
                            <a href="{{ route('books') }}" class="m-r-20">Books</a>
                            <a href="{{ route('about') }}" class="m-r-20">About me</a>
                            <a href="#" class="">Contact</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>{{--container ends--}}

@stop

@section('styles')

    <style>

    </style>

@stop

@section('scripts')

    <script src="/js/anime.min.js"></script>
    <script src="/js/main.js"></script>

    <script>
        var rev1 = new RevealFx(document.querySelector('#rev-1'), {
            revealSettings: {
                bgcolor: '#d8a5c4',
                duration: 1200,
                onCover: function (contentEl, revealerEl) {
                    contentEl.style.opacity = 1;
                }
            }
        });
        rev1.reveal();

        var rev2 = new RevealFx(document.querySelector('#rev-2'), {
            revealSettings: {
                bgcolor: '#a1b6cd',
                delay: 250,
                duration: 1000,
                onCover: function (contentEl, revealerEl) {
                    contentEl.style.opacity = 1;
                },
                onComplete: function() {
                    document.querySelector('.reveal-later').className = 'reveal';
                }
            }
        });
        rev2.reveal();

    </script>

@stop