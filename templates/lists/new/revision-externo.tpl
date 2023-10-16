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
                    <th class="text-center">Fecha Inicio Certificación</th>
                    <th class="text-center">Fecha Plan</th>
                    <th class="text-center">Folio Proceso</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$list item=item}
                    <tr>
                        <td><input type="checkbox" class="form-control" name="student[{$item.courseId}][{$item.alumnoId}]"></td>
                        <td>{$item.initialDate}</td>
                        <td>{$item.plan_date}</td>
                        <td>
                            {$item.folio_proceso}
                        </td>
                        <td>{$item.names} {$item.lastNamePaterno} {$item.lastNameMaterno}</td>
                        <td>
                            <a href="{$WEB_ROOT}/graybox.php?page=student-certificacion-auditor&id={$item.alumnoId}&auxTpl=1&course={$item.courseId}"
                                data-target="#ajax" data-toggle="modal" data-width="1000px" title="VER CERTIFICACIONES">
                                <i class="material-icons">
                                    picture_in_picture
                                </i>
                            </a>
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