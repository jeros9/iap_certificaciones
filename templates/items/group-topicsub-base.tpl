{foreach from=$forum item=topicsub}
    <tr>
        <td align="center" class="id">{$topicsub.nombre|truncate:50:"..."}</td>
        <td align="center">{$topicsub.topicsubDate}</td>
        <td align="center" id="etitl1">
            {if $topicsub.names}{$topicsub.names} {$topicsub.lastNamePaterno} {$topicsub.lastNameMaterno}{else}Profesor{/if}
        </td>
        <td align="center" id="etitl1">{$topicsub.answers}</td>
        <td align="center">
            {if $User["type"] eq "Docente"}
                <a href="{$WEB_ROOT}/respuestas/id/{$topicsub.courseId}&topic={$topicsub.topicsubId}">
                    <i class="fa fa-sign-in fa-2x" aria-hidden="true" style='color:black'></i>
                </a>
            {else}
                <a href="{$WEB_ROOT}/view-modules-student/id/{$topicsub.courseId}&tipo=respuestas&topic={$topicsub.topicsubId}">
                    <i class="fa fa-sign-in fa-2x" aria-hidden="true" style='color:black'></i>
                </a>
            {/if}
        </td>
    </tr>
{foreachelse}
	<tr>
    	<td colspan="5" align="center">No se encontr&oacute; ning&uacute;n registro.</td>
	</tr>
{/foreach}