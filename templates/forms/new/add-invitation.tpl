<form id="addInvitationForm" name="addInvitationForm" method="post" enctype="multipart/form-data">
    <input type="hidden" id="type" name="type" value="saveAddInvitation" />
    <div class="row">
        <div class="form-group col-md-6">
            <label for="period">Periodo:</label>
            <select id="period" name="period" class="form-control">
                {foreach from=$periods item=item}
                    <option value="{$item.periodId}">{$item.name}</option>
                {/foreach}}
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="municipality">Municipio:</label>
            <select id="municipality" name="municipality" class="form-control">
                {foreach from=$municipios item=item}
                    <option value="{$item.municipioId}">{$item.nombre}</option>
                {/foreach}}
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <label class="presidentName">Nombre del Presidente Electo:</label>
            <input type="text" name="presidentName" id="presidentName" class="form-control" placeholder="Nombre del Presidente Electo">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="politicalGroup">Partido Pol&iacute;tico:</label>
            <input type="text" name="politicalGroup" id="politicalGroup" class="form-control" placeholder="Partido Pol&iacute;co">
        </div>
        <div class="form-group col-md-6">
            <label for="agreement">Convenio:</label>
            <select id="agreement" name="agreement" class="form-control">
                <option value="si">Con Convenio</option>
                <option value="no">Sin Convenio</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <label class="invitationFile">Invitaci&oacute;n (PDF):</label>
            <input type="file" name="invitationFile" id="invitationFile" class="form-control" accept="application/pdf">
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="button" class="btn green submitForm btn-loading">Guardar</button>
                <button type="button" class="btn default closeModal">Cancelar</button>
            </div>
        </div>
    </div>
</form>