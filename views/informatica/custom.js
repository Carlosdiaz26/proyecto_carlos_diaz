$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var first1=$('#id_reg_e_e'+id).text();
		var first=$('#tipo_de_equipo'+id).text();
		var last=$('#descripcion'+id).text();
		var address=$('#falla'+id).text();
	
		$('#edit').modal('show');
		$('#eid_reg_e_e').val(first1);
		$('#etipo_de_equipo').val(first);
		$('#edescripcion').val(last);
		$('#efalla').val(address);
	});
});