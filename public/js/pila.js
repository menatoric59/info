$(function(){
	$tipoObjeto = 	$('#tipoObjeto').val();
	
	$('#valorNuevo').on('keypress',function(tecla){
		//alert( tecla.keyCode);
		if (tecla.keyCode==13) {
			
			$('#push').click();
		};
	});


	$('#push').on('click',function(e){
		$valorNuevo = $('#valorNuevo').val();
		if ($valorNuevo!='') {
			addItem();	
			
		};
		focusAdd();
	});
	$('#get').on('click',function(e){
		if (!isEmpty()){
			delItem();
			
		};
		focusAdd();
	});
	$('#empty').on('click',function(e){
		if(!isEmpty()){
			alertify.log("La " + $tipoObjeto + " NO está vacía")
		};
		focusAdd();

	});
	$('#size').on('click',function(e){
		alertify.success("La pila " + $tipoObjeto + " tiene un tamaño de "+size());
		focusAdd();
		
	});

	function size()
	{
		$filas = $("#tabla-pila tbody tr").length;	
		return $filas;
	}
	function isEmpty()
	{
		if (size() == 0){
			alertify.success("La " + $tipoObjeto + " está vacia" );
			return true;
		};
		return false;
	}
	function addItem()
	{
		
		switch($tipoObjeto) {
		    case 'pila':
		        $("#tabla-pila tbody").prepend('<tr><td>'+$valorNuevo+'</td></tr>');
		        break;
		    case 'cola':
		        $("#tabla-pila tbody").append('<tr><td>'+$valorNuevo+'</td></tr>');
		        break;
		    case 'lista':
		    	$filas = $("#tabla-pila tbody tr").length;
		    	$siguente =''
		    	if ($filas>0) 
		    	{ 
		    		$siguente = $filas;
		    		$renglon = $filas-1;
		    		$("#tabla-pila tbody tr:eq("+ $renglon +") td:eq(2)").html($siguente);	
		    	};
		    	
		    	//alert("+"+$filas+"+");
		    	
		        $("#tabla-pila tbody").append('<tr><td>' + $filas +'</td><td>'+$valorNuevo+'</td><td>null</td></tr>');
		} 
		// https://github.com/luciddreamz/laravel
		$('#valorNuevo').val('');
	}
	function delItem()
	{
		
		if ($tipoObjeto=='pila') 
		{
			$("#tabla-pila tbody tr:eq(0)").remove();	
		}
		else
		{

			$("#tabla-pila tbody tr:last").remove();	
		}
	}

	function focusAdd()
	{
		$('#valorNuevo').focus();
	}
});