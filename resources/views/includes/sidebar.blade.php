<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text" style="text-transform: none;">Depok.go.id</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin/home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Nav Item - Agenda -->
    @can('mengelola agenda')
    <li class="nav-item {{ Request::is('admin/agenda*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('agenda.index') }}">
            <i class="fas fa-calendar-alt"></i>
            <span>Agenda</span>
        </a>
    </li>
    @endcan
    <!-- Nav Item - Layanan DSW -->
    @can('mengelola dsw')
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDSW" aria-expanded="true" aria-controls="collapseDSW">
            <i class="fas fa-hashtag"></i>
            <span>DSW</span>
        </a>
        <div id="collapseDSW" class="collapse {{ Request::is('admin/service*', 'admin/kategori-dsw*') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Depok Single Window:</h6>
                <a class="collapse-item {{ Request::is('admin/service*') ? 'active' : '' }}" href="{{ route('service.index') }}">Layanan</a>
                <a class="collapse-item {{ Request::is('admin/kategori-dsw*') ? 'active' : '' }}" href="{{ route('kategori-dsw.index') }}">Kategori</a>
            </div>
        </div>
    </li>
    @endcan
    <!-- Nav Item - Pengumuman -->
    @can('mengelola pengumuman')
    <li class="nav-item {{ Request::is('admin/slider*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('slider.index') }}">
            <i class="fas fa-images"></i>
            <span>Pengumuman</span>
        </a>
    </li>
    @endcan
    <!-- Nav Item - Infografis -->
    @can('mengelola infografis')
    <li class="nav-item {{ Request::is('admin/infografis*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('infografis.index') }}">
            <i class="fas fa-image"></i>
            <span>Infografis</span>
        </a>
    </li>
    @endcan
    <!-- Nav Item - User -->
    @role('administrator')
    <li class="nav-item {{ Request::is('admin/user*', 'admin/admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-user"></i>
            <span>User</span>
        </a>
    </li>
    @endrole
    <!-- Divider -->
    @can('mengelola konten')
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        HALAMAN
    </div>

    <!-- Nav Item - Pages Sekilas Depok -->
    <li class="nav-item {{ Request::is('admin/pimpinan*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pimpinan.index') }}">
            <i class="fas fa-user"></i>
            <span>Pimpinan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSekilasDepok"
            aria-expanded="true" aria-controls="collapseSekilasDepok">
            <i class="fas fa-hashtag"></i>
            <span>Sekilas Depok</span>
        </a>
        <div id="collapseSekilasDepok" class="collapse {{ Request::is('admin/content/sejarah', 'admin/content/lambang-identitas', 'admin/content/ikon-kota', 'admin/content/seni-budaya', 'admin/content/geografi') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Sekilas Depok:</h6>
                <a class="collapse-item {{ Request::is('admin/content/sejarah') ? 'active' : '' }}" href="{{ route('admin.content', 'sejarah') }}">Sejarah</a>
                <a class="collapse-item {{ Request::is('admin/content/lambang-identitas') ? 'active' : '' }}" href="{{ route('admin.content', 'lambang-identitas') }}">Lambang Identitas</a>
                <a class="collapse-item {{ Request::is('admin/content/ikon-kota') ? 'active' : '' }}" href="{{ route('admin.content', 'ikon-kota') }}">Ikon Kota</a>
                <a class="collapse-item {{ Request::is('admin/content/seni-budaya') ? 'active' : '' }}" href="{{ route('admin.content', 'seni-budaya') }}">Seni Budaya</a>
                <a class="collapse-item {{ Request::is('admin/content/geografi') ? 'active' : '' }}" href="{{ route('admin.content', 'geografi') }}">Geografi</a>
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
        <div id="collapsePemerintah" class="collapse {{ Request::is('admin/content/visi-misi', 'admin/content/struktur-daerah', 'admin/content/perundang-undangan', 'admin/content/penghargaan') ? 'show' : '' }}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pemerintahan:</h6>
                <a class="collapse-item {{ Request::is('admin/content/visi-misi') ? 'active' : '' }}" href="{{ route('admin.content', 'visi-misi') }}">Visi & Misi</a>
                <a class="collapse-item {{ Request::is('admin/content/struktur-daerah') ? 'active' : '' }}" href="{{ route('admin.content', 'struktur-daerah') }}">Struktur Daerah</a>
                <a class="collapse-item {{ Request::is('admin/content/perundang-undangan') ? 'active' : '' }}" href="{{ route('admin.content', 'perundang-undangan') }}">Perundangan-Undangan</a>
                <a class="collapse-item {{ Request::is('admin/content/penghargaan') ? 'active' : '' }}" href="{{ route('admin.content', 'penghargaan') }}">Penghargaan</a>
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
        <div id="collapsePerangkatDaerah" class="collapse {{ Request::is('admin/content/dinas', 'admin/content/sekretariat-daerah', 'admin/content/kecamatan', 'admin/content/kelurahan') ? 'show' : '' }}" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Perangkat Daerah:</h6>
                <a class="collapse-item {{ Request::is('admin/content/dinas') ? 'active' : '' }}" href="{{ route('admin.content', 'dinas') }}">Dinas</a>
                <a class="collapse-item {{ Request::is('admin/content/sekretariat-daerah') ? 'active' : '' }}" href="{{ route('admin.content', 'sekretariat-daerah') }}">Sekretariat Daerah</a>
                <a class="collapse-item {{ Request::is('admin/content/kecamatan') ? 'active' : '' }}" href="{{ route('admin.content', 'kecamatan') }}">Kecamatan</a>
                <a class="collapse-item {{ Request::is('admin/content/kelurahan') ? 'active' : '' }}" href="{{ route('admin.content', 'kelurahan') }}">Kelurahan</a>
            </div>
        </div>
    </li>
    {{-- @endif --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    @endcan
</ul>
<!-- End of Sidebar -->
