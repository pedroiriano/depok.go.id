@extends('includes.layout')
@push('css')
<link rel="stylesheet" href={{ asset("css/owl/owl.carousel.min.css") }}>
<link rel="stylesheet" href={{ asset("css/owl/owl.theme.default.min.css") }}>

<style>
.pengumuman-img {
    width: 100%;
    height: 18.125vw;
    object-fit: cover;
}
.img-komoditi {
    float: left;
    width:  169px;
    height: 10vw;
    background-size: cover;
    margin-bottom: 10px;
}
</style>
@endpush
@section('content')
{{-- Segement 1 --}}
<div class="container py-4">    
    <h3 class="pt-3">Info Covid-19 Kota Depok</h3>
    <h6 class="text-muted">Update terakhir: <span id="covid-last-update">...</span></h6>
    <div class="row py-4">
        <div class="col-md-3 col-12 mb-2">
            <div class="card shadow border-0 bg-primary text-white">
                <div class="card-body text-center">
                    <small>Jumlah Pasien</small>
                    <h6 class="h6">Total Terkonfirmasi</h6>
                    <h5 class="h5" id="covid-konfirmasi">...</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12 mb-2">
            <div class="card shadow border-0 bg-warning text-white">
                <div class="card-body text-center">
                    <small>Jumlah Pasien</small>
                    <h6 class="h6">Total Aktif</h6>
                    <h5 class="h5" id="covid-aktif">...</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12 mb-2">
            <div class="card shadow border-0 bg-success text-white">
                <div class="card-body text-center">
                    <small>Jumlah Pasien</small>
                    <h6 class="h6">Total Sembuh</h6>
                    <h5 class="h5" id="covid-sembuh">...</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12 mb-2">
            <div class="card shadow border-0 bg-danger text-white">
                <div class="card-body text-center">
                    <small>Jumlah Pasien</small>
                    <h6 class="h6">Total Meninggal</h6>
                    <h5 class="h5" id="covid-meninggal">...</h5>
                </div>
            </div>
        </div>
        <div class="col-12 mt-2 mb-2">
            <div id="accordion">
                <div class="card bg-secondary border-0" style="cursor: pointer;">
                    <div id="headingOne">
                        <h5 class="my-1" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <button class="btn text-white">
                                Selengkapnya
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h6 class="h6 mb-0">Kontak Erat</h6>
                                            <div class="row pt-3">
                                                <div class="col-4">
                                                    <h6 class="h6 mb-0" id="covid-kontakerat-total">...</h6>
                                                    <small>Total</small>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="h6 mb-0" id="covid-kontakerat-pantau">...</h6>
                                                    <small>Pemantauan</small>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="h6 mb-0" id="covid-kontakerat-selesai">...</h6>
                                                    <small>Selesai</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h6 class="h6 mb-0">Suspek</h6>
                                            <div class="row pt-3">
                                                <div class="col-4">
                                                    <h6 class="h6 mb-0" id="covid-suspek-total">...</h6>
                                                    <small>Total</small>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="h6 mb-0" id="covid-suspek-pantau">...</h6>
                                                    <small>Pemantauan</small>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="h6 mb-0" id="covid-suspek-selesai">...</h6>
                                                    <small>Selesai</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h6 class="h6 mb-0">Probabel</h6>
                                            <div class="row pt-3">
                                                <div class="col-4">
                                                    <h6 class="h6 mb-0" id="covid-probabel-total">...</h6>
                                                    <small>Total</small>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="h6 mb-0" id="covid-probabel-pengawasan">...</h6>
                                                    <small>Pengawasan</small>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="h6 mb-0" id="covid-probabel-selesai">...</h6>
                                                    <small>Selesai</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 mt-2">
                                    <a href="https://ccc-19.depok.go.id/">Sumber: ccc-19.depok.go.id</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-md-8">
            <div class="card text-white bg-primary mb-3 border-0 shadow">
                <div class="card-header" style="background-color: #5EB154">Pengumuman</div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">
                    <ol class="carousel-indicators" style="bottom: -15px">
                    @foreach($sliders as $key => $slider)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="active"></li>
                    @endforeach
                    </ol>
                    <div class="carousel-inner rounded-bottom">
                        @foreach($sliders as $key => $slider)
                        <div class="carousel-item @if($key == 0) {{ 'active' }} @endif">
                                <img class="pengumuman-img" src="{{ asset('storage/uploads/sliders/'.$slider->imageName) }}" alt="First slide">
                                <div class="carousel-caption" style="background-color: rgba(0,0,0,0.7);left: 0;right: 0;bottom: 0;text-align: left">
                                    <span class="ml-3 text-light pb-3">{{ $slider->nama }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mb-3 text-white border-0 shadow w-100">
                <div class="card-header" style="background-color: #F5A921">Berita</div>
                <div id="carouselBerita" class="carousel slide h-100" data-ride="carousel" style="margin-top: -1px;">
                    <ol class="carousel-indicators" id="berita-indicators" style="bottom: -15px">
                    </ol>
                    <div class="carousel-inner rounded-bottom h-100" id="berita-carousel-wrapper">
                        <div class="carousel-item h-100 active" id="berita-carousel-loading">
                            <div class="ph-row h-100" style="margin-top: -1px;margin-bottom: 0">
                                <div class="ph-col-12 rounded-bottom h-100" style="height: 233px;margin-bottom: 0"></div>
                            </div>
                            <div class="carousel-caption" style="background-color: rgba(0,0,0,0.7);left: 0;right: 0;bottom: 0;text-align: left;padding-top:20px"> 
                                <span class="ml-3 text-light pb-3" style="font-size:14px">Harap Tunggu ...</span>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselBerita" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselBerita" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 d-flex align-items-stretch">
            <div class="card mb-3 border-0 shadow w-100">
                <div class="card-header text-white bg-dark">Agenda Kota</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 pb-3">
                            <ul class="nav nav-tabs nav-fill" id="AgendaTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="hariIni-tab" data-toggle="tab" href="#hariIni" role="tab" aria-controls="hariIni" aria-selected="true">Hari ini</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="mendatang-tab" data-toggle="tab" href="#mendatang" role="tab" aria-controls="mendatang" aria-selected="false">Mendatang</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="hariIni" role="tabpanel" aria-labelledby="hariIni-tab">
                                    <small class="text-muted">{{ $tanggal }}</small>
                                    @foreach($agendasToday as $agenda)
                                        <div class="callout callout-success">
                                            <span>{{ $agenda->nama }}</span>
                                        </div>
                                    @endforeach
                                    <div class="pt-2">
                                        <a href="https://www.depok.go.id/agenda-kota" class="pt-2">Agenda Lainnya <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="mendatang" role="tabpanel" aria-labelledby="mendatang-tab">
                                    @foreach($agendasNext as $agenda)
                                    <small class="text-muted">{{ $agenda->tanggal }}</small>
                                        <a href="#" data-target="#modalAgenda-{{ $agenda->id }}" data-toggle="modal">
                                            <div class="callout callout-success">
                                                <span>{{ $agenda->nama  }}</span>
                                            </div>
                                        </a>
                                    @endforeach
                                    <div class="pt-2">
                                        <a href="https://www.depok.go.id/agenda-kota" class="pt-2">Agenda Lainnya <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Agenda-->
                        <div class="modal fade" id="modalAgenda-{{ $agenda->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                               <div class="modal-content">
                                  <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">{{ $agenda->nama }}</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                     </button>
                                  </div>
                                  <div class="modal-body text-center">
                                     <img src="{{ asset('uploads/agenda/'.$agenda->imageName) }}" alt="" class="img-fluid">
                                  </div>
                                  <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 d-flex align-items-stretch">
            <div class="card mb-3 border-0 shadow">
                <div class="card-header text-white bg-primary">Layanan Depok Single Window</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        @foreach ($categories as $key => $category)
                        @if ($category->pos > 6)
                        <div class="col-6 col-md-3 my-1 d-none d-sm-block">
                        @else
                        <div class="col-6 col-md-3 my-1">
                        @endif
                            <a href="#" id="btnModal-{{ $category->id }}" class="btnModal" data-toggle="modal" data-target="#modalLayanan-{{ $category->id }}" data-content="#" style="color:#1d1d1d;text-decoration:none; ">
                                <div class="card h-100 card-service border">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ asset('img/icon/'. $category->icon) }}" alt="" class="img-fluid" style="width: 40% !important">
                                            <h5 class="card-title pt-2 f-12">{{ $category->nama }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @include('includes.modal-layanan')
                        @endforeach
                    </div>
                    <a href=" {{ route('layanan') }} " class="btn btn-light border mt-3 f-12">Layanan Lainnya</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-12 p-3">
            <h3>Harga Komoditas Pasar</h3>
            <a href="http://disperdagin.depok.go.id/"><h6>Sumber: Dinas Perdagangan dan Perindustrian Kota Depok</h6></a>
        </div>
        <div class="col-12">
            @include('includes.komoditas-pasar')
        </div>
    </div>
    <div class="row py-2">
        <div class="col-12 p-3">
            <h3>Sekilas Tentang Depok</h3>
        </div>
        <div class="col-md-3 my-2">
            <div class="card w-100 shadow">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-12 pb-3">
                            <small class="text-muted">{{ $tanggal }}</small>  
                        </div>
                        <div class="col-12">
                            <h4 class="h4" style="color: #1D4F88"><i class="pr-2" id="icon-weather-0"></i><span id="suhuHariIni"></span></h4>
                            <h6 class="text-muted" id="desc-weather">...</h6>
                        </div>
                    </div>
                    <div class="row text-center pt-3 pb-4">
                        <div class="col-6">
                            <h6><i class="fas fa-wind pr-1"></i><span id="anginHariIni">...</span></h6>
                        </div>
                        <div class="col-6">
                            <h6><i class="fas fa-tint pr-1"></i><span id="kelembapanHariIni">...</span></h6>
                        </div>
                    </div>
                    <div class="row" style="font-size: .85rem">
                        <div class="col-7">
                            <p class="text-dark"><span id="time-1">...</span></p>
                            <p class="text-dark"><span id="time-2">...</span></p>
                            <p class="text-dark"><span id="time-3">...</span></p>
                            <p class="text-dark"><span id="time-4">...</span></p>
                            <p class="text-dark"><span id="time-5">...</span></p>
                            <p class="text-dark"><span id="time-6">...</span></p>
                            <p class="text-dark"><span id="time-7">...</span></p>
                        </div>
                        <div class="col-4">
                            <p class="text-muted"><i class="pr-2" id="icon-weather-1"></i><span id="weather-1">...</span></p>
                            <p class="text-muted"><i class="pr-2" id="icon-weather-2"></i><span id="weather-2">...</span></p>
                            <p class="text-muted"><i class="pr-2" id="icon-weather-3"></i><span id="weather-3">...</span></p>
                            <p class="text-muted"><i class="pr-2" id="icon-weather-4"></i><span id="weather-4">...</span></p>
                            <p class="text-muted"><i class="pr-2" id="icon-weather-5"></i><span id="weather-5">...</span></p>
                            <p class="text-muted"><i class="pr-2" id="icon-weather-6"></i><span id="weather-6">...</span></p>
                            <p class="text-muted"><i class="pr-2" id="icon-weather-7"></i><span id="weather-7">...</span></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="https://www.bmkg.go.id/"><small class="text-muted">Sumber: BMKG Indonesia</small></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 my-2">
            <div class="ph-item w-100 shadow rounded" id="penyakit-loading">
                <div class="ph-col-12">
                    <div class="ph-row">
                        <div class="ph-col-6"></div>
                        <div class="ph-col-6 empty"></div>
                        <div class="ph-col-12 big empty"></div>
                        @for ($i = 0; $i < 5; $i++)    
                            <div class="ph-col-12 big"></div>
                            <div class="ph-col-10 "></div>
                            <div class="ph-col-2 empty"></div>
                            <div class="ph-col-12 empty"></div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="card shadow w-100 d-none" id="penyakit-card">
                <div class="card-body">
                    <h6 class="pb-3" style="font-size:.875rem"><i class="fas fa-viruses"></i> Penyakit Terpantau Bulan ini</h6>
                    <ol class="pl-4" style="color: #1D4F88">
                         <li class="pb-3">
                            <span id="penyakit-0" class="d-block"></span>
                            <small class="text-muted d-block" id="penyakit-0-desc"></small>
                        </li>
                        <li class="pb-3">
                            <span id="penyakit-1" class="d-block"></span>
                            <small class="text-muted d-block" id="penyakit-1-desc"></small>
                        </li>
                        <li class="pb-3">
                            <span id="penyakit-2" class="d-block"></span>
                            <small class="text-muted d-block" id="penyakit-2-desc"></small>
                        </li>
                        <li class="pb-3">
                            <span id="penyakit-3" class="d-block"></span>
                            <small class="text-muted d-block" id="penyakit-3-desc"></small>
                        </li>
                        <li class="pb-3">
                            <span id="penyakit-4" class="d-block"></span>
                            <small class="text-muted d-block" id="penyakit-4-desc"></small>
                        </li>
                    </ol>
                </div>
                <div class="card-footer">
                    <a href="http://dinkes.depok.go.id/">
                        <small>Sumber: Dinkes Kota Depok</small>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="col-12" id="data-all-wrapper">
                <div class="row" id="data-loading">
                    @for($i=0; $i<4; $i++)
                    <div class="col-6 my-2">
                        <div class="ph-item shadow rounded">
                            <div class="ph-col-12">
                                <div class="ph-row">
                                    <div class="ph-col-4"></div>
                                    <div class="ph-col-8 empty"></div>
                                    <div class="ph-col-12 big empty"></div>
                                    <div class="ph-col-8 big"></div>
                                    <div class="ph-col-4 empty"></div>
                                    <div class="ph-col-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class="row d-none" id="data-wrapper">
                    <div class="col-md-6 col-sm-12 d-flex align-items-stretch my-2">
                        <div class="card shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3" style="font-size:.875rem"><i class="fas fa-hospital pr-1"></i>RSUD dan Puskesmas</h6>
                                <div class="row pb-2">
                                    <div class="col-6">
                                        <h6 class="h6 mb-0" style="color: #1D4F88" id="kunjungan-rsud"></h6>
                                        <small>RSUD</small>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="h6 mb-0" style="color: #1D4F88" id="kunjungan-puskesmas"></h6>
                                        <small>Puskesmas</small>
                                    </div>
                                </div>
                                <div style="line-height: 90%">
                                    <small class="text-muted">Jumlah layanan yang terlayani tahun 2020 sampai dengan bulan ini</small>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="http://dinkes.depok.go.id/">
                                <small>Sumber: Dinkes Kota Depok</small>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex align-items-stretch my-2">
                        <div class="card shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3" style="font-size:.875rem"><i class="fas fa-user-graduate pr-1"></i>Jumlah Sekolah</h6>
                                <div class="row">
                                    <div class="col-4">
                                        <h5 class="h5 mb-0" style="color: #1D4F88" id="pendidikan-sd"></h5>
                                        <small>SD</small>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="h5 mb-0" style="color: #1D4F88" id="pendidikan-smp"></h5>
                                        <small>SMP</small>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="h5 mb-0" style="color: #1D4F88" id="pendidikan-sma"></h5>
                                        <small>SMA</small>
                                    </div>
                                </div>
                                <div style="line-height: 90%">
                                    <small class="text-muted">Jumlah sekolah negeri yang ada di Depok tahun 2020</small>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="http://disdik.depok.go.id/">
                                <small>Sumber: Disdik Kota Depok</small>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex align-items-stretch my-2">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3" style="font-size:.875rem"><i class="fas fa-users pr-1"></i>Jumlah Penduduk</h6>
                                <a href="{{ route('demografi') }}">
                                    <h5 class="text-center h5" style="color: #1D4F88" id="jumlah-penduduk"></h5>
                                </a>
                                <h6 class="text-muted text-center">Total penduduk</h6>
                                <div class="row text-center pt-3">
                                    <div class="col-6">
                                        <a href="{{ route('demografi') }}">
                                            <h5 class="h5" id="jumlah-pria"></h5>
                                        </a>
                                        <h6 class="text-muted"><i class="fas fa-male pr-1"></i> Pria</h6>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('demografi') }}">
                                            <h5 class="h5" id="jumlah-wanita"></h5>
                                        </a>
                                        <h6 class="text-muted"><i class="fas fa-female pr-1"></i> Wanita</h6>
                                    </div>
                                </div>
                                <div style="line-height: 90%">
                                    <small class="text-muted">Data Kependudukan Kota Depok Tahun 2020 Semester 1</small>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="http://disdukcapil.depok.go.id/">
                                <small>Sumber: Disdukcapil Kota Depok</small>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex align-items-stretch my-2">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3" style="font-size:.875rem"><i class="fas fa-money-bill-wave-alt pr-1"></i>Penerimaan Bulan ini</h6>
                                <a href="http://pbb-bphtb.depok.go.id:8081/Mbphtb/Reports/MonBPHTB.aspx" style="font-size: 0.8rem">BPHTB</a>
                                <h5 style="color: #1D4F88" id="bphtb" class="h5"></h5>
                                <a href="http://pbb-bphtb.depok.go.id:8081/DPBB/V_DASHBOARD/PrintV_DASHBOARDTable.aspx" style="font-size: 0.8rem">PBB</a>
                                <h5 style="color: #1D4F88" id="pbb" class="h5"></h5>
                            </div>
                            <div class="card-footer">
                                <a href="bkd.depok.go.id">
                                <small>Sumber: BKD Kota Depok</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-md-8 col-sm-12 my-2">
            <div class="card shadow">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="berita-tab" data-toggle="tab" href="#berita" role="tab" aria-controls="berita" aria-selected="true">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video Terbaru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="video-tab" data-toggle="tab" href="#infografis" role="tab" aria-controls="video" aria-selected="false">Infografis</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="berita" role="tabpanel" aria-labelledby="berita-tab">
                            <div id="berita-wrapper" class="pt-4">
                                <div id="berita-loading">
                                    @for($i=0; $i<5; $i++)
                                    <div class="ph-item" style="background-color: transparent;border: none;margin-bottom:0px;padding:0px">
                                        <div class="ph-col-4" style="padding-left:0px">
                                            <div class="ph-picture rounded" style="height: 80px"></div>
                                        </div>
                                        <div class="ph-col-8" style="padding-left: 9px">
                                            <div class="ph-row">
                                                <div class="ph-col-6"></div>
                                                <div class="ph-col-6 empty"></div>
                                                <div class="ph-col-12 big"></div>
                                                <div class="ph-col-8 big"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    @endfor
                                </div>
                            </div>
                            <div class="py-2" id="berita-other-link">
                                <a href="https://berita.depok.go.id" target="_blank" class="pb-3">Berita Lainnya <i class="fas fa-arrow-right"></i></a>
                            </div> 
                        </div>
                        <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                            <div class="pt-3">
                                <div id="youtube-frame" class="embed-responsive embed-responsive-16by9 mb-3 d-none">
                                    <iframe name="youtube-frame" src="" frameborder="0" allowfullscreen class="embed-responsive-item"></iframe>
                                </div>
                                <div id="youtube-wrapper" class="pt-4">
                                    <div id="youtube-loading">
                                        <div class="ph-item" style="background-color: transparent;border: none;margin-bottom:0px;padding:0px">
                                            <div class="ph-col-12" style="padding-left:0px; padding-right:0px">
                                                <div class="ph-picture" style="height: 300px"></div>
                                            </div>
                                        </div>
                                        @for($i=0; $i<5; $i++)
                                        <div class="ph-item" style="background-color: transparent;border: none;margin-bottom:0px;padding:0px">
                                            <div class="ph-col-2" style="padding-left:0px; padding-right:0px">
                                                <div class="ph-picture" style="height: 60px; width: 80%"></div>
                                            </div>
                                            <div class="ph-col-10" style="padding-left: 0px">
                                                <div class="ph-row">
                                                    <div class="ph-col-6"></div>
                                                    <div class="ph-col-6 empty"></div>
                                                    <div class="ph-col-8 big"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="margin-bottom: 5px;margin-top: 5px">
                                        @endfor
                                    </div>
                                </div>
                                <div id="youtube-other-link" class="pt-3">
                                    <a href="https://www.youtube.com/user/kominfodepok" class="text-decoration-none">Video lainnya<i class="fas fa-arrow-right"></i></a>
                                </div> 
                            </div>
                        </div>
                        <div class="tab-pane fade pt-3" id="infografis" role="tabpanel" aria-labelledby="infografis-tab">
                            <div class="row" id="infografis-loading">
                                @for($x=0; $x<2; $x++)
                                <div class="col-6">
                                    <div class="ph-item border-0 shadow">
                                        <div class="ph-col-12">
                                            <div class="ph-picture"></div>
                                            <div class="ph-row">
                                                <div class="ph-col-8 big"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>  
                            <div id="infografis-wrapper" class="row pt-4 d-none">
                            </div>
                            <div id="infografi-other-link" class="pt-3">
                                <a href="{{ route('infografis') }}" class="text-decoration-none">Infografis lainnya<i class="fas fa-arrow-right pl-1"></i></a>
                            </div> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 d-flex align-items-stretch my-2">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="h5">Government Public Relation</h5>
                    <div id="gpr-widget">
                        <div stlye="display: block;width:100%;height:500px;overflow:scroll">
                            <div id="gpr-kominfo-widget-container" class="mb-3"></div>
                        </div>
                        <div style="display: block;width:100%;height:500px;overflow:scroll">
                            <a class="twitter-timeline" href="https://twitter.com/pemkotdepok?ref_src=twsrc%5Etfw" data-tweet-limit="3" class="border-1">Tweets by pemkotdepok</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="pengumuman-modal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card bg-light rounded border-none">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('pengumuman', $popup->url) }}">  
                            <img class="img-fluid" src="{{ asset('storage/uploads/sliders/'.$popup->imageName) }}" alt="Pengumuman Banner" style="width: 100%;object-fit:cover">
                        </a>
                        <h5 class="pt-3">{{ $popup->nama }}</h5>
                    </div>
                    <div>
                        <a href="{{ route('pengumuman', $popup->url) }}" class="btn btn-primary">Selengkapnya<i class="fas fa-arrow-right"></i></a>
                        <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
