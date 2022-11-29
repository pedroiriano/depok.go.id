@extends('includes.admin-layout')
@section('content')
<div class="container-fluid">
    {!! Breadcrumbs::render('content', $content) !!}

    <x-header text="{{ $content->nama }}"></x-header>

    <x-alert></x-alert>

    <form method="POST" action="{{ route('admin.update.content', $content->slug) }}" enctype="multipart/form-data" id="formSejarah">
        {{ csrf_field() }}
        <div class="form-group">
            <x-editor id="content" name="inputContent" value="{!! $content->desc !!}" height="700px"></x-editor>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection