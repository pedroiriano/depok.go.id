<div class="d-sm-block d-none text-center text-bold text-white" style="font-size:12px; background-color: #3598db">
    <div class="container">
        <nav class="navbar navbar-expand navbar-dark" style="padding:0;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fab fa-facebook-square"></i><span style="padding-left:10px">Pemkot Depok |</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fab fa-youtube"></i><span style="padding-left:10px">Pemkot Depok |</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-phone-alt"></i><span style="padding-left:10px">08111232222 |</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-envelope"></i><span style="padding-left:10px">portal@depok.go.id |</span></a>
                </li>
            </ul>
        </nav>
    </div>
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
                        <a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a>
                        <a class="dropdown-item" href="{{ route('lambangIdentitas') }}">Lambang Identitas</a>
                        <a class="dropdown-item" href="{{ route('ikonKota') }}">Ikon Kota</a>
                        <a class="dropdown-item" href="{{ route('seniBudaya') }}">Seni Budaya</a>
                        {{-- <a class="dropdown-item" href="{{ route('sosialEkonomi') }}">Sosial Ekonomi</a> --}}
                        <a class="dropdown-item" href="{{ route('penghargaan') }}">Penghargaan</a>
                        <a class="dropdown-item" href="{{ route('demografi') }}">Demografi</a>
                        <a class="dropdown-item" href="{{ route('geografi') }}">Geografi</a>
                        </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Pemerintahan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('visiMisi') }}">Visi & Misi Kota</a>
                        <a class="dropdown-item" href="{{ route('pimpinanDaerah') }}">Pimpinan Daerah</a>
                        <a class="dropdown-item" href="{{ route('strukturDaerah') }}">Struktur Daerah</a>
                        {{-- <a class="dropdown-item" href="{{ route('perundangundangan') }}">Perundang-Undangan</a> --}}
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Perangkat Daerah
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('dinas') }}">Dinas</a>
                        <a class="dropdown-item" href="{{ route('sekda') }}">Sekretariat Daerah</a>
                        <a class="dropdown-item" href="{{ route('kecamatan') }}">Kecamatan</a>
                        <a class="dropdown-item" href="{{ route('kelurahan') }}">Kelurahan</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Info Publik
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('infografis') }}">Infografis</a>
                        <a class="dropdown-item" target="_blank" href="https://ppid.depok.go.id/#1532597359183-e12432b3-c0a9">Info Berkala</a>
                        <a class="dropdown-item" target="_blank" href="https://ppid.depok.go.id/#1532600380234-c404d293-d71b">Info Serta Merta</a>
                        <a class="dropdown-item" target="_blank" href="https://ppid.depok.go.id/#1532597359184-8b1240f6-e28d">Info Setiap Saat</a>
                        <a class="dropdown-item" target="_blank" href="https://ppid.depok.go.id/informasi-tentang-hak-dan-tata-cara-memperoleh-informasi-publik/daftar-informasi-publik/">Daftar Info Publik</a>
                    </div>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Transparansi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">LPSE</a>
                        <a class="dropdown-item" href="#">SIRUP</a>
                        <a class="dropdown-item" href="#">MONEV</a>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
