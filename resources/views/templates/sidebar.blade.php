<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-squint"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Cafe <sup>SE2</sup></div>
    </a>
    @auth
    @if(Auth::user()->roles == 'kasir')
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Pemesanan & Transaksi
    </div>
    <!-- Nav Item - Transaksi -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('mulai-transaksi') }}">
            <i class="fas fa-fw fa-credit-card"></i>
            <span><b>Transaksi</b></span></a>
    </li>
    <!-- Nav Item - Riwayat transaksi -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('transaksi') }}">
            <i class="fas fa-fw fa-clipboard-check"></i>
            <span><b>Riwayat transaksi</b></span></a>
    </li>
    @elseif(Auth::user()->roles == 'admin')
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span><b>Dashboard</b></span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Pemesanan & Transaksi
    </div>
    <!-- Nav Item - Transaksi -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('mulai-transaksi') }}">
            <i class="fas fa-fw fa-credit-card"></i>
            <span><b>Transaksi</b></span></a>
    </li>
    <!-- Nav Item - Laporan transaksi -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('laporanTransaksi') }}">
            <i class="fas fa-fw fa-book"></i>
            <span><b>Laporan transaksi</b></span></a>
    </li>
    <!-- Nav Item - Riwayat transaksi -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('transaksi') }}">
            <i class="fas fa-fw fa-clipboard-check"></i>
            <span><b>Riwayat transaksi</b></span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Stok
    </div>
    <!-- Nav Item - Stok -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('stok') }}">
            <i class="fas fa-fw fa-box-open"></i>
            <span><b>Stok</b></span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Kelola Data
    </div>
    <!-- Nav Item - Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('menu') }}">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span><b>Menu</b></span></a>
    </li>
    <!-- Nav Item - Jenis -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('jenis') }}">
            <i class="fas fa-fw fa-tag"></i>
            <span><b>Jenis</b></span></a>
    </li>
    <!-- Nav Item - Pelanggan -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('pelanggan') }}">
            <i class="fas fa-fw fa-users"></i>
            <span><b>Pelanggan</b></span></a>
    </li>
    <!-- Nav Item - User -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('user') }}">
            <i class="fas fa-fw fa-user-tie"></i>
            <span><b>User</b></span></a>
    </li>

    @endif
    @endauth
    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->
    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Unsused
    </div> -->
    <!-- Nav Item - Absensi -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="{{ url('absensi') }}">
            <i class="fas fa-fw fa-clock"></i>
            <span><b>Absensi</b></span></a>
    </li> -->

    <!-- Nav Item - Titipan -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="{{ url('titipan') }}">
            <i class="fas fa-fw fa-box"></i>
            <span><b>Produk Titipan</b></span></a>
    </li> -->
    <!-- Nav Item - Labels Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-tag"></i>
            <span><b>Labels</b></span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('jenis') }}">Jenis</a>
                <a class="collapse-item" href="{{ url('kategori') }}">Kategori</a>
            </div>
        </div>
    </li> -->
    <!-- Nav Item - Meja -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="{{ url('meja') }}">
            <i class="fas fa-fw fa-utensils"></i>
            <span><b>Meja</b></span></a>
    </li> -->
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!--    Heading -->
    <div class="sidebar-heading">
        Cafe SE2
    </div>
    <!-- Nav Item - About -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('about') }}">
            <i class="fas fa-fw fa-info"></i>
            <span><b>Tentang aplikasi</b></span></a>
    </li>
    <!-- Nav Item - Contact us -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('contact') }}">
            <i class="fas fa-fw fa-phone"></i>
            <span><b>Contact us</b></span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>