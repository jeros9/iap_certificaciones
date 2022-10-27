<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-calendar"></i>Número de lote
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body">
        <form class="form" method="POST" id="form_lot" action="{$WEB_ROOT}/ajax/new/numero-lote.php">
            <input type="hidden" value="{$id}" name="id">
            <input type="hidden" value="{$subjectId}" name="subjectId">
            <input type="hidden" value="{$courseId}" name="courseId">
            <div class="form-group">
                <input class="form-control onlynumber" pattern="{literal}.{6,}{/literal}" title="Mínimo 6 números" type="text" name="lot_number" value="{$lot}" placeholder="Ingrese el número..." required>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>