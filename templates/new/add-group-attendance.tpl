<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i> Lista de Asistencia
        </div>
    </div>
    <div class="portlet-body">
        <div id="tblContent" class="table-responsive">
            <form id="addMajorForm" name="addMajorForm" method="POST" action="{$WEB_ROOT}/add-group-attendance/id/{$id}">
                <input type="hidden" name="personalId" value="{$personalId}" />
                <input type="hidden" name="courseId" value="{$course.courseId}" />
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2">Alumno</th>
                            {foreach from=$days item=item}
                                <th colspan="2" class="text-center">{$item}</th>
                            {/foreach}
                        </tr>
                        <tr>
                            {foreach from=$days item=item key=key}
                                <th class="text-center">
                                    <input type="checkbox" onclick="applyAll(this, {$key+1}, 'Entrada')" /> Entrada
                                </th>
                                <th class="text-center">
                                    <input type="checkbox" onclick="applyAll(this, {$key+1}, 'Salida')" /> Salida
                                </th>
                            {/foreach}
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$theGroup item=item}
                            <tr>
                                <td class="text-uppercase">{$item.names} {$item.lastNamePaterno} {$item.lastNameMaterno}</td>
                                {foreach from=$days item=day key=key}
                                    <td class="text-center">
                                        {if ($student->Attendance($item.userId, $course.courseId, $personalId, $day, 'Entrada'))}
                                            <i class="fa fa-check-square text-success"></i>
                                        {else}
                                            <input type="checkbox" name="asistencia{$key+1}[Entrada][{$item.userId}]" class="Entrada-d{$key+1}" value="{$day}" />
                                        {/if}
                                    </td>
                                    <td class="text-center">
                                        {if ($student->Attendance($item.userId, $course.courseId, $personalId, $day, 'Salida'))}
                                            <i class="fa fa-check-square text-success"></i>
                                        {else}
                                            <input type="checkbox" name="asistencia{$key+1}[Salida][{$item.userId}]" class="Salida-d{$key+1}" value="{$day}" />
                                        {/if}
                                    </td>
                                {/foreach}
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>