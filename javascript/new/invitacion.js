$(document).ready(function() {
    $('#btnAddInvitation').click(function() {
        AddInvitationDiv();
    });

    $(document).on("click",".spanReceive",function() {
        let id = $(this).attr('id');
        ReceiveInvitationPopup(id);
    });

    $(document).on("click",".spanConfirm",function() {
        let id = $(this).attr('id');
        ConfirmInvitationPopup(id);
    });

    $(document).on("click",".spanEdit",function() {
        var id = $(this).attr('id');
        EditInvitationPopup(id);
    });

    $(document).on("click",".spanInfo",function() {
        var id = $(this).attr('id');
        InfoInvitationPopup(id);
    });
});

// NEW INVITATION
function AddInvitationDiv()
{
    $.ajax({
        url : WEB_ROOT+'/ajax/new/invitation.php',
        type: "POST",
        data : {type: "addInvitation"},
        success: function(data)
        {
            showModal("Agregar Invitación", data);
            $('.submitForm').click(function() {
                AddInvitation();
            });
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function AddInvitation()
{
    var fd = new FormData(document.getElementById("addInvitationForm"));
    $('.btn-loading').attr('disabled', true);
	$('.btn-loading').html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Espere por favor...');
    $.ajax({
        url : WEB_ROOT+'/ajax/new/invitation.php',
        type: "POST",
        data:  fd,
        processData: false,
		contentType: false,
        success: function(data)
        {
            $('.btn-loading').attr('disabled', false);
			$('.btn-loading').html('GUARDAR');
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
            $('.btn-loading').attr('disabled', false);
			$('.btn-loading').html('GUARDAR');
        }
    });
}

// RECEIVE INVITATION
function ReceiveInvitationPopup(id)
{
    $.ajax({
        url: WEB_ROOT+'/ajax/new/invitation.php',
        type: "POST",
        data: {type: "receiveInvitation", id:id},
        success: function(data)
        {
            showModal("Recibir Invitación", data);
            $('.submitForm').click(function() {
                ReceiveInvitation();
            });
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function ReceiveInvitation()
{
    $('.btn-loading').attr('disabled', true);
	$('.btn-loading').html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Espere por favor...');
    $.ajax({
        url : WEB_ROOT+'/ajax/new/invitation.php',
        type: "POST",
        data :  $('#receiveInvitationForm').serialize(),
        success: function(data)
        {
            $('.btn-loading').attr('disabled', false);
			$('.btn-loading').html('GUARDAR');
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
            $('.btn-loading').attr('disabled', false);
			$('.btn-loading').html('GUARDAR');
        }
    });
}

// CONFIRM INVITATION
function ConfirmInvitationPopup(id)
{
    $.ajax({
        url: WEB_ROOT+'/ajax/new/invitation.php',
        type: "POST",
        data: {type: "confirmInvitation", id:id},
        success: function(data)
        {
            showModal("Confirmar Invitación", data);
            $('.submitForm').click(function() {
                ConfirmInvitation();
            });
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function ConfirmInvitation()
{
    var fd = new FormData(document.getElementById("confirmInvitationForm"));
    $('.btn-loading').attr('disabled', true);
	$('.btn-loading').html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Espere por favor...');
    $.ajax({
        url: WEB_ROOT+'/ajax/new/invitation.php',
        type: "POST",
        data:  fd,
        processData: false,
		contentType: false,
        success: function(data)
        {
            $('.btn-loading').attr('disabled', false);
			$('.btn-loading').html('GUARDAR');
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
            $('.btn-loading').attr('disabled', false);
			$('.btn-loading').html('GUARDAR');
        }
    });
}

// EDIT
function EditInvitationPopup(id)
{
    $.ajax({
        url: WEB_ROOT+'/ajax/new/invitation.php',
        type: "POST",
        data: {type: "editInvitation", id:id},
        success: function(data)
        {
            showModal("Editar Invitación", data);
            $('.submitForm').click(function() {
                EditInvitation();
            });
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}

function EditInvitation()
{
    var fd = new FormData(document.getElementById("editInvitationForm"));
    $('.btn-loading').attr('disabled', true);
	$('.btn-loading').html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Espere por favor...');
    $.ajax({
        url: WEB_ROOT+'/ajax/new/invitation.php',
        type: "POST",
        data: fd,
        processData: false,
		contentType: false,
        success: function(data)
        {
            $('.btn-loading').attr('disabled', false);
			$('.btn-loading').html('GUARDAR');
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
            $('.btn-loading').attr('disabled', false);
			$('.btn-loading').html('GUARDAR');
        }
    });
}

// INFORMATION
function InfoInvitationPopup(id)
{
    $.ajax({
        url: WEB_ROOT+'/ajax/new/invitation.php',
        type: "POST",
        data: {type: "infoInvitation", id:id},
        success: function(data)
        {
            showModal("Detalles de la Invitación", data);
        },
        error: function ()
        {
            alert('Algo salio mal, compruebe su conexion a internet');
        }
    });
}