@extends('includes.layout')
@push('css')
<style>
.card-img-top {
    width: 100%;
    height: 12vw;
    object-fit: cover;
}

</style>
@endpush
@section('content')
{{-- Segement 1 --}}
<div class="container py-4">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h5 class="py-3 pb-2" style="font-weight:500"><i class="fas fa-exclamation-circle"></i> Pengumuman </h5>
        <p class="pb-2">Pusat Informasi dan Koordinasi COVID-19 Kota Depok</p>
        <a href="https://ccc-19.depok.go.id/">Selengkapnya</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
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
                                <img class="d-block w-100" src="{{ asset('storage/uploads/sliders/'.$slider->imageName) }}" alt="First slide">
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
            <div class="card mb-3 border-0 shadow">
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
                                        <a href="#" data-target="#modalagenda-{{ $agenda->id }}" data-toggle="modal">
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
                        <div class="modal fade" id="modalagenda-{{ $agenda->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                               <div class="modal-content">
                                  <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">{{ $agenda->nama }}</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                     </button>
                                  </div>
                                  <div class="modal-body text-center">
                                     <img src="{{ asset('uploads/agendas/'.$agenda->imageName) }}" alt="" class="img-fluid">
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
                                            <img src="{{ asset('img/icon/'. $category->icon) }}" alt=""
                                                class="img-fluid w-25">
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
            <h3>Sekilas Tentang Depok</h3>
        </div>
        <div class="col-md-3 my-2">
            <div class="card w-100 shadow">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1531975474574-e9d2732e8386?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="Kota Depok">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="lora h6" style="color: #1D4F88">Depok</h6>
                            <small class="text-muted">{{ $tanggal }}</small>  
                        </div>
                        <div class="col-6">
                            <span class="lead ml-3" id="suhuHariIni" style="font-size: 2rem; color: #D9B06A">0 &deg;C</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row pb-3">
                        <div class="col-12">
                            <h6>Informasi Tambahan</h6>
                        </div>
                        <div class="col-6">
                            <p class="text-dark">Angin</p>
                            <p class="text-dark">Kelembapan</p>
                            <p class="text-dark">Cuaca Besok</p>
                            <p class="text-dark">Cuaca Lusa</p>
                        </div>
                        <div class="col-6">
                            <p class="text-muted" id="anginHariIni">...</p>
                            <p class="text-muted" id="kelembapanHariIni">...</p>
                            <p class="text-muted" id="suhuBesok">...</p>
                            <p class="text-muted" id="suhuLusa">...</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Sumber: BMKG Indonesia</small>
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
                    <h6 class="pb-3">Penyakit Terpantau Bulan ini</h6>
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
                <div class="card-footer text-muted">
                    <small>Sumber: Dinkes Kota Depok</small>
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
                                <h6 class="pb-3">Kunjungan RSUD</h6>
                                <h6 class="h6" style="color: #1D4F88" id="kunjungan-rsud"></h6>
                                <small class="text-muted">Jumlah layanan yang terlayani pada bulan ini</small>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Sumber: Dinkes Kota Depok</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex align-items-stretch my-2">
                        <div class="card shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3">Kunjungan Puskesmas</h6>
                                <h6 class="h6" style="color: #1D4F88" id="kunjungan-puskesmas"></h6>
                                <small class="text-muted">Jumlah layanan yang terlayani pada bulan ini</small>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Sumber: Dinkes Kota Depok</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex align-items-stretch my-2">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3">Jumlah Penduduk</h6>
                                <h5 class="text-center" style="color: #1D4F88" id="jumlah-penduduk"></h5>
                                <h6 class="text-muted text-center">Total penduduk</h6>
                                <div class="row text-center pt-5">
                                    <div class="col-6">
                                        <h5 class="h5">52%</h5>
                                        <h6 class="text-muted">Pria</h6>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="h5">48%</h5>
                                        <h6 class="text-muted">Wanita</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Sumber: Disdukcapil Kota Depok</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex align-items-stretch my-2">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3">Penerimaan Bulan ini</h6>
                                <h6 class="text-muted" style="font-size: 0.8rem">BPHTB</h6>
                                <h5 style="color: #1D4F88" id="bphtb"></h5>
                                <h5 class="text-muted" style="font-size: 0.8rem">PBB</h5>
                                <h5 style="color: #1D4F88" id="pbb"></h5><br>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Sumber: BKD Kota Depok</small>
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
                                <a href="https://www.depok.go.id/infografis" class="text-decoration-none">Infografis lainnya<i class="fas fa-arrow-right"></i></a>
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
                    <div id="gpr-kominfo-widget-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
<script type="text/javascript">

    if ($(window).width() < 514) {
        $('#data-all-wrapper').removeClass('col-12');
    } else {
        $('#data-all-wrapper').addClass('col-12');
    }
    $(document).ready(function(){
        // $('#pengumuman-modal').modal('show');
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
            url: '/api/kependudukan',
            dataType: 'json',
            success: function (data){
                console.log(data[0].Total);
                $('#jumlah-penduduk').text(parseFloat(data[0].Total  + ' Orang').toLocaleString(window.document.documentElement.lang));
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
                console.log(data);
                $('#suhuHariIni').html(data.suhu[0] + '&deg;C');
                $('#anginHariIni').html(data.angin[0].slice(0,3) + ' MPH');
                $('#kelembapanHariIni').html(data.kelembapan[0] + ' %');
                // $('#suhuBesok').html(data.suhu.temperature_besok_rendah +' - '+ data.suhu.temperature_besok_tinggi + '&deg;C');
                $('#suhuBesok').html(data.suhu.temperature_besok + '&deg;C');
                // $('#suhuLusa').html(data.suhu.temperature_lusa_rendah +' - '+ data.suhu.temperature_lusa_tinggi + '&deg;C');
                // $('#iconSuhuHariIni').removeClass('fa-cloud');
                // $('#iconSuhuBesok').removeClass('fa-cloud');
                // $('#iconSuhuLusa').removeClass('fa-cloud');
                // $('#iconSuhuHariIni').addClass(data.suhu.icon_cuaca.hari_ini);
                // $('#iconSuhuBesok').addClass(data.suhu.icon_cuaca.besok);
                // $('#iconSuhuLusa').addClass(data.suhu.icon_cuaca.lusa);

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
