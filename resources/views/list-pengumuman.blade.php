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
      <div class="row">
         <div class="col-12">
            <h1 class="display-3 py-5">Pengumuman</h1>
         </div>
         @foreach($pengumuman as $item)
         <div class="col-md-3 col-sm-12 mb-3">      
            <div class="card h-100">
               <img class="card-img-top" src="{{ asset('storage/uploads/sliders/'.$item->imageName) }}" alt="Card image cap">
               <div class="card-body">
                  <small class="text-muted">{{ $item->created_at->format('d M, Y') }}</small>
                  <h5 class="card-title">{{ $item->nama }}</h5>
               </div>
               <div class="card-footer bg-white border-0">
                  <a href="/pengumuman/{{ $item->url }}" style="font-size:0.9rem">Selengkapnya</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endsection
