@props([
    'name',
    'id',
    'value',
    'height'
])

<div class="form-group">
    <textarea class="content" name="{{ $name }}" id="{{ $id }}"></textarea>
</div>

@push('js')
<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    var content = {!! json_encode($value) !!}

    tinymce.init({
        height: "{{ $height }}",
        selector:'textarea.content',
        content_css: '{{ asset("css/admin.css") }}',
        menubar: false,
        statusbar: false,
        convert_urls: false,
        plugins: 'image code preview searchreplace autolink directionality visualblocks visualchars fullscreen image link table charmap pagebreak nonbreaking insertdatetime advlist lists wordcount media ',
        toolbar: 'formatselect | bold italic strikethrough | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | undo redo | image code',
        content_style: "body { font-size: 12pt; font-family: Outfit; }",
        setup: function (editor) {
            editor.on('init', function (e) {
                editor.setContent(content);
            });
        },
        image_class_list: [
            {
                title: 'img-fluid', value: 'img-fluid'
            },
        ],
        image_title: true,
        automatic_uploads: true,
        images_upload_url: "{{ route('upload.image') }}",
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid-' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        }
    });
</script>

@endpush