@extends('layouts.admin')

@section('content')

    <div class="columns">
        <div class="column is-4 is-offset-4 has-text-centered">
            <h1 class="is-size-2">Profile</h1>
        </div>
    </div>

    <div class="columns">
        <div class="column is-8 is-offset-2">
            <form action="{{ route('postProfile') }}" method="post">
                <div class="columns">
                    <div class="field column is-6">
                        <label class="label">Name EN</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>
                    <div class="field column is-6">
                        <label class="label">Name SK</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="field column is-6">
                        <label class="label">Occupation EN</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>
                    <div class="field column is-6">
                        <label class="label">Occupation SK</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="field column is-6">
                        <label class="label">Email</label>
                        <div class="control has-icons-left">
                            <input class="input" type="email" placeholder="Email" value="hello@">
                            <span class="icon is-small is-left">
                          <i class="fa fa-envelope"></i>
                        </span>
                        </div>
                    </div>
                    <div class="field column is-6">
                        <label class="label">Password</label>
                        <div class="control">
                            <input class="input" type="password" placeholder="Update password?">
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="field column is-6">
                        <label class="label">Facebook</label>
                        <div class="control">
                            <input class="input" type="url" placeholder="facebook">
                        </div>
                    </div>
                    <div class="field column is-6">
                        <label class="label">Skype</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Skype">
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label">About me</label>
                    <div class="control">
                        <textarea class="textarea wysiwyg"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label">O mne</label>
                    <div class="control">
                        <textarea class="textarea wysiwyg"></textarea>
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

