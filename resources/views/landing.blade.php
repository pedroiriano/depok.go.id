@extends('layouts.frontend')

@section('content')
<!-- BEGIN::Header -->
{{-- <section class="flex md:h-screen py-36 items-center bg-no-repeat bg-fixed bg-top" style="background-image: url('{{ asset('assets/images/bg/promosi-depok-ori.gif') }}'); background-size: cover;"> --}}
<section class="flex md:h-screen py-36 items-center bg-no-repeat bg-fixed bg-top" style="background-image: url('{{ asset('assets/images/bg/smartcity.png') }}'); background-size: cover;">
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="container">
        <div class="grid grid-cols-1 justify-center text-center">
            <div class="">
                <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-6xl text-white mb-5">Portal Depok</h1>
                <p class="text-white/70 text-lg max-w-xl mx-auto">Situs Web Resmi Pemerintah Kota Depok</p>
            
                <div class="mt-8">
                    <a href="#widget" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i class="uil uil-info-circle"></i> Sekilas Depok</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END::Header -->

<!-- BEGIN::Announcement & Mayor -->
<section class="relative min-h-screen md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container">
        <div class="grid md:grid-cols-3 grid-cols-1 gap-[30px]">
            <!-- Start Announcement -->
            <div class="flex md:col-span-2 justify-center relative w-full">
                <div class="group px-6 py-6 bg-white dark:bg-slate-900 shadow hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out border-t-[3px] border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600">
                    <div class="grid grid-cols-1 text-center">
                        <h3 class="mb-2 md:text-2xl text-xl md:leading-normal leading-normal font-semibold hover:text-indigo-600 duration-500 ease-in-out">Pengumuman</h3>
                    </div>
                    <div class="content">
                        <div class="tiny-single-item">
                            <!-- Start Slide 01 -->
                            @if ($sliders === NULL)
                                <div class="tiny-slide">
                                    <div class="text-center">
                                        <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">
                                            <div class="relative">
                                                <img loading="lazy" loading="lazy" loading="lazy" class="" src="{{ asset('assets/images/bg/slider-depok-01.jpg') }}" alt="Gambar Pengumuman">
                                                <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100 duration-500 ease-in-out">
                                                    <a href="" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Data Masih Kosong</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                @foreach ($sliders as $index => $slider)    
                                    <div class="tiny-slide">
                                        <div class="text-center">
                                            <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">
                                                <div class="relative">
                                                    <img loading="lazy" class="" src="{{ asset('storage/uploads/sliders/'.$slider->imageName) }}" alt="Gambar Pengumuman">
                                                    <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100 duration-500 ease-in-out">
                                                        <a href="{{ route('list.pengumuman') }}" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Selengkapnya</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <!-- End Slide 01 -->
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Announcement -->

            <!-- Start Mayor & Vice Mayor -->
            <div class="flex justify-center relative">
                <div class="group px-6 py-6 bg-white dark:bg-slate-900 shadow hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out border-t-[3px] border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600">
                    <div class="content">
                        <div class="grid grid-cols-1">
                            <div class="relative transition-all duration-500 ease-in-out m-0">
                                <div class="grid lg:grid-cols-2 grid-cols-1 gap-[12px]">
                                    <div class="grid md:col-span-2 grid-cols-1 text-center">
                                        <h3 class="mb-2 md:text-2xl text-xl md:leading-normal leading-normal font-semibold hover:text-indigo-600 duration-500 ease-in-out">Pimpinan Daerah</h3>
                                        <p class="text-slate-400 max-w-xl">Pemerintah Kota Depok</p>
                                    </div>
                                    <!-- Start Mayor -->
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">
                                        <div class="relative">
                                            <img loading="lazy" class="" src="{{ asset('assets/images/mayor/wali-kota-depok.png') }}" alt="Gambar Pimpinan Daerah">
                                        </div>
                                        <div class="py-4 relative">
                                            <div class="flex items-center justify-center md:text-2xs text-sm font-extrabold hover:text-indigo-600 duration-500 ease-in-out">Mohammad Idris</div>
                                            <div class="flex items-center justify-center mt-2 md:text-2xs text-sm font-extrabold hover:text-indigo-600 duration-500 ease-in-out">
                                                Wali Kota Depok
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mayor -->
                                    <!-- Start Vice Mayor -->
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">
                                        <div class="relative">
                                            <img loading="lazy" class="" src="{{ asset('assets/images/mayor/wakil-wali-kota-depok.png') }}" alt="Gambar Pimpinan Daerah">
                                        </div>
                                        <div class="py-4 relative">
                                            <div class="flex items-center justify-center md:text-2xs text-sm font-extrabold hover:text-indigo-600 duration-500 ease-in-out">Imam Budi Hartono</div>
                                            <div class="flex items-center justify-center mt-2 md:text-2xs text-sm font-extrabold hover:text-indigo-600 duration-500 ease-in-out">
                                                Wakil Wali Kota Depok
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Vice Mayor -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Mayor & Vice Mayor -->
        </div>
    </div>
