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