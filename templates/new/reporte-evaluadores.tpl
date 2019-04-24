<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i><b>Reporte de Evaluadores</b> {$myModule.name|truncate:65:"..."} &raquo;
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body">
	{if $msj eq 'si'}
	<div class="alert alert-info alert-dismissable">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong></strong>La Solicitud ha sido enviada correctamente
	</div>
	{/if}
	<div id="msj">
	</div>

        {include file="boxes/status_no_ajax.tpl"}
		<form id='frmFiltro'>
			
			
			<div style="float:left">Evaluador<br>
				<select id="sel_evaluador" name='evaluador' class="form-control" style="width:150px; float:left">
					<option></option>
					{foreach from=$lstEvaluadores item=item}
						<option value='{$item.personalId}'>
							{$item.nombrePersona}
						</option>
					{/foreach}
				</select>
			</div>
			<div style="float:left">Certificaciones<br>
				<div id="div_certificaciones"></div>
			</div>
		</form>
		<br>
		
		<button onClick='buscarSolicitud()' class="btn green submitForm">Buscar</button>
		<div id='loader'>
		</div>
		<div id='contenido'>
        {include file="{$DOC_ROOT}/templates/lists/new/reporte-evaluadores.tpl"}
		</div>
    </div>
</div>