<script type="text/javascript">
    function getNumberWithDot(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
    if ($(window).width() < 514) {
        $('#data-all-wrapper').removeClass('col-12');
    } else {
        $('#data-all-wrapper').addClass('col-12');
    }
    $(document).ready(function(){
        $('#pengumuman-modal').modal('show');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/api/infografis',
            dataType: 'json',
            success: function(data){
                console.log(data)
                $.each(data, function(index, item){
                    $('#infografis-wrapper').append(
                        '<div class="col-6">' +
                            '<a href="#" data-target="#modal-infografis-'+ item.id +'" data-toggle="modal">'+
                            '<img src="' + item.src + '" alt="" class="img-fluid rounded">' +
                            '<h6 class="h6" style="font-size:18px">' + item.nama + '</h6>' +
                            '</a>'+
                        '</div>'+
                        '<div class="modal fade" id="modal-infografis-'+ item.id +'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'+
                            '<div class="modal-dialog modal-md" role="document">'+
                                '<div class="modal-content">'+
                                    '<div class="modal-header">'+
                                        '<h5 class="modal-title" id="exampleModalLabel">'+ item.nama +'</h5>'+
                                        '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                        '<span aria-hidden="true">&times;</span>'+
                                        '</button>'+
                                    '</div>'+
                                    '<div class="modal-body text-center">'+
                                        '<img src="' + item.src + '" alt="" class="img-fluid rounded">' +
                                    '</div>'+
                                    '<div class="modal-footer">'+
                                        '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'
                    );
                });
                $('#infografis-loading').addClass('d-none');
                $('#infografis-wrapper').removeClass('d-none');
                $('#infografis-other-link').removeClass('d-none');
            }
        });
        $.ajax({
            url: '/api/harga-komoditas',
            dataType: 'json',
            success: function (data){
                console.log(data);
                $('#pangan-loading').addClass('d-none');
                $.each(data, function(index, item){
                    if (item.selisih.slice(0,1) == '-') {
                        text = "text-success";
                        desc = " Harga turun ";
                        icon = '<i class="fas fa-arrow-down"></i>';
                    }else if(item.selisih == '0'){
                        text = "text-primary";
                        desc = " Harga stabil ";
                        icon = '<i class="fas fa-equals"></i>';    
                    }
                    else{
                        text = "text-danger";
                        desc = " Harga naik ";
                        icon = '<i class="fas fa-arrow-up"></i>';
                    }
                    $('#pangan-wrapper').append(
                        '<div class="item card border">' +
                                '<div class="card-body">' +
                                    '<img src="'+ item.src +'" alt="" class="img-komoditi">' +
                                    '<div class="card-body-header" style="height:190px">' +
                                        '<h6 id="pangan-komoditi" class="pt-2" style="font-size: .875rem">' + item.komoditi +'</h6>' +
                                    '</div>' +
                                    '<h6 class="font-weight-bold" style="font-size: 1rem">Rp. ' + 
                                        parseInt(item.price_today).toLocaleString() + '<small class="font-weight-bold">/Kg</small>' + 
                                    '</h6>' +
                                    '<h6 class="'+ text +'">(' + 
                                    icon + desc + parseInt(item.selisih).toLocaleString().replace('-', '') + ')' + 
                                    '</h6>' +
                                '</div>' +
                        '</div>'
                    );
                });
                $(".owl-carousel").owlCarousel({
                    loop:true,
                    margin:10,
                    nav:true,
                    autoplay:true,
                    autoplayTimeout:2000,
                    autoplayHoverPause:true,
                    dots: false,
                    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                    responsive:{
                        0:{
                            items:2
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:5
                        }
                    }
                });
            }
        });
        $.ajax({
            url: '/api/covid',
            dataType: 'json',
            success: function (data){
                console.log(data);
                $('#covid-last-update').text(data.LastUpdate);
                $('#covid-konfirmasi').text(getNumberWithDot(data.positif.total_terkonfirmasi));
                $('#covid-aktif').text(getNumberWithDot(data.positif.total_aktif));
                $('#covid-sembuh').text(getNumberWithDot(data.positif.total_sembuh));
                $('#covid-meninggal').text(getNumberWithDot(data.positif.total_meninggal));
                $('#covid-kontakerat-total').text(getNumberWithDot(data.kontakerat.total_kontakerat));
                $('#covid-kontakerat-selesai').text(getNumberWithDot(data.kontakerat.total_kontakeratselesai));
                $('#covid-kontakerat-pantau').text(getNumberWithDot(data.kontakerat.total_kontakeratpemantauan));
                $('#covid-suspek-total').text(getNumberWithDot(data.suspek.total_suspek));
                $('#covid-suspek-selesai').text(getNumberWithDot(data.suspek.total_suspekselesai));
                $('#covid-suspek-pantau').text(getNumberWithDot(data.suspek.total_suspekpemantauan));
                $('#covid-probabel-total').text(getNumberWithDot(data.probabel.total_probabel));
                $('#covid-probabel-selesai').text(getNumberWithDot(data.probabel.total_probabelselesai));
                $('#covid-probabel-pengawasan').text(getNumberWithDot(data.probabel.total_probabelpengawasan));
            }
        });
        $.ajax({
            url: '/api/pendidikan',
            dataType: 'json',
            success: function (data){
                console.log(data);
                $('#pendidikan-sd').text(data.SD[0].jumlah);
                $('#pendidikan-smp').text(data.SMP[0].jumlah);
                $('#pendidikan-sma').text(data.SMA[0].jumlah);
            }
        });
        $.ajax({
            url: '/api/kependudukan',
            dataType: 'json',
            success: function (data){
                pria = (data.Pria / data.Jumlah_Penduduk[0].Total * 100).toFixed(1);
                wanita = (data.Wanita / data.Jumlah_Penduduk[0].Total * 100).toFixed(1);
                $('#jumlah-penduduk').text(parseFloat(data.Jumlah_Penduduk[0].Total  + ' Orang').toLocaleString(window.document.documentElement.lang)
                );
                $('#jumlah-pria').append(
                    pria + '<small class="">%</small>'
                );
                $('#jumlah-wanita').append(
                    wanita + '<small class="">%</small>'
                );
            }
        });
        $.ajax({
            url: '/api/kunjungan',
            dataType: 'json',
            success:function(data){
                console.log("ini jumlah kunjungan" + data.puskesmas);
                $('#kunjungan-rsud').text(parseFloat(data.rsud).toLocaleString(window.document.documentElement.lang));
                $('#kunjungan-puskesmas').text(parseFloat(data.puskesmas).toLocaleString(window.document.documentElement.lang));
            }
        })

        $.ajax({
            url: '/api/pbb',
            dataType: 'json',
            success: function (data){
                console.log(data);
                $('#pbb').text(data);
            }
        });
        $.ajax({
            url: '/api/bphtb',
            dataType: 'json',
            success: function (data){
                console.log(data);
                $('#bphtb').text(data);

            }
        });
        $.ajax({
            url: '/api/kesehatan',
            dataType: 'json',
            success: function (data){
                $('#penyakit-loading').addClass('d-none');
                $('#penyakit-card').removeClass('d-none');
                $('#penyakit-0').text(data.data[0].penyakit);
                $('#penyakit-0-desc').text('Jumlah pasien ' + data.data[0].total + ' orang');
                $('#penyakit-1').text(data.data[1].penyakit);
                $('#penyakit-1-desc').text('Jumlah pasien ' + data.data[1].total + ' orang');
                $('#penyakit-2').text(data.data[2].penyakit);
                $('#penyakit-2-desc').text('Jumlah pasien ' + data.data[2].total + ' orang');
                $('#penyakit-3').text(data.data[3].penyakit);
                $('#penyakit-3-desc').text('Jumlah pasien ' + data.data[3].total + ' orang');
                $('#penyakit-4').text(data.data[4].penyakit);
                $('#penyakit-4-desc').text('Jumlah pasien ' + data.data[4].total + ' orang');
                $('#data-loading').addClass('d-none');
                $('#data-all-wrapper').addClass('d-flex align-items-stretch');
                $('#data-wrapper').removeClass('d-none');
            }
        });
        $.ajax({
            url: '/api/berita',
            dataType: 'json',
            success: function (data) {
                $('#berita-carousel-wrapper').empty();
                $.each(data.berita, function(index, item){
                    var desc = item.isi;
                    $('#berita-wrapper').append(
                        '<div class="row py-3">' +
                            '<div class="col-4">' +
                                '<a href="'+ item.link +'" target="_blank">' +
                                '<img src="' + item.image + '" alt="" class="img-fluid rounded">' +
                                '</a>' +
                            '</div>' +
                            '<div class="col">' +
                                '<a href="'+ item.link +'" target="_blank" style="color:#1D4F88">'+
                                '<h6 class="h6" style="font-size:18px">' + item.title + '</h6>' +
                                '</a>' +
                                '<small class="text-muted">' + item.date + '</small>' +
                                '<p class="text-muted">' + desc.slice(0, 120) + '...</p>' +
                            '</div>' +
                        '</div>'
                    );
                    $('#berita-indicators').append(
                        '<li data-target="#carouselBerita" data-slide-to="'+ index +'" class="active"></li>'
                    );
                    if (index == 0) {
                        asd = " active";
                    }else{
                        asd = "";
                    }
                    $('#berita-carousel-wrapper').append(
                        '<div class="carousel-item h-100 '+ asd +'">' +
                        '<a href="'+ item.link +'" target="_blank">' +
                            '<img class="d-block w-100 h-100" src="'+ item.image +'" style="object-fit: cover;">' +
                                '<div class="carousel-caption" style="background-color: rgba(0,0,0,0.7);left: 0;right: 0;bottom: 0;text-align: left;padding-top:20px">' + 
                                    '<span class="ml-3 text-light pb-3" style="font-size:14px">'+ item.title.slice(0,35) +' ...</span>' +
                                '</div>' +
                            '</div>' +
                        '</a>'
                    )
                });
                $('#berita-loading').addClass('d-none');
                $('#berita-other-link').removeClass('d-none');
            },
            error: function() {}
        });
        $.ajax({
            url: '/api/cuacaBMKG',
            success: function(data) {
                $('#suhuHariIni').html(data.suhu[0].value + ' <small>&deg;C</small>');
                $('#desc-weather').html(data.suhu[0].icon.desc);
                $('#icon-weather-0').addClass(data.suhu[0].icon.icon);
                for(i = 1; i < data.suhu.length; i++){
                    $('#weather-' + i).html(data.suhu[i].value + ' <small>&deg;C</small>');
                    $('#time-' + i).html(data.suhu[i].time);
                    $('#icon-weather-' + i).addClass(data.suhu[i].icon.icon)
                }
                $('#anginHariIni').html(data.angin[0].slice(0,3) + ' MPH');
                $('#kelembapanHariIni').html(data.kelembapan[0] + ' %');
            },
            error: function(){

            }
        });
        $.ajax({
            url: '/api/youtube',
            success: function(data){
                $('#youtube-frame').removeClass('d-none');
                youtubeFrame = 'youtube-frame';
                $.each(data, function(index, item){
                    var date =new Date(item.snippet.publishedAt);
                    var linkYoutube = 'https://www.youtube.com/embed/';
                    date = moment().format('D MMM, YYYY');
                    $('#youtube-wrapper').append(
                        '<div class="row py-2">' +
                            '<div class="col-4">' +
                                '<a class="alink" href="https://www.youtube.com/embed/'+ item.id.videoId +'" target="youtube-frame">'+
                                    '<img src="'+ item.snippet.thumbnails.medium.url +'" class="img-fluid rounded">' +   
                                '</a>' +
                            '</div>' +
                            '<div class="col-8">' +
                                '<small class="text-muted">' + date + '</small>' +
                                '<a class="alink" style="color:#1D4F88" href="https://www.youtube.com/embed/'+ item.id.videoId +'" target="youtube-frame">'+
                                    '<h6 class="h6" style="font-size:18px">'+ item.snippet.title +'</h6>' +
                                '</a>'+
                            '</div>' +
                        '</div>'
                    );
                    $('#youtube-loading').addClass('d-none');
                });
            },
            error: function(){

            }
        });
        

    });
</script>
@endpush
@endsection