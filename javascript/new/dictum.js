$( document ).ready(function() {

    $('#btnAddDictum').click(function() {
        AddDictumDiv();
    });

    $(document).on("click",".spanDelete",function() {
        var $id = $(this).attr('id');
        DeleteDictumPopup($id);
    });

    $(document).on("click",".spanEdit",function() {
        var $id = $(this).attr('id');
        EditDictumPopup($id);
    });

    $(document).on('change', '.selSubject', function() {
        var subjectId = $(this).val();
        if(subjectId > 0)
            GetIntegrantes(subjectId);
    });
	
});


function AddDictumDiv()
{
    $.ajax({
        url : WEB_ROOT+'/ajax/new/dictum.php',
        type: "POST",
        data : {type: "addDictum"},
        success: function(data)
        {
            showModal("Agregar Dictamen", data);
            $('.submitForm').click(function() {
                AddDictum();
            });
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function AddDictum()
{
    $.ajax({
        url : WEB_ROOT+'/ajax/new/dictum.php',
        type: "POST",
        data :  $('#addDictumForm').serialize(),
        success: function(data)
        {
            var splitResponse = data.split("[#]");
            console.log(data)
            if(splitResponse[0] == "fail")
            {
                ShowStatusPopUp($(splitResponse[1]));
            }
            else
            {
                ShowStatus($(splitResponse[1]));
                $('#tblContent').html(splitResponse[2]);
                CloseFview();
            }
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function DeleteDictumPopup(id)
{
    var $message = "¿Esta seguro de eliminar este dictamen? No podrá revertir esta acción";
    bootbox.confirm($message, function(result) {
        if(result == false)
        {
            return;
        }

        $.ajax({
            url : WEB_ROOT+'/ajax/new/dictum.php',
            type: "POST",
            data : {type: "deleteDictum", id: id},
            success: function(data, textStatus, jqXHR)
            {
                var splitResponse = data.split("[#]");
                ShowStatus(splitResponse[1]);
                $('#tblContent').html(splitResponse[2]);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Algo salio mal, compruebe su conexion a internet');
            }
        });

    });
}

function EditDictumPopup(id)
{
    $.ajax({
        url : WEB_ROOT+'/ajax/new/dictum.php',
        type: "POST",
        data : {type: "editDictum", id:id},
        success: function(data)
        {
            showModal("Editar Dictamen", data);
            $('.submitForm').click(function() {
                EditDictum();
            });
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function EditDictum()
{
    $.ajax({
        url : WEB_ROOT+'/ajax/new/dictum.php',
        type: "POST",
        data :  $('#editDictumForm').serialize(),
        success: function(data)
        {
			console.log(data)
            var splitResponse = data.split("[#]");

            if(splitResponse[0] == "fail")
            {
                ShowStatusPopUp($(splitResponse[1]));
            }
            else
            {
                ShowStatus($(splitResponse[1]));
                $('#tblContent').html(splitResponse[2]);
                CloseFview();
            }
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function InitJodit(element_id) 
{
    return new Jodit('#' + element_id, {
        language: 'es'
    });
}

function GetIntegrantes(subjectId)
{
    $.ajax({
        url : WEB_ROOT+'/ajax/new/dictum.php',
        type: "POST",
        data : {type: "getIntegrantes", subjectId: subjectId},
        success: function(data)
        {
            $('#integrante1').html(data);
            $('#integrante2').html(data);
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}
