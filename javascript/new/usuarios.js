function sendInfo(){
	
	Id = 1;
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/view-solicitud.php',
	  	data: "type=sendInfo&Id="+Id+'&'+$("#frmGral").serialize(true),
		beforeSend: function(){			
			$("#msj").html('Cargando....');
			$("#btnSaveEncuesta").hide();

		},		
	  	success: function(response) {		
			$(".loader").html('');
			console.log(response)
			var splitResp = response.split("[#]");
									
			if($.trim(splitResp[0]) == "ok"){
				
console.log(response)
			}else if($.trim(splitResp[0]) == "fail"){
				$("#msj").html(splitResp[1]);
			}else{
				alert("Ocurrio un error al cargar los datos.");
			}
		},
		error:function(){
			
		}
    });

}




function saveCalificador(){
	
	Id = 1;
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/view-solicitud.php',
	  	data: "type=saveCalificador&Id="+Id+'&'+$("#frmGral").serialize(true),
		beforeSend: function(){			
			$("#msj").html('Cargando....');
			$("#btnSaveEncuesta").hide();

		},		
	  	success: function(response) {		
			$(".loader").html('');
			console.log(response)
			var splitResp = response.split("[#]");
									
			if($.trim(splitResp[0]) == "ok"){
				// $("#msj").html(splitResp[1]);
				// $("#contenido").html(splitResp[2]);
				ShowStatus((splitResp[1]));
				closeModal();
			console.log(response)
			buscarCertificacion();
			}else if($.trim(splitResp[0]) == "fail"){
				$("#msj").html(splitResp[1]);
			}else{
				alert("Ocurrio un error al cargar los datos.");
			}
		},
		error:function(){
			
		}
    });

}




function enviarArchivo(){
// alert("h")



// En esta var va incluido $_POST y $_FILES
	var fd = new FormData(document.getElementById("frmGral"));
	$.ajax({
		url : WEB_ROOT+'/ajax/new/usuarios.php',
		data: fd,
		processData: false,
		contentType: false,
		type: 'POST',
		xhr: function(){
				var XHR = $.ajaxSettings.xhr();
				XHR.upload.addEventListener('progress',function(e){
					console.log(e)
					var Progress = ((e.loaded / e.total)*100);
					Progress = (Progress);
					console.log(Progress)
					$('#progress_').val(Math.round(Progress));
					$('#porcentaje_').html(Math.round(Progress)+'%');
					
					
				},false);
			return XHR;
		},
		beforeSend: function(){		
			// $("#loader").html(LOADER);
			// $("#erro_"+reqId).hide(0);
		},
		success: function(response){
			
			console.log(response);
			var splitResp = response.split("[#]");

			$("#loader").html("");
			
			if($.trim(splitResp[0]) == "ok"){
				 ShowStatus((splitResp[1]));
				// $("#msj").html(splitResp[1]);
				//$("#contenido").html(splitResp[2]);
				closeModal()
				buscarCertificacion();
			}else if($.trim(splitResp[0]) == "fail"){
				$("#txtErrMsg").show();
	
			}else{
				alert(msgFail);
			}
		},
	})
	
}





function onDeleteCarta(id)
{

	var resp = confirm("Seguro de  eliminar el Documento?");

		if(!resp)
			return;

    $.ajax({
		url: WEB_ROOT+'/ajax/new/usuarios.php',
        type: "POST",
        data : {type: "onDeleteCarta", id:id},
        success: function(data)
        {
           console.log(data);
		    var splitResp = data.split("[#]");
			 if($.trim(splitResp[0]) == "ok")
            {
				ShowStatus((splitResp[1]));
               closeModal();
			   buscarCertificacion();
            }
            else
            {
               alert('Ocurrio un error');
            }
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexión a internet');
        }
    });
}


function closeModal(){
	
	
	
	$('#ajax').hide();
	var elemento = document.querySelectorAll(".bootbox");
	for (var i = 0; i < elemento.length; i++) {

		$(elemento).remove('div')
	  elemento[i].classList.remove("in");
	}
	
	var elemento = document.querySelectorAll(".modal-backdrop");
	for (var i = 0; i < elemento.length; i++) {
		$(elemento).remove('div')
	  elemento[i].classList.remove("in");
	}

}


function buscarCertificacion(){
	
	 $.ajax({
		url: WEB_ROOT+'/ajax/new/usuarios.php',
        type: "POST",
        data: "type=buscarCertificacion"+'&'+$("#frmBuscar").serialize(true),
        success: function(data)
        {
           console.log(data);
		    $("#tblContent").html(data);
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexión a internet');
        }
    });
	
}	



