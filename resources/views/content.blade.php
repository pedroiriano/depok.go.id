@extends('includes.layout')
@section('content')
<div class="jumbotron jumbotron-fluid banner" style="background-image: url({{ asset($content->image) }})">
</div>
<div class="container-fluid">
    <div class="container">
        <h1 class="display-3 py-5">{{ $content->nama }}</h1>
        <div class="row py-4 text-justify">
            <div class="col-12">
                <p class="lead">{!! $content->desc !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection
