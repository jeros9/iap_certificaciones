<form class="form-horizontal" id="addMajorForm" name="addMajorForm" method="POST" action="{$WEB_ROOT}/edit-group-activity/id/{$id}">
    <input type="hidden" id="auxTpl" name="auxTpl" value="{$auxTpl}"/>
    <input type="hidden" id="cId" name="cId" value="{$cId}"/>
    <input type="hidden" id="type" name="type" value="saveAddMajor"/>
	
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Tipo de Actividad:</label>
            <div class="col-md-8">
                <select id="activityType" name="activityType" class="form-control">
                    <option value="Tarea" {if $actividad.activityType == "Tarea"} selected="selected"{/if}>Tarea</option>
                    <option value="Examen" {if $actividad.activityType == "Examen"} selected="selected"{/if}>Examen</option>
                    <option value="Lectura" {if $actividad.activityType == "Lectura"} selected="selected"{/if}>Lectura</option>
                    <option value="Otro" {if $actividad.activityType == "Otro"} selected="selected"{/if}>Otro</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Fecha Inicial:</label>
            <div class="col-md-8">
                <input type="text" name="initialDate" id="initialDate" value="{$actividad.initialDate}"  class="form-control  date-picker"/>
            </div>
        </div>
		<div class="form-group">
            <label class="col-md-3 control-label">Hora Inicial:</label>
            <div class="col-md-8">
                <input type="time" name="horaInicial" id="horaInicial" value="{$actividad.horaInicial}"   style="width:200px" class="form-control "/> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Fecha Final:</label>
            <div class="col-md-8">
                <input type="text" name="finalDate" id="finalDate" value="{$actividad.finalDate}"  class="form-control  date-picker" style="width:200px"/>
            </div>
        </div>
		<div class="form-group">
            <label class="col-md-3 control-label">Hora Final:</label>
            <div class="col-md-8">
                <input type="time" name="hora" id="hora" value="{$actividad.horaFinal}"   style="width:200px" class="form-control "/>
               
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Titulo:</label>
            <div class="col-md-8">
                <input type="text" name="resumen" id="resumen" value="{$actividad.resumen}" maxlength="30" class="form-control"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Descripcion:</label>
            <div class="col-md-8">
                <textarea name="description" id="description" style="width:50%">{$actividad.description}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Ponderacion:</label>
            <div class="col-md-8">
                <input type="text" name="ponderation" id="ponderation" value="{$actividad.ponderation}" maxlength="3" class="form-control"/>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <input type="submit" class="btn green submitForm" id="addMajor" name="addMajor" value="Guardar"/>
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
