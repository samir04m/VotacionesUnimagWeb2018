$(function(){
	// $('#card-login').fadeIn(1500);

	// $('#btnLogin').click(function(){
	// 	var cedula = $('#cedula').val();
	// 	var contrasena = $('#contrasena').val();
	// 	var seEncontro = false;
		
	// 	$.each(json.usuarios, function(indice, elemento){
	// 		if (elemento.cedula == cedula){
	// 			seEncontro = true;
	// 			if (elemento.contrasena == contrasena){

	// 				if (elemento.tipo == "jurado"){
	// 					location.href = "paginas/vista-jurado.html";
	// 				}
	// 				if (elemento.tipo == "votante"){
	// 					location.href = "paginas/vista-votante.html";
	// 				}
	// 				return;
	// 			}else{
	// 				mostrarModal("Contraseña incorrecta", "La contraseña ingresada es incorrecta.");
	// 			}
	// 		}
	// 	});
	// 	if (!seEncontro) {
	// 		mostrarModal("Usuario no encontrado", "No existe un usuario con este número cedula");
	// 	}

	// });

	$('a#recordarDatos').click(function() {
		var pMensajeModal = $('#mensaje-modal');
		var users = [
			{
				"cedula" : "11110000",
				"contrasena" : "1100",
				"tipo" : "jurado"
			},
			{
				"cedula" : "11112222",
				"contrasena" : "1122",
				"tipo" : "jurado"
			},
			{
				"cedula" : "11223344",
				"contrasena" : "1234",
				"tipo" : "votante"
			},
			{
				"cedula" : "22224444",
				"contrasena" : "2244",
				"tipo" : "votante"
			}

		];			
		var lista = JSON.stringify(users);
		mostrarModal("Usuarios Por Defecto", lista);
	});

});

$('.modal').modal();

function mostrarModal(titulo, mensaje){
	$('#titulo-modal').text(titulo);
	$('#mensaje-modal').text(mensaje);
	$('#myModal').modal('open');
}
