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
<div class="jumbotron banner" style="background-image: url({{ asset('img/content/pimpinan.png') }})">
</div>
<div class="container-fluid">
    <div class="container">
        <h1 class="display-3 py-5">Pimpinan Daerah</h1>

        <div class="row text-center py-5">
            @foreach ($pimpinan as $item)
            <div class="col-6 mx-auto">
                <img src="{{ asset($item->image_url) }}" alt="" class="img-fluid w-50">
                    <h5 class="display-5 pt-3">{{ $item->nama }}</h5>
                </a>
                <h5 class="lead">{{ $item->deskripsi }}</h5>
                <div class="row justify-content-center pt-3">
                    @isset($item->instagram)                        
                    <div class="col-2">
                        <a target="_blank" href="{{ $item->instagram }}">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </div>
                    @endisset
                    @isset($item->twitter)                        
                    <div class="col-2">
                        <a target="_blank" href="{{ $item->twitter }}">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                    </div>
                    @endisset
                    @isset($item->facebook)                        
                        <div class="col-2">
                            <a target="_blank" href="{{ $item->facebook }}">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                        </div>
                    @endisset
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-12">
                <div style="font-size: 16px">{!! $content->desc !!}</p>
            </div>
        </div>
    </div>
</div>
<!-- <script>
jQuery(document).ready(function($) {
    var alterClass = function() {
        var ww = document.body.clientWidth;
        if (ww < 400) {
            $('.fab').removeClass('fa-2x');
            $('.display-5').css('font-size',"14px")
        } else if (ww >= 401) {
            $('.fab').addClass('fa-2x');
            $('.display-5').css('font-size',"")
        };
    };
    $(window).resize(function(){
        alterClass();
    });
    //Fire it when the page first loads:
    alterClass();
    });
</script> -->
@endsection