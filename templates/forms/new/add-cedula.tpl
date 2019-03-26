<form class="form-horizontal" id="addCedulaForm" name="addCedulaForm" method="post">
    <input type="hidden" id="type" name="type" value="saveAddCedula"/>
    <input type="hidden" id="type" name="personal_id" value="{$personal_id}"/>
    <input type="hidden" id="type" name="user_id" value="{$user_id}"/>
    <input type="hidden" id="type" name="subject_id" value="{$subject_id}"/>
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Mejores Prácticas:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="mejores_practicas" id="mejores_practicas" cols="50" rows="6"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Áreas de Oportunidad:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="areas_oportunidad" id="areas_oportunidad" cols="50" rows="6"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Criterios de Evaluación que no se cubrieron:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="criterios_no_cubrieron" id="criterios_no_cubrieron" cols="50" rows="6"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Recomendaciones:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="recomendaciones" id="recomendaciones" cols="50" rows="6"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Juicio de la Evaluación:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="juicio_evaluacion" id="juicio_evaluacion" cols="50" rows="6"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Observaciones:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="observaciones" id="observaciones" cols="50" rows="6"></textarea>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button id="btnAddCedula" type="button" class="btn green submitForm">Guardar</button>
                <button type="button" class="btn default closeModal">Cancelar</button>
            </div>
        </div>
    </div>
</form>