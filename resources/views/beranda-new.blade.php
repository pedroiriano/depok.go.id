@extends('includes.layout')
@section('content')
{{-- Segement 1 --}}
@include('includes.carousel-video')

<!-- <div class="container-fluid"
    style="background-image:url('{{asset('img/depok.jpeg')}}'); min-height: 80vh;background-position: center;background-repeat: no-repeat;background-size: cover;box-shadow: inset 0 0 0 1000px rgba(0,0,0,.2);">
    <div class="container">
        <div class="row py-5 justify-content-center text-center">
            <div class="col-10">
                <img src="{{ asset('img/lambang.png') }}" alt="" class="logo-pemkot" style="padding-top: 100px;">
                <h1 class="display-4" style="z-index: 2; position: relative; color:white; font-size:2.5rem">Selamat Datang di Website
                    Resmi Kota Depok
                </h1>
            </div>
        </div>
    </div>
</div> -->
{{-- Segment Cuaca --}}
<div class="d-block" style="background-color: #3598db">
<div class="container py-4">
    <div class="row">
        <div class="col-12 col-md-5">
            <div class="card text-white" style="border: 1px solid #3598db; background-color: #3598db">
                <img src="{{ asset('images/2.png') }}" class="card-img-top">
                <div class="card-body text-center p-2 rounded-bottom" style="background-color: #26498d">
                    <h5 class="h5 font-weight-bold">{{ $tanggal }}</h5>
                    <p class="card-text">@include('includes.waktu-shalat')</p>
                </div>
            </div>
        </div>
        <div class="col-4 col-md pt-2 pt-sm-0">
            <div class="card" style="background-color: #26498d; border: 1px solid #3598db">
                <div class="card-body text-center text-light weather">
                    <i class="fas fa-cloud fa-3x py-2" id="iconSuhuHariIni"></i>
                    <h5 class="h5 font-weight-bold" id="suhuHariIni">0 &deg;C</h5>
                    <h6 class="h6 lead"> Hari Ini </h6>
                </div>
            </div>
        </div>
        <div class="col-4 col-md pt-2 pt-sm-0">
            <div class="card">
                <div class="card-body text-center text-dark weather">
                    <i class="fas fa-cloud fa-3x py-2" id="iconSuhuBesok"></i>
                    <h5 class="h5 font-weight-bold" id="suhuBesok">0 &deg;C</h5>
                    <h6 class="h6 lead"> Besok </h6>
                </div>
            </div>
        </div>
        <div class="col-4 col-md pt-2 pt-sm-0">
            <div class="card">
                <div class="card-body text-center text-dark weather">
                    <i class="fas fa-cloud fa-3x py-2" id="iconSuhuLusa"></i>
                    <h5 class="h5 font-weight-bold" id="suhuLusa">0 &deg;C</h5>
                    <h6 class="h6 lead"> Lusa </h6>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- Segment 2 --}}
<div class="container-fluid" style="background-color: #ecf0f1">
    <div class="row justify-content-center py-5">
        <div class="col-8 text-center">
            <h1 class="display-5">Depok Single Window</h1>
            <p class="lead">Depok Single Window adalah Media bagi masyarakat Kota Depok untuk memudahkan layanan
                Informasi yang dapat diakses di smartphone hanya dengan satu aplikasi</p>
        </div>
        <div class="col-12 col-md-10">
            <div class="row justify-content-center">

        @foreach ($categories as $key => $category)
        @if ($category->pos > 6)
            <div class="col-4 col-md-2 my-3 d-none d-sm-block">
        @else
            <div class="col-4 col-md-2 my-3">
        @endif
            <a href="#" id="btnModal-{{ $category->id }}" class="btnModal" data-toggle="modal" data-target="#modalLayanan-{{ $category->id }}" data-content="#" style="color:#1d1d1d;text-decoration:none; ">
                <div class="card h-100 card-service" style="border: 1px solid #3598db">
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
        <a href=" {{ route('layanan') }} " class="btn btn-outline-primary mt-5">Layanan Lainnya</a>
        </div>
        </div>
    </div>
</div>
{{-- Segment 3 --}}
<div class="container-fluid">
    <div class="row pt-5">
        <div class="col-12 col-md-5">
            <h4 class="display-5">Pengumuman</h4>
            <hr>
            @include('includes.carousel')
            @foreach ($sliders as $index => $slider)
            <div class="row @if($index == 0) {{ 'pt-5' }} @endif">
                <div class="col-4">
                    <a href="{{ route('pengumuman', $slider->url) }}">
                    <img src="{{asset('storage/uploads/sliders/'.$slider->imageName)}}" class="img-fluid rounded">
                    </a>
                </div>
                <div class="col">
                    <small class="text-muted">{{ $slider->created_at->format('d M, Y') }}</small>
                    <a href="{{ route('pengumuman', $slider->url) }}" class="alink">
                    <p class="lead font-weight-600" style="font-size:14px">{{ $slider->nama }}</p>
                    </a>
                </div>
            </div>
            <hr>
            @endforeach
            <a href="{{ route('list.pengumuman') }}" class="d-block d-sm-none pb-3">Pengumuman Lainnya <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-12 col-md-4">
            <h4 class="display-5">Berita</h4>
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
        <div class="col-12 col-md">
            <h4 class="display-5 pb-1">Agenda Kota</h4>
            <hr>
            <div class="agenda f-14" style="height:600px;overflow: scroll">
                @foreach ($agendas as $agenda)
                    @if($agenda->tanggal >= Carbon\Carbon::today())
                        <div class="row py-2">
                            <div class="col-3 pt-1">
                                {{ date('d-M-y',strtotime($agenda->tanggal)) }}
                            </div>
                            <div class="col-9">
                                <div class="card w-100">
                                    <div class="card-body" style="padding:.75rem">
                                        <h5 class="card-title text-success">{{ $agenda->nama }}</h5>
                                        <div class="row card-text text-muted">
                                            <div class="col-1">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="col">
                                                <p>{{ $agenda->tempat }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <a href="{{ route('list.agenda-kota') }}" class="d-block d-sm-none text-decoration-none pb-3">Agenda Lainnya <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
    <div class="d-none d-md-block">
        <div class="row pb-5">
            <div class="col-5">
                <a href="{{ route('list.pengumuman') }}" class="text-decoration-none">Pengumuman Lainnya <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="col-4">
                <a href="https://berita.depok.go.id" target="_blank" class="text-decoration-none">Berita Lainnya <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="col">
                <a href="{{ route('list.agenda-kota') }}" class="text-decoration-none">Agenda Lainnya <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
{{-- Segment 4 --}}

<div class="container-fluid py-5" style="background-color: #ecf0f1">
    <div class="row">
        <div class="col-12 col-md-4 col-lg-5">
            <h1 class="display-5">Video Terbaru</h1>
            <div id="youtube-frame" class="embed-responsive embed-responsive-16by9 mb-3 d-none">
                <iframe name="youtube-frame" src="" frameborder="0" allowfullscreen class="embed-responsive-item"></iframe>
            </div>
            <div id="youtube-wrapper">
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
        <div class="col-12 col-md col-lg-3">
            <h1 class="display-5">Infografis</h1>
            @foreach ($infografis as $info)
                <a style="cursor: pointer">
                <img src="{{ asset('storage/uploads/infografis/'.$info->imageName) }}" alt="" class="img-fluid pb-3" data-toggle="modal" data-target="#modal-infografis-{{ $info->id }}">
                </a>
                @include('includes.modal-infografis')
            @endforeach
            <a href="{{ route('infografis') }}" class="text-decoration-none">Infografis lainnya<i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-12 col-md col-lg" align="center">
            <h1 class="display-5">Government Public Relations</h1>
            <div style="width:300px !important">
                <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js">
                </script>
                <div id="gpr-kominfo-widget-container"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="pengumuman-modal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card bg-light rounded" style="border:none">
                <a href="{{ route('pengumuman', $popup->url) }}">  
                    <img class="card-img-top" src="{{ asset('storage/uploads/sliders/'.$popup->imageName) }}" alt="Pengumuman Banner">
                </a>
                <div class="card-body">
                    <a href="{{ route('pengumuman', $popup->url) }}" class="btn btn-primary">Selengkapnya<i class="fas fa-arrow-right"></i></a>
                    <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#pengumuman-modal').modal('show');
        
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
                $('#suhuHariIni').html(data.temperature_current + '&deg;C');
                $('#suhuBesok').html(data.temperature_besok_rendah +' - '+ data.temperature_besok_tinggi + '&deg;C');
                $('#suhuLusa').html(data.temperature_lusa_rendah +' - '+ data.temperature_lusa_tinggi + '&deg;C');
                $('#iconSuhuHariIni').removeClass('fa-cloud');
                $('#iconSuhuBesok').removeClass('fa-cloud');
                $('#iconSuhuLusa').removeClass('fa-cloud');
                $('#iconSuhuHariIni').addClass(data.icon.hari_ini);
                $('#iconSuhuBesok').addClass(data.icon.besok);
                $('#iconSuhuLusa').addClass(data.icon.lusa);

            },
            error: function(){

            }
        });
        $.ajax({
            url: '/api/youtube',
            success: function(data){
                $('#youtube-frame').removeClass('d-none');
                $('.embed-responsive-item').attr('src', 'https://www.youtube.com/embed/'+ data[0].id.videoId +'?rel=0"');
                youtubeFrame = 'youtube-frame';
                $.each(data, function(index, item){
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
            error: function(xhr){
            
            }
        });

    });
</script>
@endsection
