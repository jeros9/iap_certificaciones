<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i> Informes
        </div>
        <div class="actions">
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    {*<tr>
                        <th colspan="2" class="text-center">
                            <a href="{$WEB_ROOT}/ajax/attendance.php?cId=0" target="_blank" class="btn btn-info btn-sm">
                                <i class="fa fa-download"></i> Descargar Lista Grupal
                            </a>
                        </th>
                    </tr>*}
                    <tr>
                        <th class="text-center">Capacitador</th>
                        <th class="text-center">Lista</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$attendances item=item}
                        <tr>
                            <td>{$item.name} {$item.lastname_paterno} {$item.lastname_materno}</td>
                            <td class="text-center">
                                <a href="{$WEB_ROOT}/ajax/attendance.php?cId={$id}&pId={$item.personalId}" target="_blank" class="btn btn-success btn-sm">
                                    <i class="fa fa-download"></i> Descargar Lista
                                </a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>