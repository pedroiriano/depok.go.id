@extends('includes.layout') 
@section('content')
<div class="container-fluid" id="tes" style="background-image:url('{{asset('images/slideshow-1-dark.png')}}'); height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;">
    <div class="container">
        <div class="row py-5 justify-content-center text-center">
            <div class="col-10">
                <img src="{{ asset('img/lambang.png') }}" alt="" class="logo-pemkot" style="padding-top: 50px;">
                <h1 class="display-4" style="z-index: 2; position: relative;">Selamat Datang di Website
                    Resmi Kota Depok
                </h1>
                <h4 class="display-6 text-light" style="z-index: 2;">Unggul, Nyaman dan Religius</h4>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container-fluid py-5 text-white" style="z-index:999; margin-top:-150px">
    <div class="container bg-success">
        @include('includes.carousel')
    </div>
</div> --}}
<div class="container-fluid content-row">
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-6">
                <h1 class="display-5">Depok Single Window</h1>
                <p class="lead">Depok Single Window adalah Media bagi masyarakat Kota Depok untuk memudahkan layanan
                    Informasi yang dapat diakses di smartphone hanya dengan satu aplikasi</p>
            </div>
            <div class="col-12 col-md-6">
                <a href="https://play.google.com/store/apps/details?id=id.depok.depoksinglewindow&hl=en">
                    <img src="{{asset('images/banner-dsw.png')}}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="row justify-content-center">
                    @foreach ($categories as $key => $category)
                        @if ($category->pos > 6)
                            <div class="col-4 col-md-2 my-3 d-none d-sm-block">
                        @else
                            <div class="col-4 col-md-2 my-3">
                        @endif
                            <a href="#" id="btnModal" data-toggle="modal" data-target="#modalLayanan-{{ $category->id }}" data-content="#" style="color:#1d1d1d;text-decoration:none">
                                <div class="card h-100">
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
        <div class="row justify-content-center mb-5">
            <div class="col-4 col-md-2">
                <a href="" class="btn btn-outline-primary btn-sm  text-center">Layanan Lainnya</a>
            </div>
        </div>
        {{-- Segment 3 --}}
<div class="container">
    <div class="row py-5">
        <div class="col-9">
            <h4 class="display-5">Pengumuman</h4>
            @include('includes.carousel')
        </div>
        <div class="col-3">
            <h4 class="display-5">Agenda Kota</h4>
            <div class="agenda border rounded f-14" style="height:300px; overflow:scroll">
                @for ($i = 0; $i < 6; $i++)    
                <div class="container pt-3">
                    <h5 class="h6 font-weight-bold">15 Oktober 2019</h5>
                    <p class="lead text-success">UI Football Cup <br><span class="text-muted"><i class="fas fa-map-marker-alt"></i>&nbsp;Lapangan Sepakbola UI</span></p>
                    <hr>
                </div>
                @endfor
            </div>
        </div>
    </div>
    <h4 class="display-5">Berita</h4>
    <div class="row">
            @for ($i = 0; $i < 4; $i++)
            <div class="col-12 col-md-3 mb-3">
                <div class="card h-100 d-flex flex-column justify-content-between">
                    <img class="card-img-top" src="{{url($image[$i])}}" alt="Card image cap">
                    <div class="card-body" style="">
                        <h6 class="card-title h6 font-weight-bold">{{$berita[$i]['title']}}</h6>
                        <small class="text-muted">{{$date[$i]}}</small>
                        <p class="card-text p">{{str_limit($isi[$i] , 65)}}</p>
                        <div class="card-footer bg-white">
                            <a href="{{url($link[$i])}}" target="_blank"
                                class="font-biru hvr-forward">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
            <div class="col-12 py-2">
                <a href="https://berita.depok.go.id" target="_blank">Berita Lainnya <i
                        class="fas fa-arrow-right"></i></a>
            </div> 
    </div>
