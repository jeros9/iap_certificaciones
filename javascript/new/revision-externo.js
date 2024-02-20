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
		data: $("#frmGral2").serialize(true) + '&type=verFormEva&userId=' + userId + '&subjectId=' + subjectId + '&tipo=' + tipo,
		beforeSend: function () {
			$("#load").html(LOADER3);
		},
		success: function (response) { 
			$("#r_" + subjectId+"_"+courseId).toggle();
			$("#r_" + subjectId+"_"+courseId).html(response);  
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
		data: $("#frmGral2").serialize(true) + '&type=verFormEvaluacion&userId=' + userId + '&subjectId=' + subjectId + '&tipo=' + tipo + '&personalId=' + personalId+'&courseId='+courseId,
		beforeSend: function () {
			$("#load").html(LOADER3);
		},
		success: function (response) { 
			$("#r_" + subjectId+"_"+courseId).toggle();
			$("#r_" + subjectId+"_"+courseId).html(response); 
		},
		error: function () {
			alert(msgError);
		}
	});
}