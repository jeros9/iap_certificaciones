<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i>Agregar Informe del Curso
        </div>
    </div>
    <div class="portlet-body">
        <div id="tblContent">
        <form class="form-horizontal" id="addMajorForm" name="addMajorForm" method="post" action="{$WEB_ROOT}/add-group-inform/id/{$id}" enctype="multipart/form-data">
            <input type="hidden" id="auxTpl" name="auxTpl" value="{$auxTpl}"/>
            <input type="hidden" id="cId" name="cId" value="{$cId}"/>
            <div class="form-body">
                <div class="form-group col-md-12 text-center">
                    <label for="informe">Informe del Curso (PDF):</label>
                    <center><input type="file" name="informe" id="informe" /></center>
                </div>
        
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" class="btn green submitForm" id="addMajor" name="addMajor" accept="application/pdf" />
                            <button type="button" class="btn default closeModal">Cancelar</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
        </div>
    </div>
</div>