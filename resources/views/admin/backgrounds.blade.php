@extends('layouts.admin')


@section('content')

    <form action="{{ route('postBackgrounds') }}" method="post" class="m-t-20 m-b-20" enctype="multipart/form-data">
        {{ csrf_field() }}
        <table class="table is-fullwidth is-bordered">
            <thead>
                <tr>
                    <th>Page name</th>
                    <th>Preview</th>
                    <th>Pick image</th>
                    <th>Slide color</th>
                </tr>
            </thead>

            <tbody>
            @foreach($pages as $page)
                <tr>
                    <td>
                        <div class="has-text-centered">
                            <div>
                                <p class="is-size-5">{{ $page->name }}</p>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="img-wrapper">
                            <figure class="image is-16by9">
                                <img id="background-{{ $page->name_short }}" src="{{ $page->background }}">
                            </figure>
                        </div>
                    </td>

                    <td>
                        <div class="has-text-centered">
                            <file-upload-component id_name="bg_{{ $page->name_short }}"></file-upload-component>
                        </div>
                    </td>

                    <td>
                        <div class="has-text-centered">
                            <div>
                                <p>Slide color</p>
                                <div class="color-preview" style="background-color: {{ $page->slide_color }}"></div>
                                <div class="field">
                                    <div class="control">
                                        <input class="input" name="{{ $page->name_short }}" type="text" value="{{ $page->slide_color }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th colspan="4">
                        <div class="field m-t-20 m-b-20">
                            <div class="control has-text-centered">
                                <button class="button is-link">Save changes</button>
                            </div>
                        </div>
                    </th>
                </tr>
            </tfoot>

        </table>
    </form>

@stop

@section('styles')
    <style>
        .img-wrapper {
            width: 190px;
            height: 100%;
        }
        .color-preview {
            width: 100px;
            height: 25px;
            margin: 10px auto;
        }
    </style>
@endsection

@section('scripts')
    

@endsection