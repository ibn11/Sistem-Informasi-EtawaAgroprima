<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-user-cog"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Admin <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Produk</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Produk:</h6>
                        <a class="collapse-item" href="/produk/tambah">Tambah Produk</a>
                        <a class="collapse-item" href="/produk">Data Produk</a>
                        <a class="collapse-item" href="/kategori">Kategori Produk</a>
                    </div>
                </div>
            </li>
            
            <!-- profil -->
            <li class="nav-item">
                <a class="nav-link" href="/dataprofil">
                    <i class="fas fa-user"></i>
                    <span>Data Profil</span></a>
            </li>
            <!-- end profil -->

             <!-- kontak -->
             <li class="nav-item">
                <a class="nav-link" href="/datakontak">
                    <i class="fas fa-address-book"></i>
                    <span>Data Kontak</span></a>
            </li>
            <!-- end kontak -->

            <!-- cabang -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-globe-asia"></i>
                    <span>Cabang</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Cabang:</h6>
                        <a class="collapse-item" href="/tambah/cabang">Tambah Cabang</a>
                        <a class="collapse-item" href="/cabang">Data Cabang</a>
                    </div>
                </div>
            </li>
             <!-- end cabang -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>