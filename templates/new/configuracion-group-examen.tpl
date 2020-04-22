<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i>Configuración de Examen
        </div>
        <div class="actions">
			<a href="{$WEB_ROOT}/edit-modules-group/id/{$activity.courseId}" id="btnAddMajor" class="btn green" title="Editar Modulo" >Regresar a Modulo</a>
        </div>
    </div>
    <div class="portlet-body">
        <div id="tblContent">
			{include file="boxes/status_no_ajax.tpl"}                                     
			<div id="tblContent">	
			{include file="{$DOC_ROOT}/templates/forms/configurar-group-examen.tpl"}
			</div>
		</div>
	</div>
</div>