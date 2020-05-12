

function printBoleta(q){
	url=WEB_ROOT+"/ajax/report-card-pdf.php?"+$('#frmfiltro').serialize(true)+'&q='+q;
	open(url,"Constancia de Estudios","toolbal=0,width=800,resizable=1");
}





function onAceptar(){

	$("#type").val("onAceptar")
	
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/view-solicitud.php',
	  	data: $("#frmGral").serialize(true)+'&type=onAceptar',
		beforeSend: function(){			
			$("#load").html(LOADER3);
		},
	  	success: function(response) {	
		
			console.log(response)
			location.reload();
			$("#container").html(response);
				

		},
		error:function(){
			alert(msgError);
		}
    });
	
}





function send(){

	$("#type").val("send")
	
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/view-solicitud.php',
	  	data: $("#addMajorForm").serialize(true)+'&type=send',
		beforeSend: function(){			
			$("#load").html(LOADER3);
		},
	  	success: function(response) {	
		var splitResp = response.split("[#]");
			console.log(response)
				if($.trim(splitResp[0]) == "ok"){
					location.reload();
					$("#container").html(response);
				}else{
					
					$("#msjError").html($.trim(splitResp[1]));
				}
			
				

		},
		error:function(){
			alert(msgError);
		}
    });
	
}



// Actividades

function deleteActividad(Id){
	var resp = confirm("Esta seguro de eliminar la actividad?");
	if(!resp)
		return;
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/group-module.php',
	  	data: $("#frmGral").serialize(true)+'&Id='+Id+'&type=deleteActividad',
		beforeSend: function(){			
			// $('#tblContent').html(LOADER3);
		},
	  	success: function(response) {	
			console.log(response)
			var splitResp = response.split("[#]");
			if($.trim(splitResp[0]) == "ok") {
				location.reload();
			}
			else if($.trim(splitResp[0]) == "fail"){
				alert(response);
			}
		}
    });
}

function verRetro(Id) {
	$("#divRetro_" + Id).toggle();
}

function DoTest(id)
{
    var con = confirm("¿Está seguro de que desea presentar este examen? El tiempo empezará a correr despues de aceptar.");
    if(!con)
        return;
    window.location = WEB_ROOT + "/make-group-test/id/" + id;
}