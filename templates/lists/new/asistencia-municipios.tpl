<div class="panel panel-info" style="margin-top: 40px;">
    <div class="panel-heading clearfix">
        Municipios Asistentes
        <a href="{$WEB_ROOT}/ajax/attendance-municipalities.php?fecha={$fecha}" target="_blank" class="btn btn-success pull-right">
            <i class="fa fa-file-pdf-o"></i> Imprimir
        </a>
    </div>
    <div class="panel-body">
        <div class="col-md-8">
            <div class="table-responsive">
                <table width="100%" class="tblGral table table-bordered table-striped table-condensed flip-content">
                    <thead>
                        <tr>
                            <th class="text-center">Municipio</th>	  
                            <th class="text-center">Cantidad</th> 
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$municipios item=item}
                            <tr>
                                <td>
                                    <a href="{$WEB_ROOT}/graybox.php?page=show-municipality-attendances&id={$item.municipioId}&fecha={$item.attendanceDay}" data-target="#ajax" data-toggle="modal" title="Lista de Asistencia"><i class="fa fa-plus-circle"></i></a> {$item.nombre}
                                </td>
                                <td class="text-center">{$item.cantidad}</td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <table width="100%" class="tblGral table table-bordered table-striped table-condensed flip-content">
                <thead>
                    <tr>
                        <th class="text-center">Total Municipios</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">{$total_municipios}</td>
                    </tr>
                </tbody>
            </table>
            <table width="100%" class="tblGral table table-bordered table-striped table-condensed flip-content">
                <thead>
                    <tr>
                        <th class="text-center">Total Personas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">{$total_personas}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
