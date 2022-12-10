<!-- BEGIN::Footer -->
<footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">    
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid lg:grid-cols-3 md:grid-cols-6 justify-center gap-[30px]">
                        <div class="text-center">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold mb-4">Call Center</h5>
                            <p class="mb-2"><a href="tel:112" class="text-gray-200">112</a></p>
                            <p class="mb-0"><a href="tel:+628111232222" class="text-gray-200">08111232222</a></p>
                        </div>
            
                        <div class="text-center">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold mb-4">SMS & Surel</h5>
                            <p class="mb-2"><a href="sms:+628111631500" class="text-gray-200">08111631500</a></p>
                            <p class="mb-0"><a href="mailto:portal@depok.go.id" class="text-gray-200">portal@depok.go.id</a></p>
                        </div>

                        <div class="text-center">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold mb-4">Alamat</h5>
                            <p class="mb-2">Kantor Pemerintah Kota Depok</p>
                            <p class="mb-0">Jl. Margonda Raya No. 54, Kota Depok</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 mt-12">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/brand/logodepoksquaresmall_90x90.png') }}" class="block mx-auto" alt="Gambar Lambang Kota Depok">
                            <p class="max-w-xl mx-auto mt-6">Situs Web Resmi Pemerintah Kota Depok. Ikuti dan Hubungi Media Sosial Kami untuk Mendapatkan Informasi Terkini.</p>
                        </div>
                        <ul class="list-none text-center mt-6">
                            <li class="inline"><a href="https://twitter.com/pemkotdepok" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                            <li class="inline"><a href="https://www.facebook.com/PemerintahKotaDepok/" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                            <li class="inline"><a href="https://www.instagram.com/pemkotdepok/" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                            <li class="inline"><a href="https://www.youtube.com/@kominfodepok" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-youtube align-middle" title="youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-[30px] px-0 border-t border-slate-800">
        <div class="container text-center">
            <div class="grid md:grid-cols-1">
                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Pemerintah Kota Depok. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://diskominfo.depok.go.id/" target="_blank" class="text-reset">DISKOMINFO Kota Depok</a>.</p>
            </div>
        </div>
    </div>
</footer>
<!-- END::Footer -->

<!-- BEGIN::Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
<!-- END::Back to top -->

<!-- BEGIN::Switcher -->
<div class="fixed top-1/4 -right-1 z-3">
    <span class="relative inline-block rotate-90">
        <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
        <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
            <i class="uil uil-moon text-[20px] text-yellow-500"></i>
            <i class="uil uil-sun text-[20px] text-yellow-500"></i>
            <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
        </label>
    </span>
</div>
<!-- END::Switcher -->

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
