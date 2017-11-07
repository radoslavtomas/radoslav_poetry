@extends('layouts.pages')


@section('content')

    <section class="hero is-medium">
        <div class="container">
            <div class="hero-body">
                <div class="wrapper" id="rev-3">
                    <h1 class="title is-poiret">
                        Status reports
                    </h1>
                    <h2 class="subtitle">

                    </h2>

                </div>
            </div>
        </div>
    </section>
    <section class="section is-book">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <article class="m-t-10 m-b-50">
                    <div class="columns">

                        <div class="column is-3 has-text-centered">
                            <img src="{{ asset('img/covers/status_reports_cover.png') }}">
                        </div>

                        <div class="column is-9">
                            <span class="title is-size-4 m-r-10"><strong>Status reports</strong></span> <small>(2011)</small>
                            <p class="m-t-30 m-b-15">
                                My latest book so far started as an experiment on social networks. Over a period of one year I kept posting poems written by authors from all over the world. Occasionally, I posted my own poem signed by a fictive poet from some European country. When others found out about this experiment we started a creative game with names, gender identities and culture. A selection from these poems by fictive authors was published in Status reports (Statusové hlásenia).
                            </p>
                            <nav class="level is-mobile">
                                <div class="level-left">
                                    <a class="level-item">
                                        <span class="icon is-small"><i class="fa fa-download"></i></span>
                                    </a>
                                    <a class="level-item">
                                        <span class="icon is-small"><i class="fa fa-shopping-cart"></i></span>
                                    </a>
                                </div>
                            </nav>

                            <br>
                            <br>

                            <article class="content">

                                <h3>Nazov basne</h3>

                                <p>
                                    Vezmi ma znova<br>
                                    do vlaku, o ktorom<br>
                                    sa nám snívalo,<br>
                                    mali sme šestnásť a neprekážalo<br>
                                    nám šúpať pomaranče<br>
                                    holými prstami. Alica,<br>
                                    čo robíš práve teraz? Nezabudni<br>
                                    na všetky tie príchody<br>
                                    a utekania. Trvali milióny rokov.<br>
                                    A všetky boli naše.<br>
                                </p>
                                <br>
                                <br>
                                <p>
                                    Vezmi ma znova<br>
                                    do vlaku, o ktorom<br>
                                    sa nám snívalo,<br>
                                    mali sme šestnásť a neprekážalo<br>
                                    nám šúpať pomaranče<br>
                                    holými prstami. Alica,<br>
                                    čo robíš práve teraz? Nezabudni<br>
                                    na všetky tie príchody<br>
                                    a utekania. Trvali milióny rokov.<br>
                                    A všetky boli naše.<br>
                                </p>
                                <br>
                                <br>
                                <p>
                                    Vezmi ma znova<br>
                                    do vlaku, o ktorom<br>
                                    sa nám snívalo,<br>
                                    mali sme šestnásť a neprekážalo<br>
                                    nám šúpať pomaranče<br>
                                    holými prstami. Alica,<br>
                                    čo robíš práve teraz? Nezabudni<br>
                                    na všetky tie príchody<br>
                                    a utekania. Trvali milióny rokov.<br>
                                    A všetky boli naše.<br>
                                </p>
                            </article>

                            <br>
                            <br>

                            <div>
                                <h3 class="is-size-5">STATUS REPORTS</h3>
                                <p>Publishing house: Kon-Press, Trnava, Slovakia, 2011. Illustrations Milan Ladyka. Paperback, 56 pages, ISBN 9788085413663.</p>
                            </div>

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
            background: url('/img/books/vlk_bg.jpg') center center no-repeat;
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