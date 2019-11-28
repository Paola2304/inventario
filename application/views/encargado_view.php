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

          <!-- Page Heading -->

          <!-- Modal -->
          <table>   
            <!-- Button trigger modal -->
            <div class="row">             
              <div class="card-body d-flex justify-content-between align-items-center">
                <h1>Encargados</h1>
                <button type="button" class="btn btn-primary btn-sm justify-content-right" data-toggle="modal" data-target="#exampleModal"><i class='fa fa-th-list'></i>
                  Nuevo Encargado
                </button>
              </div>    
            </div>


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Nuevo Encargado</h3>
                    
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo base_url('encargado_controller/ingresar') ?>" method="POST" autocomplete="off"  enctype="multipart/form-data" class="mx-auto" onsubmit=" return validarFormulario()">
                      <div class="row">
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>DUI</span>
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="dui" id="dui">
                          </div>
                        </div>
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Nombre</span>
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nombres" id="nombres" placeholder="Ingrese nombre">
                          </div>
                        </div>
                      </div>

                      <div class="row my-3">
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Apellido</span>
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="apellidos" id="apellidos" placeholder="Ingrese apellido">
                          </div>
                        </div>
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Correo</span>
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="correo" id="correo" placeholder="Ingrese correo">
                          </div>
                          <div id="infoCorreo"></div>
                        </div>
                      </div>

                      <div class="row my-3">
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Teléfono</span>
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="telefono" id="telefono">
                          </div>
                        </div>
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Dirección</span>
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="direccion" id="direccion" placeholder="Ingrese dirección">
                          </div>
                        </div>
                      </div>

                      <div class="row my-3">
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Sexo</span>
                            <select name="sexo" id="sexo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                              <option value="">Seleccione sexo</option>
                              <?php foreach ($sexo as$v) { ?>
                                <option value="<?= $v->id_sexo ?>"><?= $v->sexo ?></option>
                              <?php }  ?>
                            </select>
                          </div>
                        </div>
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Área</span>
                            <select name="area" id="area" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                              <option value="">Seleccione área</option>
                              <?php foreach ($area as $a) { ?>
                                <option value="<?= $a->id_area ?>"><?= $a->area ?></option>
                              <?php }  ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col text-right">
                          <input type="submit" value="Guardar" class="btn btn-primary">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <br>
          </table>
          <!-- End Modal -->
          <br>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Encargados</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>DUI</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Correo</th>
                      <th>Telefono</th>
                      <th>Direccion</th>
                      <th>Sexo</th>
                      <th>Area</th>
                      <th class="text-center">Opciones</th>
                    </tr>
                  </thead>
                  <?php if (count($encargado)>0) {?>
                    <tbody>
                      <?php $n=1; foreach($encargado as $valor){ ?>
                        <tr>
                          <td><?= $n; ?></td>
                          <td><?= $valor->dui_enc ?></td>
                          <td><?= $valor->nombres ?></td>
                          <td><?= $valor->apellidos ?></td>
                          <td><?= $valor->correo ?></td>
                          <td><?= $valor->telefono ?></td>
                          <td><?= $valor->direccion ?></td>
                          <td><?= $valor->sexo ?></td>
                          <td><?= $valor->area ?></td>
                          <td>
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                              <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Opciones
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                  <a class="dropdown-item" href="<?php echo base_url().'encargado_controller/get_datos/'.$valor->id_enc; ?>">Modificar</a>
                                  <button type="button" class="dropdown-item" onclick="alerta_eliminar(<?= $valor->id_enc; ?>)">Eliminar</button>
                                  
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <?php $n++; } ?>
                        <?php

                      }else{
                        echo "<p class='alert alert-danger'>No hay Encargados</p>";
                      }


                      ?>
                    </tbody>
                  </table>
                  <?php if (isset($mensaje)){ echo $mensaje; } ?>
                </div>
                <?php $this->load->view('utils/alertsEncargado') ?>
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->
        </div>

    <!-- MASCARA -->
    <script type="text/javascript">

      $(document).ready(function(){
        //FORMATO DE MASCARAS
        $('#dui').mask('00000000-0', {placeholder: '00000000-0'});
        $('#telefono').mask('0000-0000', {placeholder: '0000-0000'});
      });
    </script>
