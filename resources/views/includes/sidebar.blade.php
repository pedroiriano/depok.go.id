<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text">Depok.go.id</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - PDAM -->
    @auth()
    <li class="nav-item {{ Request::is('pendaftaran-pdam') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pendaftaran.pdam') }}">
            <i class="fas fa-tint"></i>
            <span>Pendaftaran PDAM</span></a>
    </li>
    @endauth
    @if(Auth::user()->email == 'admin@depok.go.id')
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Nav Item - Agenda -->
    <li class="nav-item {{ Request::is('admin-agenda') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin-agenda.index') }}">
            <i class="fas fa-calendar-alt"></i>
            <span>Agenda</span></a>
    </li>
    <!-- Nav Item - Layanan DSW -->
    <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('admin-layanan-dsw') ? 'active' : '' }}" href="#" data-toggle="collapse" data-target="#collapseDSW"
            aria-expanded="true" aria-controls="collapseDSW">
            <i class="fas fa-hashtag"></i>
            <span>DSW</span>
        </a>
        <div id="collapseDSW" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Depok Single Window:</h6>
                <a class="collapse-item {{ Request::is('admin-layanan-dsw') ? 'active' : '' }}" href="{{ route('admin.layanan') }}">Layanan</a>
                <a class="collapse-item {{ Request::is('admin-kategori-dsw') ? 'active' : '' }}" href="{{ route('admin-kategori-dsw.index') }}">Kategori</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pengumuman -->
    <li class="nav-item {{ Request::is('slider') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('slider.index') }}">
            <i class="fas fa-images"></i>
            <span>Pengumuman</span></a>
    </li>
    <!-- Nav Item - Infografis -->
    <li class="nav-item {{ Request::is('admin-infografis') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin-infografis.index') }}">
            <i class="fas fa-image"></i>
            <span>Infografis</span></a>
    </li>

    <!-- Nav Item - User -->
    <li class="nav-item {{ Request::is('user') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.user') }}">
            <i class="fas fa-user"></i>
            <span>User</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        HALAMAN
    </div>

    <!-- Nav Item - Pages Sekilas Depok -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSekilasDepok"
            aria-expanded="true" aria-controls="collapseSekilasDepok">
            <i class="fas fa-hashtag"></i>
            <span>Sekilas Depok</span>
        </a>
        <div id="collapseSekilasDepok" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Sekilas Depok:</h6>
                <a class="collapse-item" href="{{ route('admin.sejarah') }}">Sejarah</a>
                <a class="collapse-item" href="#">Lambang Identitas</a>
                <a class="collapse-item" href="{{ route('admin.ikon') }}">Ikon Kota</a>
                <a class="collapse-item" href="#">Seni Budaya</a>
                <a class="collapse-item" href="#">Sosial Ekonomi</a>
                <a class="collapse-item" href="#">Demografi</a>
                <a class="collapse-item" href="#">Geografi</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pemerintahan Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePemerintah"
            aria-expanded="true" aria-controls="collapsePemerintah">
            <i class="fas fa-hashtag"></i>
            <span>Pemerintahan</span>
        </a>
        <div id="collapsePemerintah" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pemerintahan:</h6>
                <a class="collapse-item" href="#">Visi & Misi</a>
                <a class="collapse-item" href="#">Pimpinan Daerah</a>
                <a class="collapse-item" href="#">Struktur Daerah</a>
                <a class="collapse-item" href="#">Perundangan-Undangan</a>
                <a class="collapse-item" href="#">Penghargaan</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Perangkat Daerah Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePerangkatDaerah"
            aria-expanded="true" aria-controls="collapsePerangkatDaerah">
            <i class="fas fa-hashtag"></i>
            <span>Perangkat Daerah</span>
        </a>
        <div id="collapsePerangkatDaerah" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Perangkat Daerah:</h6>
                <a class="collapse-item" href="#">Dinas</a>
                <a class="collapse-item" href="#">Sekretariat Daerah</a>
                <a class="collapse-item" href="#">Kecamatan</a>
                <a class="collapse-item" href="#">Kelurahan</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Info Publik Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInfoPublik"
            aria-expanded="true" aria-controls="collapseInfoPublik">
            <i class="fas fa-hashtag"></i>
            <span>Info Publik</span>
        </a>
        <div id="collapseInfoPublik" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Info Publik:</h6>
                <a class="collapse-item" href="#">Info Berkala</a>
                <a class="collapse-item" href="#">Info Serta Merta</a>
                <a class="collapse-item" href="#">Info Setiap Saat</a>
                <a class="collapse-item" href="#">Daftar Info Publik</a>
            </div>
        </div>
    </li>
    @endif
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
