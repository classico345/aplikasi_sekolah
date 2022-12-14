<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url();?>assets/admin_lte/dist/img/classico.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">classico</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url();?>assets/admin_lte/dist/img/Gilang.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Gilang Saputra</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="<?= base_url();?>Dashboard/view_admin" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url();?>Data_Siswa/view_admin" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Data siswa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url();?>Data_Pengumuman/view_admin" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Data Pengumuman
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Data Siswa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url();?>Data_Siswa/view_admin_terverifikasi" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Terverifikasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url();?>Data_Siswa/view_admin_lulus_berkas" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lulus Berkas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url();?>Data_Siswa/view_admin_lulus_seleksi" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lulus Seleksi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url();?>Setting/view_admin" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Setting Akun
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>