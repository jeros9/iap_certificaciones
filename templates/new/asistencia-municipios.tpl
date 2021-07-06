<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-bullhorm"></i><b> Reporte de Asistencia por Municipios</b></div>
        <div class="actions"></div>
    </div>
    <div class="portlet-body">
		{if $msj eq 'si'}
			<div class="alert alert-info alert-dismissable">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong></strong>La Solicitud ha sido enviada correctamente
			</div>
		{/if}
		<div id="msj"></div>
        {include file="boxes/status_no_ajax.tpl"}
        <div class="row">
		    <form id="frmFiltro">
				<div class="col-md-4">
                    <input type="text" id="fecha" name="fecha" class="form-control date-picker" placeholder="Fecha de Asistencia" /> 
                </div>
                <div class="col-md-8">
                    <button type="button" onClick="asistenciaMunicipios()" class="btn btn-success">Buscar</button>
                </div>
            </form>
        </div>
		<br>
		<div id="loader"></div>
		<div id="contenido"></div>
    </div>
</div>