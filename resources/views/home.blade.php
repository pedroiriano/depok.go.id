@extends('includes.admin-layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="alert alert-success p-4" role="alert">
            <div class="row">
                <div class="col-10">
                    <h4 class="alert-heading">Selamat Datang {{ Auth::user()->name }}!</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
