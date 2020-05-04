@extends('includes.admin-layout')

@section('content')
<div class="row">
    <div class="col-8">
        <div class="alert alert-success p-4" role="alert">
            <div class="row">
                <div class="col-9">
                    <h4 class="alert-heading">Selamat Datang {{ Auth::user()->name }}!</h4>
                    <hr>
                    <p class="pt-2">Selamat datang di halaman admin depok.go.id</p>
                </div>
                <div class="col-2">
                    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/90x90">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
