<!DOCTYPE html>

<html lang="en">

<?php $level = $this->session->userdata('level'); ?>

<head>



  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Aplikasi Pengarsipan - Tables</title>



  <!-- Custom fonts for this template -->

  <link href="<?php echo base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



  <!-- Custom styles for this template -->

  <link href="<?php echo base_url('assets/') ?>css/sb-admin-2.css" rel="stylesheet">

  <link href="<?php echo base_url('assets/') ?>css/style.css" rel="stylesheet">



  <!-- Custom styles for this page -->

  <link href="<?php echo base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">



  <style type="text/css">

  table {

      counter-reset: 1;

  }



  table tr {

      counter-increment: rowNumber;

  }



  table tr td:first-child::before {

      content: counter(rowNumber);

      min-width: 1em;

      margin-right: 0.5em;

  }

  </style>

  

</head>

<?php $notif = $this->data->getNotif($level); ?>

<body id="page-top">



  <!-- Page Wrapper -->

  <div id="wrapper">



    <!-- Sidebar -->

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



      <!-- Sidebar - Brand -->

      <img src="http://www.dahana.id/themes/dahana/images/dahana-logo.jpg">



      <!-- Divider 

      <hr class="sidebar-divider my-0">

      <li class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

          <i class="fas fa-fw fa-cog"></i>

          <span>Components</span>

        </a>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">

            <h6 class="collapse-header">Custom Components:</h6>

            <a class="collapse-item" href="buttons.html">Buttons</a>

            <a class="collapse-item" href="cards.html">Cards</a>

          </div>

        </div>

      </li>-->



      <li class="nav-item <?php if($this->uri->segment(1)=='dokumen' && $this->uri->segment(2) !='pengarsipan' && $this->uri->segment(2) !='mass-move'){echo 'active';} ?>">

        <a class="nav-link" href="<?php echo base_url('dokumen') ?>">

          <i class="fas fa-fw fa-table"></i>

          <span>Tabel Dokumen</span></a>

      </li>
      <li class="nav-item <?php if($this->uri->segment(2)=='pengarsipan'){echo 'active';} ?>">
  <a class="nav-link" href="<?php echo base_url('dokumen/pengarsipan') ?>">
    <i class="fas fa-fw fa-table"></i>
    <span>Pengarsipan Dokumen</span></a>
</li>
      

      

      <?php if($level == 2){ include 'adminSide.php';}  date_default_timezone_set("Asia/Bangkok"); ?>

      <?php if($level == 1 || $level == 2){ include 'arsipan.php';} ?>



      <!-- Divider -->

      <hr class="sidebar-divider d-none d-md-block">



      <!-- Sidebar Toggler (Sidebar) -->

      <div class="text-center d-none d-md-inline">

        <button class="rounded-circle border-0" id="sidebarToggle"></button>

      </div>



    </ul>



    <div id="content-wrapper" class="d-flex flex-column">



      <!-- Main Content -->

      <div id="content">



        <!-- Topbar -->

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">

            <i class="fa fa-bars"></i>

          </button>

          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Alerts -->

            <li class="nav-item dropdown no-arrow mx-1">

              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <i class="fas fa-bell fa-fw"></i>

                <!-- Counter - Alerts -->

                <?php if ($this->data->getNotifRow($level)>0) {

                  echo ' <span class="badge badge-danger badge-counter">'.$this->data->getNotifRow($level).' </span>';

                } ?>

               

              </a>

              <!-- Dropdown - Alerts -->

              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">

                <h6 class="dropdown-header">

                  Pemberitahuan

                </h6>

                <?php

                if ($notif->num_rows() == 0) {

                   echo '<div class="empty-notif" >

                   <span class="fas fa-ban"></span> 

                   <p>Pemberitahuan Kosong</p>                 

                 </div>';

                 }

                foreach($notif->result_array() as $n){ 

                  if ($n['tgl_admin_out']) {

                    $status = 'Proses di Pajak';

                  }

                  if ($n['tgl_pajak_out']) {

                    $status = 'Proses di Akuntansi';

                  }

                  if ($n['tgl_akt_out']) {

                    $status = 'Proses di Keuangan';

                  }

                  if ($n['tgl_bayar']) {

                    $status = 'Selesai Bayar';

                  }

                  if ($n['tgl_pengarsipan']) {

                    $status = $n['bantex'];

                  }

                  if ($n['tgl_akt_out'] == '' && $n['pengembalian'] != '0' ) {

                    $status = 'Hold';

                  }

                  ?>

                <div id="notif-list">

                  <a kh-value="<?php echo $n['notif_doc'] ?>" class="dropdown-item d-flex align-items-center rmv <?php if($n['notif_status'] == '0'){echo 'notif-aktif';} ?> <?php echo $n['notif_status'] ?>" href="<?php echo base_url('dokumen/edit/'.$n['dok_id']) ?>">

                    <div class="mr-3">

                      <div class="icon-circle bg-primary">

                        <i class="fas fa-file-alt text-white"></i>

                      </div>

                    </div>

                    <div>

                      <div class="small text-gray-500"><?php echo date("d/m/Y H:i", $n["notif_timestamp"]) ?></div>

                      <span class="font-weight-bold"><?php echo $n['perihal'] ?></span>

                      <div class="small text-gray-700">Status : <?php echo $status ?></div>

                    </div>

                  </a>

                </div>

                <?php } ?>

                <?php 

                   if ($notif->num_rows() > 0) {

                    echo '<button id="clearAll" class="dropdown-item text-center small text-gray-700" >Hapus yang dibaca</button>';

                  }

                ?>

                

              </div>

            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item dropdown no-arrow">

              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama_lengkap') ?></span>

                <span class="fas fa-user"></span>

              </a>

              <!-- Dropdown - User Information -->

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="<?php echo base_url('user/setting') ?>">

                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings

                </a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">

                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                  Logout

                </a>

              </div>

            </li>



          </ul>



        </nav>

        