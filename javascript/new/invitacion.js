$( document ).ready(function() {

    $('#btnAddMajor').click(function() {
        AddMajorDiv();
    });

    $(document).on("click",".spanDelete",function() {
        var $id = $(this).attr('id');
        DeleteMajorPopup($id);
    });

    $(document).on("click",".spanEdit",function() {
        var $id = $(this).attr('id');
        EditMajorPopup($id);
    });
});

function EditMajorPopup(id)
{
    $.ajax({
        url : WEB_ROOT+'/ajax/new/major.php',
        type: "POST",
        data : {type: "editMajor", id:id},
        success: function(data)
        {
            showModal("Editar Carrera", data);
            $('.submitForm').click(function() {
                EditMajor();
            });
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function EditMajor()
{
    $.ajax({
        url : WEB_ROOT+'/ajax/new/major.php',
        type: "POST",
        data :  $('#editMajorForm').serialize(),
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

function AddMajorDiv()
{
    $.ajax({
        url : WEB_ROOT+'/ajax/new/major.php',
        type: "POST",
        data : {type: "addMajor"},
        success: function(data)
        {
            showModal("Agregar Carrera", data);
            $('.submitForm').click(function() {
                AddMajor();
            });
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function AddMajor()
{
    $.ajax({
        url : WEB_ROOT+'/ajax/new/major.php',
        type: "POST",
        data :  $('#addMajorForm').serialize(),
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

function DeleteMajorPopup(id)
{
    var $message = "¿Esta seguro de eliminar esta carrera? Toma en cuenta que podrían perdese muchas asociaciones (Horarios, maestros, etc)";
    bootbox.confirm($message, function(result) {
        if(result == false)
        {
            return;
        }

        $.ajax({
            url : WEB_ROOT+'/ajax/new/major.php',
            type: "POST",
            data : {type: "deleteMajor", id: id},
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
