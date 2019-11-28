<script src="<?php echo base_url('props/validaciones/validaciones.js') ?>"></script>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $this->load->view('navbar'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('navbar2'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <h1>Editar Equipo en Mantenimiento</h1>
              <br>
              <?php foreach($equipo as $e){ ?>
                <form action="<?php echo base_url().'equipo_controller/actualizar' ?>" method="POST" class="form-horizontal" onsubmit=" return validarFormulario()">
                  <input type="hidden" name="id_mant" value="<?= $e->id_mant ?>">
                  <div class="row my-3">
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text" >Usuario</label>
                        <select name="nombre" id="usuario" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                          <option value="">Seleccione usuario</option>
                          <?php foreach ($nombre as $u) { ?>
                            <option value="<?= $u->id_usuario ?>" <?php if($u->id_usuario == $e->id_usuario){echo 'Selected';} ?>><?= $u->nombre ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text" >Equipo</label>
                        <select name="categoria" id="categoria" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                          <option value="">Seleccione equipo</option>
                          <?php foreach ($inmobiliario as  $c) { ?>
                            <option value="<?= $c->id_inmobiliario ?>" <?php if($c->id_inmobiliario == $e->id_inmobiliario){echo 'selected'; } ?>><?= $c->descripcion ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row my-3">
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Fecha recibido</label>
                        <input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="f_recibido" id="f_recibido" value="<?= $e->f_recibido ?>" placeholder="Ingrese Fecha de ingreso" readonly>
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Fecha de salida</label>
                        <input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="f_salida" id="f_salida" value="<?= $e->f_salida ?>" placeholder="Ingrese Fecha de ingreso">
                      </div>
                    </div>
                  </div>
                  <div class="row my-3">
                    <div class="col-md-6">
                      <div class="input-group">
                        <label class="input-group-text" >Estado</label>
                        <select name="estado" id="estado" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                          <option value="">Seleccione estado</option>
                          <?php foreach ($estado as $es) { ?>
                            <option value="<?= $es->id_estado ?>" <?php if($es->id_estado == $e->id_estado){ echo 'selected'; } ?>><?= $es->estado ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input type="submit" value="Actualizar" class="btn btn-primary">
                      <button type="button" class="btn btn-secondary" onclick="javascript:window.history.back();" autofocus >Regresar</button>
                    </div>
                  </div>
                </form>
              <?php } ?>
            </div>
          </div>

          <?php if (isset($mensaje)){ echo $mensaje; } ?>
        </div>
        <?php $this->load->view('utils/alertsMant') ?>
        <!-- /.container-fluid -->
      </div>

