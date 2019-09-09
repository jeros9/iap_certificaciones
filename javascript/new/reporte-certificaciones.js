function buscarSolicitud(){
	
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/solicitud.php',
	  	data: "type=buscarSolicitudCer&"+$("#frmFiltro").serialize(true),
		beforeSend: function(){			
			$("#loader").html(LOADER3);
		},
	  	success: function(response) {

		$("#loader").html('');
			console.log(response)
			var splitResp = response.split("[#]");
											
				$("#contenido").html(response);

		},
		error:function(){
			alert(msgError);
		}
    });
	

	
}//addHeredero


function buscarGrupos(){
	
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/new/usuarios.php',
	  	data: $("#frmFiltro").serialize(true)+'&type=buscarGrupos',
		beforeSend: function(){			
			$("#load").html(LOADER3);
		},
	  	success: function(response) {	
		
			console.log(response)
			
			$("#divGrupos").html(response);
				

		},
		error:function(){
			alert(msgError);
		}
    });
}