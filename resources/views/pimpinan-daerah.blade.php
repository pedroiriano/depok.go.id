@extends('layouts.frontend')

@section('content')
<!-- BEGIN::Header -->
<section class="relative table w-full py-36 lg:py-44 bg-top bg-no-repeat bg-fixed" style="background-image: url({{ asset('img/content/pimpinan.png') }});">
    <div class="absolute inset-0 bg-black opacity-75"></div>
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Pimpinan Daerah</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto">Dapatkan Informasi serta Layanan Publik terlengkap dan terkini seputar Kota Depok.</p>
        </div>
    </div>
    <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
           <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Depok</a></li>
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Pimpinan Daerah</li>
        </ul>
    </div>
</section>
<div class="relative">
    <div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- END::Header -->

<!-- BEGIN::City Leader -->
<section class="relative px-48 pt-12">
    <div class="container">
        <div class="relative grid md:grid-cols-2 grid-cols-1 mt-2 gap-60">
            @if (!empty($pimpinan))
                @foreach ($pimpinan as $item)
                    <div class="group bg-white dark:bg-slate-900 shadow hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out border-t-[3px] border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600">
                        <img src="{{ asset($item->image_url) }}" class="w-full" alt="Gambar Pimpinan Daerah">
                        <div class="content text-center px-4 py-4 mt-2">
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
        </div>
    </div>
</section>
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="md:flex justify-center">
            <div class="md:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md text-justify">
                    {!! $content->desc !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END::City Leader -->
@endsection
