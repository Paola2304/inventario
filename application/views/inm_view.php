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

					<!-- Page Heading -->

					<!-- Modal -->
					<table>   
						<!-- Button trigger modal -->
						<div class="row">             
							<div class="card-body d-flex justify-content-between align-items-center">
								<h1>Inmobiliario</h1>
								<button type="button" class="btn btn-primary btn-sm justify-content-right" data-toggle="modal" data-target="#exampleModal"><i class='fa fa-th-list'></i>
									Nuevo Inmobiliario
								</button>
							</div>    
						</div>


						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title" id="exampleModalLabel">Nuevo Inmobiliario</h3>

									</div>
									<div class="modal-body">
										<form action="<?php echo base_url().'inm_controller/ingresar' ?>" method="POST" autocomplete="off"  enctype="multipart/form-data" class="mx-auto" onsubmit=" return vin()">
											<div class="row my-3">
												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Categoria</span>
														<select name="categoria" id="categoria" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
															<option value="">Seleccione categoria</option>
															<?php foreach ($categoria as $c) { ?>
																<option value="<?= $c->id_categoria ?>"><?= $c->categoria ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Modelo</span>
														<select name="modelo" id="modelo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
															<option value="">Seleccione modelo</option>
															<?php foreach ($modelo as $m) { ?>
																<option value="<?= $m->id_modelo ?>"><?= $m->modelo ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
											</div>
											<div class="row my-3">
												<div class="col">
													<div class="input-group">
														<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Código</span>
														<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="codigo" id="codigo" placeholder="Ingrese codigo">
													</div>
													<div id="infoCodigo"></div>
												</div>
												<div class="col">
													<div class="input-group">
														<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Fecha de ingreso</span>
														<input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fecha" id="fecha" placeholder="Ingrese fecha">
													</div>
												</div>
											</div>
											<div class="row my-3">
												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Estado</span>
														<select name="estado" id="estado" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
															<option value="">Seleccione estado</option>
															<?php foreach ($estado as $e) { ?>
																<option value="<?= $e->id_estado ?>"><?= $e->estado ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="col">
													<div class="input-group">
														<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Descripción</span>
														<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="descripcion" id="descripcion" placeholder="Ingrese descripcion">
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
							<h6 class="m-0 font-weight-bold text-primary">Inmobiliario</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>N°</th>
											<th scope="col">categoria</th>
											<th scope="col">modelo</th>
											<th scope="col">marca</th>
											<th scope="col">codigo</th>
											<th scope="col">estado</th>
											<th scope="col">fecha</th>
											<th scope="col">Descripcion</th>
											<th class="text-center">Opciones</th>
										</tr>
									</thead>
									<?php if (count($inm)>0) {?>
										<tbody>
											<?php $n=1; foreach($inm as $i){ ?>
												<tr>
													<td><?= $n; ?></td>
													<td><?= $i->categoria ?></td>
													<td><?= $i->modelo ?></td>
													<td><?= $i->marca ?></td>
													<td><?= $i->codigo ?></td>
													<td><?= $i->estado ?></td>
													<td><?= $i->fecha_ingreso ?></td>
													<td><?= $i->descripcion ?></td>
													<td>
														<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
															<div class="btn-group" role="group">
																<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	Opciones
																</button>
																<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
																	<a class="dropdown-item" href="<?php echo base_url().'inm_controller/get_datos/'.$i->id_inmobiliario; ?>">Modificar</a>
																	<button type="button" class="dropdown-item" onclick="alerta_eliminar(<?= $i->id_inmobiliario; ?>)">Eliminar</button>

																</div>
															</div>
														</div>
													</td>
												</tr>
												<?php $n++; } ?>
												<?php

											}else{
												echo "<p class='alert alert-danger'>No hay Inmobiliario</p>";
											}


											?>
										</tbody>
									</table>
									<?php if (isset($mensaje)){ echo $mensaje; } ?>
								</div>
								<?php $this->load->view('utils/alertsInm') ?>
							</div>
						</div>

					</div>
					<!-- /.container-fluid -->
				</div>

