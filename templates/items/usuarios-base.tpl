

{foreach from=$students item=item key=key}
        <tr>
        <td align="center" class="id">{$item.userId}</td>       
           
        
		
		<td align="center">{$item.lastNamePaterno|upper}</td>
        <td align="center">{$item.lastNameMaterno|upper}</td>
         <td align="center">{$item.names|upper}</td>
        <td align="center">{$item.controlNumber}</td>
        <td align="center">{$item.email}</td>
        <td align="center">{$item.password}</td>

        <td align="center">   
		<a href="{$WEB_ROOT}/graybox.php?page=envia-info&id={$item.userId}&auxTpl=1" data-target="#ajax" data-toggle="modal" data-width="1000px" title="ENVIAR DATOS DE REGISTRO">
				<i class="material-icons">
				mail
				</i>
			</a> 
		<a href="{$WEB_ROOT}/ajax/datas.php?id={$item.userId}"   target='_blank'  title="IMPRIMIR DATOS DE REGISTRO"> 

		<i class="material-icons">
		picture_in_picture
		</i>	
		</a>
		<!--
        {if $page == "course-student"}
		
					{if $status == "inactivo"}
                        	<a href="{$WEB_ROOT}/invoices/id/{$item.userId}/course/{$course}"><img src="http://trazzos.com/sie/admin/images/edit.gif" title="Realizar Pagos" /></a>
                    {else}  
          	                <a href="{$WEB_ROOT}/student-actions/{$item.userId}/course/{$course}"><img src="http://trazzos.com/sie/admin/images/icons/browser.png" title="Acciones" /></a>
                    {/if}		        
        {else} 
		<div id="loader_{$item.userId}"> </div>
		         {if $item.activo ==1}
              <img src="{$WEB_ROOT}/images/icons/ok.png"  id="{$item.userId}" onclick="desactivar({$item.userId},{$item.activo});" title="Dar de Baja" />&nbsp;
          	     {else}
		      <img src="{$WEB_ROOT}/images/cancel.png"  id="{$item.userId}" title="Dar de Alta" onclick="activar({$item.userId},{$item.activo});" />
				 {/if}
			<a href="{$WEB_ROOT}/graybox.php?page=edit-student&id={$item.userId}&auxImagen=1" data-target="#ajax" data-toggle="modal" data-width="1000px">
			<img src="{$WEB_ROOT}/images/icons/16/pencil.png" class="spanEdit" id="{$item.userId}" title="Editar" />
			</a>
			<a href="{$WEB_ROOT}/graybox.php?page=student-curricula&id={$item.userId}&auxTpl=1" data-target="#ajax" data-toggle="modal" data-width="1000px">
				<img src="{$WEB_ROOT}/images/icons/16/subject.gif" title="Ver Curricula Estudiante" />
			</a>   

			<a href="{$WEB_ROOT}/files/solicitudes/{$item.userId}_{$item.courseId}.pdf" target="_blank">
				<img src="{$WEB_ROOT}/images/icons/16/document--arrow.png" title="Ficha de Registro" />
			</a>      

		{/if}-->
        </td>       
    </tr>
{foreachelse}
	<tr>
    	<td colspan="11" align="center">No se encontr&oacute; ning&uacute;n registro.</td>
    </tr>				
{/foreach}