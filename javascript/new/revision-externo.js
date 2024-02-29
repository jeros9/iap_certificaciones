$('#evaluator').change(function () {
    $.ajax({
        type: "POST",
        url: WEB_ROOT + '/ajax/new/personal.php',
        data: { id: $(this).val(), type: 'buscarOptCertificaciones' },
        beforeSend: function () {
            $("#load").html(LOADER3);
        },
        success: function (response) {
            $('#div_certificaciones').html(response);
        },
        error: function () {
            alert(msgError);
        }
    });
});

$("body").on("change", "select[name='certificaciones']", function () {
    $.ajax({
        type: "POST",
        url: WEB_ROOT + '/ajax/new/usuarios.php',
        data: $("#form_revision").serialize(true) + '&type=buscarGruposEvaluador',
        beforeSend: function () {
            $("#load").html(LOADER3);
        },
        success: function (response) {
            $('#div_grupos').html(response);
        },
        error: function () {
            alert(msgError);
        }
    });
});

$("body").on("change", "#chAll", function () {
    if ($(this).prop("checked")) {
        $("input[type='checkbox']").prop("checked", true);
    } else {
        $("input[type='checkbox']").prop("checked", false);
    }
});

$(document).ready(function () {
    $(document).on('click', '#btnAddPlan', function () {
        AddPlan();
    });

    $(document).on('click', '.btnEditPlan', function () {
        var planId = $(this).data('id');
        EditPlanDiv(planId);
    });

    $(document).on('click', '#btnAddCedula', function () {
        AddCedula();
    });

    $(document).on('click', '#btnAddRow', function () {
        addRowRequerimiento();
    });

    $(document).on('click', '.btnShowInfo', function () {
        var user = $(this).data('user');
        showStudentInfo(user);
    });

    $(document).on('click', '.btnEditCedula', function () {
        var cedulaId = $(this).data('id');
        EditCedulaDiv(cedulaId);
    });
});

function verForm(userId, subjectId, tipo, courseId) {
    $.ajax({
        type: "POST",
        url: WEB_ROOT + '/ajax/new/usuarios.php',
        data: $("#frmGral2").serialize(true) + '&type=verForm&userId=' + userId + '&subjectId=' + subjectId + '&tipo=' + tipo + '&courseId=' + courseId,
        beforeSend: function () {
            $("#load").html(LOADER3);
        },
        success: function (response) {
            console.log(subjectId + "_" + courseId);
            $("#r_" + subjectId + "_" + courseId).toggle();
            $("#r_" + subjectId + "_" + courseId).html(response);
        },
        error: function () {
            alert(msgError);
        }
    });
}

function verFormEva(userId, subjectId, tipo, courseId) {
    $.ajax({
        type: "POST",
        url: WEB_ROOT + '/ajax/new/usuarios.php',
        data: $("#frmGral2").serialize(true) + '&type=verFormEva&userId=' + userId + '&subjectId=' + subjectId + '&tipo=' + tipo +'&courseId='+courseId,
        beforeSend: function () {
            $("#load").html(LOADER3);
        },
        success: function (response) {
            $("#r_" + subjectId + "_" + courseId).toggle();
            $("#r_" + subjectId + "_" + courseId).html(response);
        },
        error: function () {
            alert(msgError);
        }
    });
}

function verFormEvaluacion(personalId, userId, subjectId, tipo, courseId) {
    $.ajax({
        type: "POST",
        url: WEB_ROOT + '/ajax/new/usuarios.php',
        data: $("#frmGral2").serialize(true) + '&type=verFormEvaluacion&userId=' + userId + '&subjectId=' + subjectId + '&tipo=' + tipo + '&personalId=' + personalId + '&courseId=' + courseId,
        beforeSend: function () {
            $("#load").html(LOADER3);
        },
        success: function (response) {
            $("#r_" + subjectId + "_" + courseId).toggle();
            $("#r_" + subjectId + "_" + courseId).html(response);
        },
        error: function () {
            alert(msgError);
        }
    });
}

