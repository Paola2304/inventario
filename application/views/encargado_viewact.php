<script src="<?php echo base_url('props/validaciones/encargado.js') ?>"></script>
<?php $this->load->view("validar/correoEncargado") ?>
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
              <h1>Editar Encargado</h1>
              <br>
              <?php foreach($encargado as $e){ ?>
                <form action="<?php echo base_url().'encargado_controller/actualizar' ?>" method="POST" class="form-horizontal" autocomplete="off" onsubmit=" return validarFormularioA()">
                  <div class="row">
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Nombre</label>
                        <input type="hidden" name="id" value="<?= $e->id_enc ?>">
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nombres" id="nombres" value="<?= $e->nombres ?>" placeholder="Ingrese nombre">
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Apellido</label>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="apellidos" id="apellidos" value="<?= $e->apellidos ?>" placeholder="Ingrese apellido">
                      </div>
                    </div>
                  </div>

                  <div class="row my-3">
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Correo</label>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="correo" id="correo" value="<?= $e->correo ?>" placeholder="Ingrese correo">
                      </div>
                      <div id="infoCorreo"></div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Teléfono</label>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="telefono" id="telefono" value="<?= $e->telefono ?>" placeholder="Ingrese teléfono">
                      </div>
                    </div>
                  </div>

                  <div class="row my-3">
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Dirección</label>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="direccion" id="direccion" value="<?= $e->direccion ?>" placeholder="Ingrese dirección">
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text" >Sexo</label>
                        <select name="sexo" id="sexo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                          <option value="">Seleccione sexo</option>
                          <?php foreach ($sexo as $v) { ?>
                            <option value="<?= $v->id_sexo ?>" <?php if($v->id_sexo==$e->id_sexo){echo "Selected";} ?>><?= $v->sexo ?></option>
                          <?php }  ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row my-3">
                    <div class="col-md-6">
                      <div class="input-group">
                        <label class="input-group-text" >Área</label>
                        <select name="area" id="area" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                          <option value="">Seleccione área</option>
                          <?php foreach ($area as $a) { ?>
                            <option value="<?= $a->id_area ?>" <?php if($a->id_area==$e->id_area){echo "Selected";} ?>><?= $a->area ?></option>
                          <?php }  ?>
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
        <?php $this->load->view('utils/alertsEncargado') ?>
        <!-- /.container-fluid -->
      </div>

      <script type="text/javascript">

        $(document).ready(function(){
        //FORMATO DE MASCARAS
        $('#dui').mask('00000000-0', {placeholder: '00000000-0'});
        $('#telefono').mask('0000-0000', {placeholder: '0000-0000'});
      });
    </script>


