<form id="confirmInvitationForm" name="confirmInvitationForm" method="post" enctype="multipart/form-data">
    <input type="hidden" id="type" name="type" value="saveConfirmInvitation" />
    <input type="hidden" name="invitationId" value="{$invitation.invitationId}" />
    <div class="row">
        <div class="form-group col-md-12">
            <label for="confirmedName">Nombre de quien confirm&oacute; la invitaci&oacute;n:</label>
            <input type="text" name="confirmedName" id="confirmedName" class="form-control" value="{$invitation.confirmedName}" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label class="confirmedPhone">Tel&eacute;fono:</label>
            <input type="text" name="confirmedPhone" id="confirmedPhone" class="form-control" value="{$invitation.confirmedPhone}" />
        </div>
        <div class="form-group col-md-6">
            <label class="confirmedEmail">Correo:</label>
            <input type="text" name="confirmedEmail" id="confirmedEmail" class="form-control" value="{$invitation.confirmedEmail}" />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <label class="confirmedFile">Confirmaci&oacute;n (PDF):</label>
            <input type="file" name="confirmedFile" id="confirmedFile" class="form-control" accept="application/pdf">
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