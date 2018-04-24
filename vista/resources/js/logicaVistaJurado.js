$(document).ready(function() {


	$('#tablaVotantes tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );

	var tabla = $('#tablaVotantes').DataTable({
		select : true
	});

	var inputBusqueda = $('#tablaVotantes_filter').children().children();
	inputBusqueda.attr('placeholder', 'Buscar por cedula');

	var filaSeleccionada = '';

	var tabla = $('.editar').click(modificarFila);

	function modificarFila(){

		var miFila = ($(this).parent()).parent();
		var miColumna = $(this).parent();
		var tdList = miColumna.siblings();

		if (filaSeleccionada == ''){
			filaSeleccionada = miFila.attr('id');

			miFila.addClass('purple lighten-4');

			$(this).text("Guardar");
			$(this).removeClass("purple");
			$(this).addClass("white black-text");


			$.each(tdList, function(indice, elem){
				if (indice > 1){
					$(elem).html("<input type='text' class='purple lighten-5' value='"+$(elem).text()+"' />");			
				}
			});
		}else{
			// if (miFila.attr('id') == filaSeleccionada){
				var tdListSeleccionada = $('#'+filaSeleccionada).children(); 
				var thBoton = tdListSeleccionada.last()[0];

				$.each(tdListSeleccionada, function(indice, elem){
					if (indice > 1 && elem != thBoton){
						var valorInput = $(elem).children().val();
						$(elem).text(valorInput);			
					}
				});

				var boton = $(thBoton).children();
				$(boton).text("Editar");
				$(boton).removeClass("white black-text");
				$(boton).addClass("purple");
				$('#'+filaSeleccionada).removeClass("purple lighten-4");

				filaSeleccionada = '';

			// }
		}
	}

	$('input[type=checkbox]').click(function(){
		$(this).attr("disabled", "disabled");
	});

	function actulizarTiempo(){
		var date = new Date();
		$('#hora').text(date.toLocaleTimeString());
		$('#fecha').text(date.toLocaleDateString());			
	}
	
	setInterval(actulizarTiempo, 1000);
});


