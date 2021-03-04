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
<div class="container-fluid py-5">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8 col-sm-8">
            <h1 class="display-4">{{ $pengumuman->nama }}</h1>
            <h5 class="h6 text-muted pb-4">Sumber: {{ $pengumuman->opd->nama }}</h5>
         </div>
         <div class="col-md-10 col-sm-12 text-center">
            <img src="{{ asset('storage/uploads/sliders/'.$pengumuman->imageName) }}" alt="" class="img-fluid rounded">
         </div>
         <div class="col-md-8 col-sm-12 pt-5">
            <p class="lead" id="#deskripsi" style="font-size:1.2rem">{!! $pengumuman->deskripsi !!}</p>
         </div>
         @if($pengumuman->file)
         <div class="col-5">
            <a class="btn btn-success btn-sm shadow" href="{{ route('download', $pengumuman->file) }}">
               <div class="row no-gutters text-light">
                  <div class="col-3 d-flex justify-content-center align-items-center">
                     <span><i class="fas fa-file-download fa-3x"></i></span>
                  </div>
                  <div class="col-9 text-left p-2">
                     <h6 class="h6 font-weight-bold">Unduh</h6>
                     <small class="text-light">{{ $pengumuman->file }}</small>
                  </div>
               </div>
            </a>
         </div>
         @endif
      </div>
   </div>
</div>
@endsection
