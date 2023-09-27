$('#evaluator').change(function() {
    $.ajax({
        type: "POST",
        url: WEB_ROOT+'/ajax/new/personal.php',
        data: {id: $(this).val(), type: 'buscarOptCertificaciones'},
        beforeSend: function(){			
            $("#load").html(LOADER3);
        },
        success: function(response) {	
            $('#div_certificaciones').html(response);
        },
        error:function(){
            alert(msgError);
        }
    });
});

$("body").on("change", "select[name='certificaciones']", function(){
    $.ajax({
        type:"POST",
        url: WEB_ROOT+'/ajax/new/usuarios.php',
	  	data: $("#form_revision").serialize(true)+'&type=buscarGruposEvaluador',
        beforeSend: function(){			
            $("#load").html(LOADER3);
        },
        success: function(response) {	
            $('#div_grupos').html(response);
        },
        error:function(){
            alert(msgError);
        }
    });
});

$("body").on("change", "#chAll", function(){
    if ($(this).prop("checked")) {
        $("input[type='checkbox']").prop("checked",true);
    }else{
        $("input[type='checkbox']").prop("checked",false);
    }
});