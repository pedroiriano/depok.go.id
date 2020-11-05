<div class="text-center text-white py-2 d-none d-sm-block" style="background-color: #1D4F88">
    <a target="_blank" href="https://www.facebook.com/PemerintahKotaDepok/" style="text-decoration: none;color:white" class="mr-3"> 
        <i class="fab fa-facebook-f"></i>
    </a>
    <a target="_blank" href="https://www.facebook.com/PemerintahKotaDepok/" style="text-decoration: none;color:white" class="mr-3"> 
        <i class="fab fa-twitter"></i>
    </a>
    <a target="_blank" href="https://www.facebook.com/PemerintahKotaDepok/" style="text-decoration: none;color:white" class="mr-3"> 
        <i class="fab fa-instagram"></i>
    </a>
    <a target="_blank" href="https://www.facebook.com/PemerintahKotaDepok/" style="text-decoration: none;color:white" class="mr-3"> 
        <i class="fab fa-youtube"></i>
    </a>
    <span>Temukan informasi terkini dengan mengikuti akun resmi sosial media kami</span>
</div>
<nav class="shadow navbar navbar-expand-lg navbar-light bg-white flex-column flex-md-row sticky-top ">
    <div class="container">
        <a class="navbar-brand py-2" href="{{ route('beranda') }}">
                <img src="{{ asset('img/asset-2.png') }}" alt="" height="40" class="d-inline-block align-top" id="brand">
        </a>
        <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Sekilas Depok
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('content', 'sejarah') }}">Sejarah</a>
                        <a class="dropdown-item" href="{{ route('content', 'lambang-identitas') }}">Lambang Identitas</a>
                        <a class="dropdown-item" href="{{ route('content', 'ikon-kota') }}">Ikon Kota</a>
                        <a class="dropdown-item" href="{{ route('content', 'seni-budaya') }}">Seni Budaya</a>
                        {{-- <a class="dropdown-item" href="{{ route('content', 'sosialEkonomi') }}">Sosial Ekonomi</a> --}}
                        <a class="dropdown-item" href="{{ route('content', 'penghargaan') }}">Penghargaan</a>
                        <a class="dropdown-item" href="{{ route('demografi') }}">Demografi</a>
                        <a class="dropdown-item" href="{{ route('content', 'geografi') }}">Geografi</a>
                        </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Pemerintahan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('content', 'visi-misi') }}">Visi & Misi Kota</a>
                        <a class="dropdown-item" href="{{ route('pimpinan') }}">Pimpinan Daerah</a>
                        <a class="dropdown-item" href="{{ route('content', 'dinas') }}">Perangkat Daerah</a>
                        <a class="dropdown-item" href="{{ route('content', 'struktur-daerah') }}">Struktur Daerah</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Info Publik
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('infografis') }}">Infografis</a>
                        <a class="dropdown-item" target="_blank" href="https://jdih.depok.go.id">Produk Hukum</a>
                        <a class="dropdown-item" target="_blank" href="https://ppid.depok.go.id/#1532597359183-e12432b3-c0a9">Info Berkala</a>
                        <a class="dropdown-item" target="_blank" href="https://ppid.depok.go.id/#1532600380234-c404d293-d71b">Info Serta Merta</a>
                        <a class="dropdown-item" target="_blank" href="https://ppid.depok.go.id/#1532597359184-8b1240f6-e28d">Info Setiap Saat</a>
                        <a class="dropdown-item" target="_blank" href="https://ppid.depok.go.id/informasi-tentang-hak-dan-tata-cara-memperoleh-informasi-publik/daftar-informasi-publik/">Daftar Info Publik</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('layanan') }}" class="nav-link" aria-haspopup="true" aria-expanded="false">
                    Layanan
                    </a>
                </li>
                <li class="nav-item">
                    <button data-target="#download" data-toggle="modal" class="btn btn-info">
                    Download DSW
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="modal fade" id="download" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body modal-body-center">
                <a href="https://play.google.com/store/apps/details?id=id.depok.depoksinglewindow&hl=en" target="_blank">
                    <img src="{{ asset('img/play-store.png') }}" class="img-fluid w-50">
                </a>
                <a href="https://apps.apple.com/us/app/depok-single-window-dsw/id1530183936?app=itunes&ign-mpt=uo%3D4" target="_blank">
                    <img src="{{ asset('img/app-store.png') }}" class="img-fluid w-50">
                </a>
            </div>
        </div>
    </div>
</div>                    
