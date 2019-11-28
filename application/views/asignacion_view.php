<script src="<?php echo base_url('props/validaciones/asignacion.js') ?>"></script>
<div class="container">
	
	<!-- The Modal --> 
	<div class="modal fade" id="nuevo_alumno">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title" style="font-family: 'Satisfy', cursive; color: #a8834c;">-- Agregar asignación --&nbsp<i class="fa fa-user" style="color: red"></i></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form action="<?php echo base_url().'asignacion_controller/ingresar' ?>" method="POST" class="mx-auto" onsubmit="return asignacion()">
						<div class="row">
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Inmobiliario</span>
									<select   name="categoria" id="categoria" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
										<option value="">-- Seleccione una categoria --</option>
										<?php foreach ($inmobiliario as  $c) { ?>
											<option value="<?= $c->id_inmobiliario ?>"><?= $c->categoria?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>DUI  y nombre Encargado</span>
									<select name="id_enc" id="dui_enc" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
										<option value="">-- Seleccione un encargado --</option>
										<?php foreach ($encargado as  $d) { ?>
											<option value="<?= $d->id_enc ?>"><?= $d->dui_enc ?> <?= $d->nombres ?> <?= $d->apellidos ?> </option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>

						<div class="row my-3">
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Estado</span>
									<select name="estado" id="estado">
										<option value="">-- Seleccione un estado --</option>
										<?php foreach ($estado as $e) { ?>
											<option value="<?= $e->id_estado ?>"><?= $e->estado ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="col">
								<div class="input-group">
									<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Fecha de asignacion</span>
									<input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fecha_asig" id="fecha_asig">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<input type="submit" value="Guardar" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>

	<br><br>

	<div class="row">             
		<div class="card-body d-flex justify-content-between align-items-center">
			<h1 style="font-family: 'Montserrat', cursive; color: #46281e;" class="">Asignación</h1>
			<button type="button" class="btn btn-success btn-lg justify-content-right" data-toggle="modal" data-target="#nuevo_alumno"><i class="fa fa-plus" aria-hidden="true"></i>
			</button>
		</div>    
	</div>

	<table class="table table-striped table-dark">
		<thead>
			<tr>
				<th># Asignación</th>
				<th>Inmobiliario</th>
				<th>DUI y nombre encargado</th>
				<th>Estado</th>
				<th>Fecha de asignacion</th>
				<th>Eliminar</th>
				<th>Editar</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($asignacion as $a) {  ?>
				<tr>
					<td><?= $a->id_asignacion ?></td>
					<td><?= $a->categoria ?></td>
					<td><?= $a->dui_enc. " ".$a->nombres. " ".$a->apellidos ?></td>
					<td><?= $a->estado ?></td>
					<td><?= $a->fecha_asig ?></td>
					<td class="text-center"><a href="<?php echo base_url().'asignacion_controller/eliminar/'.$a->id_asignacion; ?>"><button class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></a></td>
					<td class="text-center"><a href="<?php echo base_url().'asignacion_controller/get_datos/'.$a->id_asignacion; ?>"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a></td>
				</tr>
			<?php  } ?>
		</tbody>
	</table>
</div>