function LoadPage(page){

	$("#type").val("LoadPage")
	
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/new/usuarios.php',
	  	data: $("#frmBuscar").serialize(true)+'&type=LoadPage&page='+page,
		beforeSend: function(){			
			$("#load").html(LOADER3);
		},
	  	success: function(response) {	
		
			console.log(response)
			
			$("#tblContent").html(response);
				

		},
		error:function(){
			alert(msgError);
		}
    });
	
}




function saveEstatus(){
// alert("h")



// En esta var va incluido $_POST y $_FILES
	var fd = new FormData(document.getElementById("frmGral"));
	$.ajax({
		url : WEB_ROOT+'/ajax/new/usuarios.php',
		data: fd,
		processData: false,
		contentType: false,
		type: 'POST',
		/*xhr: function(){
				var XHR = $.ajaxSettings.xhr();
				XHR.upload.addEventListener('progress',function(e){
					console.log(e)
					var Progress = ((e.loaded / e.total)*100);
					Progress = (Progress);
					console.log(Progress)
					$('#progress_'+reqId).val(Math.round(Progress));
					$('#porcentaje_'+reqId).html(Math.round(Progress)+'%');
					
					
				},false);
			return XHR;
		},*/
		beforeSend: function(){		
			// $("#loader").html(LOADER);
			// $("#erro_"+reqId).hide(0);
		},
		success: function(response){
			
			console.log(response);
			var splitResp = response.split("[#]");

			$("#loader").html("");
			
			if($.trim(splitResp[0]) == "ok"){
				 ShowStatus((splitResp[1]));
				// $("#msj").html(splitResp[1]);
				$("#contenido").html(splitResp[2]);
				closeModal()
				buscarCertificacion();
			}else if($.trim(splitResp[0]) == "fail"){
				$("#txtErrMsg").show();
	
			}else{
				alert(msgFail);
			}
		},
	})
	
}






function addCertificacion(){
	
	Id = 1;
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/view-solicitud.php',
	  	data: "type=addCertificacion"+'&'+$("#frmGral2").serialize(true),
		beforeSend: function(){			
			$("#msj").html('Cargando....');
			$("#btnSaveEncuesta").hide();

		},		
	  	success: function(response) {		
			$(".loader").html('');
			console.log(response)
			var splitResp = response.split("[#]");
									
			if($.trim(splitResp[0]) == "ok"){
				// $("#msj").html(splitResp[1]);
				// $("#contenido").html(splitResp[2]);
				ShowStatus((splitResp[1]));
				closeModal();
			console.log(response)
			}else if($.trim(splitResp[0]) == "fail"){
				$("#msj").html(splitResp[1]);
			}else{
				alert("Ocurrio un error al cargar los datos.");
			}
		},
		error:function(){
			
		}
    });

}


function buscarGrupos(){
	
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/new/usuarios.php',
	  	data: $("#frmBuscar").serialize(true)+'&type=buscarGrupos',
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




function buscarGrupoModal(){
	
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/new/usuarios.php',
	  	data: $("#frmGral2").serialize(true)+'&type=buscarGrupoModal',
		beforeSend: function(){			
			$("#load").html(LOADER3);
		},
	  	success: function(response) {	
		
			console.log(response)
			
			$("#divGps").html(response);
				

		},
		error:function(){
			alert(msgError);
		}
    });
}

$(document).ready(function() {
	$(document).on('click', '.btnAddPlan', function() {
		var user = $(this).data('user');
		var subject = $(this).data('subject');
		AddPlanDiv(user, subject);
	});

	$(document).on('click', '.btnAddCedula', function() {
		var user = $(this).data('user');
		var subject = $(this).data('subject');
		AddCedulaDiv(user, subject);
	});

	$(document).on('click', '#btnAddRow', function() {
		addRowRequerimiento();
	});

	$(document).on('click', '.btnShowInfo', function() {
		var user = $(this).data('user');
		showStudentInfo(user);
	});

	$(document).on('click', '.btnEditPlan', function() {
		var planId = $(this).data('id');
		EditPlanDiv(planId);
	});
});


function AddCedulaDiv(user_id, subject_id)
{
  $.ajax({
      url : WEB_ROOT+'/ajax/new/usuarios.php',
      type: "POST",
      data : {type: "addCedula", user_id: user_id, subject_id: subject_id},
      success: function(data)
      {
        showModal("Agregar Cédula", data);
        $('.submitForm').click(function() {
          AddCedula();
        });
      },
      error: function ()
      {
        alert('Algo salio mal, compruebe su conexion a internet');
      }
  });
}


