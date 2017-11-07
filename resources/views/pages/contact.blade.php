@extends('layouts.pages')


@section('content')
        <div class="my-hero">
            <form id="rev-3" action="#">
                <div class="columns">
                    <div class="field column is-6">
                        <p class="control">
                            <input class="input" name="name" type="text" placeholder="Name">
                        </p>
                    </div>

                    <div class="field column is-6">
                        <p class="control">
                            <input class="input" name="email" type="email" placeholder="Email">
                        </p>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <textarea class="textarea" name="message" placeholder="Write me..."></textarea>
                    </div>
                </div>
                <a class="button is-danger is-inverted m-t-20">Send a message</a>
            </form>
        </div>
@stop

@section('styles')
    <style>
        .my-hero {
            display: flex;
            height: calc(100vh - 5.25rem);
            width: 100%;
            justify-content: center;
            align-items: center;
            background: url('/img/contact.jpg') center center no-repeat;
            background-size: cover;
            /*background-attachment: fixed;*/
        }

        .my-hero form {
            width: 80%;
            padding: 30px 40px;
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
                bgcolor: '#ec407a',
                duration: 1000,
                onCover: function (contentEl, revealerEl) {
                    contentEl.style.opacity = 1;
                }
            }
        });
        rev1.reveal();
    </script>

@stop