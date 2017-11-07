@extends('layouts.pages')


@section('content')

        <section class="hero is-medium">
            <div class="container">
            <div class="hero-body">
                <div class="wrapper" id="rev-3">
                    <h1 class="title is-poiret">
                        Books
                    </h1>
                    <h2 class="subtitle">
                        and their stories
                    </h2>

                </div>
            </div>
            </div>
        </section>
        <section class="section is-books">
            <div class="columns">
                <div class="column is-8 is-offset-2">
                    <article class="m-t-10 m-b-50">
                        <div class="columns">

                            <div class="column is-8">
                                <span class="title is-size-4 m-r-10"><strong>Status reports</strong></span> <small>(2011)</small>
                                <p class="m-t-30 m-b-15">
                                    My latest book so far started as an experiment on social networks. Over a period of one year I kept posting poems written by authors from all over the world. Occasionally, I posted my own poem signed by a fictive poet from some European country. When others found out about this experiment we started a creative game with names, gender identities and culture. A selection from these poems by fictive authors was published in Status reports (Statusové hlásenia).
                                </p>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <a class="level-item">
                                            <span class="icon is-small"><i class="fa fa-reply"></i></span>
                                        </a>
                                        <a class="level-item">
                                            <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                                        </a>
                                        <a class="level-item">
                                            <span class="icon is-small"><i class="fa fa-heart"></i></span>
                                        </a>
                                    </div>
                                </nav>
                            </div>

                            <div class="column is-4 has-text-centered">
                                <img src="{{ asset('img/covers/status_reports_cover.png') }}">
                            </div>
                        </div>

                    </article>

                    <article class="m-t-10 m-b-50">
                        <div class="columns">

                            <div class="column is-8">
                                <span class="title is-size-4 m-r-10"><strong>Wolves weddings</strong></span> <small>(2009)</small>
                                <p class="m-t-30 m-b-15">
                                    Wolves’ weddings (Vlčie svadby) are based on mythology. I work here with Greek and Biblical motifs and their relevance for current society. The focus is on details which provide a framework for the story. They provide anchors through which the reader is invited to relate to the story. This relationship is particularly highlighted in the final part of the book, in which an old mythology and the story of my grandfather, whom I have never met, interconnect into one archetypal tale.
                                </p>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <a class="level-item">
                                            <span class="icon is-small"><i class="fa fa-reply"></i></span>
                                        </a>
                                        <a class="level-item">
                                            <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                                        </a>
                                        <a class="level-item">
                                            <span class="icon is-small"><i class="fa fa-heart"></i></span>
                                        </a>
                                    </div>
                                </nav>
                            </div>

                            <div class="column is-4 has-text-centered">
                                <img src="{{ asset('img/covers/wolves_weddings_cover.png') }}">
                            </div>
                        </div>

                    </article>

                    <article class="m-t-10 m-b-50">
                        <div class="columns">

                            <div class="column is-8">
                                <span class="title is-size-4 m-r-10"><strong>A boy</strong></span> <small>(2005)</small>
                                <p class="m-t-30 m-b-15">
                                    My first book which I wrote when I was 17-18 years old. It received literary prize for first-published poets in Slovakia – the Ivan Krasko Prize. Personally, I would now hesitate to put some of the poems into the book, yet I still appreciate its nostalgic simplicity. I enjoy coming back to it, as it hides many stories from my childhood and first joys from poetic discovery of the world.
                                </p>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <a class="level-item">
                                            <span class="icon is-small"><i class="fa fa-reply"></i></span>
                                        </a>
                                        <a class="level-item">
                                            <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                                        </a>
                                        <a class="level-item">
                                            <span class="icon is-small"><i class="fa fa-heart"></i></span>
                                        </a>
                                    </div>
                                </nav>
                            </div>

                            <div class="column is-4 has-text-centered">
                                <img src="{{ asset('img/covers/boy_cover.png') }}">
                            </div>
                        </div>

                    </article>
                </div>
            </div>
        </section>
        @stop

        @section('styles')
            <style>
                .hero {
                    background: url('/img/books.jpg') center center no-repeat;
                    background-size: cover;
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

                .is-books img {
                    max-width: 200px;
                }

                .is-books article {
                    border-bottom: 1px dashed #ccc;
                    padding-bottom: 20px;
                }

                .is-books article:last-child {
                    border-bottom: none;
                }

            </style>

        @stop

        @section('scripts')

            <script src="/js/anime.min.js"></script>
            <script src="/js/main.js"></script>

            <script>
                var rev1 = new RevealFx(document.querySelector('#rev-3'), {
                    revealSettings: {
                        bgcolor: '#ffa726',
                        duration: 1000,
                        onCover: function (contentEl, revealerEl) {
                            contentEl.style.opacity = 1;
                        }
                    }
                });
                rev1.reveal();
            </script>

        @stop