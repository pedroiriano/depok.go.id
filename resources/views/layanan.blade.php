@extends('layouts.frontend')

@section('content')
<!-- BEGIN::Header -->
<section class="relative table w-full py-36 lg:py-44 bg-top bg-no-repeat bg-fixed" style="background-image: url({{ asset('img/content/layanan.png') }});">
    <div class="absolute inset-0 bg-black opacity-75"></div>
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Layanan</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto">Dapatkan Informasi serta Layanan Publik terlengkap dan terkini seputar Kota Depok.</p>
        </div>
    </div>
    <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
           <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Depok</a></li>
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Layanan</li>
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

<!-- BEGIN::Services -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-5 md:grid-cols-2 gap-6">
            @if (!empty($categories))
                @foreach ($categories as $key => $category)
                    <!-- DSW Services -->
                    <a class="group btnModal bg-white dark:bg-slate-900 p-6 rounded shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 border-4 border-white dark:border-slate-900 hover:border-b-indigo-600 dark:hover:border-b-indigo-600 text-center transition duration-500 h-fit" data-modal-toggle="modalLayanan-{{ $category->id }}">
                        <img loading="lazy" src="{{ asset('img/icon/'. $category->icon) }}" class="h-16 w-16 mx-auto p-3 rounded-sm bg-gray-50 dark:bg-slate-800 shadow-md dark:shadow-gray-800" alt="Ikon DSW">
                        <div class="content mt-3">
                            <span class="text-lg font-semibold group-hover:text-indigo-600 transition duration-500 block">{{ $category->nama }}</span>
                        </div>
                    </a>
                    <!-- DSW Services -->
                    @include('includes.modal-layanan')
                @endforeach
            @else
                
            @endif
        </div>
    </div>
</section>
<!-- END::Services -->
@endsection
