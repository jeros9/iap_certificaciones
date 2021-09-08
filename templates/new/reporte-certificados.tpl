<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-graduation-cap"></i> Reporte de Certificados
        </div>
        {include file="boxes/status_no_ajax.tpl"}
    </div> 
    <div class="portlet-body">
        <div class="row">
            <form id="frmFilter">
                <div class="form-group col-md-6">
                    <select id="periodo" name="periodo" class="form-control">
                        <option value="">-- Seleccionar --</option>
                        {foreach from=$periods item=item}
                            <option value="{$item.periodId}" {if $item.periodId eq $periodo} selected {/if}>
                                {$item.name} - {$periodo}
                            </option>
                        {/foreach}
                    </select>
                </div>
            </form>
            <div class="form-group col-md-6">
                <button type="button" class="btn btn-primary" onclick="buscar()">Buscar</button>
            </div>
        </div>
        <div id="loader"></div>
        <div id="contenido" class="table-responsive">{include file="{$DOC_ROOT}/templates/lists/new/reporte-certificados.tpl"}</div>
    </div>
    <div id="loader2" > </div>
</div>
