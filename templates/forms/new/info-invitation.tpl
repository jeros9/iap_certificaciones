<table class="table table-striped">
    <tbody>
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
            <td><b>Invitaci&oacute;n:</b> <a href="{$WEB_ROOT}/proceso/invitaciones/{$invitation.invitationFile}" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> Descargar</a></td>
        </tr>
    </tbody>
</table>