@extends('includes.layout')
@section('content')
<div class="jumbotron jumbotron-fluid banner" style="background-image: url({{ asset('images/seni-budaya.svg') }})">
</div>
<div class="container-fluid">
    <div class="container">
        <h1 class="display-3 py-4">Seni dan Budaya</h1>
        <div class="row py-5">
            <div class="col-12 text-justify">
            	<div class="display-5">Hymne dan Mars Kota Depok</div>
            	<p class="lead">Berdasarkan Keputusan Walikota Depok Nomor : 431/79/Kpts/HK/2004 tentang penetapan Hymne dan Mars Kota Depok karya cipta Hj.Rini Tjakraningrat S.Sargo sebagai Hymne dan Mars Pemerintah Kota Depok. Berikut ini adalah syair dari Hymne dan Mars Kota Depok.</p>
            	<img src="{{ asset('images/hymne.jpg') }}" alt="" class="img-fluid">
            	<img src="{{ asset('images/mars-kota-depok.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
</div>
@endsection