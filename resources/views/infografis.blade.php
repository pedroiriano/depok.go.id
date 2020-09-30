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
@section('content')
<div class="jumbotron jumbotron-fluid banner" style="background-image: url({{ asset('img/karya_new_watermark/Umum_Squack_Delight.png') }})">
</div>
<div class="container-fluid">
    <div class="container">
        <h1 class="display-3 py-5">Infografis</h1>
        <div class="row py-5">
        @foreach ($infografis as $infografi)
            <div class="col-12 col-md-3 d-flex align-items-stretch">
                <div class="card mb-3">
                    <a href="#" data-target="#modalInfografis-{{ $infografi->id }}" data-toggle="modal">
                        <img class="card-img-top" src="{{ asset('storage/uploads/infografis/'.$infografi->imageName) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $infografi->nama }}</h5>
                            <p class="card-text"><small class="text-muted">Sumber: {{ $infografi->opd->nama }}</small></p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Modal Infografis-->
            <div class="modal fade" id="modalInfografis-{{ $infografi->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
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
</div>
</div>
@endsection

