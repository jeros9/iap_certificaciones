function updateForo()
{	
	$("#type").val("updateForo")
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT + '/ajax/group-foro.php',
	  	data: $("#frmForo").serialize(true) + '&type=updateForo',
		beforeSend: function(){			
			$('#divContenforo').html(LOADER3);
		},
	  	success: function(response) {	
			console.log(response)
			var splitResp = response.split("[#]");
			$("#divContenforo").html(response);
		},
		error:function(){
			alert(msgError);
		}
    });
}

function verComentario(Id)
{
   $("#divCom_" + Id).toggle();
}

function closeModal()
{	
	$("#ajax").hide();
	$("#ajax").modal("hide");	
}