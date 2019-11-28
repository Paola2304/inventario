<script src="<?php echo base_url('props/validaciones/vin.js') ?>"></script>
<?php $this->load->view("validar/codigoUnico") ?>
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
              <h1>Editar Inmobiliario</h1>
              <br>
              <?php foreach($datos as $d){ ?>
                <form action="<?php echo base_url().'inm_controller/actualizar' ?>" method="POST" class="form-horizontal" onsubmit=" return vin()">
                  <input type="hidden" name="id" value="<?= $d->id_inmobiliario ?>">
                  <div class="row my-3">
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text" >Categoria</label>
                        <select name="categoria" id="categoria" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                          <option value="">Seleccione categoria</option>
                          <?php foreach ($categoria as $c) { ?>
                            <option value="<?= $c->id_categoria ?>"<?php if ($c->id_categoria==$d->id_categoria) {echo "selected";
                          } ?>><?= $c->categoria ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col">
                    <div class="input-group">
                      <label class="input-group-text" >Modelo</label>
                      <select name="modelo" id="modelo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        <option value="">Seleccione modelo</option>
                        <?php foreach ($modelo as $m) { ?>
                          <option value="<?= $m->id_modelo ?>"<?php if ($m->id_modelo==$d->id_modelo) {echo "selected";
                        } ?>><?= $m->modelo ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row my-3">
                <div class="col">
                  <div class="input-group">
                    <label class="input-group-text">Código</label>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="codigo" id="codigo" value="<?= $d->codigo ?>" placeholder="Ingrese codigo">
                  </div>
                  <div id="infoCodigo"></div>
                </div>
                <div class="col">
                  <div class="input-group">
                    <label class="input-group-text">Fecha de ingreso</label>
                    <input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fecha" id="fecha" value="<?= $d->fecha_ingreso ?>" placeholder="Ingrese Fecha de ingreso">
                  </div>
                </div>
              </div>
              <div class="row my-3">
                <div class="col">
                  <div class="input-group">
                    <label class="input-group-text" >Estado</label>
                    <select name="estado" id="estado" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                      <option value="">Seleccione estado</option>
                      <?php foreach ($estado as $e) { ?>
                        <option value="<?= $e->id_estado ?>"<?php if ($e->id_estado==$d->id_estado ) {echo "selected";
                      } ?>><?= $e->estado ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="input-group">
                  <label class="input-group-text">Descripción</label>
                  <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="descripcion" id="descripcion" value="<?= $d->descripcion ?>" placeholder="Ingrese descripción">
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