function addRowRequerimiento() {
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

function AddPlan() {
    var requerimientos = getRowsRequerimientos();
    var subjectId = $('input[name=subject_id]').val();
    var courseId = $('input[name=course_id]').val();
    $.ajax({
        url: WEB_ROOT + '/ajax/new/usuarios.php',
        type: "POST",
        data: $('#frmGralEval').serialize() + '&requerimientos=' + requerimientos,
        success: function (data) {
            var splitResponse = data.split("[#]");

            if (splitResponse[0] == "fail") {
                $("#r_" + subjectId + "_" + courseId).html("<div class='alert alert-danger'>" + splitResponse[1] + "</div>");
            }
            else {
                $("#r_" + subjectId + "_" + courseId).html("<div class='alert alert-success'>El plan se añadió correctamente.</div>");
            }
        },
        error: function () {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function getRowsRequerimientos() {
    var json = "[";
    var total = $('#tb-requerimientos tr').length;
    $('#tb-requerimientos tr').each(function (index) {
        json += '{"cantidad":"' + $(this).find("td").eq(0).find('.form-control').val() + '", ';
        json += '"descripcion":"' + $(this).find("td").eq(1).find('.form-control').val() + '"}';
        if (index === total - 1) {

        } else {
            json += ', ';
        }
    });
    json += ']';
    return json;
}

function EditPlanDiv(planId) {
    $.ajax({
        url: WEB_ROOT + '/ajax/new/usuarios.php',
        type: "POST",
        data: { type: "editPlan", planId: planId },
        success: function (data) {
            showModal("Editar Plan", data);
            $('.submitForm').click(function () {
                EditPlan();
            });
        },
        error: function () {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function EditPlan() {
    var requerimientos = getRowsRequerimientos();
    $.ajax({
        url: WEB_ROOT + '/ajax/new/usuarios.php',
        type: "POST",
        data: $('#editPlanForm').serialize() + '&requerimientos=' + requerimientos,
        success: function (data) {
            var splitResponse = data.split("[#]");

            if (splitResponse[0] == "fail") {
                ShowStatusPopUp($(splitResponse[1]));
            }
            else {
                ShowStatus($(splitResponse[1]));
                CloseFview();
            }
        },
        error: function () {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function enviarArchivo() {
    // En esta var va incluido $_POST y $_FILES
    var fd = new FormData(document.getElementById("frmGral"));
    $.ajax({
        url: WEB_ROOT + '/ajax/new/usuarios.php',
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        xhr: function () {
            var XHR = $.ajaxSettings.xhr();
            XHR.upload.addEventListener('progress', function (e) {
                console.log(e)
                var Progress = ((e.loaded / e.total) * 100);
                Progress = (Progress);
                console.log(Progress)
                $('#progress_').val(Math.round(Progress));
                $('#porcentaje_').html(Math.round(Progress) + '%');
            }, false);
            return XHR;
        },
        beforeSend: function () {
            // $("#loader").html(LOADER);
            // $("#erro_"+reqId).hide(0);
        },
        success: function (response) {
            //console.log(response);
            var splitResp = response.split("[#]");

            $("#loader").html("");

            if ($.trim(splitResp[0]) == "ok") {
                ShowStatus((splitResp[1]));
                closeModal();
                buscarCertificacion()
            } else if ($.trim(splitResp[0]) == "fail") {
                console.log(response);
                alert('Ocurrió un error, verifique que su archivo no supere los 15 MB');
                $("#txtErrMsg").show();
            } else {
                $("#txtErrMsg").show();
                alert('Ocurrió un error, verifique que su archivo no supere los 15 MB');
            }
        },
        error: function (response) {
            console.log(response);
            alert('Ocurrio un error');
        },
    })

}

function closeModal() {
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

function onDeleteCarta(id) {
    var resp = confirm("Seguro de  eliminar el Documento?");
    if (!resp)
        return;
    $.ajax({
        url: WEB_ROOT + '/ajax/new/usuarios.php',
        type: "POST",
        data: { type: "onDeleteCarta", id: id },
        success: function (data) {
            console.log(data);
            var splitResp = data.split("[#]");
            if ($.trim(splitResp[0]) == "ok") {
                ShowStatus((splitResp[1]));
                closeModal();
                buscarCertificacion();
            }
            else {
                alert('Ocurrio un error');
            }
        },
        error: function () {
            alert('Algo salio mal, compruebe su conexión a internet');
        }
    });
}

function AddCedula() {
    var subjectId = $('input[name=subject_id]').val();
    var courseId = $('input[name=course_id]').val();
    $.ajax({
        url: WEB_ROOT + '/ajax/new/usuarios.php',
        type: "POST",
        data: $('#frmGralEval').serialize(),
        success: function (data) {
            var splitResponse = data.split("[#]");

            if (splitResponse[0] == "fail") {
                $("#r_" + subjectId + "_" + courseId).html("<div class='alert alert-danger'>" + splitResponse[1] + "</div>");
            }
            else {
                $("#r_" + subjectId + "_" + courseId).html("<div class='alert alert-success'>La cédula se añadió correctamente.</div>");
            }
        },
        error: function () {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function EditCedulaDiv(cedulaId) {
    $.ajax({
        url: WEB_ROOT + '/ajax/new/usuarios.php',
        type: "POST",
        data: { type: "editCedula", cedulaId: cedulaId },
        success: function (data) {
            showModal("Editar Cédula", data);
            $('.submitForm').click(function () {
                EditCedula();
            });
        },
        error: function () {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function EditCedula() {
    $.ajax({
        url: WEB_ROOT + '/ajax/new/usuarios.php',
        type: "POST",
        data: $('#editCedulaForm').serialize(),
        success: function (data) {
            var splitResponse = data.split("[#]");
            if (splitResponse[0] == "fail")
                ShowStatusPopUp($(splitResponse[1]));
            else {
                ShowStatus($(splitResponse[1]));
                CloseFview();
            }
        },
        error: function () {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}


function saveEstatus(ev) { 
	// En esta var va incluido $_POST y $_FILES
	var fd = new FormData(document.getElementById("frmGral"));
	$.ajax({
		url: WEB_ROOT + '/ajax/new/usuarios.php',
		data: fd,
		processData: false,
		contentType: false,
		type: 'POST', 
		beforeSend: function () { 
		},
		success: function (response) { 
			console.log(response);
			var splitResp = response.split("[#]"); 
			$("#loader").html("");
			if ($.trim(splitResp[0]) == "ok") {
				ShowStatus((splitResp[1]));
				closeModal()
			} else if ($.trim(splitResp[0]) == "fail") {
				$("#txtErrMsg").show();

			} else {
				alert(msgFail);
			}
		},
	})

}