</div>
{{-- Segment 3 --}}
<div class="container">
        <div class="row py-5">
            <div class="col-9">
                <h4 class="display-5">Pengumuman</h4>
                @include('includes.carousel')
            </div>
            <div class="col-3">
                <h4 class="display-5">Agenda Kota</h4>
                <div class="agenda border rounded" style="height:300px; overflow:scroll">
                    @for ($i = 0; $i < 6; $i++)    
                    <div class="container pt-3">
                        <h5 class="h6 font-weight-bold f-14">15 Oktober 2019</h5>
                        <p class="lead text-success">UI Football Cup <br><span class="text-muted"><i class="fas fa-map-marker-alt"></i>&nbsp;Lapangan Sepakbola UI</span></p>
                        <hr>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
        <h4 class="display-5">Berita</h4>
        <div class="row">
                @for ($i = 0; $i < 4; $i++)
                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100 d-flex flex-column justify-content-between">
                        <img class="card-img-top" src="{{url($image[$i])}}" alt="Card image cap">
                        <div class="card-body" style="">
                            <h6 class="card-title h6 font-weight-bold">{{$berita[$i]['title']}}</h6>
                            <small class="text-muted">{{$date[$i]}}</small>
                            <p class="card-text p">{{str_limit($isi[$i] , 65)}}</p>
                            <div class="card-footer bg-white">
                                <a href="{{url($link[$i])}}" target="_blank"
                                    class="font-biru hvr-forward">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
                <div class="col-12 py-2">
                    <a href="https://berita.depok.go.id" target="_blank">Berita Lainnya <i
                            class="fas fa-arrow-right"></i></a>
                </div> 
        </div>
    </div>
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="row">
                    <div class="col-12">
                        <h1 class="display-5 py-4">Berita</h1>
                    </div>
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card h-100 d-flex flex-column justify-content-between">
                                <img class="card-img-top" src="{{url($image[$i])}}" alt="Card image cap">
                                <div class="card-body" style="">
                                    <h6 class="card-title h6 font-weight-bold">{{$berita[$i]['title']}}</h6>
                                    <small class="text-muted">{{$date[$i]}}</small>
                                    <p class="card-text p">{{str_limit($isi[$i] , 65)}}</p>
                                    <div class="card-footer bg-white">
                                        <a href="{{url($link[$i])}}" target="_blank"
                                            class="font-biru hvr-forward">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                        <div class="col-12 py-4">
                            <a href="https://berita.depok.go.id" target="_blank" class="h6">Berita Lainnya <i
                                    class="fas fa-arrow-right"></i></a>
                        </div> 
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-5 py-4">Infografis</h1>
                        </div>
                        <div class="col-12">
                            @foreach ($infografis as $info)
                                <img src="{{ asset('uploads/infografis/'.$info->imageName) }}" alt="" class="img-fluid pb-3">
                            @endforeach
                        </div>    
                    </div>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-12">
                    <h1 class="display-5">Agenda</h1>
                </div>
                <div class="col-12 col-md-8">
                    <div class="row py-5">
                        @foreach ($agendas as $agenda)
                        <div class="col-6 col-md-4">
                            <a href="#" data-toggle="modal" data-target="#modalLihatAgenda">
                                <img src="{{ asset('uploads/agenda/'.$agenda->imageName ) }}" alt=""
                                    class="img-fluid mb-3">
                            </a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="modalLihatAgenda" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agenda</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <h3 class="h4">{{ $agenda->nama }}</h3>
                                        <h3 class="h6">{{ $agenda->tanggal }}</h3>
                                        <h3 class="h6">{{ $agenda->sumber }}</h3>
                                        <img src="{{ asset('uploads/agenda/'.$agenda->imageName ) }}" alt=""
                                            class="img-fluid mb-3">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-12 pt-4">
                            <a href="https://berita.depok.go.id" class="h6">Agenda Lainnya <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 py-5">
                    <div style="min-width:300px !important">
                        <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js">
                        </script>
                        <div id="gpr-kominfo-widget-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <h1 class="display-5 text-white pb-3">Video Terbaru</h1>
                </div>
                @foreach ($videos as $video)
                <div class="col-12 col-md-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/{{ $video->id->videoId }}?rel=0"
                            allowfullscreen></iframe>
                    </div>
                    <h6 class="lead text-white pt-2 pb-3">{{ $video->snippet->title }}</h6>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#vegas').vegas({
                slides: [{
                        src: "{{ asset('/images/slideshow-1.jpg') }}"
                    },
                    {
                        src: "{{ asset('/images/slideshow-2.jpg') }}"
                    },
                    {
                        src: "{{ asset('/images/slideshow-3.jpg') }}"
                    }
                ],
                animation: 'kenburns',
                delay: 10000,
            });
            $('.carousel-item').first().addClass('active');
            $(window).scroll(function(){
                var url =  "{{ asset('img/') }}";
                console.log(url);
                var vegas = $('#tes').height();
  	            var scroll = $(window).scrollTop();
	            if (scroll > (vegas/8)) {
                    $(".navbar").css({"box-shadow": "0 .125rem .25rem rgba(0,0,0,.075)"});
                    $(".navbar").addClass("navbar-light bg-white");
                    $(".navbar").removeClass("navbar-dark");
                    $("#brand").attr("src", url + "/asset-2.png");
	            }
	            else{
                    $(".navbar").css({"background": "transparent", "box-shadow": "none"});
                    $(".navbar").addClass("navbar-dark");
                    $(".navbar").removeClass("navbar-light bg-white");
                    $("#brand").attr("src", url + "/asset-1.png");
                }
            })
        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
    @endsection