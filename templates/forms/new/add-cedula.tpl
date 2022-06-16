<form class="form-horizontal" id="addCedulaForm" name="addCedulaForm" method="post">
    <input type="hidden" id="type" name="type" value="saveAddCedula"/>
    <input type="hidden" id="type" name="personal_id" value="{$personal_id}"/>
    <input type="hidden" id="type" name="user_id" value="{$user_id}"/>
    <input type="hidden" id="type" name="subject_id" value="{$subject_id}"/>
    <div class="form-body">
        <div class="form-group col-md-12">
            <label class="control-label">Folio de Proceso:</label>
            <input type="text" class="form-control" name="folio_proceso" id="folio_proceso" />
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Mejores Prácticas:</label>
            <textarea class="form-control" name="mejores_practicas" id="mejores_practicas" cols="50" rows="6"></textarea>
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Áreas de Oportunidad:</label>
            <textarea class="form-control" name="areas_oportunidad" id="areas_oportunidad" cols="50" rows="6"></textarea>
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Criterios de Evaluación que no se cubrieron:</label>
            <textarea class="form-control" name="criterios_no_cubrieron" id="criterios_no_cubrieron" cols="50" rows="6"></textarea>
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Recomendaciones:</label>
            <textarea class="form-control" name="recomendaciones" id="recomendaciones" cols="50" rows="6"></textarea>
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Juicio de la Evaluación:</label>
            <textarea class="form-control" name="juicio_evaluacion" id="juicio_evaluacion" cols="50" rows="6"></textarea>
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Observaciones:</label>
            <textarea class="form-control" name="observaciones" id="observaciones" cols="50" rows="6"></textarea>
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