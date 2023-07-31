<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/Home">
        <div class="sidebar-brand-text mx-3">Hits Unikom RADIO</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('Home') ? 'active':'' }}">
        <a class="nav-link" aria-current="page" href="{{ url('/Home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Data
    </div>

    <li class="nav-item {{ Request::is('datalagu') ? 'active':'' }}">
        <a class="nav-link" aria-current="page" href="{{ route('datalagu') }}">
            <i class="fas fa-fw fa-music"></i>
            <span>Lagu</span></a>
    </li>

    <li class="nav-item {{ Request::is('dataalbum') ? 'active':'' }}">
        <a class="nav-link" aria-current="page" href="{{ route('dataalbum') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Album</span></a>
    </li>

    <li class="nav-item {{ Request::is('dataplaylist') ? 'active':'' }}">
        <a class="nav-link" aria-current="page" href="{{ route('dataplaylist') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Playlist</span></a>
    </li>

    <li class="nav-item {{ Request::is('event') ? 'active':'' }}">
        <a class="nav-link" aria-current="page" href="{{ url('event') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Event</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Lain
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ Request::is('laporan') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('laporan') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Laporan</span></a>
    </li>

    <li class="nav-item {{ Request::is('log') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('log') }}">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Log OnAir</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    

</ul>
<!-- End of Sidebar -->
