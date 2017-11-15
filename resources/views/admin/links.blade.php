@extends('layouts.admin')

@section('content')

    <div class="columns">
        <div class="column is-4 is-offset-4 has-text-centered">
            <h1 class="is-size-2">Links</h1>
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
            <form action="{{ route('postLinks') }}" method="post">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">Links</label>
                    <div class="control">
                        <textarea name="links" class="textarea wysiwyg">{{ $links->links }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Links SK</label>
                    <div class="control">
                        <textarea name="links_sk" class="textarea wysiwyg">{{ $links->links_sk }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Video</label>
                    <div class="control">
                        <textarea name="video" class="textarea wysiwyg">{{ $links->video }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Video SK</label>
                    <div class="control">
                        <textarea name="video_sk" class="textarea wysiwyg">{{ $links->video_sk }}</textarea>
                    </div>
                </div>

                <div class="field">
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
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | forecolor backcolor",
            menubar: true,
            textcolor_map: [
                "000000", "Black",
                "993300", "Burnt orange",
                "333300", "Dark olive",
                "003300", "Dark green",
                "003366", "Dark azure",
                "000080", "Navy Blue",
                "333399", "Indigo",
                "333333", "Very dark gray",
                "800000", "Maroon",
                "FF6600", "Orange",
                "808000", "Olive",
                "008000", "Green",
                "008080", "Teal",
                "0000FF", "Blue",
                "666699", "Grayish blue",
                "808080", "Gray",
                "FF0000", "Red",
                "FF9900", "Amber",
                "99CC00", "Yellow green",
                "339966", "Sea green",
                "33CCCC", "Turquoise",
                "3366FF", "Royal blue",
                "800080", "Purple",
                "999999", "Medium gray",
                "FF00FF", "Magenta",
                "FFCC00", "Gold",
                "FFFF00", "Yellow",
                "00FF00", "Lime",
                "00FFFF", "Aqua",
                "00CCFF", "Sky blue",
                "993366", "Red violet",
                "FFFFFF", "White",
                "FF99CC", "Pink",
                "FFCC99", "Peach",
                "FFFF99", "Light yellow",
                "CCFFCC", "Pale green",
                "CCFFFF", "Pale cyan",
                "99CCFF", "Light sky blue",
                "CC99FF", "Plum"
            ],
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
@endsection

