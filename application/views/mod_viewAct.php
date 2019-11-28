<script src="<?php echo base_url('props/validaciones/vm.js') ?>"></script>
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
              <h1>Editar Modelo</h1>
              <br>
              <?php foreach($mod as $v){ ?>
                <form action="<?php echo base_url().'mod_controller/actualizar' ?>" method="POST" class="form-horizontal" onsubmit=" return vim()">
                  <div class="row my-3">
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text" >Marca</label>
                        <select name="marca" id="marca" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                          <option value="">Seleccione marca</option>
                          <?php foreach ($marca as $m) { ?>
                            <option value="<?= $m->id_marca ?>"<?php if ($m->id_marca==$v->id_marca) {echo "Selected";
                          } ?>><?= $m->marca ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col">
                    <div class="input-group">
                      <label class="input-group-text">Modelo</label>
                      <input type="hidden" name="id" value="<?= $v->id_modelo ?>">
                      <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="modelo" id="modelo" value="<?= $v->modelo ?>" placeholder="Ingrese modelo">
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
      <?php $this->load->view('utils/alertsModelo') ?>
      <!-- /.container-fluid -->
    </div>

