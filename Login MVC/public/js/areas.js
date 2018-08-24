
$('#type_user').change(function(event){
	var cambiar = $(this).val();

	if(cambiar == 'aprendiz'){

	$('#area_for').css('display', 'block');
	$('#area_con').css('display', 'none');
	

	}else if (cambiar == 'instructor'){
		$('#area_for').css('display', 'none');
		$('#area_con').css('display', 'block');
	
	}else if (cambiar == 'seleccionar'){
		$('#area_for').css('display', 'none');
		$('#area_con').css('display', 'none');

	}

});

$('#tipo_ubicacion').change(function(event){
	var cambiar = $(this).val();

	if(cambiar == 'urbano'){

	$('#comuna').css('display', 'block');
	$('#barrio').css('display', 'block');
	$('#corregimiento').css('display', 'none');
	$('#vereda').css('display', 'none');
	$('#tipo_rural').css('display', 'none');

	}else if (cambiar == 'rural'){
		$('#corregimiento').css('display', 'none');
		$('#vereda').css('display', 'none');
		$('#comuna').css('display', 'none');
		$('#barrio').css('display', 'none');
		$('#tipo_rural').css('display', 'block');
	
	}else if (cambiar == 'seleccionar'){
		$('#comuna').css('display', 'none');
		$('#corregimiento').css('display', 'none');
		$('#vereda').css('display', 'none');
		$('#barrio').css('display', 'none');
		$('#tipo_rural').css('display', 'none');


	}

