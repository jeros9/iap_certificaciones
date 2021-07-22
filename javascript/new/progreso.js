$(document).ready(function() {
    $(document).on("click",".spanOrder",function() {
        var id = $(this).attr('id');
        OrderPopup(id);
    });
});


function buscar()
{	
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/proceso.php',
	  	data: "type=reporteProceso&" + $("#frmFilter").serialize(true),
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
}

function OrderPopup(id)
{
    $.ajax({
        url: WEB_ROOT+'/ajax/new/proceso.php',
        type: "POST",
        data: {type: "orderInfo", id:id},
        success: function(data)
        {
            showModal("Encargos", data);
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}