
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

					<!-- Page Heading -->

					<!-- Modal -->
					<table>   
						<!-- Button trigger modal -->
						<div class="row">             
							<div class="card-body d-flex justify-content-between align-items-center">
								<h1>Modelos</h1>
								<button type="button" class="btn btn-primary btn-sm justify-content-right" data-toggle="modal" data-target="#exampleModal"><i class='fa fa-th-list'></i>
									Nuevo Modelo
								</button>
							</div>    
						</div>


						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title" id="exampleModalLabel">Nuevo Modelo</h3>

									</div>
									<div class="modal-body">
										<form action="<?php echo base_url().'mod_controller/ingresar' ?>" method="POST" autocomplete="off"  enctype="multipart/form-data" class="mx-auto" onsubmit=" return vim()">
											<div class="row my-3">
												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Marca</span>
														<select name="marca" id="marca" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
															<option value="">Seleccione marca</option>
															<?php foreach ($marca as $m) { ?>
																<option value="<?= $m->id_marca ?>"><?= $m->marca ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="col">
													<div class="input-group">
														<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Modelo</span>
														<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="modelo" id="modelo" placeholder="Ingrese modelo">
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
							<h6 class="m-0 font-weight-bold text-primary">Modelos</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>N°</th>
											<th scope="col">modelo</th>
											<th scope="col">marca</th>
											<th class="text-center">Opciones</th>
										</tr>
									</thead>
									<?php if (count($modelo)>0) {?>
										<tbody>
											<?php $n=1; foreach($modelo as $mo){ ?>
												<tr>
													<td><?= $n; ?></td>
													<td><?= $mo->modelo ?></td>
													<td><?= $mo->marca ?></td>
													<td>
														<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
															<div class="btn-group" role="group">
																<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	Opciones
																</button>
																<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
																	<a class="dropdown-item" href="<?php echo base_url().'mod_controller/get_datos/'.$mo->id_modelo; ?>">Modificar</a>
																	<button type="button" class="dropdown-item" onclick="alerta_eliminar(<?= $mo->id_modelo; ?>)">Eliminar</button>

																</div>
															</div>
														</div>
													</td>
												</tr>
												<?php $n++; } ?>
												<?php

											}else{
												echo "<p class='alert alert-danger'>No hay Modelos</p>";
											}


											?>
										</tbody>
									</table>
									<?php if (isset($mensaje)){ echo $mensaje; } ?>
								</div>
								<?php $this->load->view('utils/alertsModelo') ?>
							</div>
						</div>

					</div>
					<!-- /.container-fluid -->
				</div>

