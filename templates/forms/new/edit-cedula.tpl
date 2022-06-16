<form class="form-horizontal" id="editCedulaForm" name="editCedulaForm" method="post">
    <input type="hidden" id="type" name="type" value="saveEditCedula"/>
    <input type="hidden" id="cedulaId" name="cedulaId" value="{$cedula.cedulaId}"/>
    <div class="form-body">
        <div class="form-group col-md-12">
            <label class="control-label">Folio de Proceso:</label>
            <input class="form-control" name="folio_proceso" id="folio_proceso" value="{$cedula.folio_proceso}" />
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Fecha:</label>
            <input class="form-control date-picker" name="fecha" id="fecha" value="{$cedula.fecha}" />
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Mejores Prácticas:</label>
            <textarea class="form-control" name="mejores_practicas" id="mejores_practicas" cols="50" rows="6">{$cedula.mejores_practicas}</textarea>
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Áreas de Oportunidad:</label>
            <textarea class="form-control" name="areas_oportunidad" id="areas_oportunidad" cols="50" rows="6">{$cedula.areas_oportunidad}</textarea>
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Criterios de Evaluación que no se cubrieron:</label>
            <textarea class="form-control" name="criterios_no_cubrieron" id="criterios_no_cubrieron" cols="50" rows="6">{$cedula.criterios_no_cumplidos}</textarea>
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Recomendaciones:</label>
            <textarea class="form-control" name="recomendaciones" id="recomendaciones" cols="50" rows="6">{$cedula.recomendaciones}</textarea>
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Juicio de la Evaluación:</label>
            <textarea class="form-control" name="juicio_evaluacion" id="juicio_evaluacion" cols="50" rows="6">{$cedula.juicio_evaluacion}</textarea>
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Observaciones:</label>
            <textarea class="form-control" name="observaciones" id="observaciones" cols="50" rows="6">{$cedula.observaciones}</textarea>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-12 text-center">
                <button id="btnEditCedula" type="button" class="btn green submitForm">Guardar</button>
                <button type="button" class="btn default closeModal">Cancelar</button>
            </div>
        </div>
    </div>
</form>