<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i>Descarga de Certificado
        </div>
        <div class="actions"></div>
    </div>
    <div class="portlet-body">
        <div id="tblContent" class="content-in">
            {if $hasSurvey == false}
                <form id="frmSurvey">
                    <input type="hidden" name="userId" value="{$user.userId}">
                    <input type="hidden" name="subjectId" value="{$subject.subjectId}">
                    <input type="hidden" name="type" value="saveSurvey">
                    <!-- PREGUNTA 1 -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>1.- ¿La presentación del Estándar de Competencia y la aplicación del diagnóstico, lo realizaron sin costo para usted?</label><br>
                            <label class="radio-inline"><input type="radio" name="answer[1][0]" value="1">Si</label>
                            <label class="radio-inline"><input type="radio" name="answer[1][0]" value="0">No</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="i1">¿Por qué?</label>
                            <input type="text" class="form-control" id="i1" placeholder="¿Por qué?" name="answer[1][1]">
                        </div>
                    </div>
                    <!-- PREGUNTA 2 -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>2.- ¿Le proporcionaron la información suficiente y necesaria para iniciar su proceso de evaluación?</label><br>
                            <label class="radio-inline"><input type="radio" name="answer[2][0]" value="1">Si</label>
                            <label class="radio-inline"><input type="radio" name="answer[2][0]" value="0">No</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="i2">¿Por qué?</label>
                            <input type="text" class="form-control" id="i2" placeholder="¿Por qué?" name="answer[2][1]">
                        </div>
                    </div>
                    <!-- PREGUNTA 3 -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>3.- ¿Durante el proceso de evaluación le dieron trato digno y respetuoso?</label><br>
                            <label class="radio-inline"><input type="radio" name="answer[3][0]" value="1">Si</label>
                            <label class="radio-inline"><input type="radio" name="answer[3][0]" value="0">No</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="i3">¿Por qué?</label>
                            <input type="text" class="form-control" id="i3" placeholder="¿Por qué?" name="answer[3][1]">
                        </div>
                    </div>
                    <!-- PREGUNTA 4 -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>4.- ¿Le realizaron la evaluación sin que la Entidad de Certificación y Evaluación lo condicionarán a tomar un curso de capacitación?</label><br>
                            <label class="radio-inline"><input type="radio" name="answer[4][0]" value="1">Si</label>
                            <label class="radio-inline"><input type="radio" name="answer[4][0]" value="0">No</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="i4">¿Por qué?</label>
                            <input type="text" class="form-control" id="i4" placeholder="¿Por qué?" name="answer[4][1]">
                        </div>
                    </div>
                    <!-- PREGUNTA 5 -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>5.- ¿Le presentaron y acordaron con Usted el Plan de Evaluación?</label><br>
                            <label class="radio-inline"><input type="radio" name="answer[5][0]" value="1">Si</label>
                            <label class="radio-inline"><input type="radio" name="answer[5][0]" value="0">No</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="i5">¿Por qué?</label>
                            <input type="text" class="form-control" id="i5" placeholder="¿Por qué?" name="answer[5][1]">
                        </div>
                    </div>
                    <!-- PREGUNTA 6 -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>6.- ¿Recibió retroalimentación de los resultados de su evaluación?</label><br>
                            <label class="radio-inline"><input type="radio" name="answer[6][0]" value="1">Si</label>
                            <label class="radio-inline"><input type="radio" name="answer[6][0]" value="0">No</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="i6">¿Por qué?</label>
                            <input type="text" class="form-control" id="i6" placeholder="¿Por qué?" name="answer[6][1]">
                        </div>
                    </div>
                    <!-- PREGUNTA 7 -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>7.- ¿El evaluador atendió todas sus dudas?</label><br>
                            <label class="radio-inline"><input type="radio" name="answer[7][0]" value="1">Si</label>
                            <label class="radio-inline"><input type="radio" name="answer[7][0]" value="0">No</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="i7">¿Por qué?</label>
                            <input type="text" class="form-control" id="i7" placeholder="¿Por qué?" name="answer[7][1]">
                        </div>
                    </div>
                    <!-- PREGUNTA 8 -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>8.- ¿Le entregaron el certificado de acuerdo al compromiso establecido?</label><br>
                            <label class="radio-inline"><input type="radio" name="answer[8][0]" value="1">Si</label>
                            <label class="radio-inline"><input type="radio" name="answer[8][0]" value="0">No</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="i8">¿Por qué?</label>
                            <input type="text" class="form-control" id="i8" placeholder="¿Por qué?" name="answer[8][1]">
                        </div>
                    </div>
                    <!-- SUGERENCIAS O COMENTARIOS -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="comments">Sugerencias o comentarios</label>
                            <textarea class="form-control" name="comments" id="comments"></textarea>
                        </div>
                    </div>
                    <!-- ACUSE -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <!--div class="checkbox"-->
                                <label>
                                    <input type="checkbox" id="acuse" required> Manifiesto haber recibido por parte de la entidad de certificación y evaluación ECE 213-15, el certificado de competencia Laboral digital en el estándar {$subject.name}
                                </label>
                            <!--/div-->
                        </div>
                    </div>
                </form>
                <center><button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn green submitForm" onclick="sendSurvey()">Guardar</button></center>
            {else}
                <center><a href="{$WEB_ROOT}/alumnos/repositorio/{$ruta}" target="_blank" class="btn green">Descargar Certificado</a></center>
            {/if}
        </div>
    </div>
</div>


