{foreach from=$actividades item=subject}
    <tr>
        <td align="center" class="id">{$subject.activityId}</td>
        <td align="center">{$subject.activityType}</td>
        <td align="center">{$subject.initialDate|date_format:"%d-%m-%Y"} {$subject.horaInicial}</td>
        <td align="center">{$subject.finalDate|date_format:"%d-%m-%Y %H:%M:%S"}</td>
        <td align="center">{$subject.score}%</td>
        <td align="center">{$subject.resumen}</td>
        <td align="center">
            {if $subject.activityType == "Examen"}
                {if $majorModality == "Online"}
                    <a href="{$WEB_ROOT}/configuracion-group-examen/id/{$subject.activityId}" style="background:#32c5d2; color:white">Configurar</a>
                {else}
                    <a href="{$WEB_ROOT}/configuracion-group-examen/id/{$subject.activityId}" style="background:#32c5d2; color:white">Configurar</a>
                {/if}
            {else}
                N/A
            {/if}
        </td>
        <td align="center">
		
			{if $configMateria ne 'si'}
                <img src="{$WEB_ROOT}/images/icons/16/delete.png" class="spanDelete" data-id="{$subject.activityId}" id="d-{$subject.activityId}" name="d-{$subject.name}" title="Eliminar" />&nbsp;

                <a href="{$WEB_ROOT}/graybox.php?page=edit-group-activity&id={$subject.activityId}&auxTpl=admin&cId={$infoCourse.courseId}" data-target="#ajax" data-toggle="modal">
                    <img src="{$WEB_ROOT}/images/icons/16/pencil.png" class="spanEdit" id="d-{$subject.subjectId}" name="d-{$subject.name}" title="Editar" />
                </a>
			{else}	
				<a href="javascript:void(0)"  onClick="deleteAct('{$subject.activityConfigId}')">
				    <img src="{$WEB_ROOT}/images/icons/16/delete.png"  title="Eliminar" />&nbsp;
				</a>
				<a href="{$WEB_ROOT}/graybox.php?page=add-activity-c&id={$subject.activityConfigId}&auxTpl=admin&cId={$courseModuleId}" data-target="#ajax" data-toggle="modal">
					<img src="{$WEB_ROOT}/images/icons/16/pencil.png" class="spanEdit" id="d-{$subject.subjectId}" name="d-{$subject.name}" title="Editar" />
				</a>
			{/if}
            {if $subject.score > 0}
				{if $configMateria ne 'si'}
				<a href="{$WEB_ROOT}/score-group-activity-new&id={$subject.activityId}&auxTpl=admin&cId={$infoCourse.courseId}" >
                    <img src="{$WEB_ROOT}/images/icons/16/score.gif" class="spanEdit" id="d-{$subject.subjectId}" name="d-{$subject.name}" title="Calificar" />
                </a>
				{/if}
            {/if}
        </td>
    </tr>
    {foreachelse}
    <tr>
        <td colspan="12" align="center">No se encontr&oacute; ning&uacute;n registro.</td>
    </tr>
{/foreach}
