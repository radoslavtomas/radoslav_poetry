@extends('layouts.admin')

@section('content')

    <div class="columns">
        <div class="column is-4 is-offset-4 has-text-centered">
            <h1 class="is-size-2">Update book: {{ $book->name }}</h1>
        </div>
    </div>

    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="columns">
        <div class="column is-8 is-offset-2">
            <form action="{{ route('book.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="columns">
                    <div class="field column is-6">
                        <label class="label">Name EN</label>
                        <div class="control">
                            <input class="input" name="name" type="text" value="{{ $book->name }}">
                        </div>
                    </div>
                    <div class="field column is-6">
                        <label class="label">Name SK</label>
                        <div class="control">
                            <input class="input" name="name_sk" type="text" value="{{ $book->name_sk }}">
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="field column is-6">
                        <label class="label">Slug</label>
                        <div class="control">
                            <input class="input" name="slug" type="text" value="{{ $book->slug }}">
                        </div>
                    </div>
                    <div class="field column is-6">
                        <label class="label">Year</label>
                        <div class="control">
                            <input class="input" name="year" type="text" value="{{ $book->year }}">
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="field has-text-centered column is-9">
                        <div class="hero is-white has-border">
                            <label class="label">Upload cover</label>
                            <file-upload-component class="m-b-15" id_name="cover"></file-upload-component>
                        </div>
                    </div>
                    <div class="column is-3">
                        <figure class="image">
                            <img src="{{ $book->cover }}">
                        </figure>
                    </div>
                </div>
                <div class="field has-text-centered">
                    <div class="hero is-white has-border">
                        <label class="label">Upload cover</label>
                        <file-upload-component class="m-b-15" id_name="cover"></file-upload-component>
                    </div>
                </div>


                <div class="columns">
                    <div class="field column is-6">
                        <label class="label">Meta EN</label>
                        <div class="control">
                            <input class="input" name="meta" type="text" value="">
                        </div>
                    </div>

                    <div class="field column is-6">
                        <label class="label">Meta SK</label>
                        <div class="control">
                            <input class="input" name="meta_sk" type="text" value="">
                        </div>
                    </div>
                </div>



                <div class="field">
                    <label class="label">Description EN</label>
                    <div class="control">
                        <textarea name="description" class="textarea wysiwyg"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Description SK</label>
                    <div class="control">
                        <textarea name="description_sk" class="textarea wysiwyg"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Poems EN</label>
                    <div class="control">
                        <textarea name="poems" class="textarea wysiwyg"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Poems SK</label>
                    <div class="control">
                        <textarea name="poems_sk" class="textarea wysiwyg"></textarea>
                    </div>
                </div>

                <div class="columns">
                    <div class="field column is-6">
                        <label class="label">Buy</label>
                        <div class="control">
                            <input class="input" name="buy" type="url" value="">
                        </div>
                    </div>
                    <div class="field column is-6">
                        <label class="label">Slide color</label>
                        <div class="control">
                            <input class="input" name="slide_color" type="text" value="">
                        </div>
                    </div>
                </div>

                <div class="field has-text-centered">
                    <div class="hero is-white has-border">
                        <label class="label">Pdf to download</label>
                        <file-upload-component class="m-b-15" id_name="download"></file-upload-component>
                    </div>
                </div>

                <div class="field has-text-centered">
                    <div class="hero is-white has-border">
                        <label class="label">Background</label>
                        <file-upload-component class="m-b-15" id_name="background"></file-upload-component>
                    </div>
                </div>

                <div class="field m-b-50 m-t-50">
                    <div class="control has-text-centered">
                        <button class="button is-link">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>



@stop

@section('styles')

@endsection

@section('scripts')
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: ".wysiwyg",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            menubar: false,
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };
        tinymce.init(editor_config);
    </script>

    <script>
        $('.input-field input[type=file]').on('change', function() {
            var files = event.target.files;
            var fileName = files[0].name;

            console.log(fileName);

            if (fileName.lastIndexOf('.') <= 0) {
                return alert('Please, add a valid file!');
            }

            var fileReader = new FileReader();
            fileReader.readAsDataURL(files[0]);
            fileReader.addEventListener('load', function() {
                $('.preview').attr('src', fileReader.result);
            });
        });
    </script>
@endsection

