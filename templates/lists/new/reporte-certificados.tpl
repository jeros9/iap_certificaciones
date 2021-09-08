<h3>Periodo: {$progress['info']['name']}</h3>
<div class="panel-group" id="accordion">
    {foreach from=$progress['invitations'] item=invitation}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{$invitation.invitationId}">
                        {$invitation.municipality}
                    </a>
                </h4>
            </div>
            <div id="collapse{$invitation.invitationId}" class="panel-collapse collapse {if ($i++) eq 0} in {/if}">
                <div class="panel-body">
                    {foreach from=$progress['groups'] item=group}
                        <table class="table table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th colspan="16" class="bg-dark text-white">{$group.subjectName} [{$group.groupName}]</th>
                                </tr>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Nombre Candidato</th>
                                    <th class="text-center">Cargo</th>
                                    <th class="text-center">Estatus</th>
                                    <th class="text-center">Fecha de Descarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach from=$progress['participants'][$group.courseId][$invitation.municipalityId] item=participant}
                                    <tr>
                                        <td class="text-center">{$no++}</td>
                                        <td>{$participant.names} {$participant.lastNamePaterno} {$participant.lastNameMaterno}</td>
                                        <td>{$participant.orderName}</td>
                                        <td class="text-center">
                                            {if $participant.hasCertificate eq 'no'}
                                                <i class="fa fa-times-circle text-danger"></i>
                                            {else}
                                                <i class="fa fa-check-circle text-success"></i>
                                            {/if}
                                        </td>
                                        <td class="text-center">{$participant.certificateDate}</td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    {/foreach}
                </div>
            </div>
        </div>
    {/foreach}
</div> 