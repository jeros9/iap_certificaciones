function onSave(){
	
	// alert(WEB_ROOT)
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/grupos.php',
	  	// data: "type=EditTest&id="+id,
		data: $("#editSubjectForm").serialize(true)+'&type=onSave',
		beforeSend: function(){			
			$("#msj").html(LOADER3);
		},
	  	success: function(response) {	
				console.log(response)

			  $("#msj").html('');
			 var splitResponse = response.split("[#]");

			 if($.trim(splitResponse[0])=="ok"){

				 $("#tblContent2").html(splitResponse[1]);
				 $("#ajax").hide();
				$("#ajax").modal("hide");
				location.reload(true);
			 }else{
				 $("#msj").html(splitResponse[1]);
			 }


		},
		error:function(){
			// alert(msgError);
		}
    });

	
}//AddReg





function onBuscar(){
	
	// alert(WEB_ROOT)
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/grupos.php',
	  	// data: "type=EditTest&id="+id,
		data: $("#frmFlt1").serialize(true)+'&type=onBuscar',
		beforeSend: function(){			
			$("#msj").html(LOADER3);
		},
	  	success: function(response) {	
				console.log(response)

				 $("#tblContent").html(response);




		},
		error:function(){
			// alert(msgError);
		}
    });

	
}//AddReg

function AddFinalTest()
{	
	$.ajax({
		type: "POST",
		url: WEB_ROOT + '/ajax/grupos.php',
	  	data: $("#AddFinalTestForm").serialize(true) + '&type=AddFinalTest',
	  	beforeSend: function() {			
			$("#msj").html(LOADER3);
	  	},
		success: function(response) {	
			console.log(response);
			$("#msj").html('');
		   	var splitResponse = response.split("[#]");
			if($.trim(splitResponse[0])=="ok"){
				$("#resft").html('<div class="alert alert-success">El examen se agrego de manera correcta...</div>');
				$("#ajax").hide();
				$("#ajax").modal("hide");
				location.reload(true);
			}
			else
				$("#msj").html(splitResponse[1]);
	  	},
	  	error:function() { }
  	});
}

function EditFinalTest()
{	
	$.ajax({
		type: "POST",
		url: WEB_ROOT + '/ajax/grupos.php',
	  	data: $("#EditFinalTestForm").serialize(true) + '&type=EditFinalTest',
	  	beforeSend: function() {			
			$("#msj").html(LOADER3);
	  	},
		success: function(response) {	
			console.log(response);
			$("#msj").html('');
		   	var splitResponse = response.split("[#]");
			if($.trim(splitResponse[0])=="ok"){
				$("#resft").html('<div class="alert alert-success">El examen se modificó correctamente...</div>');
				$("#ajax").hide();
				$("#ajax").modal("hide");
			}
			else
				$("#msj").html(splitResponse[1]);
	  	},
	  	error:function() { }
  	});
}