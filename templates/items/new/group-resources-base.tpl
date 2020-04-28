{foreach from=$resources item=subject}
    <tr>
        <td align="center">{$subject.name}</td>
        <td align="center">{$subject.description}</td>
        <td align="center">
			{if $configMateria eq 'si'}
				<a href="{$WEB_ROOT}/download.php?file=resources/config/{$subject.path}"><i class="fa fa-download"></i></a>
			{else}
				<a href="{$WEB_ROOT}/download.php?file=capacitador_resources/{$subject.path}"><i class="fa fa-download"></i></a>
			{/if}
		</td>
		{if $page != "view-modules-student"}
			<td align="center">
				{if $configMateria eq 'si'}
					<a href="javascript:void(0)"  onClick="deleteResource('{$subject.resourceConfigId}')">
						<img src="{$WEB_ROOT}/images/icons/16/delete.png"  title="Eliminar" />&nbsp;
					</a>
					<a href="{$WEB_ROOT}/graybox.php?page=add-resource-c&id={$subject.resourceConfigId}&auxTpl=admin&cId={$courseModuleId}" data-target="#ajax" data-toggle="modal">
						<img src="{$WEB_ROOT}/images/icons/16/pencil.png" title="Editar" />
					</a>
				{else}
					<a href="javascript:void(0)" onClick="DeleteResource({$subject.resourceId})" title="ELIMINAR">
						<img src="{$WEB_ROOT}/images/icons/16/delete.png" class="spanDeleteResource" id="d-{$subject.resourceId}" name="d-{$subject.name}" title="Eliminar" />
					</a>&nbsp;
					<a href="{$WEB_ROOT}/graybox.php?page=edit-group-resource&id={$subject.resourceId}&auxTpl=admin&cId={$infoCourse.courseId}" data-target="#ajax" data-toggle="modal">
						<img src="{$WEB_ROOT}/images/icons/16/pencil.png" class="spanEdit" id="d-{$subject.subjectId}" name="d-{$subject.name}" title="Editar" />
					</a>
				{/if}
			</td>
		{/if}
    </tr>
{foreachelse}
    <tr>
        <td colspan="12" align="center">No se encontr&oacute; ning&uacute;n registro.</td>
    </tr>
{/foreach}