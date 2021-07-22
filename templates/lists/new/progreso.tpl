<h3>Periodo: {$progress['info']['name']}</h3>
<div class="panel-group" id="accordion">
    {foreach from=$progress['invitations'] item=invitation}
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{$invitation.invitationId}">
                        {$invitation.municipality}
                    </a>
                </h4>
                <button class="btn btn-success pull-right spanOrder" id="{$invitation.invitationId}">
                    <i class="fa fa-check-square-o"></i> Encargos
                </button>
            </div>
            <div id="collapse{$invitation.invitationId}" class="panel-collapse collapse {if ($i++) eq 0} in {/if}">
                <div class="panel-body">
                    {foreach from=$progress['groups'] item=group}
                        {if count($progress['participants'][$group.courseId][$invitation.municipalityId]) > 0}
                            <table class="table table-bordered table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th colspan="16" class="bg-dark text-white">{$group.subjectName} [{$group.groupName}]</th>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">Nombre</th>
                                        <th rowspan="2">Cargo</th>
                                        <th colspan="3" class="text-center th-sm">Invitaci&oacute;n</th>
                                        <th colspan="4" class="text-center th-sm">Registro</th>
                                        <th class="text-center th-sm">Capacitaci&oacute;n</th>
                                        <th colspan="5" class="text-center th-sm">Portafolio</th>
                                        <th class="text-center th-sm">Certificado</th>
                                    </tr>
                                    <tr>
                                        {* Invitacion *}
                                        <th class="text-center th-sm">Invitaci&oacute;n</th>
                                        <th class="text-center th-sm">Recepci&oacute;n</th>
                                        <th class="text-center th-sm">Confirmaci&oacute;n</th>
                                        {* Registro *}
                                        <th class="text-center th-sm">Ficha</th>
                                        <th class="text-center th-sm">Fotograf&iacute;a</th>
                                        <th class="text-center th-sm">Acuse</th>
                                        <th class="text-center th-sm">Diagn&oacute;stico</th>
                                        {* Capacitacion *}
                                        <th class="text-center th-sm">Capacitaci&oacute;n</th>
                                        {* Portafolio *}
                                        <th class="text-center th-sm">Evaluador</th>
                                        <th class="text-center th-sm">Plan de Evaluaci&oacute;n</th>
                                        <th class="text-center th-sm">C&eacute;dula</th>
                                        <th class="text-center th-sm">IEC</th>
                                        <th class="text-center th-sm">Productos</th>
                                        {* Certificado *}
                                        <th class="text-center th-sm">Certificado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach from=$progress['participants'][$group.courseId][$invitation.municipalityId] item=participant}
                                        <tr>
                                            <td>{$participant.names} {$participant.lastNamePaterno} {$participant.lastNameMaterno}</td>
                                            <td>{$participant.orderName}</td>
                                            <td class="text-center">
                                                {if $invitation.invitationStatus eq 1}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {else}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {/if}
                                            </td>
                                            <td class="text-center">
                                                {if $invitation.receiverStatus eq 1}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {else}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {/if}
                                            </td>
                                            <td class="text-center">
                                                {if $invitation.confirmedStatus eq 1}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {else}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {/if}
                                            </td>
                                            <td class="text-center">
                                                {if $participant.actualizado eq 'si'}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {else}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {/if}
                                            </td>
                                            <td class="text-center">
                                                {if $participant.rutaFoto ne ''}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {else}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {/if}
                                            </td>
                                            <td class="text-center">
                                                {if $participant.acuseDerecho eq 'si'}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {else}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {/if}
                                            </td>
                                            <td class="text-center">
                                                {if $participant.evalDocenteCompleta eq 'si'}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {else}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {/if}
                                            </td>
                                            <td class="text-center">
                                                {if $participant.userAttendance eq $group.totalAttendance}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {else}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {/if}
                                            </td>
                                            <td class="text-center">
                                                {if $participant.hasEvaluator eq 'no'}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {else}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {/if}
                                            </td>
                                            <td class="text-center">
                                                {if $participant.hasPlan eq 'no'}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {else}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {/if}
                                            </td>
                                            <td class="text-center">
                                                {if $participant.hasCedula eq 'no'}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {else}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {/if}
                                            </td>
                                            <td class="text-center">
                                                {if $participant.hasIec eq 'no'}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {else}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {/if}
                                            </th>
                                            <td class="text-center">
                                                {if $participant.hasProducts eq 'no'}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {else}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {/if}
                                            </td>
                                            <td class="text-center">
                                                {if $participant.hasCertificate eq 'no'}
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                {else}
                                                    <i class="fa fa-check-circle text-success"></i>
                                                {/if}
                                            </td>
                                        </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        {/if}
                    {/foreach}
                </div>
            </div>
        </div>
    {/foreach}
</div> 