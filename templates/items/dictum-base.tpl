{foreach from=$dictums item=item key=key}
    <tr>
        <td align="center" class="id">{$item.dictumId}</td>
        <td align="center">{$item.folio}</td>        
        <td align="center">{$item.name}</td>       
        <td align="center">{$item.date}</td>        
        <td align="center">{$item.result}</td>        
        <td align="center">                        
           &nbsp;
            <a href="{$WEB_ROOT}/ajax/dictamen.php?id={$item.dictumId}" target="_blank">
                <img src="images/icons/16/pdf.gif" id="{$item.dictumId}" title="Ver PDF" />
            </a>
          	<img src="images/icons/16/pencil.png" class="spanEdit" id="{$item.dictumId}" title="Editar" />
			<img src="images/icons/16/delete.png" class="spanDelete" id="{$item.dictumId}" title="Eliminar" />
        </td>
    </tr>
{foreachelse}
<tr><td colspan="6" align="center">No se encontró ningún registro.</td></tr>				
{/foreach}
