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

					<!-- Page Heading -->

					<!-- Modal -->
					<table>   
						<!-- Button trigger modal -->
						<div class="row">             
							<div class="card-body d-flex justify-content-between align-items-center">
								<h1>Equipo en Mantenimiento</h1>
								<button type="button" class="btn btn-primary btn-sm justify-content-right" data-toggle="modal" data-target="#exampleModal"><i class='fa fa-th-list'></i>
									Ingresar equipo en mantenimiento
								</button>
							</div>    
						</div>


						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title" id="exampleModalLabel">Equipo en Mantenimiento</h3>

									</div>
									<div class="modal-body">
										<form id="miForm"> action="<?php echo base_url().'equipo_controller/ingresar' ?>" method="POST" autocomplete="off"  enctype="multipart/form-data" class="mx-auto" onsubmit=" return validarFormulario()">
											<div class="row my-3">
												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Usuario</span>
														<select name="nombre" id="usuario" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
															<option value="">Seleccione usuario</option>
															<?php foreach ($nombre as $u) { ?>
																<option value="<?= $u->id_usuario ?>"><?= $u->nombre ?> <?= $u->apellido ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Equipo</span>
														<select name="categoria" id="categoria" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
															<option value="">Seleccione Equipo</option>
															<?php foreach ($inmobiliario as  $c) { ?>
																<option value="<?= $c->id_inmobiliario ?>"><?= $c->descripcion ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
											</div>
											<div class="row my-3">
												<div class="col">
													<div class="input-group">
														<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Fecha recibido</span>
														<input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="f_recibido" id="f_recibido" placeholder="Ingrese fecha de recibido">
													</div>
												</div>
												<div class="col">
													<div class="input-group">
														<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Fecha de salida</span>
														<input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="f_salida" id="f_salida" placeholder="Ingrese fecha de salida">
													</div>
												</div>
											</div>
											<div class="row my-3">
												<div class="col-md-6">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Estado</span>
														<select name="estado" id="estado" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
															<option value="">Seleccione Equipo</option>
															<?php foreach ($estado as $e) { ?>
																<option value="<?= $e->id_estado ?>"><?= $e->estado ?></option>
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
							<h6 class="m-0 font-weight-bold text-primary">Equipos en Mantenimiento</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>N°</th>
											<th scope="col">Usuario</th>
											<th scope="col">Inmobiliario</th>
											<th scope="col">Fecha de recibido</th>
											<th scope="col">Fecha de salida</th>
											<th scope="col">Estado</th>
											<th class="text-center">Opciones</th>
										</tr>
									</thead>
									<?php if (count($equipo)>0) {?>
										<tbody>
											<?php $n=1; foreach($equipo as $e){ ?>
												<tr>
													<td><?= $n; ?></td>
													<td><?= $e->nombre. " ".$e->apellido ?></td>
													<td><?= $e->categoria ?></td>
													<td><?= $e->f_recibido ?></td>
													<td><?= $e->f_salida ?></td>
													<td><?= $e->estado ?></td>
													<td>
														<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
															<div class="btn-group" role="group">
																<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	Opciones
																</button>
																<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
																	<a class="dropdown-item" href="<?php echo base_url().'equipo_controller/get_datos/'.$e->id_mant; ?>">Modificar</a>
																	<button type="button" class="dropdown-item" onclick="alerta_eliminar(<?= $e->id_mant; ?>)">Eliminar</button>

																</div>
															</div>
														</div>
													</td>
												</tr>
												<?php $n++; } ?>
												<?php

											}else{
												echo "<p class='alert alert-danger'>No hay Equipos en mantenimiento</p>";
											}


											?>
										</tbody>
									</table>
									<?php if (isset($mensaje)){ echo $mensaje; } ?>
								</div>
								<?php $this->load->view('utils/alertsMant') ?>
							</div>
						</div>

					</div>
					<!-- /.container-fluid -->
				</div>