@extends('layouts.pages')


@section('content')


        <section class="hero is-medium">
            <div class="container">
            <div class="hero-body">
                <div class="wrapper" id="rev-3">
                    <h1 class="title is-poiret">
                        Links
                    </h1>
                    <h2 class="subtitle">
                        to some interesting stuff
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
                </div>
            </div>
            <div class="columns">
                <div class="column is-8 is-offset-2">

                    <div class="columns">
                        <div class="field column is-6">
                            <p class="control has-icons-left">
                                <input class="input" name="name" type="text" placeholder="Name">
                                <span class="icon is-small is-left">
                              <i class="fa fa-user"></i>
                            </span>
                            </p>
                        </div>

                        <div class="field column is-6">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" name="email" type="email" placeholder="Email">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                    <i class="fa fa-check"></i>
                                </span>
                            </p>
                        </div>
                    </div>


                    <div class="field">
                        <div class="control">
                            <textarea class="textarea" name="message" placeholder="Write me..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @stop

    @section('styles')
        <style>
            .hero {
                background: url('/img/links.jpg') center center no-repeat;
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
                    bgcolor: '#ba68c8',
                    duration: 1000,
                    onCover: function (contentEl, revealerEl) {
                        contentEl.style.opacity = 1;
                    }
                }
            });
            rev1.reveal();
        </script>

    @stop