{foreach from=$tests item=subject}
    <tr>
        <td align="center" class="id">{$subject.testId}</td>
        <td align="center">{$subject.question}</td>
        <td align="center">{$subject.opcionAShort}</td>
        <td align="center">{$subject.opcionBShort}</td>
        <td align="center">{$subject.opcionCShort}</td>
        <td align="center">{$subject.opcionDShort}</td>
        <td align="center">{$subject.opcionEShort}</td>
        <td align="center">{$subject.answer}</td>
        <td align="center">
            <a href="{$WEB_ROOT}/graybox.php?page=edit-group-question&id={$subject.testId}&auxTpl=admin&cId={$myModule.courseModuleId}" data-target="#ajax" data-toggle="modal">
                <img src="{$WEB_ROOT}/images/icons/16/pencil.png" class="spanEdit" id="d-{$subject.subjectId}" name="d-{$subject.name}" title="Editar" />
            </a>            
        </td>
    </tr>
{foreachelse}
	<tr>
    	<td colspan="12" align="center">No se encontr&oacute; ning&uacute;n registro.</td>
	</tr>
{/foreach}
