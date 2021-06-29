{foreach from=$invitations item=item key=key}    
    <tr>
        <td class="text-center">{$item.invitationId}</td>
        <td>{$item.presidentName}</td>
        <td>{$item.municipio}</td>
        <td>{$item.politicalGroup}</td>
        <td class="text-center">
            <button class="btn btn-info btn-xs spanInfo" id="{$item.invitationId}">
                <i class="fa fa-info-circle"></i> Detalles
            </button>
            <button class="btn btn-warning btn-xs spanEdit" id="{$item.invitationId}">
                <i class="fa fa-pencil-square-o"></i> Editar
            </button>
            <button class="btn btn-success btn-xs spanReceive" id="{$item.invitationId}">
                <i class="fa fa-thumbs-o-up"></i> Recibir
            </button>
            <button class="btn btn-primary btn-xs spanConfirm" id="{$item.invitationId}">
                <i class="fa fa-check-square-o"></i> Confirmar
            </button>
        </td>
    </tr>
{foreachelse}
    <tr>
    	<td colspan="5" class="text-center">Ning&uacute;n registro encontrado.</td>
    </tr>
{/foreach}
