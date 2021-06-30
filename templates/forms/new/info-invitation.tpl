<table class="table table-striped">
    <tbody>
        {* PRESIDENTE ELECTO *}
        <tr>
            <th colspan="2" class="text-center"><h3>Datos del Presidente Municipal Electo</h3></th>
        </tr>
        <tr>
            <td><b>Periodo:</b> {$invitation.periodName}</td>
            <td><b>Municipio:</b> {$invitation.municipalityName}</td>
        </tr>
        <tr>
            <td><b>Nombre del Presidente:</b> {$invitation.presidentName}</td>
            <td><b>Partido Pol&iacute;tico:</b> {$invitation.politicalGroup}</td>
        </tr>
        <tr>
            <td><b>Convenio:</b> {$invitation.agreement}</td>
            <td>
                <b>Invitaci&oacute;n:</b> 
                {if $invitation.invitationFile ne ''}
                    <a href="{$WEB_ROOT}/proceso/invitaciones/{$invitation.invitationFile}" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> Descargar</a>
                {/if}
            </td>
        </tr>
        {* RECEPCION *}
        <tr>
            <th colspan="2" class="text-center"><h3>Datos de la Persona que Recibe</h3></th>
        </tr>
        <tr>
            <td><b>Nombre de Quien Recibe:</b> {$invitation.receiverName}</td>
            <td><b>Cargo:</b> {$invitation.receiverCharge}</td>
        </tr>
        <tr>
            <td><b>Teléfono:</b> {$invitation.receiverPhone}</td>
            <td><b>Correo:</b> {$invitation.receiverEmail}</td>
        </tr>
        {* CONFIRMACION *}
        <tr>
            <th colspan="2" class="text-center"><h3>Datos de la Persona que Confirma</h3></th>
        </tr>
        <tr>
            <td><b>Nombre de Quien Confirma:</b> {$invitation.confirmedName}</td>
            <td><b>Teléfono:</b> {$invitation.confirmedPhone}</td>
        </tr>
        <tr>
            <td><b>Correo:</b> {$invitation.confirmedEmail}</td>
            <td>
                <b>Confirmaci&oacute;n:</b> 
                {if $invitation.confirmedFile ne ''}
                    <a href="{$WEB_ROOT}/proceso/confirmaciones/{$invitation.confirmedFile}" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> Descargar</a>
                {/if}        
            </td>
        </tr>
    </tbody>
</table>