function AddCedula()
{
	$.ajax({
			url : WEB_ROOT+'/ajax/new/usuarios.php',
			type: "POST",
			data :  $('#addCedulaForm').serialize(),
			success: function(data)
			{
					var splitResponse = data.split("[#]");

					if(splitResponse[0] == "fail")
					{
							ShowStatusPopUp($(splitResponse[1]));
					}
					else
					{
							ShowStatus($(splitResponse[1]));
							CloseFview();
					}
			},
			error: function ()
			{
					alert('Algo salio mal, compruebe su conexion a internet');
			}
	});
}


function AddPlanDiv(user_id, subject_id)
{
  $.ajax({
      url : WEB_ROOT+'/ajax/new/usuarios.php',
      type: "POST",
      data : {type: "addPlan", user_id: user_id, subject_id: subject_id},
      success: function(data)
      {
        showModal("Agregar Plan", data);
        $('.submitForm').click(function() {
          AddPlan();
        });
      },
      error: function ()
      {
        alert('Algo salio mal, compruebe su conexion a internet');
      }
  });
}


function AddPlan()
{
	var requerimientos = getRowsRequerimientos();
	$.ajax({
			url : WEB_ROOT+'/ajax/new/usuarios.php',
			type: "POST",
			data :  $('#addPlanForm').serialize()  + '&requerimientos=' + requerimientos,
			success: function(data)
			{
					var splitResponse = data.split("[#]");

					if(splitResponse[0] == "fail")
					{
							ShowStatusPopUp($(splitResponse[1]));
					}
					else
					{
							ShowStatus($(splitResponse[1]));
							CloseFview();
					}
			},
			error: function ()
			{
					alert('Algo salio mal, compruebe su conexion a internet');
			}
	});
}


function addRowRequerimiento() 
{
	var row = '<tr>' +
							'<td>' +
								'<input class="form-control" type="text" />' +
							'</td>' +
							'<td>' +
								'<input class="form-control" type="text" />' +
							'</td>' +
						'</tr>';
	$('#tb-requerimientos tr:last').after(row);
}


function getRowsRequerimientos() 
{
	var json = "[";
	var total = $('#tb-requerimientos tr').length;
	$('#tb-requerimientos tr').each(function (index) {
			json += '{"cantidad":"'+$(this).find("td").eq(0).find('.form-control').val()+'", '; 
			json += '"descripcion":"'+$(this).find("td").eq(1).find('.form-control').val()+'"}';
			if (index === total - 1) {
					
			}else {
					json += ', ';
			}
	});
	json += ']';
	return json;
}

function showStudentInfo(user_id)
{
	$.ajax({
		url : WEB_ROOT+'/ajax/new/usuarios.php',
		type: "POST",
		data : {type: "infoStudent", user_id: user_id},
		success: function(data)
		{
			showModal("Información del Alumno", data);
		},
		error: function ()
		{
			alert('Algo salio mal, compruebe su conexion a internet');
		}
	});
}

function EditPlanDiv(planId)
{
  $.ajax({
      url : WEB_ROOT+'/ajax/new/usuarios.php',
      type: "POST",
      data : {type: "editPlan", planId: planId},
      success: function(data)
      {
        showModal("Editar Plan", data);
        $('.submitForm').click(function() {
          EditPlan();
        });
      },
      error: function ()
      {
        alert('Algo salio mal, compruebe su conexion a internet');
      }
  });
}

function EditPlan()
{
	var requerimientos = getRowsRequerimientos();
	$.ajax({
			url : WEB_ROOT+'/ajax/new/usuarios.php',
			type: "POST",
			data :  $('#editPlanForm').serialize()  + '&requerimientos=' + requerimientos,
			success: function(data)
			{
					var splitResponse = data.split("[#]");

					if(splitResponse[0] == "fail")
					{
							ShowStatusPopUp($(splitResponse[1]));
					}
					else
					{
							ShowStatus($(splitResponse[1]));
							CloseFview();
					}
			},
			error: function ()
			{
					alert('Algo salio mal, compruebe su conexion a internet');
			}
	});
}

function verFormEvaluacion(personalId, userId, subjectId, tipo){
	var texto = "Agregar Cédula";
	if(tipo == 1)
		texto = "Agregar Plan";
	$.ajax({
	  	type: "POST",
	  	url: WEB_ROOT+'/ajax/new/usuarios.php',
	  	data: $("#frmGral2").serialize(true)+'&type=verFormEvaluacion&userId='+userId+'&subjectId='+subjectId+'&tipo='+tipo+'&personalId='+personalId,
		beforeSend: function(){			
			$("#load").html(LOADER3);
		},
	  	success: function(response) {	
		
			showModal(texto, response);
			$('.submitForm').click(function() {
				if(tipo == 1)
					AddPlan();
				else
					AddCedula();
			});
				

		},
		error:function(){
			alert(msgError);
		}
    });
}