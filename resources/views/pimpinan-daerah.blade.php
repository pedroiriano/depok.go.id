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
<div class="jumbotron jumbotron-fluid banner" style="background-image: url({{ asset('img/sekilas-depok/pimpinan.jpeg') }})">
</div>
<div class="container-fluid">
    <div class="container">
        <h1 class="display-3 py-5">Pimpinan Daerah</h1>
        
        <div class="row text-center">
            <div class="col-6">
                <a href="https://en.wikipedia.org/wiki/Mohammad_Idris" target="_blank">
                <img src="{{ asset('img/Walikota.png') }}" alt="" class="img-fluid w-50">
                    <h5 class="display-5 pt-3">Mohammad Idris</h5>
                </a>
                <h5 class="lead">Walikota Depok 2015-2020</h5>
                <div class="row justify-content-center pt-3">
                    <div class="col-2">
                        <a target="_blank" href="https://www.instagram.com/idrisashomad/?hl=en">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </div>
                    <div class="col-2">
                        <a target="_blank" href="https://twitter.com/idrisashomad?lang=en">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                    </div>
                    <div class="col-2">
                        <a target="_blank" href="https://www.facebook.com/IdrisAShomad/">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <a href="https://id.wikipedia.org/wiki/Pradi_Supriatna" target="_blank">
                <img src="{{ asset('img/Wakil-Walikota.png') }}" alt="" class="img-fluid w-50">
                    <h5 class="display-5 pt-3">Pradi Supriatna</h5>
                </a>
                <h5 class="lead">Wakil Walikota Depok 2015-2020</h5>
                <div class="row justify-content-center pt-3">
                    <div class="col-2">
                        <a target="_blank" href="https://www.instagram.com/pradi_supriatna/?hl=en">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </div>
                    <div class="col-2">
                        <a target="_blank" href="https://twitter.com/bang_pradi?lang=en">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                    </div>
                </div>
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