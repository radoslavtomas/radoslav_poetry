@extends('layouts.pages')


@section('content')

    @if(Session::has('success'))
        <toast-component msg="{{ Session::get('success') }}"></toast-component>
    @endif

    <div class="my-hero">

        <form class="wrapper" id="rev-3" action="{{ route('postContact') }}" method="post">
            <div class="columns">
                @if ($errors->any())
                    <div class="notification is-danger column is-12">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            {{ csrf_field() }}
            <div class="columns">
                <div class="field column is-6">
                    <p class="control">
                        <input class="input" name="name" type="text" placeholder="{{ __('menu.name') }}">
                    </p>
                </div>

                <div class="field column is-6">
                    <p class="control">
                        <input class="input" name="email" type="email" placeholder="{{ __('menu.email') }}">
                    </p>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <textarea class="textarea" name="message" placeholder="{{ __('menu.msg') }}"></textarea>
                </div>
            </div>
            <button type="submit" class="button is-danger is-inverted m-t-20">{{ __('menu.button') }}</button>
        </form>


    </div>
@stop

@section('styles')
    <style>
        .my-hero {
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