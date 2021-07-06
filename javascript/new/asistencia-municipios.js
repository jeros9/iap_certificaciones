function asistenciaMunicipios()
{
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/proceso.php',
	  	data: "type=asistenciaMunicipios&" + $("#frmFiltro").serialize(true),
		beforeSend: function() {			
			$("#loader").html(LOADER3);
		},
	  	success: function(response) {
			$("#loader").html("");
			console.log(response);
			var splitResp = response.split("[#]");							
			$("#contenido").html(response);
		},
		error:function() {
			alert(msgError);
		}
    });
}