<form class="form-horizontal" id="addPlanForm" name="addPlanForm" method="post">
    <input type="hidden" id="type" name="type" value="saveAddPlan"/>
    <input type="hidden" id="type" name="personal_id" value="{$personal_id}"/>
    <input type="hidden" id="type" name="user_id" value="{$user_id}"/>
    <input type="hidden" id="type" name="subject_id" value="{$subject_id}"/>
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Se sugirió capacitación:</label>
            <div class="col-md-8">
                <select class="form-control" id="capacitacion" name="capacitacion">
                    <option value="1">Si</option>
                    <option value="0">No</option>
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
                        <tr>
                            <td>
                                <input class="form-control" type="text" />
                            </td>
                            <td>
                                <input class="form-control" type="text" />
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
                            <th colspan="3">Acuerdo para el desarrollo de la Evaluación</th>
                        </tr>
                        <tr>
                            <th>Lugar</th>
                            <th>Fecha</th>
                            <th>Horario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input class="form-control" type="text" id="lugar_desarrollo" name="lugar_desarrollo" />
                            </td>
                            <td>
                                <input class="form-control" type="date" id="fecha_desarrollo" name="fecha_desarrollo" />
                            </td>
                            <td>
                                <input class="form-control" type="text" id="horario_desarrollo" name="horario_desarrollo" />
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
                            <th colspan="3">Acuerdo para la presentación de los resultados de la evaluación</th>
                        </tr>
                        <tr>
                            <th>Lugar</th>
                            <th>Fecha</th>
                            <th>Horario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input class="form-control" type="text" id="lugar_resultados" name="lugar_resultados" />
                            </td>
                            <td>
                                <input class="form-control" type="date" id="fecha_resultados" name="fecha_resultados" />
                            </td>
                            <td>
                                <input class="form-control" type="text" id="horario_resultados" name="horario_resultados" />
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