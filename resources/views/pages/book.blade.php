@extends('layouts.pages')


@section('content')

    <section class="hero is-medium">
        <div class="container">
            <div class="hero-body">
                <div class="wrapper" id="rev-3">
                    <h1 class="title is-poiret">
                        @if( App::getLocale() == 'en' )
                            {{ $book->name }}
                        @elseif( App::getLocale() == 'sk' )
                            {{ $book->name_sk }}
                        @endif
                    </h1>
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
                            <img class="has-border" src="{{ asset($book->cover) }}">
                        </div>

                        <div class="column is-9">
                            <span class="title is-size-4 m-r-10">
                                <strong>
                                    @if( App::getLocale() == 'en' )
                                        {{ $book->name }}
                                    @elseif( App::getLocale() == 'sk' )
                                        {{ $book->name_sk }}
                                    @endif
                                </strong></span>
                            <small>(2011)</small>
                            <div class="content m-t-30 m-b-15">
                                @if( App::getLocale() == 'en' )
                                    {!! $book->description !!}
                                @elseif( App::getLocale() == 'sk' )
                                    {!! $book->description_sk !!}
                                @endif
                            </div>
                            <nav class="level is-mobile">
                                <div class="level-left">
                                    @if( $book->download != '' || $book->download != null)
                                        <a href="{{ asset($book->download) }}" class="level-item button is-small is-info is-outlined m-r-10">
                                            <span class="icon is-small m-r-5"><i class="fa fa-download"></i></span>
                                            {{ __('books.download') }}
                                        </a>
                                    @endif

                                    @if( $book->buy != '' || $book->buy != null)
                                        <a class="level-item button is-small is-info is-outlined">
                                            <span class="icon is-small m-r-5"><i class="fa fa-shopping-cart"></i></span>
                                            {{ __('books.buy') }}
                                        </a>
                                    @endif
                                </div>
                            </nav>

                            <br>
                            <br>

                            <article class="content">
                                @if( App::getLocale() == 'en' )
                                    {!! $book->poems !!}
                                @elseif( App::getLocale() == 'sk' )
                                    {!! $book->poems_sk !!}
                                @endif
                            </article>

                            <br>
                            <br>

                            <div class="m-b-40">
                                <h3 class="is-size-5 is-uppercase">
                                    @if( App::getLocale() == 'en' )
                                        {{ $book->name }}
                                    @elseif( App::getLocale() == 'sk' )
                                        {{ $book->name_sk }}
                                    @endif
                                </h3>
                                <p>
                                    @if( App::getLocale() == 'en' )
                                        {{ $book->meta }}
                                    @elseif( App::getLocale() == 'sk' )
                                        {{ $book->meta_sk }}
                                    @endif
                                </p>
                            </div>

                            <div class="level book-cta">
                                <div class="level-left">
                                    <div class="level-item">
                                        <a class="button is-info is-outlined is-small" href="{{ route('books') }}">
                                            <span class="icon is-small m-r-5"><i class="fa fa-arrow-left"></i></span>
                                            {{ __('books.back') }}
                                        </a>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="level-item">
                                        @foreach( $books as $bk )
                                            <a class="button is-primary is-outlined is-small m-b-10" href="{{ route('book.single', [$bk->slug]) }}">
                                                <span class="icon is-small m-r-5"><i class="fa fa-arrow-right"></i></span>
                                                @if( App::getLocale() == 'en' )
                                                    {{ $bk->name }}
                                                @elseif( App::getLocale() == 'sk' )
                                                    {{ $bk->name_sk }}
                                                @endif
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
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
            background: url('{{ $book->background }}') center center no-repeat;
            background-size: cover;
        }

        .book-cta {
            align-items: flex-start;
        }

        .book-cta  .level-item {
            flex-direction: column;
            align-items: flex-end;
        }

    </style>

@stop

@section('scripts')

    <script>
        var rev1 = new RevealFx(document.querySelector('#rev-3'), {
            revealSettings: {
                bgcolor: '{{ $book->slide_color }}',
                duration: 1000,
                onCover: function (contentEl, revealerEl) {
                    contentEl.style.opacity = 1;
                }
            }
        });
        rev1.reveal();
    </script>

@stop