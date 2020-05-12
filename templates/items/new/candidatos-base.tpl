{foreach from=$theGroup item=item key=key}
    <tr id="1">
        <td align="center">{$item.controlNumber}</td>
        <td align="left">{$item.lastNamePaterno|upper} {$item.lastNameMaterno|upper} {$item.names|upper}</td>
        {section name=foo loop=$totalActividades} 
			<td align="center">
			    {if $item.score.{$smarty.section.foo.iteration - 1} > 0}
			        {$item.score.{$smarty.section.foo.iteration - 1}}/{$item.realScore.{$smarty.section.foo.iteration - 1}}%
			    {else}
			        No. Cal 
			    {/if}
			</td> 
		{/section}
        <td align="center">{$item.addepUp}%</td>
    </tr>
{foreachelse}
	<tr><td colspan="4" align="center">No se encontr&oacute; ning&uacute;n registro.</td></tr>
{/foreach}