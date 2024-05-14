<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Laporan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><b>Sistem Laporan RM</b></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Welcome/logout') ?>">Log Out <i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SILAP</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li <?=$this->uri->segment(2) == 'Dashboard' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?>>
            <a href="<?php echo base_url().'laporan/Dashboard/index/' ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"> Dashboard</i>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">10</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li <?=$this->uri->segment(3) == 'kunjungann' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?>>
                <a href="<?php echo base_url().'laporan/Laporan/kunjungan/' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Kunjungan</p>
                </a>
              </li>
              <li <?=$this->uri->segment(3) == 'radiologi' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?>>
                <a href="<?php echo base_url().'laporan/Laporan/radiologi/' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Radiologi</p>
                </a>
              </li>
              <li <?=$this->uri->segment(3) == 'laboratorium' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?>>
                <a href="<?php echo base_url().'laporan/Laporan/laboratorium/' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Laboratorium</p>
                </a>
              </li>
              <li <?=$this->uri->segment(3) == 'kasir' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?>>
                <a href="<?php echo base_url().'laporan/Laporan/kasir/' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Kasir</p>
                </a>
              </li>
              <li <?=$this->uri->segment(3) == 'payment' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?>>
                <a href="<?php echo base_url().'laporan/Laporan/payment/' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Payment</p>
                </a>
              </li>
              <li <?=$this->uri->segment(3) == 'farmasi' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?>>
                <a href="<?php echo base_url().'laporan/Laporan/farmasi/' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Farmasi</p>
                </a>
              </li>
              <li <?=$this->uri->segment(3) == 'gudang' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?>>
                <a href="<?php echo base_url().'laporan/Laporan/gudang/' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Gudang</p>
                </a>
              </li>
              <li <?=$this->uri->segment(3) == 'penyakit' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?>>
                <a href="<?php echo base_url().'laporan/Laporan/penyakit/' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Penyakit</p>
                </a>
              </li>
              <li <?=$this->uri->segment(3) == 'icd10' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?>>
                <a href="<?php echo base_url().'laporan/Laporan/icd10/' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. ICD10</p>
                </a>
              </li>
              <li <?=$this->uri->segment(3) == 'kunjungan' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?>>
                <a href="<?php echo base_url().'laporan/Laporan/kunjungan/' ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Rekap Kunjungan</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
    </div>
  </aside>


