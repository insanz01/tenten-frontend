<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Sekolah/App'); ?>">
        <img style="width: 40px; height:40px>" src="<?=base_url() ?>gambar/loteng.png">
        <div class="sidebar-brand-text mx-3" >Kecamatan Janapria <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <?php if($this->session->userdata('user_id')): ?>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('Sekolah/App') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Aplikasi
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Controller</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Data :</h6>
              <a class="collapse-item" href="<?= base_url('Sekolah/App/sekolah') ?>">Data Sekolah</a>
              <a class="collapse-item" href="<?= base_url('Sekolah/App/guru') ?>">Data Guru</a>
              <a class="collapse-item" href="<?= base_url('Sekolah/App/siswa') ?>">Data Siswa</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Lainnya
        </div>


        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Sekolah/App/informasi') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Informasi</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-table"></i>
            <span >Keluar</span></a>
        </li>


      <?php else: ?>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('Sekolah/App') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
        </li>

      <?php endif; ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar