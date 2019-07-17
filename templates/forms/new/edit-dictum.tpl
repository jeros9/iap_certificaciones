<form class="form-horizontal" id="editDictumForm" name="editDictumForm" method="post">
    <input type="hidden" id="type" name="type" value="saveEditDictum"/>
    <input type="hidden" id="id" name="id" value="{$info.dictumId}" />

    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label" for="fecha">Fecha:</label>
            <div class="col-md-8">
                <input type="text" name="fecha" id="fecha" class="form-control date-picker" placeholder="Fecha" autocomplete="off" value="{$info.date_dmy}" />
            </div>
        </div>
        <!--div class="form-group">
            <label class="col-md-3 control-label" for="estandar">Estándar de Competencia:</label>
            <div class="col-md-8">
                <select id="estandar" name="estandar" class="form-control selSubject">
                    <option value="">-- Seleccionar --</option>
                    {foreach from=$subjects item=item key=key}
                        <option value="{$item.subjectId}">{$item.name}</option>
                    {/foreach}
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="folio">Folio:</label>
            <div class="col-md-8">
                <input type="text" name="folio" id="folio" class="form-control" placeholder="Folio" />
            </div>
        </div><div class="form-group">
            <label class="col-md-3 control-label" for="lote">Lote:</label>
            <div class="col-md-8">
                <input type="text" name="lote" id="lote" class="form-control" placeholder="Lote" />
            </div>
        </div><div class="form-group">
            <label class="col-md-3 control-label" for="muestra">Muestra:</label>
            <div class="col-md-8">
                <input type="text" name="muestra" id="muestra" class="form-control" placeholder="Muestra" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="integrante1">Integrante 1:</label>
            <div class="col-md-8">
                <select id="integrante1" name="integrante1" class="form-control">
                    <option value="">-- Seleccionar --</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="integrante2">Integrante 2:</label>
            <div class="col-md-8">
                <select id="integrante2" name="integrante2" class="form-control">
                    <option value="">-- Seleccionar --</option>
                </select>
            </div>
        </div-->
        <div class="form-group">
            <label class="col-md-3 control-label" for="informe">Informe:</label>
            <div class="col-md-8">
                <textarea name="informe" id="informe" cols="70" rows="6" class="form-control" >{$info.content}</textarea>
            </div>
        </div>
        <!--div class="form-group">
            <label class="col-md-3 control-label" for="fallo">Fallo:</label>
            <div class="col-md-8">
                <select id="fallo" name="fallo" class="form-control">
                    <option value="">-- Seleccionar --</option>
                    <option value="Procedente">Procedente</option>
                    <option value="No Procedente">No Procedente</option>
                </select>
            </div>
        </div-->
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="button" class="btn green submitForm">Guardar</button>
                <button type="button" class="btn default closeModal">Cancelar</button>
            </div>
        </div>
    </div>
</form>

<script>
    var informe_jodit = InitJodit('informe');
</script>