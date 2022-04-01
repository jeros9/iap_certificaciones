{if $hasTemplate}
    <form id="AddFinalTestForm" name="AddFinalTestForm" method="post">
        <input type="hidden" id="testId" name="testId" value="{$testId}"/>
        <input type="hidden" id="courseId" name="courseId" value="{$courseId}"/>
        <input type="hidden" id="subject" name="subject" value="{$subject}"/>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="initialDate">Fecha Inicial:</label>
                <input type="text" name="initialDate" id="initialDate" size="10" class="form-control date-picker" required autocomplete="off" />
            </div>
            <div class="form-group col-md-6">
                <label for="horaInicial">Hora Inicial:</label>
                <input type="time" name="horaInicial" id="horaInicial" class="form-control" required/>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="finalDate">Fecha Final:</label>
                <input type="text" name="finalDate" id="finalDate" size="10" class="form-control date-picker" required autocomplete="off" />
            </div>
            <div class="form-group col-md-6">
                <label for="horaFinal">Hora Final:</label>
                <input type="time" name="horaFinal" id="horaFinal" class="form-control" required/>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="ponderation">Ponderación:</label>
                <input type="text" name="ponderation" id="ponderation" class="form-control" value="{$test.ponderation}" readonly/>
            </div>
            <div class="form-group col-md-4">
                <label for="timeLimit">Tiempo Límite (Minutos):</label>
                <input type="text" name="timeLimit" id="timeLimit" class="form-control" value="{$test.timeLimit}" required/>
            </div>
            <div class="form-group col-md-4">
                <label for="noQuestions">Número de Preguntas:</label>
                <input type="text" name="noQuestions" id="noQuestions" class="form-control" value="{$test.noQuestions}" readonly/>
            </div>
        </div>
    </form>
    <div id="resft"></div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn green submitForm" onClick="AddFinalTest()">Guardar</button>
            </div>
        </div>
    </div>
{else}
    <div class="alert alert-danger">
        No se ha cargado la plantilla de Examen, por favor contacta con el Departamento de Desarrollo Tecnológico e Informático...
    </div>
{/if}