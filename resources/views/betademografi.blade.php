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
<div class="jumbotron jumbotron-fluid banner" style="background-image: url({{ asset('images/bg.jpg') }})">
</div>

<div class="container-fluid">
    <div class="container">
        <h1 class="display-3 py-4">Demografi</h1>       
        <div class="row">
            <div class="col-md-12">
                <div class="card acik-renk-form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <input type="text" class="form-control" placeholder="Kecamatan">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <input type="text" class="form-control" placeholder="Kelurahan">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-info  pl-5 pr-5">Pilih</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-12 p-3">
                <h3>Jumlah Penduduk : 210.532 orang</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3"><i class="fas fa-users pr-1"></i>Jumlah Penduduk</h6>
                                <h5 class="text-center h5" style="color: #1D4F88" id="jumlah-penduduk"></h5>
                                <h6 class="text-muted text-center">Total penduduk</h6>
                                <div class="row text-center pt-5">
                                    <div class="col-6">
                                        <h5 class="h5" id="jumlah-pria"></h5>
                                        <h6 class="text-muted"><i class="fas fa-male pr-1"></i> Pria</h6>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="h5" id="jumlah-wanita"></h5>
                                        <h6 class="text-muted"><i class="fas fa-female pr-1"></i> Wanita</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-2 shadow w-100">
                            <div class="card-body">
                                <h6 class="pb-3"><i class="fas fa-users pr-1"></i>Jumlah Penduduk</h6>
                                <h5 class="text-center h5" style="color: #1D4F88" id="jumlah-penduduk"></h5>
                                <h6 class="text-muted text-center">Total penduduk</h6>
                                <div class="row text-center pt-5">
                                    <div class="col-6">
                                        <h5 class="h5" id="jumlah-pria"></h5>
                                        <h6 class="text-muted"><i class="fas fa-male pr-1"></i> Pria</h6>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="h5" id="jumlah-wanita"></h5>
                                        <h6 class="text-muted"><i class="fas fa-female pr-1"></i> Wanita</h6>
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