@extends('includes.layout')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
       <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-4 py-5 text-center">Pendaftaran Redaksi PDAM</h1>
            </div>
            <div class="col-md-8 col-12">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Selamat!</h4>
                    <p>Pendaftaran direksi PDAM telah berhasil.</p>
                    <hr>
                    <p class="mb-0">Untuk pengumuman lebih lanjut akan di hubungi melalui whatsapp, sms atau email.</p>
                </div>
            </div>    
            <div class="col-12 text-center">
                <a href="{{ route('beranda') }}" class="btn btn-link text-center">Kembali ke halaman utama</a>
            </div>
        </div>
   </div>
</div>
@endsection
