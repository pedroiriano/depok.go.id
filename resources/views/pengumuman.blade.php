@extends('layouts.frontend')

@section('content')
<!-- BEGIN::Header -->
<section class="relative table w-full py-36 lg:py-44 bg-top bg-no-repeat bg-fixed" style="background-image: url({{ asset('img/content/layanan.png') }});">
    <div class="absolute inset-0 bg-black opacity-75"></div>
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Detail Pengumuman</h3>
            <p class="text-slate-300 text-lg max-w-xl mx-auto">Dapatkan Informasi serta Layanan Publik terlengkap dan terkini seputar Kota Depok.</p>
        </div>
    </div>
    <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
        <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Depok</a></li>
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page"><a href="/pengumuman">Pengumuman</a></li>
            <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Detail Pengumuman</li>
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

<!-- BEGIN::Announcements Detail -->
<section class="relative md:py-24 py-16">
   <div class="container">
      <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
         <div class="lg:col-span-8 md:col-span-6">
            <div class="sticky top-20">
               <div class="grid grid-cols-1 gap-[30px]">
                  <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                     <div class="relative">
                           <div class="relative md:shrink-0">
                              <img class="h-full w-full object-cover" src="{{ asset('storage/uploads/sliders/'.$pengumuman->imageName) }}" alt="Gambar Pengumuman">
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="lg:col-span-4 md:col-span-6">
            <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center">{{ $pengumuman->nama }}</h5>
            <div class="flex items-center mt-8">
                  <img src="assets/images/blog/06.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">
                  <div class="ml-3">
                     <div class="font-semibold hover:text-indigo-600">Sumber:</div>
                     <p class="text-sm text-slate-400">{{ $pengumuman->opd->nama }}</p>
                  </div>
            </div>
            <div class="flex items-center mt-4">
                  <img src="assets/images/blog/07.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">
                  <div class="ml-3">
                     <div class="font-semibold hover:text-indigo-600">{!! $pengumuman->deskripsi !!}</div>
                     <p class="text-sm text-slate-400">{{ $pengumuman->created_at->format('d-m-Y') }}</p>
                  </div>
            </div>
            @if($pengumuman->file)
               <div class="flex justify-center mt-8">
                  <a href="{{ route('download', $pengumuman->file) }}" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Unduh <i class="uil uil-arrow-down align-middle"></i></a>
               </div>
            @endif
         </div>
      </div>
   </div>
</section>
<!-- END::Announcements Detail -->
@endsection
