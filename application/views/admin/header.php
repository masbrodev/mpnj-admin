
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WELCOME ADMINISTRATOR</title>
    <meta name="author" content="nuruljadid.net">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/admin/plugins/datatables/dataTables.bootstrap.css">
    <link href="<?=base_url('asset/sweetalert/sweetalert.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/dist/css/style.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/datepicker/datepicker3.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <style type="text/css"> .files{ position:absolute; z-index:2; top:0; left:0; filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; opacity:0; background-color:transparent; color:transparent; } </style>
    <script type="text/javascript" src="<?php echo base_url(); ?>/asset/admin/plugins/jQuery/jquery-1.12.3.min.js"></script>
    <script src="<?php echo base_url(''); ?>asset/ckeditor/ckeditor.js"></script>
    <style type="text/css">#example thead tr, #table1 thead tr, #example1 thead tr, #example2 thead tr{ background-color: #e3e3e3; } .checkbox-scroll { border:1px solid #ccc; width:100%; height: 114px; padding-left:8px; overflow-y: scroll; }</style>
    
  </head>
  <?php echo $this->session->flashdata('berhasil') ? $this->session->flashdata('berhasil') : '' ?>
  <body class="hold-transition skin-red-light sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <style type="text/css">
          .sekolah{
            float: left;
            background-color: transparent;
            background-image: none;
            padding: 15px 15px;
            font-family: fontAwesome;
            color:#fff;
          }
          .sekolah:hover{
            color:#fff;
          }
          </style>
                <!-- Logo -->
                <a href="index.php" class="logo" style="background: #333;">
                  <!-- mini logo for sidebar mini 50x50 pixels -->
                  <span class="logo-mini"></span>
                  <!-- logo for regular state and mobile devices -->
                  <span class="logo-lg"><b>ADM</b> MarketPlace</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation" style="background: #444;">
                  <!-- Sidebar toggle button -->
                  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                  </a>
                  <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                    
                      <li>
                        <a target='_BLANK' href="<?php echo base_url(); ?>">To Front-end &nbsp;<i class="glyphicon glyphicon-new-window"></i></a>
                      </li>

                    </ul>
                  </div>
                </nav>
      </header>

      <aside class="main-sidebar">
          <section class="sidebar">
                  <!-- Sidebar user panel -->
            <div class="user-panel">
            <div class="pull-left image">

              <img src="<?=base_url('asset/images/market.png')?>" class="img-responsive">
            </div>
            <div class="pull-left info">
                <p>Muhammad Fadil Hasan</p>
                
                <a href="#"><i class="fa fa-circle" style="color: greenyellow"></i> Online</a>
            </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
            <li class="header" style='text-transform:uppercase;'>MENU </li>
            <li><a href="<?php echo base_url('admin')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            
            <li><a href="<?php echo base_url('admin/users')?>"><i class="fa fa-users"></i> <span>Users</span></a></li>
            <li><a href="<?php echo base_url('admin/pelapak')?>"> <i class="fa fa-home" aria-hidden="true"></i> <span>Pelapak</span></a></li>

            

            
            
            <!-- <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_manajemenuser/<?php echo $this->session->username; ?>"><i class="fa fa-edit"></i> <span>Edit Profile</span></a></li> -->
            <li><a href="<?php echo base_url('login/logout')?>"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
            </ul>
        </section>
      </aside>

      <div class="content-wrapper">

      
        <div class='alert alert-success alert-dismissible fade in' role='alert' style='border-radius:0px; margin-bottom:0px'>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="#" style="margin-right:10px; text-decoration:none;">Haloo Selamat datang di halaman administrator, level anda sebagai Admin</a>
          <a target='_BLANK' class="btn btn-default btn-sm" href="https://github.com/dev-fadil" style="color: #00A65A">Def-Fadil</a>
        </div>
      

        <section class="content-header">
          <h1> Dashboard <small>Control panel </small> </h1>
        </section>

        <section class="content">