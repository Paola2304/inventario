<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Inventario USAM</title>

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('props/img/icono.png') ?>" />

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('props/vendor/fontawesome-free/css/all.min.css') ?>">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('props/css/sb-admin-2.min.css') ?>">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('props/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
  <script src="<?php echo base_url('props/vendor/bootstrap/js/bootstrap.min.js') ?>" ></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="<?php echo base_url('props/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('props/js/demo/jquery.mask.min.js') ?>"></script>


</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenidos al Sistema de Inventario USAM!</h1>
                  </div>
                  <form class="user" action="<?php echo base_url().'login_controller/iniciar' ?>" method="POST" autocomplete="off">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="usuario" id="usuario" placeholder="Ingrese usuario...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="clave" id="clave" placeholder="Ingrese contraseña">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recordarme</label>
                      </div>
                    </div>
                    <div class="text-center">
                      <input type="submit" value="Ingresar" class="btn btn-primary">
                    </div>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Ingresar con Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Ingresar con Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">¿Olvidó la contraseña?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Crear una cuenta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <?php if (isset($mensaje)){ echo $mensaje; } ?>
      </div>
      <?php $this->load->view('utils/alertsLogin') ?>
    </div>

  </div>