@extends('includes.admin-layout')
@push('js')
<script src="https://cdn.tiny.cloud/1/a2iaxv0rx32qwimjp9x8p6i57mxcv9ej5p44u3xeh0e6d0xj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endpush
@section('content')
{{-- <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script> --}}
<div class="container-fluid">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">{{ $content->nama }}</h1>
    <form method="POST" action="{{ route('admin.update.content', $content->slug) }}" enctype="multipart/form-data" id="formSejarah">
        {{ csrf_field() }}
        <div class="form-group">
            <textarea class="content" name="inputContent"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
    $('.content').html('{!! $content->desc !!} ');
    tinymce.init({
        selector:'textarea.content',
        plugins: 'images code',
        menubar: false,
        statusbar: false,
        toolbar: 'undo redo | bold italic | link image| alignleft aligncenter alignright | code',
        width: 900,
        height: 300,
        image_title: true,
        automatic_uploads: true,
        file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
    */

    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>
@endsection