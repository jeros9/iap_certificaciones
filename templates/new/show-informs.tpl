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
                    <tr>
                        <th>Capacitador</th>
                        <th>Archivo</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$informs item=item}
                        <tr>
                            <td>{$item.name} {$item.lastname_paterno} {$item.lastname_materno}</td>
                            <td>
                                <a href="{$WEB_ROOT}/capacitador_informs/{$item.file}" target="_blank" class="btn btn-success btn-sm">
                                    <i class="fa fa-download"></i> Descargar Informe
                                </a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>