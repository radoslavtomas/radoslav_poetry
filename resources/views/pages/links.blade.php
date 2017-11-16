@extends('layouts.pages')


@section('content')


        <section class="hero is-medium">
            <div class="container">
            <div class="hero-body">
                <div class="wrapper" id="rev-3">
                    <h1 class="title is-poiret">
                        {{ __('menu.links') }}
                    </h1>
                    <h2 class="subtitle">
                        {{ __('menu.sublinks') }}
                    </h2>

                </div>
            </div>
            </div>
        </section>
        <section class="section is-links">
            <div class="columns">
                <div class="column is-8 is-offset-2 has-text-centered">
                    <h3 class="is-size-3 is-poiret m-b-20">Interviews</h3>
                    <div class="myInterviews content m-b-30">
                        {!! $links !!}
                    </div>
                    <h3 class="is-size-3 is-poiret m-b-20">Video</h3>
                    {{--<div class="videoWrapper">--}}
                        {{--<iframe width="482" height="270" border="0" frameborder="0" scrolling="no" style="padding:0px; margin:0px; border: 0px;" src="//www.sme.sk/vp/17238/" allowFullScreen></iframe>--}}
                    {{--</div>--}}
                    <div class="content">
                        {!! $video !!}
                    </div>
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