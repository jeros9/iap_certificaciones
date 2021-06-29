<form id="receiveInvitationForm" name="receiveInvitationForm" method="post">
    <input type="hidden" id="type" name="type" value="saveReceiveInvitation" />
    <input type="hidden" name="invitationId" value="{$invitation.invitationId}" />
    <div class="row">
        <div class="form-group col-md-12">
            <label for="receiverName">Nombre de quien recibi&oacute; la invitaci&oacute;n:</label>
            <input type="text" name="receiverName" id="receiverName" class="form-control" value="{$invitation.receiverName}" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <label for="receiverCharge">Cargo quien recibi&oacute; la invitaci&oacute;n:</label>
            <input type="text" name="receiverCharge" id="receiverCharge" class="form-control" value="{$invitation.receiverCharge}" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label class="receiverPhone">Tel&eacute;fono:</label>
            <input type="text" name="receiverPhone" id="receiverPhone" class="form-control" value="{$invitation.receiverPhone}" />
        </div>
        <div class="form-group col-md-6">
            <label class="receiverEmail">Correo:</label>
            <input type="text" name="receiverEmail" id="receiverEmail" class="form-control" value="{$invitation.receiverEmail}" />
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="button" class="btn green submitForm">Guardar</button>
                <button type="button" class="btn default closeModal">Cancelar</button>
            </div>
        </div>
    </div>
</form>