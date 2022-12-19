@extends('layouts.frontend')

@section('content')
<!-- BEGIN::Header -->
<section class="relative table w-full py-16 lg:py-24 bg-center bg-no-repeat bg-fixed" style="background-image: url({{ asset('img/content/pimpinan.png') }}); background-size: cover;">
    <div class="absolute inset-0 bg-black opacity-80"></div>
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Pimpinan Daerah</h3>
        </div>
    </div>
    <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Depok</a></li>
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Pimpinan Daerah</li>
        </ul>
    </div>
</section>
<!-- END::Header -->

<!-- BEGIN::City Leader -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="md:flex justify-center">
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    <div class="container">
                        <div class="relative grid md:grid-cols-2 grid-cols-1 mt-2 gap-60">
                            @if (!empty($pimpinan))
                                @foreach ($pimpinan as $item)
                                    <div class="group bg-white dark:bg-slate-900 shadow hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out border-t-[3px] border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600">
                                        <img src="{{ asset($item->image_url) }}" class="w-full" alt="Gambar Pimpinan Daerah">
                                        <div class="content px-6 py-8 mt-4">
                                            <a href="" class="text-lg font-medium hover:text-indigo-600 block">{{ $item->nama }}</a>
                                            <span class="text-slate-400 block">{{ $item->deskripsi }}</span>
                                            <ul class="list-none mt-4">
                                                @isset($item->facebook)
                                                    <li class="inline"><a href="{{ $item->facebook }}" target="_blank" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                                @endisset
                                                @isset($item->instagram)
                                                    <li class="inline"><a href="{{ $item->instagram }}" target="_blank" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                                @endisset
                                                @isset($item->twitter)
                                                <li class="inline"><a href="{{ $item->twitter }}" target="_blank" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                                                @endisset
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                
                            @endif
                            <!-- Mayor -->
                            {{-- <div class="group px-6 py-8 bg-white dark:bg-slate-900 shadow hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out border-t-[3px] border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600">
                                <img src="assets/images/client/01.jpg" class="w-full shadow-md dark:shadow-gray-800" alt="Gambar Pimpinan Daerah">
                                <div class="content mt-4">
                                    <a href="" class="text-lg font-medium hover:text-indigo-600 block">Mohammad Idris</a>
                                    <span class="text-slate-400 block">Wali Kota Depok 2021-2026</span>
                                    <ul class="list-none mt-4">
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            <!-- Mayor -->

                            <!-- Vice Mayor -->
                            {{-- <div class="group px-6 py-8 bg-white dark:bg-slate-900 shadow hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out border-t-[3px] border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600">
                                <img src="assets/images/client/01.jpg" class="w-full shadow-md dark:shadow-gray-800" alt="Gambar Pimpinan Daerah">
                                <div class="content mt-4">
                                    <a href="" class="text-lg font-medium hover:text-indigo-600 block">Imam Budi Hartono</a>
                                    <span class="text-slate-400 block">Wakil Wali Kota Depok 2021-2026</span>
                                    <ul class="list-none mt-4">
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                        <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            <!-- Vice Mayor -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div style="font-size: 16px">{!! $content->desc !!}</p>
            </div>
        </div>
    </div>
</section>
<!-- END::City Leader -->
@endsection

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