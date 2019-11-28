<script src="<?php echo base_url('props/validaciones/usuario.js') ?>"></script>
<?php $this->load->view("validar/usuarioUnico") ?>
<?php $this->load->view("validar/correoUsuario") ?>
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
              <h1>Editar Usuario</h1>
              <br>
              <?php foreach($usuario as $us){ ?>
                <form action="<?php echo base_url().'usuario_controller/actualizar' ?>" method="POST" class="form-horizontal" autocomplete="off" onsubmit=" return validarFormulario2()">
                  <div class="row">
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Nombre</label>
                        <input type="hidden" name="id" value="<?= $us->id_usuario ?>">
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nombre" id="nombre" value="<?= $us->nombre ?>" placeholder="Ingrese nombre">
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Apellido</label>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="apellido" id="apellido" value="<?= $us->apellido ?>" placeholder="Ingrese apellido">
                      </div>
                    </div>
                  </div>

                  <div class="row my-3">
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text" >Sexo</label>
                        <select name="sexo" id="sexo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                          <option value="">Seleccione sexo</option>
                          <?php foreach($sexo as $s){ ?>
                            <option value="<?= $s->id_sexo ?>" <?php if($s->id_sexo==$us->id_sexo){ echo "selected"; } ?>><?= $s->sexo ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Dirección</label>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="direccion" id="direccion" value="<?= $us->direccion ?>" placeholder="Ingrese dirección">
                      </div>
                    </div>
                  </div>

                  <div class="row my-3">
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Teléfono</label>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="telefono" id="telefono" value="<?= $us->telefono ?>" placeholder="Ingrese teléfono">
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Correo</label>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="correo" id="correo" value="<?= $us->correo ?>" placeholder="Ingrese correo">
                      </div>
                      <div id="infoCorreo"></div>
                    </div>
                  </div>

                  <div class="row my-3">
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text" >Usuario</label>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="usuario" id="usuario" value="<?= $us->usuario ?>" placeholder="Ingrese usuario">
                      </div>
                      <div id="infoUsuario"></div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <label class="input-group-text">Rol</label>
                        <select name="rol" id="rol" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                          <option value="">Seleccione rol</option>
                          <?php foreach($rol as $r){ ?>
                            <option value="<?= $r->id_rol ?>" <?php if($r->id_rol==$us->id_rol){ echo "selected"; } ?>><?= $r->rol ?></option>
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
        <?php $this->load->view('utils/alertsUsuario') ?>
        <!-- /.container-fluid -->
      </div>

      <script type="text/javascript">

        $(document).ready(function(){
        //FORMATO DE MASCARAS
        $('#dui').mask('00000000-0', {placeholder: '00000000-0'});
        $('#telefono').mask('0000-0000', {placeholder: '0000-0000'});
      });
    </script>


