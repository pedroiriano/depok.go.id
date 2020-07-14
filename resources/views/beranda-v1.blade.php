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
                            <div class="carousel-caption" style="background-color: rgba(0,0,0,0.7);left: 0;right: 0;bottom: 0;text-align: left;padding-top:10px"> 
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
                <div class="card-body">
                    <h6 class="pb-3">Agenda Kota</h6>
                    <div class="row">
                        <div class="col-3">
                            <h4 class="h4 lead font-weight-bold" style="color: #1D4F88">14 Mei</h4>
                        </div>
                        <div class="col-9">
                            <div class="card mb-1">
                                <div class="card-body">
                                    <span>Pendampingan Menteri Kemensos</span>
                                    <span class="badge badge-pill badge-success f-12 font-weight-normal">Walikota Depok</span>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-body">
                                    <span>Vidcon PKK Kota Depok</span>
                                    <span class="badge badge-pill badge-success f-12 font-weight-normal">Walikota Depok</span>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-body">
                                    <span>Vidcon Gugus Tugas dengan MUI</span>
                                    <span class="badge badge-pill badge-success f-12 font-weight-normal">Walikota Depok</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 d-flex align-items-stretch">
            <div class="card mb-3 border-0 shadow">
                <div class="card-body">
                    <h6 class="pb-3">Layanan Depok Single Window</h6>
                    <div class="row justify-content-center">
                        @foreach ($categories as $key => $category)
                        @if ($category->pos > 6)
                        <div class="col-4 col-md-3 my-1 d-none d-sm-block">
                        @else
                        <div class="col-4 col-md-3 my-1">
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
    <div class="row py-3">
        <div class="col-12 p-3">
            <h3>Sekilas Tentang Depok</h3>
        </div>
        <div class="col-3 d-flex align-items-stretch">
            <div class="card w-100 shadow">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1531975474574-e9d2732e8386?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="Kota Depok">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="lora h6" style="color: #1D4F88">Depok</h6>
                            <small class="text-muted">{{ $tanggal }}</small>  
                            <p>
                                <i class="fas fa-cloud fa-1x py-2" style="color: #D9B06A" id="iconSuhuHariIni"></i>
                            </p>
                        </div>
                        <div class="col-6">
                            <span class="lead ml-3" id="suhuHariIni" style="font-size: 2.5rem; color: #D9B06A">0 &deg;C</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <h6>Informasi Tambahan</h6>
                        </div>
                        <div class="col-4">
                            <small class="text-muted">Insolation</small>
                        </div>
                        <div class="col-4">
                            <small class="text-muted">Humidity</small>
                        </div>
                        <div class="col-4">
                            <small class="text-muted">Wind</small>
                        </div>
                    </div>
                    <p>
                        <small class="text-muted">Sumber: BMKG Indonesia</small>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="row" id="data-loading">
                @for($i=0; $i<6; $i++)
                <div class="col-4">
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
                <div class="col-4">
                    <div class="card @if($i<3) mb-2 @endif shadow">
                        <div class="card-body">
                            <h6 class="pb-3">Penyakit Terbanyak Bulan ini</h6>
                            <h6 class="lora h6" style="color: #1D4F88" id="penyakit"></h6>
                            <small class="text-muted" id="penyakit-desc"></small>
                        </div>
                    </div>
                </div>
                @for($i = 0; $i < 5; $i++)
                <div class="col-4">
                    <div class="card @if($i<3) mb-2 @endif shadow">
                        <div class="card-body">
                            <h6 class="pb-3">Jumlah Turis Bulan ini</h6>
                            <h6 class="lora h6" style="color: #1D4F88">5.603 Orang</h6>
                            <small class="text-muted">Jumlah turis luar dan dalam negeri</small>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        <div class="col-12 pb-5 mt-4 text-center">
            <a href="">Data Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-8">
            <div class="card shadow">
                <div class="card-body">
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="berita-tab" data-toggle="tab" href="#berita" role="tab" aria-controls="berita" aria-selected="true">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video Terbaru</a>
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
                            <div class="">
                                <div class="py-2" id="berita-other-link">
                                    <a href="https://berita.depok.go.id" target="_blank" class="pb-3">Berita Lainnya <i class="fas fa-arrow-right"></i></a>
                                </div>
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
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="h5">Government Public Relation</h5>
                    <div style="width:300px !important" id="gpr-widget">
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

    $(document).ready(function(){
        // $('#pengumuman-modal').modal('show');
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/api/kesehatan',
            dataType: 'json',
            success: function (data){
                console.log();
                $('#penyakit').text(data.data[0].penyakit);
                $('#penyakit-desc').text('Jumlah pasien ' + data.data[0].total + ' orang');
                $('#data-loading').addClass('d-none');
                $('#data-wrapper').removeClass('d-none');
            }
        })
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
                                '<p class="text-muted">' + desc.slice(0, 120) + '</p>' +
                            '</div>' +
                        '</div>'
                    );
                    $('#berita-indicators').append(
                        '<li data-target="#carouselExampleIndicators" data-slide-to="'+ index +'" class="active"></li>'
                    );
                    if (index == 0) {
                        asd = " active";
                    }else{
                        asd = "";
                    }
                    $('#berita-carousel-wrapper').append(
                        '<div class="carousel-item h-100 '+ asd +'">' +
                        '<img class="d-block w-100 h-100" src="'+ item.image +'" style="object-fit: cover;">' +
                            '<div class="carousel-caption" style="background-color: rgba(0,0,0,0.7);left: 0;right: 0;bottom: 0;text-align: left;padding-top:10px">' + 
                                '<span class="ml-3 text-light pb-3" style="font-size:14px">'+ item.title.slice(0,35) +' ...</span>' +
                            '</div>' +
                        '</div>'
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
                $('#suhuHariIni').html(data.temperature[0] + '&deg;C');
                // $('#suhuBesok').html(data.suhu.temperature_besok_rendah +' - '+ data.suhu.temperature_besok_tinggi + '&deg;C');
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
