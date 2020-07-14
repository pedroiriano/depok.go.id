<div class="container-fluid">
    <div class="container">
        <div class="row py-5 justify-content-center">
            <div class="col-4 col-md-3 pb-5">
                <a href="https://play.google.com/store/apps/details?id=id.depok.depoksinglewindow&hl=en" target="_blank">
                    <img src="{{ asset('images/dsw.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-4 col-md-3 pb-5">
                <a href="https://play.google.com/store/apps/details?id=com.depok.sigap&hl=en" target="_blank">
                    <img src="{{ asset('images/depok-sigap.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-4 col-md-3 pb-5">
                <a href="http://smartcity.devsc.id/" target="_blank">
                    <img src="{{ asset('img/smart-city.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-4 col-md-3 pb-5">
                <a href="http://devsc.id/smarthealthy/" target="_blank">
                    <img src="{{ asset('img/smart-healthy-city.png') }}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer container-fluid font-small py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4 col-md-1 offset-md-0">
                <img src="{{ asset('img/lambang.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-4 ">
                <h6 class="lora h6">Portal Resmi Pemerintah Kota Depok</h6>
                <p class="lead p">Dikelola Oleh: Dinas Komunikasi dan Informatika Kota Depok Jl. Margonda Raya No. 54
                Gedung Dibaleka 2 Depok Lt.7 </p>
                <div class="pt-2 pb-5">
                    <a target="_blank" href="https://www.facebook.com/PemerintahKotaDepok/" style="text-decoration: none"> 
                    <i class="fab fa-facebook-f" style='font-size:24px;margin-right:30px;'></i>
                    </a>
                    <a target="_blank" href="https://twitter.com/pemkotdepok?lang=en" style="text-decoration: none">
                        <i class="fab fa-twitter" style='font-size:24px;margin-right:30px;'></i>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/pemkotdepok/" style="text-decoration: none">
                        <i class="fab fa-instagram" style='font-size:24px;margin-right:30px;'></i>
                    </a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCco0gmWTlN9nsxnlAy-tWFA" style="text-decoration: none">
                        <i class="fab fa-youtube" style='font-size:24px;margin-right:30px;'></i>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 offset-md-1 justify-content-end pb-3">
                <div class="row">
                    <div class="col-6">
                        <div class="card shadow">
                            <div class="card-body">
                                <span class="text-muted">Call Center</span>
                                <a href="tel:112">
                                    <h6 class="lora h6 pt-2"><i class="mr-2 fa fa-phone-alt"></i>112</h6>
                                </a>
                            </div>
                        </div>  
                    </div>
                    <div class="col-6">
                        <div class="card shadow pb-1">
                            <div class="card-body">
                                <span class="text-muted">Surel Pemkot Depok</span>
                                <a href="mailto:portal@depok.go.id">
                                    <h6 class="lora h6 pt-2" style="font-size: 1rem"><i class="mr-2 far fa-envelope"></i>portal@depok.go.id</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card shadow">
                            <div class="card-body">
                                <span class="text-muted">Kirim Pesan Whatsapp</span>
                                <a href="whatsapp://send?portal=phonenumber&text=Hello%2C%20World!">
                                    <h6 class="lora h6 pt-2"><i class="mr-2 fab fa-whatsapp"></i>Klik untuk kirim pesan</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-md-block py-3">
            <div class="row">
                <div class="col">
                    <!-- Links -->
                    <h5>Sekilas Depok</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('sejarah') }}">Sejarah</a>
                        </li>
                        <li>
                            <a href="{{ route('lambangIdentitas') }}">Lambang Identitas</a>
                        </li>
                        <li>
                            <a href="{{ route('ikonKota') }}">Ikon Kota</a>
                        </li>
                        <li>
                            <a href="{{ route('seniBudaya') }}">Seni Budaya</a>
                        </li>
                        <li>
                            <a href="{{ route('sosialEkonomi') }}">Sosial Ekonomi</a>
                        </li>
                        <li>
                            <a href="{{ route('demografi') }}">Demografi</a>
                        </li>
                        <li>
                            <a href="{{ route('geografi') }}">Geografi</a>
                        </li>
                        <li>
                            <a href="{{route('penghargaan')}}">Penghargaan</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <!-- Links -->
                    <h5>Pemerintahan</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('visiMisi')}}">Visi & Misi</a>
                        </li>
                        <li>
                            <a href="{{route('pimpinanDaerah')}}">Pimpinan Daerah</a>
                        </li>
                        <li>
                            <a href="{{route('strukturDaerah')}}">Struktur Daerah</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <!-- Links -->
                    <h5>Perangkat Daerah</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('dinas') }}">Dinas</a>
                        </li>
                        <li>
                            <a href="{{ route('sekda') }}">Sekretariat Daerah</a>
                        </li>
                        <li>
                            <a href="{{ route('kecamatan') }}">Kecamatan</a>
                        </li>
                        <li>
                            <a href="{{ route('kelurahan') }}">Kelurahan</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <!-- Links -->
                    <h5>Info Publik</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('infografis') }}">Infografis</a>
                        </li>
                        <li>
                            <a href="https://ppid.depok.go.id/#1532597359183-e12432b3-c0a9">Info Berkala</a>
                        </li>
                        <li>
                            <a href="https://ppid.depok.go.id/#1532600380234-c404d293-d71b">Info Serta Merta</a>
                        </li>
                        <li>
                            <a href="https://ppid.depok.go.id/#1532597359184-8b1240f6-e28d">Info Setiap Saat</a>
                        </li>
                        <li>
                            <a href="https://ppid.depok.go.id/informasi-tentang-hak-dan-tata-cara-memperoleh-informasi-publik/daftar-informasi-publik/">Daftar Info Publik</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid" style="background-color: #1D4F88">
    <div class="footer-copyright text-center py-3" style="color:#EAEAEA">© 2020 Website Resmi Pemerintah Kota Depok</div>
</div>
