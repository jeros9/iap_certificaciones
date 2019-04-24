$(function() {
    $('#sel_evaluador').change(function() {
        $.ajax({
            type: "POST",
            url: WEB_ROOT+'/ajax/new/personal.php',
            data: {id: $(this).val(), type: 'buscarOptCertificaciones'},
            beforeSend: function(){			
                $("#load").html(LOADER3);
            },
            success: function(response) {	
                console.log(response);
                $('#div_certificaciones').html(response);
            },
            error:function(){
                alert(msgError);
            }
        });
    });
});

function buscarSolicitud()
{
    $.ajax({
        type: "POST",
        url: WEB_ROOT+'/ajax/solicitud.php',
        data: "type=buscarSolicitudEv&"+$("#frmFiltro").serialize(true),
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