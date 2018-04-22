
	$(document).ready(function(){

		$(".dropdown-trigger").dropdown();
		$('select').material_select();
		$('.modal').modal();

		var urlDelete = '#';
			
		$('a.btnDelete').click(function(e){
			e.preventDefault();
			urlDelete = $(this).attr('href');
			$('#modal-confirmarEliminacion').modal('open');
		});

		$('a#btnEliminar').click(function(){
			location.href = urlDelete;
		});

	});