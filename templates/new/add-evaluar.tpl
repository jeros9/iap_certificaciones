<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorn"></i>Evaluar
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body">
        <div class="form-body">
            <form class="form-horizontal" id="frmGral" name="frmGral" method="post" enctype="multipart/form-data">
                <input type="hidden" id="type" name="type" value="saveEstatus" />
                <input type="hidden" id="" name="subjectId" value="{$cId}" />
                <input type="hidden" name="courseId" value="{$courseId}">
                <input type="hidden" id="tipoDocumentoId" name="tipoDocumentoId" value="{$auxTpl}" />
                <input type="hidden" id="usuarioId" name="usuarioId" value="{$id}" />
                <select class="form-control" name="estatus">
                    <option value="s/n" {if $infoDoc.aprobado eq 's/n'} selected{/if}>Sin asignar</option>
                    <option value="no" {if $infoDoc.aprobado eq 'no'} selected{/if}>No Competente</option>
                    <option value="si" {if $infoDoc.aprobado eq 'si'} selected{/if}>Competente</option>
                </select>
            </form>
            <div id="loader3">
            </div>

            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="button" class="btn green" id="addMajor" name="addMajor"
                            onClick="saveEstatus()">Guardar</button>
                        <button type="button" type="button" class="btn default closeModal"
                            onClick="closeModal()">Cancelar</button>
                    </div>
                </div>
            </div>

        </div>


        <script type="text/javascript">
            tinyMCE.init({
                mode: "textareas",
                theme: "advanced",
                skin: "o2k7"

            });
        </script>

    </div>
</div>