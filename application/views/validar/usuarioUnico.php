<script>
	

$(document).ready(function(){

	$('#usuario').blur(function(){

		$id = $("#usuario").val();

		$.ajax({

			type: 'ajax',
			method: 'post',
			url: '<?php echo base_url('usuario_controller/validarUsuario') ?>',
			data: {usuario:$id},
			dataType: 'json',

			success: function(respuesta){

				if(respuesta==true){

					$('#infoUsuario').text('Usuario NO disponible').css('color','red');

				}else{

					$('#infoUsuario').text('Usuario disponible').css('color','green');
				}
			},
		});
	});
});

</script>