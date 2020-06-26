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
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner rounded-bottom">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('storage/uploads/sliders/'.$popup->imageName) }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('storage/uploads/sliders/'.$popup->imageName) }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('storage/uploads/sliders/'.$popup->imageName) }}" alt="Third slide">
                        </div>
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
        <div class="col-md-4">
            <div class="card mb-3 text-white border-0 shadow">
                <div class="card-header" style="background-color: #5EB154">Berita</div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('storage/uploads/sliders/'.$popup->imageName) }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('storage/uploads/sliders/'.$popup->imageName) }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('storage/uploads/sliders/'.$popup->imageName) }}" alt="Third slide">
                        </div>
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
                <div class="card-footer text-dark bg-transparent">Footer</div>
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
            <div class="card w-100">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1531975474574-e9d2732e8386?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="Kota Depok">
                <div class="card-body">
                    <small class="text-muted">{{ $tanggal }}</small>
                    <h4 class="h4" style="color: #1D4F88">Depok</h4>
                    <i class="fas fa-cloud fa-3x py-2" style="color: #D9B06A" id="iconSuhuHariIni"></i>
                    <span class="lead ml-3" id="suhuHariIni" style="font-size: 2.5rem; color: #D9B06A">0 &deg;C</span>
                </div>
            </div>
        </div>
        <div class="col-9 d-flex align-items-stretch">
            <div class="row">
                @for($i = 0; $i < 6; $i++)
                <div class="col-4 d-flex align-items-stretch">
                    <div class="card @if($i<3) mb-2 @endif">
                        <div class="card-body">
                            <h6 class="pb-3">Pariwisata</h6>
                            <h5 class="h5 font-weight-bold" style="color: #1D4F88">5.3 Ribu</h5>
                            <small class="text-muted">Jumlah turis yang datang pada bulan ini</small>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 d-flex align-items-stretch">
            <div class="card mb-3 border-0 shadow">
                <div class="card-body">
                    <h6 class="pb-3">Berita</h6>
                    <hr>
                    <div id="berita-wrapper">
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
                    <div class="d-sm-block d-md-none d-lg-none d-xl-none">
                        <div class="py-2" id="berita-other-link">
                            <a href="https://berita.depok.go.id" target="_blank" class="d-block d-sm-none pb-3">Berita Lainnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex align-items-stretch">
            <div class="card mb-3 border-0 shadow">
                <div class="card-body">
                    <h6 class="pb-3">Goverment Public Relation</h6>
                    <div class="row">
                        <div style="width:300px !important">
                            <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js">
                            </script>
                            <div id="gpr-kominfo-widget-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        // $('#pengumuman-modal').modal('show');
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/api/berita',
            dataType: 'json',
            success: function (data) {
                $.each(data.berita, function(index, item){
                    $('#berita-wrapper').append(
                        '<div class="row">' +
                            '<div class="col-4">' +
                                '<a href="'+ item.link +'" target="_blank">' +
                                '<img src="' + item.image + '" alt="" class="img-fluid rounded">' +
                                '</a>' +
                            '</div>' +
                            '<div class="col">' +
                                '<small class="text-muted">' + item.date + '</small>' +
                                '<a href="'+ item.link +'" target="_blank" class="alink">'+
                                '<p class="lead font-weight-600" style="font-size:14px">' + item.title + '</p>' +
                                '</a>' +
                            '</div>' +
                        '</div>' +
                        '<hr>'
                    );
                })
                $('#berita-loading').addClass('d-none');
                $('#berita-other-link').removeClass('d-none');
            },
            error: function() {}
        });
        $.ajax({
            url: '/api/cuaca',
            success: function(data) {
                $('#suhuHariIni').html(data.suhu.temperature_hariini + '&deg;C');
                $('#suhuBesok').html(data.suhu.temperature_besok_rendah +' - '+ data.suhu.temperature_besok_tinggi + '&deg;C');
                $('#suhuLusa').html(data.suhu.temperature_lusa_rendah +' - '+ data.suhu.temperature_lusa_tinggi + '&deg;C');
                $('#iconSuhuHariIni').removeClass('fa-cloud');
                $('#iconSuhuBesok').removeClass('fa-cloud');
                $('#iconSuhuLusa').removeClass('fa-cloud');
                $('#iconSuhuHariIni').addClass(data.suhu.icon_cuaca.hari_ini);
                $('#iconSuhuBesok').addClass(data.suhu.icon_cuaca.besok);
                $('#iconSuhuLusa').addClass(data.suhu.icon_cuaca.lusa);

            },
            error: function(){

            }
        });
        $.ajax({
            url: '/api/youtube',
            success: function(data){
                $('#youtube-frame').removeClass('d-none');
                $('.embed-responsive-item').attr('src', 'https://www.youtube.com/embed/'+ data.youtube[0].id.videoId +'?rel=0"');
                youtubeFrame = 'youtube-frame';
                $.each(data.youtube, function(index, item){
                    // let formatted_date = item.snippet.publishedAt.getFullYear() + "-" + (item.snippet.publishedAt.getMonth() + 1) + "-" + item.snippet.publishedAt.getDate()
                    var date =new Date(item.snippet.publishedAt);
                    var linkYoutube = 'https://www.youtube.com/embed/';
                    date = moment().format('D MMM, YYYY');
                    $('#youtube-wrapper').append(
                        '<div class="row">' +
                            '<div class="col-4">' +
                                '<a class="alink" href="https://www.youtube.com/embed/'+ item.id.videoId +'" target="youtube-frame">'+
                                    '<img src="'+ item.snippet.thumbnails.default.url +'" class="img-fluid">' +   
                                '</a>' +
                            '</div>' +
                            '<div class="col-8">' +
                                '<small class="text-muted">' + date + '</small>' +
                                '<a class="alink" href="https://www.youtube.com/embed/'+ item.id.videoId +'" target="youtube-frame">'+
                                    '<p class="lead font-weight-600" style="font-size:14px">'+ item.snippet.title +'</p>' +
                                '</a>'+
                            '</div>' +
                        '</div>' +
                        '<hr style="margin-bottom:5px;margin-top:5px">'
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
