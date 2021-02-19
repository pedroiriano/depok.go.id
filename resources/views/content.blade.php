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
<div class="jumbotron jumbotron-fluid banner" style="background-image: url({{ asset($content->image) }})">
</div>
<div class="container-fluid pb-5">
    <div class="container">
        <h1 class="display-3 pb-2 pt-4">{{ $content->nama }}</h1>
        <div class="row pb-5 pt-2 text-justify">
            <div class="col-12">
                <p class="lead">{!! $content->desc !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection
