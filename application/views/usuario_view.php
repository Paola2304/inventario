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

          <!-- Page Heading -->

          <!-- Modal -->
          <table>   
            <!-- Button trigger modal -->
            <div class="row">             
              <div class="card-body d-flex justify-content-between align-items-center">
                <h1>Usuarios</h1>
                <button type="button" class="btn btn-primary btn-sm justify-content-right" data-toggle="modal" data-target="#exampleModal"><i class='fa fa-th-list'></i>
                  Nuevo Usuario
                </button>
              </div>    
            </div>


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h3>
                    
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo base_url('usuario_controller/ingresar') ?>" method="POST" autocomplete="off"  enctype="multipart/form-data" class="mx-auto" onsubmit=" return validarFormulario()">
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
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nombre" id="nombre" placeholder="Ingrese nombre">
                          </div>
                        </div>
                      </div>

                      <div class="row my-3">
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Apellido</span>
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="apellido" id="apellido" placeholder="Ingrese apellido">
                          </div>
                        </div>
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Sexo</span>
                            <select name="sexo" id="sexo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                              <option value="">Seleccione sexo</option>
                              <?php foreach($sexo as $s){ ?>
                                <option value="<?= $s->id_sexo ?>"><?= $s->sexo ?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row my-3">
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Dirección</span>
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="direccion" id="direccion" placeholder="Ingrese dirección">
                          </div>
                        </div>
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Teléfono</span>
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="telefono" id="telefono">
                          </div>
                        </div>
                      </div>

                      <div class="row my-3">
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Correo</span>
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="correo" id="correo" placeholder="Ingrese correo">
                          </div>
                          <div id="infoCorreo"></div>
                        </div>
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Usuario</span>
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="usuario" id="usuario" placeholder="Ingrese usuario">
                          </div>
                          <div id="infoUsuario"></div>
                        </div>
                      </div>
                      <div class="row my-3">
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Contraseña</span>
                            <input type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="clave1" id="clave1" maxlength="50" placeholder="Ingrese contraseña">
                          </div>
                        </div>
                        <div class="col">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Verifique contraseña</span>
                            <input type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="clave2" id="clave2" maxlength="50" placeholder="Verifique contraseña">
                          </div>
                        </div>
                      </div>
                      <div class="row my-3">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Rol</span>
                            <select name="rol" id="rol" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                              <option value="">Seleccione rol</option>
                              <?php foreach($rol as $r){ ?>
                                <option value="<?= $r->id_rol ?>"><?= $r->rol ?></option>
                              <?php } ?>
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
              <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Dirección</th>
                      <th>Telefono</th>
                      <th>DUI</th>
                      <th>Correo</th>
                      <th>Usuario</th>
                      <th>Rol</th>
                      <th>Sexo</th>
                      <th class="text-center">Opciones</th>
                    </tr>
                  </thead>
                  <?php if (count($usuario)>0) {?>
                    <tbody>
                      <?php $n=1; foreach($usuario as $u){ ?>
                        <tr>
                          <td><?= $n; ?></td>
                          <td><?= $u->nombre ?></td>
                          <td><?= $u->apellido ?></td>
                          <td><?= $u->direccion ?></td>
                          <td><?= $u->telefono ?></td>
                          <td><?= $u->dui ?></td>
                          <td><?= $u->correo ?></td>
                          <td><?= $u->usuario ?></td>
                          <td><?= $u->rol ?></td>
                          <td><?= $u->sexo ?></td>
                          <td>
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                              <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Opciones
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                  <a class="dropdown-item" href="<?php echo base_url('usuario_controller/get_datos/'.$u->id_usuario) ?>">Modificar</a>
                                  <button type="button" class="dropdown-item" onclick="alerta_eliminar(<?= $u->id_usuario; ?>)">Eliminar</button>
                                  
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <?php $n++; } ?>
                        <?php

                  }else{
                    echo "<p class='alert alert-danger'>No hay Usuarios</p>";
                  }


                  ?>
                      </tbody>
                    </table>
                    <?php if (isset($mensaje)){ echo $mensaje; } ?>
                </div>
                <?php $this->load->view('utils/alertsUsuario') ?>
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->
        </div>

        <!-- verificación de contraseña -->
        <script type="text/javascript">
            //Este script compara las contraseñas para saber si son identicas 
            //si lo son realiza el INSERT y si no muestra un mensaje de alerta 
            window.onload = function () {
              document.getElementById("clave1").onchange = validatePassword;
              document.getElementById("clave2").onchange = validatePassword;
            }
            function validatePassword(){
              var clave2=document.getElementById("clave2").value;
              var clave1=document.getElementById("clave1").value;
              if(clave1!=clave2)
                document.getElementById("clave1").setCustomValidity("Las contraseñas no coinciden");
              else
                document.getElementById("clave1").setCustomValidity('');  
              
            }
      //Fin del script
  </script>


  <!-- MASCARA -->
  <script type="text/javascript">
    
    $(document).ready(function(){
        //FORMATO DE MASCARAS
        $('#dui').mask('00000000-0', {placeholder: '00000000-0'});
        $('#telefono').mask('0000-0000', {placeholder: '0000-0000'});
      });
  </script>
