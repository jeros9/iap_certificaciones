{if count($list) > 0}
    <form action="{$WEB_ROOT}/ajax/pdf/revision-portafolio.php" id="form_reporte" method="POST" target="_blank">
        <input type="hidden" value="{$evaluator}" name="evaluator">
        <input type="hidden" value="{$certification}" name="certificaciones">
        <input type="hidden" value="{$group}" name="grupos">
        <table class="table w-100 text-center">
            <thead>
                <tr>
                    <th class="text-center">Seleccionar<br>
                        <input class="form-control" type="checkbox" id="chAll">
                    </th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Grupo</th>
                    <th class="text-center" colspan="2">Fecha Plan</th>
                    <th class="text-center">Fecha Evaluación</th>
                    <th class="text-center">Fecha IEC</th>
                    <th class="text-center">Ficha</th>
                    <th class="text-center">Plan de evaluación</th>
                    <th class="text-center">Cédula</th>
                    <th class="text-center">IEC</th>
                    <th class="text-center">Productos</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$list item=item}
                    <tr>
                        <td><input type="checkbox" class="form-control" name="student[{$item.courseId}][{$item.alumnoId}]"></td>
                        <td>{$item.names}<br>{$item.lastNamePaterno}<br>{$item.lastNameMaterno}</td>
                        <td>{$item.group}</td>
                        <td>
                            <table>
                                <tr>
                                    <td>RC</td>
                                </tr>
                                <tr>
                                    <td>IAP</td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <div class="text-center">
                                <div>{$item.plan_date|date_format:"d-m-Y"}</div>
                                <div>{$item.fecha|date_format:"d-m-Y"}</div>
                                {if !empty($item.fecha) && $item.plan_date|date_format:"d-m-Y" == $item.fecha|date_format:"d-m-Y"}
                                    
                                    <i class="fa fa-check-circle text-success"></i>
                                {else}
                                    <i class="fa fa-times-circle text-danger"></i>
                                {/if}
                            </div>
                        </td>
                        <td>
                            <div>{$item.evaluation_date}</div>
                            <div>{$item.fecha_desarrollo}</div>
                            {if !empty($item.fecha) && $item.evaluation_date|date_format:"d-m-Y" == $item.fecha_desarrollo|date_format:"d-m-Y"}
                                <i class="fa fa-check-circle text-success"></i>
                            {else}
                                <i class="fa fa-times-circle text-danger"></i>
                            {/if}
                        </td>
                        <td>
                            {if empty($item.iec_date)}
                                <i class="fa fa-check-circle text-danger"></i>
                            {/if}
                            {$item.iec_date}
                        </td>
                        <td>
                            {if $item.actualizado eq 'si'}
                                <i class="fa fa-check-circle text-success"></i>
                            {else}
                                <i class="fa fa-times-circle text-danger"></i>
                            {/if}
                        </td>
                        <td>
                            {if $item.hasPlan eq 'no'}
                                <i class="fa fa-times-circle text-danger"></i>
                            {else}
                                <i class="fa fa-check-circle text-success"></i>
                            {/if}
                        </td>
                        <td>
                            {if $item.hasCedula eq 'no'}
                                <i class="fa fa-times-circle text-danger"></i>
                            {else}
                                <i class="fa fa-check-circle text-success"></i>
                            {/if}
                        </td>
                        <td>
                            {if $item.hasIec eq 'no'}
                                <i class="fa fa-times-circle text-danger"></i>
                            {else}
                                <i class="fa fa-check-circle text-success"></i>
                            {/if}
                        </td>
                        <td>
                            {if $item.hasProducts eq 'no'}
                                <i class="fa fa-times-circle text-danger"></i>
                            {else}
                                <i class="fa fa-check-circle text-success"></i>
                            {/if}
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
        <div class="form-group text-center">
            <button class="btn btn-success" type="submit">Generar reporte</button>
        </div>
    </form>
{else}
    Sin datos encontrados...
{/if}