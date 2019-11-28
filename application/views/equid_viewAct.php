<script src="<?php echo base_url('props/validaciones/vin.js') ?>"></script>

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
              <h1>Editar Equipo Dañado</h1>
              <br>
              <?php foreach($equid as $v){ ?>
                <form action="<?php echo base_url().'equid_controller/actualizar' ?>" method="POST" class="form-horizontal" onsubmit=" return vequi()">
                  <input type="hidden" name="id" value="<?=$v->id_danado ?>">
                  <div class="row my-3">
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text" >Código</label>
                        <select name="codigo" id="codigo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                          <option value="">Seleccione codigo</option>
                          <?php foreach ($codigo as $c) { ?>
                            <option value="<?= $c->id_inmobiliario ?>" <?php if($c->id_inmobiliario==$v->id_inmobiliario){ echo "selected"; } ?>><?= $c->codigo ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text" >Estado</label>
                        <select name="estado" id="estado" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                          <option value="">Seleccione estado</option>
                          <?php foreach ($estado as $e) { ?>
                            <option value="<?= $e->id_estado ?>"<?php if ($e->id_estado==$v->id_estado) {echo "selected";
                          } ?>><?= $e->estado ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row my-3">
                  <div class="col">
                    <div class="input-group">
                      <label class="input-group-text">Fecha de ingreso</label>
                      <input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fecha" id="fecha" value="<?=$v->fecha_ingreso ?>" placeholder="Ingrese Fecha de ingreso" readonly>
                    </div>
                  </div>
                  <div class="col">
                    <div class="input-group">
                      <label class="input-group-text">Descripción</label>
                      <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="descripcion" id="descripcion" value="<?= $v->descripcion ?>" placeholder="Ingrese descripción">
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
    <?php $this->load->view('utils/alertsInm') ?>
    <!-- /.container-fluid -->
  </div>

