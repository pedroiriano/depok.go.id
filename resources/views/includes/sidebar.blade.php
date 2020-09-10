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
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ Request::is('pendaftaran-pdam') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pendaftaran.pdam') }}">
            <i class="fas fa-tint"></i>
            <span>Pendaftaran PDAM</span></a>
    </li>
    @endauth
    @if(Auth::user()->email == 'admin@depok.go.id')
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
                <a class="collapse-item" href="{{ route('admin.content', 'sejarah') }}">Sejarah</a>
                <a class="collapse-item" href="{{ route('admin.content', 'lambang-identitas') }}">Lambang Identitas</a>
                <a class="collapse-item" href="{{ route('admin.content', 'ikon-kota') }}">Ikon Kota</a>
                <a class="collapse-item" href="{{ route('admin.content', 'sebi-budaya') }}">Seni Budaya</a>
                <a class="collapse-item" href="{{ route('admin.content', 'sosial-ekonomi') }}">Sosial Ekonomi</a>
                <a class="collapse-item" href="{{ route('admin.content', 'demografi') }}">Demografi</a>
                <a class="collapse-item" href="{{ route('admin.content', 'geografi') }}">Geografi</a>
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
                <a class="collapse-item" href="{{ route('admin.content', 'visi-misi') }}">Visi & Misi</a>
                <a class="collapse-item" href="{{ route('admin.content', 'struktur-daerah') }}">Struktur Daerah</a>
                <a class="collapse-item" href="{{ route('admin.content', 'perundang-undangan') }}">Perundangan-Undangan</a>
                <a class="collapse-item" href="{{ route('admin.content', 'penghargaan') }}">Penghargaan</a>
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
                <a class="collapse-item" href="{{ route('admin.content', 'dinas') }}">Dinas</a>
                <a class="collapse-item" href="{{ route('admin.content', 'sekretariat-daerah') }}">Sekretariat Daerah</a>
                <a class="collapse-item" href="{{ route('admin.content', 'kecamatan') }}">Kecamatan</a>
                <a class="collapse-item" href="{{ route('admin.content', 'kelurahan') }}">Kelurahan</a>
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
