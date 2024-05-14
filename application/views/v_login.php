<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADMIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="<?php echo base_url('assets/images/logobalkesmas.png') ?>" alt="" class="brand-image w-75">
    </div>
    <div class="card">
      <div class="card-body login-card-body">

        <form class="pt-3" method="POST" action="<?php echo base_url('Welcome') ?>">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Ingat saya
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">log In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


        <p class="mb-1">
          <a href="https://wa.me/628967037235?text=Hallo%20admin%20sistem%20POQ,%20saya%20lupa%20password"
            target="_blank" class="auth-link text-black">Lupa password?</a>
        </p>
        <!--<p class="mb-0">
        <a href="#" class="text-center">Register</a>
      </p>-->

      </div>
    </div>
  </div>
  <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>

</body>

</html>