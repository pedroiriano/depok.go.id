@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ $message }}
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
            <textarea class="content" name="inputContent" id="content"></textarea>
        </div>
        {!! $content->desc !!}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
@push('js')
<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector:'textarea.content',
        plugins: 'code',
        menubar: false,
        statusbar: false,
        toolbar: 'undo redo | bold italic | link | alignleft aligncenter alignright | code',
        image_title: true,
        automatic_uploads: true,
        file_picker_types: 'image',
        setup: function (editor) {
            editor.on('init', function (e) {
                editor.setContent('{!!json_encode($content->desc) !!}');
            });
        },
    });
</script>
@endpush