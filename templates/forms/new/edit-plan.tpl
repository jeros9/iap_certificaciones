<center>
    <a type="button" target='_blank' href='{$WEB_ROOT}/files/estandares/{$file_pdf}'  class="btn default red">Ver Estándar de Competencia</a>
</center>
<br>
<form class="form-horizontal" id="editPlanForm" name="editPlanForm" method="post">
    <input type="hidden" id="type" name="type" value="saveEditPlan"/>
    <input type="hidden" id="planId" name="planId" value="{$plan['planId']}"/>
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Se sugirió capacitación:</label>
            <div class="col-md-8">
                <select class="form-control" id="capacitacion" name="capacitacion">
                    {if $plan['capacitacion'] == 1}
                        <option value="1" selected>Si</option>
                        <option value="0">No</option>
                    {else}
                        <option value="1">Si</option>
                        <option value="0" selected>No</option>
                    {/if}
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2">
                                Requerimientos para el desarrollo de la Evaluación
                                <button id="btnAddRow" class="btn btn-primary pull-right" type="button">
                                    Agregar Requerimiento
                                </button>
                            </th>
                        </tr>
                        <tr>
                            <th width="10%">Cantidad</th>
                            <th width="90%">Requerimiento</th>
                        </tr>
                    </thead>
                    <tbody id="tb-requerimientos">
                        {foreach from=$requerimientos item=req}
                            <tr>
                                <td>
                                    <input class="form-control" type="text" value="{$req['cantidad']}" />
                                </td>
                                <td>
                                    <input class="form-control" type="text" value="{$req['requerimiento']}" />
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2">Acuerdo para el desarrollo de la Evaluación</th>
                        </tr>
                        <tr>
                            <th>Fecha</th>
                            <th>Horario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input class="form-control" type="date" id="fecha_desarrollo" name="fecha_desarrollo" value="{$plan['fecha_desarrollo_ymd']}" />
                            </td>
                            <td>
                                <input class="form-control" type="text" id="horario_desarrollo" name="horario_desarrollo" value="{$plan['horario_desarrollo']}" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2">Acuerdo para la presentación de los resultados de la evaluación</th>
                        </tr>
                        <tr>
                            <th>Fecha</th>
                            <th>Horario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input class="form-control" type="date" id="fecha_resultados" name="fecha_resultados" value="{$plan['fecha_resultados_ymd']}" />
                            </td>
                            <td>
                                <input class="form-control" type="text" id="horario_resultados" name="horario_resultados" value="{$plan['horario_resultados']}" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="button" id="btnAddPlan" class="btn green submitForm">Guardar</button>
                <button type="button" class="btn default closeModal">Cancelar</button>
            </div>
        </div>
    </div>
</form>