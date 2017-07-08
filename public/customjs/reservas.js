//validacion de formulario
$(document).ready(function() {
	$("#formValidate").submit(function(e) {
		e.preventDefault();
	}).validate({
		rules: {
			desde: {required: true},
			hora_desde: {required: true},
			hasta: {required: true},
			hora_hasta: {required: true},
			costo:{required:true},
			cant: {required:true}
		},
		errorElement : 'div',
		errorPlacement: function(error, element) {
			var placement = $(element).data('error');
			if (placement) {
				$(placement).append(error)
			} else {
				error.insertAfter(element);
			}
		},
		submitHandler: function(){
            var tour = $('#tour').val();
			var desde = $('#desde').val();
			var hora_desde = $('#hora_desde').val();
			var hasta = $('#hasta').val();
			var hora_hasta = $('#hora_hasta').val();
			var costo = $('#costo').val();
			var cant = $('#cant').val();
			var token = $('#token').val();
			var route = "/tours/reserva";
            $.ajax({
                url: route,
				headers: {'X-CSRF-TOKEN':token},
			 	type: 'POST',
			 	dataType: 'json',
			 	data:{tour:tour, desde:desde, hora_desde:hora_desde, hasta:hasta, hora_hasta:hora_hasta, costo:costo, cant:cant},
                success:function(data){
			 		$('#msj-success').fadeIn();
			 		console.info(data.success);
			 		//$("#contact-success").modal('show');
				}
		    });
		}

	});


});

//validacion de formulario
$(document).ready(function() {
	$("#form_reservar_carros").submit(function(e) {
		var tipocarro = $('#tipo').val();
		console.info(tipocarro);
		e.preventDefault();
	}).validate({
		rules: {
			desde: {required: true},
			hora_desde: {required: true},
			hasta: {required: true},
			hora_hasta: {required: true},
			costo:{required:true},
			cant: {required:true}
		},
		errorElement : 'div',
		errorPlacement: function(error, element) {
			var placement = $(element).data('error');
			if (placement) {
				$(placement).append(error)
			} else {
				error.insertAfter(element);
			}
		},
		submitHandler: function(){
            var tipocarro = $('#tipo').val();
			var desde = $('#desde').val();
			var hora_desde = $('#hora_desde').val();
			var hasta = $('#hasta').val();
			var hora_hasta = $('#hora_hasta').val();
			var costo = $('#costo').val();
			var cant = $('#cant').val();
			var token = $('#token').val();
			var route = "/carros/reserva";
            $.ajax({
                url: route,
				headers: {'X-CSRF-TOKEN':token},
			 	type: 'POST',
			 	dataType: 'json',
			 	data:{tipocarro:tipocarro, desde:desde, hora_desde:hora_desde, hasta:hasta, hora_hasta:hora_hasta, costo:costo, cant:cant},
                success:function(data){
			 		$('#msj-success').fadeIn();
			 		console.info(data.success);
			 		console.info(data.bandera);
			 		//$("#contact-success").modal('show');
				}
		    });
		}

	});

	
});

