@push('css')
<link rel="stylesheet" href={{ asset("css/owl/owl.carousel.min.css") }}>
<link rel="stylesheet" href={{ asset("css/owl/owl.theme.default.min.css") }}>
@endpush
@push('js')
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript">
    $("#owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
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
</script>
@endpush
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

<div class="container py-4">        
    <div class="container py-4">
        <div class="row py-3">
            <div class="col-12 p-3">
                <h3>Statistik Tentang Depok</h3>
            </div>
            <div class="d-flex align-items-stretch">
                <div class="row">
                    @for($i = 0; $i < 8; $i++)
                    <div class="col-3 d-flex align-items-stretch">
                        <div class="card @if($i<4) mb-2 @endif">
                            <div class="card-body">
                                <h6 class="pb-3">Pariwisata</h6>
                                <i class="fa fa-bar-chart fa-2x py-2" style="color: #D9B06A" id="iconSuhuHariIni"></i>
                                <span class="h5 font-weight-bold" style="color: #1D4F88">5.3 Ribu</span>
                                <small class="text-muted">Jumlah turis yang datang pada bulan ini</small>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>


    <div class="row py-3">
        <div class="col-8">
            <div class="card shadow">
                <div class="card-body">
                    <div class="col-12 p-3">
                        <h3>Infografis</h3>
                    </div>  
                    <div class="col-12 d-flex align-items-stretch">
                        <div class="row">     
                        @foreach ($infografis as $infografi)
                            <div class="col-4 d-flex align-items-stretch">
                                <div class="card @if($i<3) mb-2 @endif">
                                    <div class="card-body">
                                        <a href="#" data-target="#modalInfografis-{{ $infografi->id }}" data-toggle="modal">
                                            <img class="card-img-top" src="{{ asset('uploads/infografis/'.$infografi->imageName) }}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $infografi->nama }}</h5>
                                                <p class="card-text"><small class="text-muted">Sumber: {{ $infografi->opd->id }}</small></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Infografis-->
                            <div class="modal fade" id="modalInfografis-{{ $infografi->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ $infografi->nama }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="{{ asset('uploads/infografis/'.$infografi->imageName) }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach       
                        </div>
                    </div>
                    <div class="">
                        <div class="py-2" id="berita-other-link">
                            <a href="" target="_blank" class="pb-3">Infografis Lainnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="h5">Data Terbaru</h5>
                    <div class="col-12">
                        <div class="card mb-1">
                            <div class="card-body">
                                <h6>14 Juli 2020</h6>
                                <span class="badge badge-pill badge-success f-12 font-weight-normal">Kesehatan</span>
                                <br>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                <div class="">
                                    <div class="py-2" id="berita-other-link">
                                        <a href="" target="_blank" class="pb-3">Lihat Data <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="card-body">
                                <h6>14 Juli 2020</h6>
                                <span class="badge badge-pill badge-success f-12 font-weight-normal">Kesehatan</span>
                                <br>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                <div class="">
                                    <div class="py-2" id="berita-other-link">
                                        <a href="" target="_blank" class="pb-3">Lihat Data <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card mb-1">
                            <div class="card-body">
                                <h6>14 Juli 2020</h6>
                                <span class="badge badge-pill badge-success f-12 font-weight-normal">Kesehatan</span>
                                <br>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                                <div class="">
                                    <div class="py-2" id="berita-other-link">
                                        <a href="" target="_blank" class="pb-3">Lihat Data <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                
                            </div>
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
    });
</script>
@endpush
@endsection