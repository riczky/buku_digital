
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Buku Digital</title>
   <!-- Icon -->
  <link rel="icon" href="<?=base_url()?>assets/dist/img/book.png"  class="img-circle" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="background-image: linear-gradient(grey, black);">
<div class="login-box">
  <div class="login-logo">
    <img src="<?=base_url()?>assets/dist/img/book.png" width="25%">
    <a href="#"><u style="font-style: italic; color: white;font-weight: bold;">Buku</u><b style="color: white;font-family: sans-serif;">Digital</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="background-color: grey" >
    
    <p style="color: white" class="login-box-msg">Sign in to start your session</p>
    <form action="<?=site_url('auth/process')?>" method="post">
        <div class="form-group has-feedback">
          <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <!-- <div class="col-xs-8"></div> -->
            <div class="col-xs-12">
              <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
             </div>    
            </div>
          </form>
        </div>
      </div>
    
<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->

</body>
</html>