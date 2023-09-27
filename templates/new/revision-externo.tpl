<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i><b>Revisión A. Externo</b>
        </div>
    </div>
    <div class="portlet-body">
        <form class="row form" id="form_revision" action="{$WEB_ROOT}/ajax/new/revision-portafolio.php" method="POST" style="display: flex; align-items: end;">
            <input type="hidden" name="opcion" value="externo">
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
                <label>Fecha de Inicio</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio">
            </div>
            <div class="col-md-3 form-group">
                <label>Fecha Fin</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin">
            </div>
            <div class="col-md-3 form-group">
                <label for="resultado">Resultado</label>
                <select class="form-control" id="resultado" name="resultado">
                    <option value="0">--Seleccione el resultado--</option>
                    <option value="1">Competente</option>
                    <option value="2">No Competente</option>
                    <option value="3">Sin asignar</option>
                </select>
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