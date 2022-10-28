{if isset($option) && $option == "evaluator"} 
    <div class="page-content"> 
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-bullhorm"></i><b>Revisión de Portafolios</b>
                </div>
            </div>
            <div class="portlet-body">
                {include file="{$DOC_ROOT}/templates/lists/new/revision-portafolio.tpl"}
            </div>
        </div>
    </div>
{else} 
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i><b>Revisión de Portafolios</b>
        </div>
    </div>
    <div class="portlet-body">
        <form class="row form" id="form_revision" action="{$WEB_ROOT}/ajax/new/revision-portafolio.php" method="POST" style="display: flex; align-items: end;">
            <div class="col-md-3 form-group">
                <label>Evaluador</label>
                <select class="form-control" name="evaluator" id="evaluator" required>
                    <option value="">--Seleccione un evaluador--</option>
                    {foreach from=$evaluatorsList item=evaluator}
                        <option value="{$evaluator.personalId}">{$evaluator.name|cat:" "|cat:$evaluator.lastname_paterno|cat:" "|cat:$evaluator.lastname_materno}</option>
                    {/foreach}
                </select>
            </div>
            <div class="col-md-3 form-group">
                <label>Certificaciones</label>
                <div id="div_certificaciones">
                    <select class="form-control" required></select>
                </div>
            </div>
            <div class="col-md-3 form-group">
                <label>Grupo</label>
                <div id="div_grupos">
                    <select class="form-control" name="group">
                    </select>                
                </div>
            </div>
            <div class="col-md-3 form-group">
                <button class="btn btn-success" type="submit">Buscar</button>
            </div>
        </form>

        <div id='loader'>
		</div>
		<div id='contenido'>
        </div>
    </div>
</div>
{/if}