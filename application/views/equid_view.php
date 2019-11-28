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

					<!-- Page Heading -->

					<!-- Modal -->
					<table>   
						<!-- Button trigger modal -->
						<div class="row">             
							<div class="card-body d-flex justify-content-between align-items-center">
								<h1>Equipo Dañado</h1>
								<button type="button" class="btn btn-primary btn-sm justify-content-right" data-toggle="modal" data-target="#exampleModal"><i class='fa fa-th-list'></i>
									Ingresar equipo dañado
								</button>
							</div>    
						</div>


						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title" id="exampleModalLabel">Equipo Dañado</h3>

									</div>
									<div class="modal-body">
										<form action="<?php echo base_url().'equid_controller/ingresar' ?>" method="POST" autocomplete="off"  enctype="multipart/form-data" class="mx-auto" onsubmit=" return vequi()">
											<div class="row my-3">
												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Código</span>
														<select name="codigo" id="codigo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
															<option value="">Seleccione codigo</option>
															<?php foreach ($codigo as $c) { ?>
																<option value="<?= $c->id_inmobiliario ?>"><?= $c->codigo ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
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
											</div>
											<div class="row my-3">
												<div class="col">
													<div class="input-group">
														<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Fecha de ingreso</span>
														<input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fecha" id="fecha" placeholder="Ingrese fecha">
													</div>
												</div>
												<div class="col">
													<div class="input-group">
														<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Descripción</span>
														<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="descripcion" id="descripcion" placeholder="Ingrese descripción">
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
							<h6 class="m-0 font-weight-bold text-primary">Equipos Dañados</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>N°</th>
											<th scope="col">Código</th>
											<th scope="col">Categoria</th>
											<th scope="col">Estado</th>
											<th scope="col">Fecha</th>
											<th scope="col">Descripción</th>
											<th class="text-center">Opciones</th>
										</tr>
									</thead>
									<?php if (count($equid)>0) {?>
										<tbody>
											<?php $n=1; foreach($equid as $e){ ?>
												<tr>
													<td><?= $n; ?></td>
													<td><?= $e->codigo ?></td>
													<td><?= $e->categoria ?></td>
													<td><?= $e->estado ?></td>
													<td><?= $e->fecha_ingreso ?></td>
													<td><?= $e->descripcion ?></td>
													<td>
														<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
															<div class="btn-group" role="group">
																<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	Opciones
																</button>
																<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
																	<a class="dropdown-item" href="<?php echo base_url().'equid_controller/get_datos/'.$e->id_danado; ?>">Modificar</a>
																	<button type="button" class="dropdown-item" onclick="alerta_eliminar(<?= $e->id_danado; ?>)">Eliminar</button>

																</div>
															</div>
														</div>
													</td>
												</tr>
												<?php $n++; } ?>
												<?php

											}else{
												echo "<p class='alert alert-danger'>No hay Equipos Dañados</p>";
											}


											?>
										</tbody>
									</table>
									<?php if (isset($mensaje)){ echo $mensaje; } ?>
								</div>
								<?php $this->load->view('utils/alertsEquid') ?>
							</div>
						</div>

					</div>
					<!-- /.container-fluid -->
				</div>