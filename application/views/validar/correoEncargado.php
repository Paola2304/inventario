<script>
	

$(document).ready(function(){

	$('#correo').blur(function(){

		$id = $("#correo").val();

		$.ajax({

			type: 'ajax',
			method: 'post',
			url: '<?php echo base_url('encargado_controller/validarCorreo') ?>',
			data: {correo:$id},
			dataType: 'json',

			success: function(respuesta){

				if(respuesta==true){

					$('#infoCorreo').text('Correo NO disponible').css('color','red');

				}else{

					$('#infoCorreo').text('Correo disponible').css('color','green');
				}
			},
		});
	});
});

</script>