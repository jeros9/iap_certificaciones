<form class="form-horizontal" id="addMajorForm" name="addMajorForm" method="post" action="{$WEB_ROOT}/add-group-activity/id/{$id}">
    <input type="hidden" id="auxTpl" name="auxTpl" value="{$auxTpl}"/>
    <input type="hidden" id="id" name="id" value="{$id}"/>
    <input type="hidden" id="type" name="type" value="saveAddMajor"/>
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Tipo de Actividad:</label>
            <div class="col-md-8">
                <select id="activityType" name="activityType" class="form-control">
                    <option value="Tarea">Tarea</option>
                    <option value="Examen">Examen</option>
                    <option value="Lectura">Lectura</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Fecha Inicial:</label>
            <div class="col-md-8">
                <input type="text" name="initialDate" id="initialDate" value="{$date}"  class="form-control  date-picker"/>
            </div>
        </div>
		<div class="form-group">
            <label class="col-md-3 control-label">Hora Inicial:</label>
            <div class="col-md-8">
                <input type="time" name="horaInicial" id="horaInicial" value=""   style="width:200px" class="form-control "/>
               
            </div>
        </div>
		
		
        <div class="form-group">
            <label class="col-md-3 control-label">Fecha Final:</label>
            <div class="col-md-8">
                <input type="text" name="finalDate" id="finalDate" value="{$date}"  class="form-control  date-picker"/>
            </div>
        </div>
		<div class="form-group">
            <label class="col-md-3 control-label">Hora Final:</label>
            <div class="col-md-8">
                <input type="time" name="hora" id="hora" {if $actividad.horaFinal eq ''} value="23:59:00" {else} value="{$actividad.horaFinal}" {/if}   style="width:200px" class="form-control "/>
               
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Titulo:</label>
            <div class="col-md-8">
                <input type="text" name="resumen" id="resumen" value="" maxlength="30" class="form-control"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Descripcion:</label>
            <div class="col-md-8">
                <textarea name="description" id="description" style="width:150px"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Ponderacion:</label>
            <div class="col-md-8">
                <input type="text" name="ponderation" id="ponderation" value="" maxlength="3" class="form-control"/>
            </div>
        </div>

        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <input type="submit" class="btn green submitForm" id="addMajor" name="addMajor"/>
                    <button type="button" class="btn default closeModal">Cancelar</button>
                </div>
            </div>
        </div>



    </div>
</form>

<script type="text/javascript">
    tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        skin : "o2k7"
    });
</script>
