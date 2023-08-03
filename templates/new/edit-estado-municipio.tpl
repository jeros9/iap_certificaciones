<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i>Actualización de información
        </div>
        <div class="actions">
        </div>
    </div>
    <div class="portlet-body">
        <form class="form row" id="form_edicion" action="{$WEB_ROOT}/edit-estado-municipio" method="post">
            <div class="col-md-6 form-group">
                <label for="estadotId">Estado donde labora</label>
                <select class="form-control" id="estadotId" name="estadotId" onchange="ciudad_domt();">
                    {foreach from=$lstEstados item=item}
                        <option value="{$item.estadoId}" {($item.estadoId == $estudiante.estadoId) ? "selected" : ""}>
                            {$item.nombre}</option>
                    {/foreach}
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label for="municipio">Municipio donde labora</label>
                <div id="divMunicipiot">
                    <select class="form-control" id="municipio" name="municipio">
                        {foreach from=$lstMunicipios item=item}
                            <option value="{$item.municipioId}"
                                {($item.municipioId == $estudiante.municipioId) ? "selected" : ""}>
                                {$item.nombre}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button class="btn btn-success" type="submit">Actualizar</button>
            </div>
        </form>
    </div>
</div>