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
                    <p>Originally from Slovakia, I currently live in Liverpool, UK. I studied journalism but poetry has always been a way of expressing that suited me the most.
                    </p>
                    <br>
                    <p>
                        My latest book so far was published in 2011, it’s called Status reports (Statusové hlásenia) and it is an outcome of an exciting play with poetry, identities and social networks.
                    </p>
                    <br>
                    <p>
                        In 2009 I published Wolves' weddings (Vlčie svadby) based on stories from mythology. My first book A boy (Chlapec) is from 2005 and received literary prize for first-published poets in Slovakia – the Ivan Krasko Prize.
                    </p>
                    <br>
                    <p>
                        Many of my poems were translated into English, German, Hungarian, Czech and Polish. Selection of my poetry appeared in 5x5 (an anthology of modern Slovak poetry).
                        These days I work as a data analyst and I also help people with learning disabilities in L’Arche.
                    </p>
                </div>
            </div>
        </section>
@stop

@section('styles')
    <style>
        .hero {
            background: url('/img/about-4.jpg') center center no-repeat;
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