<!-- BEGIN::Navbar -->
<nav id="topnav" class="defaultscroll is-sticky justify-start nav-light">
    <div class="container">
        <a class="logo pl-0" href="{{ route('beranda') }}">
            <span class="inline-block dark:hidden">
                <img src="{{ asset('assets/images/brand/lambang-depok_dark.png') }}" class="l-dark" height="24" alt="Lambang Kota Depok">
                <img src="{{ asset('assets/images/brand/lambang-depok_light.png') }}" class="l-light" height="24" alt="Lambang Kota Depok">
            </span>
            <img src="{{ asset('assets/images/brand/lambang-depok_light.png') }}" height="24" class="hidden dark:inline-block" alt="Lambang Kota Depok">
        </a>
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="buy-button list-none mb-0">
            <li class="inline mb-0">
                <a href="#dsw" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white text-xs rounded-md">
                    <i class="uil uil-cloud-download"></i> DSW
                </a>
            </li>
        </ul>
        <div id="navigation">
            <ul class="navigation-menu nav-light">
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Tentang Depok</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <ul>
                                <li><a href="{{ route('content', 'sejarah') }}" class="sub-menu-item">Sejarah</a></li>
                                <li><a href="{{ route('content', 'lambang-identitas') }}" class="sub-menu-item">Lambang Identitas</a></li>
                                <li><a href="iconical.html" class="sub-menu-item">Ikon Kota</a></li>
                                <li><a href="culture.html" class="sub-menu-item">Seni Budaya</a></li>
                                <li><a href="award.html" class="sub-menu-item">Penghargaan</a></li>
                                <li><a href="demographic.html" class="sub-menu-item">Demografi</a></li>
                                <li><a href="education.html" class="sub-menu-item">Pendidikan</a></li>
                                <li><a href="geography.html" class="sub-menu-item">Geografi</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pemerintahan</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <ul>
                                <li><a href="#" class="sub-menu-item">Visi & Misi Kota</a></li>
                                <li><a href="#" class="sub-menu-item">Pimpinan Daerah</a></li>
                                <li><a href="#" class="sub-menu-item">Perangkat Daerah</a></li>
                                <li><a href="#" class="sub-menu-item">Kecamatan</a></li>
                                <li><a href="#" class="sub-menu-item">Kelurahan</a></li>
                                <li><a href="#" class="sub-menu-item">Struktur Daerah</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Informasi & Layanan</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <ul>
                                <li><a href="#" class="sub-menu-item">Sekilas Depok</a></li>
                                <li><a href="#" class="sub-menu-item">Pengumuman</a></li>
                                <li><a href="#" class="sub-menu-item">Infografis</a></li>
                                <li><a href="http://cctv.depok.go.id:8083" class="sub-menu-item" target="_blank">CCTV</a></li>
                                <li><a href="https://jdih.depok.go.id/" class="sub-menu-item" target="_blank">Produk Hukum</a></li>
                                <li><a href="#" class="sub-menu-item">Layanan</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">PPID</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <ul>
                                <li><a href="https://ppid.depok.go.id/#1532597359183-e12432b3-c0a9" class="sub-menu-item" target="_blank">Info Berkala</a></li>
                                <li><a href="https://ppid.depok.go.id/#1532600380234-c404d293-d71b" class="sub-menu-item" target="_blank">Info Serta Merta</a></li>
                                <li><a href="https://ppid.depok.go.id/#1532597359184-8b1240f6-e28d" class="sub-menu-item" target="_blank">Info Setiap Saat</a></li>
                                <li><a href="https://ppid.depok.go.id/#1533280407042-36820403-4c28" class="sub-menu-item" target="_blank">Daftar Informasi Publik</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END::Navbar -->