</section>
<!-- END::Announcement & Mayor -->

<!-- BEGIN::Small Parallax -->
<section class="relative py-16 bg-no-repeat bg-fixed bg-top" style="background-image: url('{{ asset('assets/images/bg/bg-00016.png') }}'); background-size: cover;">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h5 class="text-white text-xl leading-normal font-semibold">Etalase Kota Depok</h5>
            <h4 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white mb-5">Layanan Depok Single Window</h4>
        </div>
    </div>
</section>
<!-- END::Small Parallax -->

<!-- BEGIN::City Showcase -->
<section class="relative min-h-screen md:py-12 py-8" id="showcase">
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
    <div class="flex justify-center mt-8">
        <a href="{{ route('layanan') }}" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Selengkapnya <i class="uil uil-arrow-right align-middle"></i></a>
    </div>
</section>
<!-- END::City Showcase -->

<!-- BEGIN::Commodities -->
<section class="relative md:py-16 py-8 bg-gray-50 dark:bg-slate-800" id="commodity">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-left text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Harga Komoditas Pasar</h3>
                <p class="text-slate-400 max-w-xl">Sumber: Dinas Perdagangan dan Perindustrian Kota Depok</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="pangan-wrapper" class="grid grid-cols-1 relative owl-carousel owl-theme owl-loaded owl-drag z-0">
            {{-- Commodity Contents --}}
        </div>
    </div>
</section>
<!-- END::Commodities -->

<!-- BEGIN::Info Widget -->
<section class="relative min-h-screen md:py-24 py-16" id="widget">
    <div class="container">
        <div class="grid grid-cols-1 pb-8">
            <div class="md:text-left text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Sekilas Depok, Agenda dan Media Sosial</h3>
                <p class="text-slate-400">Informasi Statistik Kota Depok, Agenda dan Media Sosial Resmi Milik Pemerintah Kota Depok</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="relative grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            <div class="group px-6 py-8 bg-white dark:bg-slate-900 shadow hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out border-t-[3px] border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600">
                <div class="content">
                    <a href="" class="text-xl font-semibold hover:text-indigo-600 duration-500 ease-in-out">Sekilas Depok</a>
                    <h4 class="text-5xl mt-4" style="color: #1D4F88"><i class="pr-2" id="icon-weather-0"></i><span id="suhuHariIni"></span></h4>
                    <h6 class="text-lg" id="desc-weather">...</h6>
                    <div id="accordion-collapse" data-accordion="collapse" class="mt-4">
                        <div class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden">
                            <h2 class="text-base font-semibold bg-white dark:bg-slate-900" id="accordion-collapse-heading-1">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                                    <span class="text-sm">Penyakit Terpantau Bulan Ini</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden bg-white dark:bg-slate-900" aria-labelledby="accordion-collapse-heading-1">
                                <div class="p-5">
                                    <p id="penyakit-0-desc" class="text-slate-400 dark:text-gray-400 text-sm"></p>
                                </div>
                            </div>
                        </div>
                        <div class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold bg-white dark:bg-slate-900" id="accordion-collapse-heading-2">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                    <span class="text-sm">RSUD dan Puskesmas</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-2" class="hidden bg-white dark:bg-slate-900" aria-labelledby="accordion-collapse-heading-2">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400 text-sm">RSUD dan Puskesmas</p>
                                </div>
                            </div>
                        </div>
                        <div class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold bg-white dark:bg-slate-900" id="accordion-collapse-heading-3">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                    <span class="text-sm">Jumlah Penduduk</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-3" class="hidden bg-white dark:bg-slate-900" aria-labelledby="accordion-collapse-heading-3">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400 text-sm">Jumlah Penduduk</p>
                                </div>
                            </div>
                        </div>
                        <div class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold bg-white dark:bg-slate-900" id="accordion-collapse-heading-4">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                                    <span class="text-sm">Jumlah Sekolah</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-4" class="hidden bg-white dark:bg-slate-900" aria-labelledby="accordion-collapse-heading-4">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400 text-sm">Jumlah Sekolah</p>
                                </div>
                            </div>
                        </div>
                        <div class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-semibold bg-white dark:bg-slate-900" id="accordion-collapse-heading-5">
                                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                                    <span class="text-sm">Penerimaan Bulan Ini</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-5" class="hidden bg-white dark:bg-slate-900" aria-labelledby="accordion-collapse-heading-5">
                                <div class="p-5">
                                    <p id="bphtb" class="text-slate-400 dark:text-gray-400 text-sm"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group px-6 py-8 bg-white dark:bg-slate-900 shadow hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out border-t-[3px] border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600">
                <div class="content">
                    <a href="" class="text-xl font-semibold hover:text-indigo-600 duration-500 ease-in-out">Agenda</a>
                    <p class="text-slate-400 mt-4">The phrasal sequence of the is now so that many campaign and benefit</p>
                    
                    <div class="mt-5">
                        <a href="" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Selengkapnya <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="group px-6 py-8 bg-white dark:bg-slate-900 shadow hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out border-t-[3px] border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600">
                <div class="content">
                    <a href="" class="text-xl font-semibold hover:text-indigo-600 duration-500 ease-in-out">Media Sosial</a>
                    <!-- BEGIN::Social Media -->
                    <div class="group relative overflow-hidden bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-5">
                        <div class="p-2 rounded-md shadow dark:shadow-gray-800">
                            <div class="flex items-center">
                                <a href="https://twitter.com/pemkotdepok" target="_blank" class="w-1/2 p-1">
                                    <img loading="lazy" src="{{ asset('assets/images/social/twitter.png') }}" class="rounded-md hover:origin-center hover:scale-105 transition duration-500" alt="Gambar Media Sosial">
                                </a>

                                <a href="https://www.facebook.com/PemerintahKotaDepok/" target="_blank" class="w-1/2 p-1">
                                    <img loading="lazy" src="{{ asset('assets/images/social/facebook.png') }}" class="rounded-md hover:origin-center hover:scale-105 transition duration-500" alt="Gambar Media Sosial">
                                </a>
                            </div>
                            <div class="flex items-center">
                                <a href="https://www.instagram.com/pemkotdepok/" target="_blank" class="w-1/2 p-1">
                                    <img loading="lazy" src="{{ asset('assets/images/social/instagram.png') }}" class="rounded-md hover:origin-center hover:scale-105 transition duration-500" alt="Gambar Media Sosial">
                                </a>
    
                                <a href="https://www.youtube.com/@kominfodepok" target="_blank" class="w-1/2 p-1">
                                    <img loading="lazy" src="{{ asset('assets/images/social/youtube.png') }}" class="rounded-md hover:origin-center hover:scale-105 transition duration-500" alt="Gambar Media Sosial">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END::Social Media -->
                    <div class="mt-5">
                        <a href="" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Selengkapnya <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BEGIN::Info Widget -->

<!-- BEGIN::DSW -->
<section class="relative md:py-24 py-16 bg-no-repeat bg-fixed bg-center" id="dsw" style="background-image: url('{{ asset('assets/images/bg/bg-00014.png') }}'); background-size: cover;">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="lg:col-span-5 md:col-span-6">
                <img loading="lazy" src="{{ asset('assets/images/app/smartphone-dsw.png') }}" class="mx-auto d-block" alt="Gambar Ilustrasi DSW">
            </div>
            <div class="lg:col-span-7 md:col-span-6">
                <span class="bg-indigo-600 text-white text-xs font-bold px-2.5 py-0.5 rounded h-5">Aplikasi Seluler</span>
                <h4 class="md:text-2xl text-3xl text-white lg:leading-normal leading-normal font-extrabold my-4">Telah tersedia untuk <br> Ponsel Anda</h4>
                <p class="md:text-xl text-2xl text-slate-400 text-white font-extrabold max-w-xl mb-0">
                    Depok Single Window, satu aplikasi untuk berbagai urusan.
                </p>
                <div class="my-5">
                    <a href="https://apps.apple.com/us/app/depok-single-window-dsw/id1530183936?app=itunes&ign-mpt=uo%3D4" target="_blank">
                        <img loading="lazy" src="{{ asset('assets/images/app/app.png') }}" class="m-1 inline-block" alt="Gambar Logo App Strore">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=id.depok.depoksinglewindow&hl=en" target="_blank">
                        <img loading="lazy" src="{{ asset('assets/images/app/playstore.png') }}" class="m-1 inline-block" alt="Gambar Logo Playstore">
                    </a>
                </div>
                <div class="inline-block">
                    <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-700">
                        <i data-feather="smartphone" class="mr-2 text-white h-10 w-10"></i>
                        <div class="content">
                            <h3 class="mb-0 text-base text-white font-extrabold">Pasang aplikasi sekarang pada Ponsel Anda</h3>
                            <a href="#showcase" class="btn btn-link text-white hover:text-white font-extrabold after:bg-indigo-600 duration-500 ease-in-out">Pelajari Lebih Lanjut <i class="uil uil-angle-right-b"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END::DSW -->

<!-- BEGIN::Informations -->
<section class="relative md:py-24 py-16" id="information">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Informasi</h3>
            <p class="text-slate-400 max-w-xl mx-auto">Dapatkan Informasi seputar Pemerintah Kota Depok dalam bentuk Berita, Grafis dan Video.</p>
        </div>
        <div class="grid grid-cols-1 mt-8">
            <ul class="md:w-fit w-full mx-auto flex-wrap justify-center text-center p-3 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md" id="myTab" data-tabs-toggle="#newsInfographicVideo" role="tablist">
                <li role="presentation" class="md:inline-block block md:w-fit w-full">
                    <button class="px-6 py-2 font-semibold rounded-md w-full hover:text-indigo-600 transition-all duration-500 ease-in-out" id="news-tab" data-tabs-target="#news" type="button" role="tab" aria-controls="news" aria-selected="true">Berita</button>
                </li>
                <li role="presentation" class="md:inline-block block md:w-fit w-full">
                    <button class="px-6 py-2 font-semibold rounded-md w-full transition-all duration-500 ease-in-out" id="video-tab" data-tabs-target="#video" type="button" role="tab" aria-controls="video" aria-selected="false">Video</button>
                </li>
                <li role="presentation" class="md:inline-block block md:w-fit w-full">
                    <button class="px-6 py-2 font-semibold rounded-md w-full transition-all duration-500 ease-in-out" id="infographic-tab" data-tabs-target="#infographic" type="button" role="tab" aria-controls="infographic" aria-selected="false">Infografis</button>
                </li>
            </ul>
            <div id="newsInfographicVideo" class="mt-1">
                <div class="" id="news" role="tabpanel" aria-labelledby="news-tab">
                    <div id="berita-wrapper" class="grid grid-cols-1 lg:grid-cols-5 md:grid-cols-3 mt-8 gap-[30px]">
                        {{-- Ajax News Content --}}
                    </div>
                </div>
                <div class="hidden" id="video" role="tabpanel" aria-labelledby="video-tab">
                    <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                        <div class="lg:col-span-4 md:col-span-6">
                            <div id="youtube-wrapper" class="grid grid-cols-1 gap-[30px]">
                            </div>
                        </div>
                        <div class="lg:col-span-8 md:col-span-6">
                            <div class="sticky top-20">
                                <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center">Youtube Pemerintah Kota Depok</h5>
                                <div id="youtube-frame" class="relative h-0 overflow-hidden max-w-full w-full mt-8" style="padding-bottom: 56.25%">
		                            <iframe name="youtube-frame" src="" frameborder="0" allowfullscreen class="absolute top-0 left-0 w-full h-full"></iframe>
	                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="infographic" role="tabpanel" aria-labelledby="infographic-tab">
                    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-[30px] mt-10">
                        @if (!empty($infografis))
                            @foreach ($infografis as $infografi)
                                <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                    <a href="{{ asset('storage/uploads/infografis/'.$infografi->imageName) }}" class="lightbox">
                                        <img loading="lazy" src="{{ asset('storage/uploads/infografis/'.$infografi->imageName) }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="Gambar Infografis">
                                        <div class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"></div>
                                        <div class="content">
                                            <div class="title absolute z-10 hidden group-hover:block bottom-4 left-4">
                                                <div class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out">{{ $infografi->nama }}</div>
                                                <p class="text-slate-300 text-sm tag mb-0">Sumber: {{ $infografi->opd->nama }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END::Informations -->

<!-- BEGIN::External Links-->
<section class="relative md:py-16 py-8">
    <div class="container">
        <div class="grid grid-cols-1 relative">
            <div class="tiny-four-item">
                <div class="tiny-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-body p-0">
                            <a href="https://smartcity.depok.go.id/" target="_blank">
                                <img loading="lazy" src="{{ asset('assets/images/bg/smart-city.png') }}" class="" alt="Gambar Tautan Eksternal">
                                <div class="overlay bg-dark"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tiny-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-body p-0">
                            <a href="https://play.google.com/store/apps/details?id=id.depok.depoksinglewindow&hl=en" target="_blank">
                                <img loading="lazy" src="{{ asset('assets/images/bg/dsw.png') }}" class="" alt="Gambar Tautan Eksternal">
                                <div class="overlay bg-dark"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tiny-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-body p-0">
                            <a href="{{ asset('https://play.google.com/store/apps/details?id=com.depok.sigap&hl=en') }}" target="_blank">
                                <img loading="lazy" src="{{ asset('assets/images/bg/depok-sigap.png') }}" class="" alt="Gambar Tautan Eksternal">
                                <div class="overlay bg-dark"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tiny-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-body p-0">
                            <a href="https://dinkes.depok.go.id/" target="_blank">
                                <img loading="lazy" src="{{ asset('assets/images/bg/smart-healthy-city.png') }}" class="" alt="Gambar Tautan Eksternal">
                                <div class="overlay bg-dark"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tiny-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-body p-0">
                            <a href="https://smartcity.depok.go.id/" target="_blank">
                                <img loading="lazy" src="{{ asset('assets/images/bg/smart-city.png') }}" class="" alt="Gambar Tautan Eksternal">
                                <div class="overlay bg-dark"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tiny-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-body p-0">
                            <a href="https://play.google.com/store/apps/details?id=id.depok.depoksinglewindow&hl=en" target="_blank">
                                <img loading="lazy" src="{{ asset('assets/images/bg/dsw.png') }}" class="" alt="Gambar Tautan Eksternal">
                                <div class="overlay bg-dark"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tiny-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-body p-0">
                            <a href="{{ asset('https://play.google.com/store/apps/details?id=com.depok.sigap&hl=en') }}" target="_blank">
                                <img loading="lazy" src="{{ asset('assets/images/bg/depok-sigap.png') }}" class="" alt="Gambar Tautan Eksternal">
                                <div class="overlay bg-dark"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tiny-slide">
                    <div class="card border-0 rounded-0">
                        <div class="card-body p-0">
                            <a href="https://dinkes.depok.go.id/" target="_blank">
                                <img loading="lazy" src="{{ asset('assets/images/bg/smart-healthy-city.png') }}" class="" alt="Gambar Tautan Eksternal">
                                <div class="overlay bg-dark"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END::External Links -->
@endsection

@push('widget')
<!-- BEGIN::Announcement Modal -->
<div id="announcementModal" x-data="{ open: true }" x-show="open" @open-me="open=true" @close-me="open=false" class="font-sans antialiased fixed fixed top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center" onclick="toggleModal002()">
    <div @keydown.window.escape="open = false" x-show="open" class="relative z-50" aria-labelledby="announcement-title" x-ref="dialog" aria-modal="true">
        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity">
            {{-- <div class="absolute inset-0 bg-gray-500 opacity-75"></div> --}}
        </div>
        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-on:click.away="open=false" class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all w-[calc(100vw-10rem)] lg:w-[calc(100vw-25rem)] flex items-center justify-center">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <div class="mt-2">
                            <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">
                                <div class="relative">
                                    <img loading="lazy" class="" src="{{ asset('assets/images/bg/slider-depok-01.jpg') }}" alt="Gambar Pengumuman">
                                    <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100 duration-500 ease-in-out">
                                        <a href="" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-del text-right" onclick="toggleModal002()">
                <button class="absolute border-none bg-none p-0 cursor-pointer font-semibold top-2 right-2"><i class="uil uil-times text-dark dark:text-slate-200 text-2xl"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- END::Announcement Modal -->

<!-- BEGIN::Sticky Button GPR -->
{{-- <div class="relative">
    <div class="fixed bottom-4 left-4">
        <button class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white text-xs rounded-xl" onclick="toggleModal001()">
            Government Public Relation
        </button>
        <span class="relative hover:text-indigo-700 text-indigo-600 font-extrabold align-center cursor-pointer button-del -top-5 left-0">
            &times;
        </span>
    </div>
</div> --}}
<!-- END::Sticky Button GPR -->

<!-- BEGIN::Modal GPR -->
{{-- <div id="modal001" class="fixed bg-white left-4 rounded-lg md:max-w-md md:mx-auto p-4 bottom-0 z-10 mb-4 mx-4 overflow-y-visible md:relative dark:bg-slate-800 hidden">
    <div class="md:flex items-center">
        <div class="mt-4 md:mt-0 md:ml-0 text-center md:text-left">
            <div id="gpr-kominfo-widget-container"></div>
        </div>
    </div>
    <div class="button-del text-right" onclick="toggleModal001()">
        <button class="absolute border-none bg-none p-0 cursor-pointer font-extrabold bottom-0 right-0"><i class="uil uil-times text-dark dark:text-slate-200 text-xl"></i></button>
    </div>
</div> --}}
<!-- END::Modal GPR -->
@endpush

@push('js')
{{-- <script src="{{ asset('js/owl/owl.carousel.min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" crossorigin="anonymous"></script>

<script type="text/javascript">
    function getNumberWithDot(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
    // setTimeout(function () {
    //     var gpr = document.getElementsByClassName("gpr-widget")[0];
    //     gpr.id="gpr-kominfo-widget-container";
    //     var d = document,
    //     s = d.createElement("script");
    //     s.src = "https://widget.kominfo.go.id/gpr-widget-kominfo.min.js";
    //     d.body.appendChild(s);
    // }, 120000);
    $(document).ready(function(){
        // $('#pengumuman-modal').modal('show');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/api/harga-komoditas',
            dataType: 'json',
            success: function (data){
                $('#pangan-loading').addClass('d-none');
                $.each(data, function(index, item){
                    if(item.selisih == null){
                        text = "text-sm font-bold text-sky-500";
                        desc = " Harga stabil ";
                        icon = '<i class="mdi mdi-equal-box"></i>';    
                    }
                    else if (item.selisih.slice(0,1) == '-') {
                        text = "text-sm font-bold text-green-600";
                        desc = " Harga turun ";
                        icon = '<i class="mdi mdi-arrow-down-bold-box"></i>';
                    }else if(item.selisih == '0'){
                        text = "text-sm font-bold text-sky-500";
                        desc = " Harga stabil ";
                        icon = '<i class="mdi mdi-equal-box"></i>';
                    }
                    else{
                        text = "text-sm font-bold text-red-600";
                        desc = " Harga naik ";
                        icon = '<i class="mdi mdi-arrow-up-bold-box"></i>';
                    }
                    $('#pangan-wrapper').append(
                        '<div class="item">' +
                            '<div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">' +
                                '<div class="relative">' +
                                    '<img loading="lazy" class="max-h-40" src="'+ item.src +'" alt="Gambar Komoditas">' +
                                '</div>' +
                                '<div class="p-2 relative">' +
                                    '<div href="" class="text-sm font-extrabold hover:text-indigo-600 duration-500 ease-in-out">'+ item.komoditi +'</div>' +
                                    '<h6 class="text-sm font-semibold">Rp. ' + 
                                        parseInt(item.price_today).toLocaleString() +
                                        '<small class="font-weight-bold">/Kg</small>' + 
                                    '</h6>' +
                                    '<h6 class="'+ text +'">(' + 
                                    icon + desc + parseInt(item.selisih).toLocaleString().replace('-', '') + ')' + 
                                    '</h6>' +
                                '</div>' +
                            '</div>' +
                        '</div>'
                    );
                });
                $("#pangan-wrapper").owlCarousel({
                    loop:true,
                    margin:10,
                    nav:true,
                    autoplay:true,
                    autoplayTimeout:2000,
                    autoplayHoverPause:true,
                    dots: false,
                    navText : ['<i class="mdi mdi-chevron-left"></i>', '<i class="mdi mdi-chevron-right"></i>'],
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
            }
        });

        $.ajax({
            url: '/api/covid',
            dataType: 'json',
            success: function (data){
                console.log(data);
                $('#covid-last-update').text(data.LastUpdate);
                $('#covid-konfirmasi').text(getNumberWithDot(data.positiftotal));
                $('#covid-aktif').text(getNumberWithDot(data.positifaktif));
                $('#covid-sembuh').text(getNumberWithDot(data.positifsembuh));
                $('#covid-meninggal').text(getNumberWithDot(data.positifmeninggal));
                $('#covid-kontakerat-total').text(getNumberWithDot(data.kontakerattotal));
                $('#covid-kontakerat-selesai').text(getNumberWithDot(data.kontakeratselesai));
                $('#covid-kontakerat-pantau').text(getNumberWithDot(data.kontakeratkarantina));
                $('#covid-suspek-total').text(getNumberWithDot(data.suspektotal));
                $('#covid-suspek-selesai').text(getNumberWithDot(data.suspekselesai));
                $('#covid-suspek-pantau').text(getNumberWithDot(data.suspekperawatan));
                $('#covid-probabel-total').text(getNumberWithDot(data.probabeltotal));
                $('#covid-probabel-selesai').text(getNumberWithDot(data.probabelselesai));
                $('#covid-probabel-pengawasan').text(getNumberWithDot(data.probabelpengawasan));
            }
        });

        $.ajax({
            url: '/api/pendidikan',
            dataType: 'json',
            success: function (data){
                console.log(data);
                $('#pendidikan-sd').text(data.SD[0].jumlah);
                $('#pendidikan-smp').text(data.SMP[0].jumlah);
                $('#pendidikan-sma').text(data.SMA[0].jumlah);
            }
        });

        $.ajax({
            url: '/api/kependudukan',
            dataType: 'json',
            success: function (data){
                pria = (data.Pria / data.Jumlah_Penduduk[0].Total * 100).toFixed(1);
                wanita = (data.Wanita / data.Jumlah_Penduduk[0].Total * 100).toFixed(1);
                $('#jumlah-penduduk').text(parseFloat(data.Jumlah_Penduduk[0].Total  + ' Orang').toLocaleString(window.document.documentElement.lang)
                );
                $('#jumlah-pria').append(
                    pria + '<small class="">%</small>'
                );
                $('#jumlah-wanita').append(
                    wanita + '<small class="">%</small>'
                );
            }
        });

        $.ajax({
            url: '/api/kunjungan',
            dataType: 'json',
            success:function(data){
                console.log("ini jumlah kunjungan" + data.puskesmas);
                $('#kunjungan-rsud').text(parseFloat(data.rsud).toLocaleString(window.document.documentElement.lang));
                $('#kunjungan-puskesmas').text(parseFloat(data.puskesmas).toLocaleString(window.document.documentElement.lang));
            }
        })

        $.ajax({
            url: '/api/pbb',
            dataType: 'json',
            success: function (data){
                console.log(data);
                $('#pbb').text(data);
            }
        });

        $.ajax({
            url: '/api/bphtb',
            dataType: 'json',
            success: function (data){
                console.log(data);
                $('#bphtb').text(data);

            }
        });

        $.ajax({
            url: '/api/kesehatan',
            dataType: 'json',
            success: function (data){
                $('#penyakit-loading').addClass('d-none');
                $('#penyakit-card').removeClass('d-none');
                $('#penyakit-0').text(data.data[0].penyakit);
                $('#penyakit-0-desc').text('Jumlah pasien ' + data.data[0].total + ' orang');
                $('#penyakit-1').text(data.data[1].penyakit);
                $('#penyakit-1-desc').text('Jumlah pasien ' + data.data[1].total + ' orang');
                $('#penyakit-2').text(data.data[2].penyakit);
                $('#penyakit-2-desc').text('Jumlah pasien ' + data.data[2].total + ' orang');
                $('#penyakit-3').text(data.data[3].penyakit);
                $('#penyakit-3-desc').text('Jumlah pasien ' + data.data[3].total + ' orang');
                $('#penyakit-4').text(data.data[4].penyakit);
                $('#penyakit-4-desc').text('Jumlah pasien ' + data.data[4].total + ' orang');
                $('#data-loading').addClass('d-none');
                $('#data-all-wrapper').addClass('d-flex align-items-stretch');
                $('#data-wrapper').removeClass('d-none');
            }
        });

        $.ajax({
            url: '/api/berita',
            dataType: 'json',
            success: function (data) {
                $('#berita-carousel-wrapper').empty();
                $.each(data.berita, function(index, item){
                    var desc = item.isi;
                    $('#berita-wrapper').append(
                        '<div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden"><img loading="lazy" class="mx-auto text-center max-h-40" src="' + item.image + '" alt="Gambar Berita"><div class="content p-6"><a href="'+ item.link +'" target="_blank" class="title h5 text-md font-medium hover:text-indigo-600 duration-500 ease-in-out">' + item.title + '</a><p class="text-slate-400 mt-3">' + desc.slice(0, 55) + '...</p><h6>' + item.date + '</h6><div class="mt-4"><a href="'+ item.link +'" target="_blank" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Selengkapnya <i class="uil uil-arrow-right"></i></a></div></div></div>'
                    );
                    $('#berita-indicators').append(
                        '<li data-target="#carouselBerita" data-slide-to="'+ index +'" class="active"></li>'
                    );
                    if (index == 0) {
                        asd = " active";
                    }else{
                        asd = "";
                    }
                    $('#berita-carousel-wrapper').append(
                        '<div class="carousel-item h-100 '+ asd +'">' +
                        '<a href="'+ item.link +'" target="_blank">' +
                            '<img loading="lazy" class="d-block w-100 h-100" src="'+ item.image +'" style="object-fit: cover;">' +
                                '<div class="carousel-caption" style="background-color: rgba(0,0,0,0.7);left: 0;right: 0;bottom: 0;text-align: left;padding-top:20px">' + 
                                    '<span class="ml-3 text-light pb-3" style="font-size:14px">'+ item.title.slice(0,35) +' ...</span>' +
                                '</div>' +
                            '</div>' +
                        '</a>'
                    )
                });
                $('#berita-loading').addClass('hidden');
                $('#berita-other-link').removeClass('hidden');
            },
            error: function() {}
        });

        $.ajax({
            url: '/api/cuacaBMKG',
            success: function(data) {
                $('#suhuHariIni').html(data.suhu[0].value + ' <small>&deg;C</small>');
                $('#desc-weather').html(data.suhu[0].icon.desc);
                $('#icon-weather-0').addClass(data.suhu[0].icon.icon);
                for(i = 1; i < data.suhu.length; i++){
                    $('#weather-' + i).html(data.suhu[i].value + ' <small>&deg;C</small>');
                    $('#time-' + i).html(data.suhu[i].time);
                    $('#icon-weather-' + i).addClass(data.suhu[i].icon.icon)
                }
            },
            error: function(){

            }
        });

        $.ajax({
            url: '/api/youtube',
            success: function(data){
                $('#youtube-frame').removeClass('hidden');
                youtubeFrame = 'youtube-frame';
                $.each(data, function(index, item){
                    var date = new Date(item.snippet.publishedAt);
                    var linkYoutube = 'https://www.youtube.com/embed/';

                    $('#youtube-wrapper').append(
                        '<div class="flex items-center mt-8">' +
                            '<img loading="lazy" src="'+ item.snippet.thumbnails.medium.url +'" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">' +
                            '<div class="ml-3">' +
                                '<a href="https://www.youtube.com/embed/'+ item.id.videoId +'" class="font-semibold hover:text-indigo-600" target="youtube-frame">'+ item.snippet.title +'</a>' +
                                '<p class="text-sm text-slate-400">' + date + '</p>' +
                            '</div>' +
                        '</div>'
                    );
                    $('#youtube-loading').addClass('hidden');
                });
            },
            error: function(){

            }
        });

        $("#owl-carousel").owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
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
    });
</script>
@endpush
