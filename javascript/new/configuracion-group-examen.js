function EditTest() {
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT + '/ajax/configuracion-group-examen.php',
		data: $("#editMajorForm").serialize(true) + '&type=EditTest&activityId=' + $("#activityId").val(),
		beforeSend: function() {			
			$("#msj").html(LOADER3);
		},
	  	success: function(response) {	
			console.log(response)
            $("#msj").html('');
            var splitResponse = response.split("[#]");
            if($.trim(splitResponse[0]) == "ok") {
                $("#tblContent2").html(splitResponse[1]);
                $("#ajax").hide();
                $("#ajax").modal("hide");
            }else
                $("#msj").html(splitResponse[1]);
		},
		error:function(){
			// alert(msgError);
		}
    });	
}