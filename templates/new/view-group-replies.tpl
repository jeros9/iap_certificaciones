<div class="portlet box" style="border-radius: 2px;border: 2px solid #73AD21">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i><font color="#73b760">Topico {$topic.nombre}</font>
        </div>
        <div class="actions">
            <a href="{$WEB_ROOT}/view-modules-student/id/{$courseId}&tipo=foro" class="btn btn-default btn-sm" style="background:#73AD21; color:white">Regresar</a>
            <a href="javascript:void(0)" onClick="updateForo()" class="btn btn-default btn-sm" style="background:#1687ff; color:white">Actualizar</a>
        </div>
    </div>
    <div class="portlet-body">
        <div id="tblContent" class="content-in">
            {include file="boxes/status_no_ajax.tpl"}
			<form id="frmForo">
				<input type="hidden" name="topicsubId" value="{$topicsubId}">
				<input type="hidden" name="positionId" value="{$positionId}">
				<input type="hidden" name="id" value="{$id}">
			</form>
			<div id="divContenforo">
                {include file="{$DOC_ROOT}/templates/lists/new/group-topic-replies.tpl"}
			</div><br><br>
            {include file="{$DOC_ROOT}/templates/forms/new/add-group-reply.tpl"}
        </div>
    </div>
</div>
<input type="hidden" id="viewPage" name="viewPage" value="{$arrPage.currentPage}" />