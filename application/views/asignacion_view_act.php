 <script src="<?php echo base_url('props/bootstrap/js/asignacion.js');?>"></script>
<body> 
	<div class="container">
		<?php foreach ($asignacion as $a){ ?>
			<form action="<?php echo base_url().'asignacion_controller/actualizar' ?>" method="POST" class="mx-auto" onsubmit="">
				<div class="row">
					<div class="col">
						<div class="input-group">
							<input type="hidden" name="id_asignacion" value="<?= $a->id_asignacion ?>">
							<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Equipo</span>
							<select name="categoria" id="categoria" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
								<option value="">-- Seleccione una categoria --</option>
								<?php foreach ($inmobiliario as  $c) { ?>
									<option value="<?= $c->id_inmobiliario ?>" <?php if($c->id_inmobiliario == $a->id_inmobiliario){echo 'selected'; } ?>><?= $c->categoria ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="input-group">
							<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>DUI  y nombre Encargado</span>
							<select name="id_enc" id="dui_enc" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
								<option value="">-- Seleccione un encargado --</option>
								<?php foreach ($encargado as  $en) { ?>
									<option value="<?= $en->id_enc ?>" <?php if($en->id_enc == $a->id_enc){echo 'selected'; } ?>><?= $en->dui_enc ?> </option>
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
									<option value="<?= $e->id_estado ?>" <?php if($e->id_estado == $a->id_estado){ echo 'Selected'; } ?>><?= $e->estado ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col">
						<div class="input-group">
							<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Fecha de asignacion</span>
							<input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fecha_asig" id="fecha_asig" value="<?= $a->fecha_asig ?>">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<input type="submit" value="Actualizar" class="btn btn-primary">
					</div>
				</div>
			</form>
		<?php } ?>
	</div>