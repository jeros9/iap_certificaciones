<div class="panel panel-info" style="margin-top: 40px;">
    <div class="panel-heading">Municipios Asistentes</div>
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
                                <td align="center">{$item.nombre}</td>
                                <td align="center">{$item.cantidad}</td>
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
