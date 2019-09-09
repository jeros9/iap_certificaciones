<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i><b>Reporte por Certificación</b>
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
			<div style="float:left">Certificaciones
			 <select name="certificacionId" class="form-control" style="width:100px" onChange="buscarGrupos()">
				<option></option>
				{foreach from=$lstCertificaciones item=item key=key}
				<option value="{$item.subjectId}">{$item.name}</option>
				{/foreach}
			 </select>
			</div>
			<div style="float:left">
			Grupos
				<div id="divGrupos">
				</div>
			</div>
		</form>
		<br>
		
		<button onClick='buscarSolicitud()' class="btn green submitForm">Buscar</button>
		<div id='loader'>
		</div>
		<div id='contenido'></div>
    </div>
</div>