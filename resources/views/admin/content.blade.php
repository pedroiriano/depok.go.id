@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    {!! Breadcrumbs::render('content', $content) !!}

    <x-header text="{{ $content->nama }}"></x-header>

    <x-alert></x-alert>

    <form method="POST" action="{{ route('admin.update.content', $content->slug) }}" enctype="multipart/form-data" id="formSejarah">
        {{ csrf_field() }}
        <div class="form-group">
            <textarea class="content" name="inputContent" id="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
@push('js')
<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    var content = {!! json_encode($content->desc) !!}
    tinymce.init({
        selector:'textarea.content',
        content_css: '{{ asset("css/admin.css") }}',
        plugins: 'code lists',
        menubar: false,
        statusbar: false,
        toolbar: 'undo redo | bold italic | link | alignleft aligncenter alignright | numlist bullist | code',
        content_style: "body { font-size: 12pt; font-family: Outfit; }",
        setup: function (editor) {
            editor.on('init', function (e) {
                editor.setContent(content);
            });
        },
    });
</script>
@endpush