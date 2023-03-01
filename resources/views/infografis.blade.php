@extends('layouts.frontend')

@section('content')
<!-- BEGIN::Header -->
<section class="relative table w-full py-36 lg:py-44 bg-top bg-no-repeat bg-fixed" style="background-image: url({{ asset('img/content/infografis.png') }});">
    <div class="absolute inset-0 bg-black opacity-75"></div>
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Infografis</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto">Dapatkan Informasi serta Layanan Publik terlengkap dan terkini seputar Kota Depok.</p>
        </div>
    </div>
    <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
           <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Depok</a></li>
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Infografis</li>
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

<!-- BEGIN::Infographic -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-6 mt-8 mb-4">
            @if (!empty($infografis))
                @foreach ($infografis as $infografi)
                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                    <a href="{{ asset('storage/uploads/infografis/'.str_replace(":", "_", $infografi->imageName)) }}" class="lightbox">
                        <img src="{{ asset('storage/uploads/infografis/'.str_replace(":", "_", $infografi->imageName)) }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="Gambar Infografis">
                        <div class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"></div>
                        <div class="content">
                            <div class="title absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <div class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out">{{ $infografi->nama }}</div>
                                {{-- <p class="text-slate-300 text-sm tag mb-0">Sumber: {{ $infografi->opd->nama }}</p> --}}
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            @else
                <div>Data Masih Kosong</div>
            @endif
        </div>
        {{ $infografis->links('vendor.pagination.simple-tailwind') }}
    </div>
</section>
<!-- END::Infographic -->
@endsection
