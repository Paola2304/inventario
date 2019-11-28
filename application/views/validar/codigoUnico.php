<script>
	

$(document).ready(function(){

	$('#codigo').blur(function(){

		$id = $("#codigo").val();

		$.ajax({

			type: 'ajax',
			method: 'post',
			url: '<?php echo base_url('inm_controller/validarCodigo') ?>',
			data: {codigo:$id},
			dataType: 'json',

			success: function(respuesta){

				if(respuesta==true){

					$('#infoCodigo').text('Código NO disponible').css('color','red');

				}else{

					$('#infoCodigo').text('Código disponible').css('color','green');
				}
			},
		});
	});
});

</script>