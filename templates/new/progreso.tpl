<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-area-chart"></i> Progreso
        </div>
        {include file="boxes/status_no_ajax.tpl"}
    </div> 
    <div class="portlet-body">
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
                                            <th colspan="5" class="bg-dark text-white">{$group.subjectName} [{$group.groupName}]</th>
                                        </tr>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Cargo</th>
                                            <th class="text-center">Invitaci&oacute;n</th>
                                            <th class="text-center">Recepci&oacute;n</th>
                                            <th class="text-center">Confirmaci&oacute;n</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {foreach from=$progress['participants'][$group.courseId][$invitation.municipalityId] item=participant}
                                            <tr>
                                                <td>{$participant.names} {$participant.lastNamePaterno} {$participant.lastNameMaterno}</td>
                                                <td></td>
                                                <td class="text-center">
                                                    {if $item.invitationStatus eq 1}
                                                        <i class="fa fa-check-circle text-success"></i>
                                                    {else}
                                                        <i class="fa fa-times-circle text-danger"></i>
                                                    {/if}
                                                </td>
                                                <td class="text-center">
                                                    {if $item.receiverStatus eq 1}
                                                        <i class="fa fa-check-circle text-success"></i>
                                                    {else}
                                                        <i class="fa fa-times-circle text-danger"></i>
                                                    {/if}
                                                </td>
                                                <td class="text-center">
                                                    {if $item.confirmedStatus eq 1}
                                                        <i class="fa fa-check-circle text-success"></i>
                                                    {else}
                                                        <i class="fa fa-times-circle text-danger"></i>
                                                    {/if}
                                                </td>
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
    </div>
    <div id="loader2" > </div>
</div>
