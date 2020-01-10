@extends('includes.admin-layout')
@section('content')
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
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
    <h1 class="h3 mb-0 text-gray-800 lora mb-4">Ikon Kota</h1>
    <form method="POST" action="{{ route('admin.ubahIkon') }}" enctype="multipart/form-data" id="formIkon">
        {{ csrf_field() }}
        <div class="form-group">
            <textarea class="content" name="inputContent"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
    $('.content').html('{!! $ikon->content !!}');
    tinymce.init({
        selector:'textarea.content',
        menubar: false,
        statusbar: false,
        toolbar: 'undo redo | bold italic | link image| alignleft aligncenter alignright',
        width: 900,
        height: 300
    });
</script>
@endsection