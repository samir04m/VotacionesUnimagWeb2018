$('.creacion').click(function () {
	$('.formulario').animate({
		height: "toggle",
		'padding-top': 'toggle',
		'padding-bottom': 'toggle',
		opacity:'toggle'
	}, "slow");
});
$('.cerrar').click(function () {
	location.href="Login.html";
});
$('.uno').click(function () {
	var mensaje = confirm("Esta seguro de su Elección?");
	if (mensaje) {
		location.href="certificado.html";
	}
	else{
		alert("Quieres Elegir otro candidato");
	}
});