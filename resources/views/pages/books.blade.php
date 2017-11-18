@extends('layouts.pages')

@section('title')
    {{ __('menu.books') }}
@stop

@section('content')

    <section class="hero is-medium">
        <div class="container">
            <div class="hero-body">
                <div class="wrapper" id="rev-3">
                    <h1 class="title is-poiret">
                        {{ __('menu.books') }}
                    </h1>
                    <h2 class="subtitle">
                        {{ __('menu.subbooks') }}
                    </h2>

                </div>
            </div>
        </div>
    </section>
    <section class="section is-books">
        <div class="columns">
            <div class="column is-8 is-offset-2">

                @foreach( $books as $book )
                    <article class="m-t-10 m-b-50">
                        <div class="columns">

                            <div class="column is-8">
                                <a href="{{ route('book.single', [$book->slug]) }}" class="title is-size-4 m-r-10">
                                    <strong>
                                        @if( App::getLocale() == 'en' )
                                            {{ $book->name }}
                                        @elseif( App::getLocale() == 'sk' )
                                            {{ $book->name_sk }}
                                        @endif
                                    </strong>
                                </a>
                                <small>({{ $book->year }})</small>
                                <p class="m-t-30 m-b-15">
                                    @if( App::getLocale() == 'en' )
                                        {{ str_limit(strip_tags($book->description), 250) }}
                                    @elseif( App::getLocale() == 'sk' )
                                        {{ str_limit(strip_tags($book->description_sk), 250) }}
                                    @endif
                                </p>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <a class="level-item button is-small is-info is-outlined" href="{{ route('book.single', [$book->slug]) }}">{{ __('books.readmore') }}</a>
                                    </div>
                                </nav>
                            </div>

                            <div class="column is-4 has-text-centered">
                                <a href="{{ route('book.single', [$book->slug]) }}">
                                    <img class="has-border" src="{{ asset($book->cover) }}">
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach

            </div>
        </div>
    </section>
@stop

@section('styles')
    <style>
        .hero {
            background: url({{ $settings->background }}) center center no-repeat;
            background-size: cover;
        }
    </style>

@stop

@section('scripts')

    <script>
        var rev1 = new RevealFx(document.querySelector('#rev-3'), {
            revealSettings: {
                bgcolor: '{{ $settings->slide_color }}',
                duration: 1000,
                onCover: function (contentEl, revealerEl) {
                    contentEl.style.opacity = 1;
                }
            }
        });
        rev1.reveal();
    </script>

@stop