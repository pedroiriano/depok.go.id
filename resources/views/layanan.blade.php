@extends('includes.layout')
@section('content')
<div class="container-fluid">
    <div class="container py-5 text-center">
        <h1 class="display-5 py-4">Semua Layanan Depok Single Window</h1>
        <p class="lead">Depok Single Window adalah Media bagi masyarakat Kota Depok untuk memudahkan layanan
        Informasi yang dapat diakses di smartphone hanya dengan satu aplikasi</p>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="row justify-content-center">
                    @foreach ($categories as $key => $category)
                    <div class="col-4 col-md-2 my-3">
                        <a href="#" class="btnModal" data-toggle="modal" data-target="#modalLayanan-{{ $category->id }}" data-content="#" style="color:#1d1d1d;text-decoration:none">
                            <div class="card h-100 card-service">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('img/icon/'. $category->icon) }}" alt=""
                                        class="img-fluid w-50">
                                        <h5 class="card-title pt-2 f-12">{{ $category->nama }}</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @include('includes.modal-layanan')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection