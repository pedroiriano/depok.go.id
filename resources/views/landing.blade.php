@extends('layouts.frontend')

@section('content')
<!-- BEGIN::Header -->
<section class="flex md:h-screen py-36 items-center bg-no-repeat bg-fixed bg-top" style="background-image: url('{{ asset('assets/images/bg/promosi-depok-ori.gif') }}'); background-size: cover;">
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
                            <div class="tiny-slide">
                                <div class="text-center">
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">
                                        <div class="relative">
                                            <img src="{{ asset('assets/images/bg/slider-depok-01.jpg') }}" alt="Gambar Pengumuman">
                                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100 duration-500 ease-in-out">
                                                <a href="" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Slide 01 -->
                            <!-- Start Slide 02 -->
                            <div class="tiny-slide">
                                <div class="text-center">
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">
                                        <div class="relative">
                                            <img src="{{ asset('assets/images/bg/slider-depok-02.jpg') }}" alt="Gambar Pengumuman">
                                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100 duration-500 ease-in-out">
                                                <a href="" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Slide 02 -->
                            <!-- Start Slide 03 -->
                            <div class="tiny-slide">
                                <div class="text-center">
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">
                                        <div class="relative">
                                            <img src="{{ asset('assets/images/bg/slider-depok-03.jpg') }}" alt="Gambar Pengumuman">
                                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100 duration-500 ease-in-out">
                                                <a href="" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Slide 03 -->
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
                                            <img src="{{ asset('assets/images/mayor/wali-kota-depok.png') }}" alt="Gambar Pimpinan Daerah">
                                        </div>
                                        <div class="py-4 relative">
                                            <div class="flex items-center justify-center md:text-2xs text-sm font-extrabold hover:text-indigo-600 duration-500 ease-in-out">Dr. K.H. Mohammad Idris, M.A.</div>
                                            <div class="flex items-center justify-center mt-2 md:text-2xs text-sm font-extrabold hover:text-indigo-600 duration-500 ease-in-out">
                                                Wali Kota Depok
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mayor -->
                                    <!-- Start Vice Mayor -->
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">
                                        <div class="relative">
                                            <img src="{{ asset('assets/images/mayor/wakil-wali-kota-depok.png') }}" alt="Gambar Pimpinan Daerah">
                                        </div>
                                        <div class="py-4 relative">
                                            <div class="flex items-center justify-center md:text-2xs text-sm font-extrabold hover:text-indigo-600 duration-500 ease-in-out">Ir. H. Imam Budi Hartono</div>
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
            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                <img src="{{ asset('assets/images/dsw/pajak.png') }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="Gambar Layanan DSW">
                <div class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"></div>
                <div class="content">
                    <div class="title absolute z-10 hidden group-hover:block bottom-4 left-4">
                        <a href="" class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out">Pajak</a>
                        <p class="text-slate-100 tag mb-0">DSW</p>
                    </div>
                </div>
            </div>
            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                <img src="{{ asset('assets/images/dsw/penduduk.png') }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="Gambar Layanan DSW">
                <div class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"></div>
                <div class="content">
                    <div class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500">
                        <a href="" class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out">Kependudukan</a>
                        <p class="text-slate-100 tag mb-0">DSW</p>
                    </div>
                </div>
            </div>
            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                <img src="{{ asset('assets/images/dsw/izin.png') }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="Gambar Layanan DSW">
                <div class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"></div>
                <div class="content">
                    <div class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500">
                        <a href="" class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out">Perizinan</a>
                        <p class="text-slate-100 tag mb-0">DSW</p>
                    </div>
                </div>
            </div>
            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                <img src="{{ asset('assets/images/portfolio/4.jpg') }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="Gambar Layanan DSW">
                <div class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"></div>
                <div class="content">
                    <div class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500">
                        <a href="" class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out">Kesehatan</a>
                        <p class="text-slate-100 tag mb-0">DSW</p>
                    </div>
                </div>
            </div>
            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                <img src="{{ asset('assets/images/dsw/peta.png') }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="Gambar Layanan DSW">
                <div class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"></div>
                <div class="content">
                    <div class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500">
                        <a href="" class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out">Peta</a>
                        <p class="text-slate-100 tag mb-0">DSW</p>
                    </div>
                </div>
            </div>
            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                <img src="{{ asset('assets/images/portfolio/6.jpg') }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="Gambar Layanan DSW">
                <div class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"></div>
                <div class="content">
                    <div class="icon absolute z-10 hidden group-hover:block top-4 right-4 transition-all duration-500">
                        <a href="{{ asset('assets/images/portfolio/6.jpg') }}" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                    </div>
                    <div class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500">
                        <a href="portfolio-detail-one.html" class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out">Mockup Collection</a>
                        <p class="text-slate-100 tag mb-0">DSW</p>
                    </div>
                </div>
            </div>
            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                <img src="{{ asset('assets/images/portfolio/7.jpg') }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="Gambar Layanan DSW">
                <div class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"></div>

                <div class="content">
                    <div class="icon absolute z-10 hidden group-hover:block top-4 right-4 transition-all duration-500">
                        <a href="{{ asset('assets/images/portfolio/7.jpg') }}" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                    </div>
                    <div class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500">
                        <a href="portfolio-detail-one.html" class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out">Mockup Collection</a>
                        <p class="text-slate-100 tag mb-0">DSW</p>
                    </div>
                </div>
            </div>
            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                <img src="{{ asset('assets/images/portfolio/8.jpg') }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="Gambar Layanan DSW">
                <div class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"></div>
                <div class="content">
                    <div class="icon absolute z-10 hidden group-hover:block top-4 right-4 transition-all duration-500">
                        <a href="{{ asset('assets/images/portfolio/8.jpg') }}" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                    </div>
                    <div class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500">
                        <a href="portfolio-detail-one.html" class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out">Mockup Collection</a>
                        <p class="text-slate-100 tag mb-0">DSW</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-8">
        <a href="" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Selengkapnya <i class="uil uil-arrow-right align-middle"></i></a>
    </div>
</section>
<!-- END::City Showcase -->

<!-- BEGIN::Commodities -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="commodity">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 pb-8 items-end">
            <div class="lg:col-span-8 md:col-span-6 md:text-left text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Harga Komoditas Pasar</h3>
                <p class="text-slate-400 max-w-xl">Sumber: Dinas Perdagangan dan Perindustrian Kota Depok</p>
            </div>
            <div class="lg:col-span-4 md:col-span-6 md:text-right hidden md:block">
                <a href="" class="btn btn-link text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Semua Komoditas <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-cols-1 relative">
            <div class="tiny-five-item">
                <div class="tiny-slide">
                    <div class="px-3 py-10 rounded-md shadow dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 transition duration-500 m-2">
                        <div class="w-[84px] h-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 transition duration-500 mx-auto">
                            <i class="uil uil-money-insert"></i>
                        </div>
                        <div class="content mt-6">
                            <a href="" class="title h5 text-lg font-medium hover:text-indigo-600">Pajak</a>
                            <p class="text-slate-400 mt-3">35 Lesson</p>
                        </div>
                    </div>
                </div>
                <div class="tiny-slide">
                    <div class="px-3 py-10 rounded-md shadow dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 transition duration-500 m-2">
                        <div class="w-[84px] h-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 transition duration-500 mx-auto">
                            <i class="uil uil-users-alt"></i>
                        </div>
                        <div class="content mt-6">
                            <a href="" class="title h5 text-lg font-medium hover:text-indigo-600">Kependudukan</a>
                            <p class="text-slate-400 mt-3">20 Lesson</p>
                        </div>
                    </div>
                </div>
                <div class="tiny-slide">
                    <div class="px-3 py-10 rounded-md shadow dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 transition duration-500 m-2">
                        <div class="w-[84px] h-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 transition duration-500 mx-auto">
                            <i class="uil uil-lock-access"></i>
                        </div>
                        <div class="content mt-6">
                            <a href="" class="title h5 text-lg font-medium hover:text-indigo-600">Perizinan</a>
                            <p class="text-slate-400 mt-3">35 Lesson</p>
                        </div>
                    </div>
                </div>
                <div class="tiny-slide">
                    <div class="px-3 py-10 rounded-md shadow dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 transition duration-500 m-2">
                        <div class="w-[84px] h-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 transition duration-500 mx-auto">
                            <i class="uil uil-medical-square"></i>
                        </div>
                        <div class="content mt-6">
                            <a href="" class="title h5 text-lg font-medium hover:text-indigo-600">Kesehatan</a>
                            <p class="text-slate-400 mt-3">46 Lesson</p>
                        </div>
                    </div>
                </div>
                <div class="tiny-slide">
                    <div class="px-3 py-10 rounded-md shadow dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 transition duration-500 m-2">
                        <div class="w-[84px] h-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 transition duration-500 mx-auto">
                            <i class="uil uil-map"></i>
                        </div>
                        <div class="content mt-6">
                            <a href="" class="title h5 text-lg font-medium hover:text-indigo-600">Peta</a>
                            <p class="text-slate-400 mt-3">60 Lesson</p>
                        </div>
                    </div>
                </div>
                <div class="tiny-slide">
                    <div class="px-3 py-10 rounded-md shadow dark:shadow-gray-800 group text-center bg-white dark:bg-slate-900 hover:bg-indigo-600/5 dark:hover:bg-indigo-600/5 transition duration-500 m-2">
                        <div class="w-[84px] h-[84px] bg-indigo-600/5 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white rounded-full text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 transition duration-500 mx-auto">
                            <i class="uil uil-mailbox"></i>
                        </div>
                        <div class="content mt-6">
                            <a href="" class="title h5 text-lg font-medium hover:text-indigo-600">Aspirasi</a>
                            <p class="text-slate-400 mt-3">05 Lesson</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
            <div class="md:col-span-12 text-center">
                <a href="" class="btn btn-link text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Semua Komoditas <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
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
                    <p class="text-slate-400 mt-4">The phrasal sequence of the is now so that many campaign and benefit</p>
                    <div class="mt-5">
                        <a href="" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Selengkapnya <i class="uil uil-arrow-right"></i></a>
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
                                <div class="w-1/2 p-1">
                                    <img src="{{ asset('assets/images/social/twitter.png') }}" class="rounded-md hover:origin-center hover:scale-105 transition duration-500" alt="Gambar Media Sosial">
                                </div>

                                <div class="w-1/2 p-1">
                                    <img src="{{ asset('assets/images/social/facebook.png') }}" class="rounded-md hover:origin-center hover:scale-105 transition duration-500" alt="Gambar Media Sosial">
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-1/2 p-1">
                                    <img src="{{ asset('assets/images/social/instagram.png') }}" class="rounded-md hover:origin-center hover:scale-105 transition duration-500" alt="Gambar Media Sosial">
                                </div>
    
                                <div class="w-1/2 p-1">
                                    <img src="{{ asset('assets/images/social/youtube.png') }}" class="rounded-md hover:origin-center hover:scale-105 transition duration-500" alt="Gambar Media Sosial">
                                </div>
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
                <img src="{{ asset('assets/images/app/smartphone-dsw.png') }}" class="mx-auto d-block" alt="Gambar Ilustrasi DSW">
            </div>
            <div class="lg:col-span-7 md:col-span-6">
                <span class="bg-indigo-600 text-white text-xs font-bold px-2.5 py-0.5 rounded h-5">Aplikasi Seluler</span>
                <h4 class="md:text-2xl text-3xl text-white lg:leading-normal leading-normal font-extrabold my-4">Telah tersedia untuk <br> Ponsel Anda</h4>
                <p class="md:text-xl text-2xl text-slate-400 text-white font-extrabold max-w-xl mb-0">
                    Depok Single Window, satu aplikasi untuk berbagai urusan.
                </p>
                <div class="my-5">
                    <a href="https://apps.apple.com/us/app/depok-single-window-dsw/id1530183936?app=itunes&ign-mpt=uo%3D4" target="_blank">
                        <img src="{{ asset('assets/images/app/app.png') }}" class="m-1 inline-block" alt="Gambar Logo App Strore">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=id.depok.depoksinglewindow&hl=en" target="_blank">
                        <img src="{{ asset('assets/images/app/playstore.png') }}" class="m-1 inline-block" alt="Gambar Logo Playstore">
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
                    <div class="grid lg:grid-cols-2 grid-cols-1 items-center mt-8 gap-4">
                        <div class="group relative overflow-hidden rounded-md">
                            <img src="{{ asset('assets/images/food/blog/8.jpg') }}" class="group-hover:scale-105 duration-500 ease-in-out" alt="Gambar Berita">
                            <div class="absolute inset-0 bg-gradient-to-b to-slate-900 via-slate-900/50 from-transparent opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 -mb-96 group-hover:mb-0 duration-500 ease-in-out">
                                <div class="text-center">
                                    <a href="" class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">Berita</a>
                                    <a href="food-recipe.html" class="text-white font-semibold hover:text-indigo-600 block text-lg mt-4 duration-500 ease-in-out">Spicy Cauliflower Burgers and Salad Recipe</a>
                                </div>
                            </div>
                            <div class="absolute right-0 top-0 p-4 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                                <a href="#!" class="btn btn-icon text-lg bg-white dark:bg-slate-900 border-0 shadow dark:shadow-gray-800 rounded-full text-red-600/20 hover:text-red-600 focus:text-red-600"><i class="mdi mdi-heart"></i></a>
                            </div>
                        </div>
                        <div>
                            <div class="grid grid-cols-1 gap-4">
                                <div class="group md:flex items-center relative overflow-hidden">
                                    <div class="md:w-[40%] relative overflow-hidden rounded-md">
                                        <img src="{{ asset('assets/images/food/blog/1.jpg') }}" class="group-hover:scale-105 duration-500 ease-in-out" alt="Gambar Berita">
                                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                                        <div class="absolute right-0 top-0 p-4 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                                            <a href="#!" class="btn btn-icon text-lg bg-white dark:bg-slate-900 border-0 shadow dark:shadow-gray-800 rounded-full text-red-600/20 hover:text-red-600 focus:text-red-600"><i class="mdi mdi-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="md:w-[60%] md:pl-4 pt-4 md:pt-0">
                                        <a href="" class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">Berita</a>
                                        <a href="food-recipe.html" class="block hover:text-indigo-600 text-lg font-semibold mt-3">Change Your Strategy: Find a Business Consultant</a>
                                        <span class="text-slate-400 block mt-3"><i class="uil uil-calendar-alt"></i> 14th July 2022</span>
                                    </div>
                                </div>
                                <div class="group md:flex items-center relative overflow-hidden">
                                    <div class="md:w-[40%] relative overflow-hidden rounded-md">
                                        <img src="{{ asset('assets/images/food/blog/5.jpg') }}" class="group-hover:scale-105 duration-500 ease-in-out" alt="Gambar Berita">
                                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                                        <div class="absolute right-0 top-0 p-4 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                                            <a href="#!" class="btn btn-icon text-lg bg-white dark:bg-slate-900 border-0 shadow dark:shadow-gray-800 rounded-full text-red-600/20 hover:text-red-600 focus:text-red-600"><i class="mdi mdi-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="md:w-[60%] md:pl-4 pt-4 md:pt-0">
                                        <a href="" class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">Berita</a>
                                        <a href="food-recipe.html" class="block hover:text-indigo-600 text-lg font-semibold mt-3">Creamy Garlic Parmesan Chicken Salad</a>
                                        <span class="text-slate-400 block mt-3"><i class="uil uil-calendar-alt"></i> 14th July 2022</span>
                                    </div>
                                </div>
                                <div class="group md:flex items-center relative overflow-hidden">
                                    <div class="md:w-[40%] relative overflow-hidden rounded-md">
                                        <img src="{{ asset('assets/images/food/blog/4.jpg') }}" class="group-hover:scale-105 duration-500 ease-in-out" alt="Gambar Berita">
                                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
                                        <div class="absolute right-0 top-0 p-4 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
                                            <a href="#!" class="btn btn-icon text-lg bg-white dark:bg-slate-900 border-0 shadow dark:shadow-gray-800 rounded-full text-red-600/20 hover:text-red-600 focus:text-red-600"><i class="mdi mdi-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="md:w-[60%] md:pl-4 pt-4 md:pt-0">
                                        <a href="" class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded w-fit mx-auto h-5">Berita</a>
                                        <a href="food-recipe.html" class="block hover:text-indigo-600 text-lg font-semibold mt-3">Bourbon Street Rib-Eye Steak With Cheese</a>
                                        <span class="text-slate-400 block mt-3"><i class="uil uil-calendar-alt"></i> 14th July 2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="video" role="tabpanel" aria-labelledby="video-tab">
                    <div class="container">
                        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                            <div class="md:col-span-5">
                                <div class="relative">
                                    <img src="{{ asset('assets/images/smartwatch/1.jpg') }}" class="rounded-md" alt="Gambar Youtube">
        
                                    <div class="absolute bottom-16 right-0">
                                        <img src="{{ asset('assets/images/smartwatch/2.jpg') }}" class="rounded-md shadow-md w-48 h-48" alt="Gambar Youtube">
                                        <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                                            <a href="#!" data-type="youtube" data-id="Vx9GOE4kzNI" class="lightbox h-14 w-14 rounded-full shadow-lg inline-flex items-center justify-center bg-white text-indigo-600">
                                                <i class="mdi mdi-play inline-flex items-center justify-center text-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-7">
                                <div class="lg:ml-4">
                                    <h5 class="font-medium text-lg text-indigo-600">Nice Top Series</h5>
                                    <h4 class="mb-6 md:text-4xl text-3xl lg:leading-normal leading-normal font-medium">Black Great Addition</h4>
                                    <p class="text-slate-400 max-w-xl">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                    <a href="page-aboutus.html" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 transition duration-500 mt-4">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="infographic" role="tabpanel" aria-labelledby="infographic-tab">
                    <div id="grid" class="md:flex justify-center">
                        <div class="lg:w-1/5 md:w-1/3 p-1 picture-item" data-groups='["dsw"]'>
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <a href="{{ asset('assets/images/dsw/dsw-pajak-01.png') }}" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="{{ asset('assets/images/dsw/dsw-pajak-01.png') }}" class="" alt="Gambar Infografis">
                                </a>
                                <div class="absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-800">
                                    <a href="portfolio-detail-two.html" class="hover:text-indigo-600 text-lg transition duration-500 font-medium">Pajak</a>
                                    <h6 class="text-slate-400">DSW</h6>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/5 md:w-1/3 p-1 picture-item" data-groups='["dsw"]'>
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <a href="{{ asset('assets/images/dsw/dsw-kependudukan-01.png') }}" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="{{ asset('assets/images/dsw/dsw-kependudukan-01.png') }}" class="" alt="Gambar Infografis">
                                </a>
                                <div class="absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-800">
                                    <a href="portfolio-detail-two.html" class="hover:text-indigo-600 text-lg transition duration-500 font-medium">Kependudukan</a>
                                    <h6 class="text-slate-400">DSW</h6>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/5 md:w-1/3 p-1 picture-item" data-groups='["dsw"]'>
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <a href="{{ asset('assets/images/dsw/dsw-perizinan-01.png') }}" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="{{ asset('assets/images/dsw/dsw-perizinan-01.png') }}" class="" alt="Gambar Infografis">
                                </a>
                                <div class="absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-800">
                                    <a href="portfolio-detail-two.html" class="hover:text-indigo-600 text-lg transition duration-500 font-medium">Perizinan</a>
                                    <h6 class="text-slate-400">DSW</h6>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/5 md:w-1/3 p-1 picture-item" data-groups='["dsw"]'>
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <a href="{{ asset('assets/images/dsw/dsw-kesehatan-01.png') }}" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="{{ asset('assets/images/dsw/dsw-kesehatan-01.png') }}" class="" alt="Gambar Infografis">
                                </a>
                                <div class="absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-800">
                                    <a href="portfolio-detail-two.html" class="hover:text-indigo-600 text-lg transition duration-500 font-medium">Kesehatan</a>
                                    <h6 class="text-slate-400">DSW</h6>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/5 md:w-1/3 p-1 picture-item" data-groups='["dsw"]'>
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <a href="{{ asset('assets/images/dsw/dsw-peta-01.png') }}" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="{{ asset('assets/images/dsw/dsw-peta-01.png') }}" class="" alt="Gambar Infografis">
                                </a>
                                <div class="absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-800">
                                    <a href="portfolio-detail-two.html" class="hover:text-indigo-600 text-lg transition duration-500 font-medium">Peta</a>
                                    <h6 class="text-slate-400">DSW</h6>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/5 md:w-1/3 p-1 picture-item" data-groups='["dsw"]'>
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <a href="{{ asset('assets/images/dsw/dsw-loker-01.png') }}" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="{{ asset('assets/images/dsw/dsw-loker-01.png') }}" class="" alt="Gambar Infografis">
                                </a>
                                <div class="absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-800">
                                    <a href="portfolio-detail-four.html" class="hover:text-indigo-600 text-lg transition duration-500 font-medium">Lowongan Kerja</a>
                                    <h6 class="text-slate-400">DSW</h6>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/5 md:w-1/3 p-1 picture-item" data-groups='["dsw"]'>
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <a href="{{ asset('assets/images/dsw/dsw-pdam-pln-01.png') }}" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="{{ asset('assets/images/dsw/dsw-pdam-pln-01.png') }}" class="" alt="Gambar Infografis">
                                </a>
                                <div class="absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-800">
                                    <a href="portfolio-detail-two.html" class="hover:text-indigo-600 text-lg transition duration-500 font-medium">PDAM & PLN</a>
                                    <h6 class="text-slate-400">DSW</h6>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/5 md:w-1/3 p-1 picture-item" data-groups='["dsw"]'>
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <a href="{{ asset('assets/images/dsw/dsw-aspirasi-01.png') }}" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="{{ asset('assets/images/dsw/dsw-aspirasi-01.png') }}" class="" alt="Gambar Infografis">
                                </a>
                                <div class="absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-800">
                                    <a href="portfolio-detail-two.html" class="hover:text-indigo-600 text-lg transition duration-500 font-medium">Aspirasi</a>
                                    <h6 class="text-slate-400">DSW</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END::Informations -->

<!-- BEGIN::External Links -->
<div class="container-fluid relative">
    <div class="grid grid-cols-1 relative">
        <div class="tiny-twelve-item">
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="{{ asset('assets/images/food/1.jpg') }}" class="lightbox d-inline-block" title="">
                            <img src="{{ asset('assets/images/food/1.jpg') }}" class="" alt="Insta Post">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="{{ asset('assets/images/bg/smart-city.png') }}" class="lightbox d-inline-block" title="">
                            <img src="{{ asset('assets/images/bg/smart-city.png') }}" class="" alt="Gambar Tautan Eksternal">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="{{ asset('assets/images/bg/dsw.png') }}" class="lightbox d-inline-block" title="">
                            <img src="{{ asset('assets/images/bg/dsw.png') }}" class="" alt="Gambar Tautan Eksternal">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="{{ asset('assets/images/bg/depok-sigap.png') }}" class="lightbox d-inline-block" title="">
                            <img src="{{ asset('assets/images/bg/depok-sigap.png') }}" class="" alt="Gambar Tautan Eksternal">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tiny-slide">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-0">
                        <a href="{{ asset('assets/images/bg/smart-healthy-city.png') }}" class="lightbox d-inline-block" title="">
                            <img src="{{ asset('assets/images/bg/smart-healthy-city.png') }}" class="" alt="Gambar Tautan Eksternal">
                            <div class="overlay bg-dark"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END::External Links -->
@endsection

@push('widget')
<!-- BEGIN::Announcement Modal -->
<div id="announcementModal" x-data="{ open: true }" x-show="open" @open-me="open=true" @close-me="open=false" class="font-sans antialiased fixed fixed top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center" onclick="toggleModal002()">
    <div @keydown.window.escape="open = false" x-show="open" class="relative z-50" aria-labelledby="announcement-title" x-ref="dialog" aria-modal="true">
        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-on:click.away="open=false" class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all w-[calc(100vw-10rem)] lg:w-[calc(100vw-25rem)] flex items-center justify-center">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <div class="mt-2">
                            <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-800 duration-500 ease-in-out">
                                <div class="relative">
                                    <img src="{{ asset('assets/images/bg/slider-depok-01.jpg') }}" alt="Gambar Pengumuman">
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
<div class="relative">
    <div class="fixed bottom-4 left-4">
        <button class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white text-xs rounded-xl" onclick="toggleModal001()">
            Government Public Relation
        </button>
        <span class="relative hover:text-indigo-700 text-indigo-600 font-extrabold align-center cursor-pointer button-del -top-5 left-0">
            &times;
        </span>
    </div>
</div>
<!-- END::Sticky Button GPR -->

<!-- BEGIN::Modal GPR -->
<div id="modal001" class="fixed bg-white left-4 rounded-lg md:max-w-md md:mx-auto p-4 bottom-0 z-10 mb-4 mx-4 overflow-y-visible md:relative dark:bg-slate-800 hidden">
    <div class="md:flex items-center">
        <div class="mt-4 md:mt-0 md:ml-0 text-center md:text-left">
            <div id="gpr-kominfo-widget-container"></div>
        </div>
    </div>
    <div class="button-del text-right" onclick="toggleModal001()">
        <button class="absolute border-none bg-none p-0 cursor-pointer font-extrabold bottom-0 right-0"><i class="uil uil-times text-dark dark:text-slate-200 text-xl"></i></button>
    </div>
</div>
<!-- END::Modal GPR -->
@endpush
