
<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#"><?php echo $this->session->userdata("user_nama") ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">

      </li>
      <li class="nav-item dropdown no-arrow mx-1">

      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?php echo site_url('user/') ?>">User</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/dashboard/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <?php foreach ($nip as $row): ?>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/pegawai/info/'.$row->nip) ?>">
          <i class="far fa-address-book"></i>
          <span>Identitas Pegawai</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/pegawai/up/'.$row->nip) ?>">
          <i class="far fa-address-book"></i>
          <span>Update Data Pegawai</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-address-book"></i>
          <span>Riwayat OrangTua</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url('index.php/riwayat/view/'.$row->nip) ?>">Data Ortu</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/riwayat/add_ortu/'.$row->nip) ?>">Tambah Data Ortu</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/laporan/lap_ortu/'.$row->nip) ?>">Cetak</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-address-book"></i>
          <span>Riwayat Anak</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url('index.php/riwayat/view_anak/'.$row->nip) ?>">Data Anak</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/riwayat/add_anak/'.$row->nip) ?>">Tambah Data Anak</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/laporan/lap_anak/'.$row->nip) ?>">Cetak</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-address-book"></i>
          <span>Riwayat Suami/Istri</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url('index.php/riwayat/view_suami_istri/'.$row->nip) ?>">Data Suami/Istri</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/riwayat/add_suami_istri/'.$row->nip) ?>">Tambah Suami/Istri</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/laporan/lap_pas/'.$row->nip) ?>">Cetak</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-address-book"></i>
          <span>Riwayat Pendidikan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo base_url('index.php/riwayat/view_pendidikan/'.$row->nip) ?>">Data Pendidikan</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/riwayat/add_pendidikan/'.$row->nip) ?>">Tambah Pendidikan</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/laporan/lap_pend/'.$row->nip) ?>">Cetak</a>
        </div>
      </li>

      <?php endforeach; ?>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
