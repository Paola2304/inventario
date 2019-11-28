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
<?php
if($this->session->userdata('logueado')==false){
  redirect('login_controller');  
} 
?>