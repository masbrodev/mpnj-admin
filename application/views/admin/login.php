<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - MarketPlace Nurul Jadid</title>
    <meta name="author" content="nuruljadid.net">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/admin/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/admin/plugins/iCheck/square/blue.css">

    <link href="<?=base_url('asset/sweetalert/sweetalert.css')?>" rel="stylesheet">

    
  </head>
  <body class="hold-transition login-page">
    <?php echo $this->session->flashdata('berhasil') ? $this->session->flashdata('berhasil') : '' ?>
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>ADMIN</b> Login</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Silahkan Login Pada Form dibawah ini</p>
        <form action="<?=base_url('login/cek_login')?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name='username' placeholder="Username" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name='password' placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

     
          <div class="row justify-content-center">
           
            <div class="col-xs-12 text-center">
              <input name='submit' type="submit" class="btn btn-primary btn-block btn-flat" value='Sign In'>
            </div><!-- /.col -->
          </div>
        </form>
        

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>/asset/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>/asset/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>/asset/admin/plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="<?=base_url('asset/')?>sweetalert/sweetalert.min.js"></script>

        
  </body>
</html>
