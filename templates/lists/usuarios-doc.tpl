
<table width="100%" class="tblGral table table-bordered table-striped table-condensed flip-content">
<thead>      
 <tr>
	{if $tipoUs != "Docente"}
    <th width="" height="28">ID</th>		
	{/if}
    <th width="">Apellido Paterno</th>
    <th width="">Apellido Materno</th>
    <th width="">Nombre</th>
    <th width="">No. Control</th>
    <th width="">Correo</th>
	 <th width="">Num. Certificaciones</th>
    <th width="">Acciones</th>
   
</tr>
</thead>
<tbody>
  {foreach from=$registros.result item=item key=key}
        <tr>
			{if $tipoUs != "Docente"}
		<td align="center">{$item.userId}</td>
			{/if}
		<td align="center">{$item.lastNamePaterno|upper}</td>
        <td align="center">{$item.lastNameMaterno|upper}</td>
         <td align="center">{$item.names|upper}</td>
        <td align="center">{$item.controlNumber}</td>
        <td align="center">{$item.email}</td>
        <td align="center">{$item.numCertificaciones}</td>
        <td align="center">   
	
		{if $tipoUs ne "Docente"}
		<!--<a href="{$WEB_ROOT}/graybox.php?page=envia-info&id={$item.userId}&auxTpl=1" data-target="#ajax" data-toggle="modal" data-width="1000px" title="ENVIAR DATOS DE REGISTRO">
		<i class="material-icons">
		mail
		</i>
		</a> 
		<a href="{$WEB_ROOT}/ajax/datas.php?id={$item.userId}"   target='_blank'  title="IMPRIMIR DATOS DE REGISTRO"> 
		<i class="material-icons">
		picture_in_picture
		</i>	
		</a>
		<a href="{$WEB_ROOT}/graybox.php?page=add-calificador&id={$item.userId}&auxTpl=1&cId={$item.subjectId}" data-target="#ajax" data-toggle="modal" data-width="1000px" title="ASIGNAR EVALUADOR">
		<i class="material-icons">
			dashboard
		</i>	
		</a>
		{/if}
		<a href="{$WEB_ROOT}/graybox.php?page=add-doc&id={$item.userId}&auxTpl=1&cId={$item.subjectId}" data-target="#ajax" data-toggle="modal" data-width="1000px" title="AGREGAR PLAN">
		<i class="material-icons">
		calendar_today
		</i>	
		</a>
		<a href="{$WEB_ROOT}/graybox.php?page=add-doc&id={$item.userId}&auxTpl=2&cId={$item.subjectId}" data-target="#ajax" data-toggle="modal" data-width="1000px" title="AGREGAR IEC">
		<i class="material-icons">
			chrome_reader_mode
			</i>
		</a>
		<a href="{$WEB_ROOT}/graybox.php?page=add-doc&id={$item.userId}&auxTpl=3&cId={$item.subjectId}" data-target="#ajax" data-toggle="modal" data-width="1000px" title="AGREGAR CEDULA">
		<i class="material-icons">
		aspect_ratio
		</i>
		</a>
		<a href="{$WEB_ROOT}/graybox.php?page=add-doc&id={$item.userId}&auxTpl=4&cId={$item.subjectId}" data-target="#ajax" data-toggle="modal" data-width="1000px" title="AGREGAR PRODUCTOS">
		<i class="material-icons">
			description
			</i>
		</a>
		<a href="{$WEB_ROOT}/graybox.php?page=add-evaluar&id={$item.userId}&auxTpl=4&cId={$item.courseId}" data-target="#ajax" data-toggle="modal" data-width="1000px" title="EVALUAR">
					<i class="material-icons">
			school
			</i>
		</a>-->
		<a href="{$WEB_ROOT}/graybox.php?page=student-certificacion&id={$item.userId}&auxTpl=1" data-target="#ajax" data-toggle="modal" data-width="1000px" title="VER CERTIFICACIONES">
				<i class="material-icons">
				picture_in_picture
				</i>
		</a> 
			{if $tipoUs ne "Docente"}
		<!--<a href="{$WEB_ROOT}/graybox.php?page=add-certificacion-alumno&id={$item.userId}&auxTpl=1" data-target="#ajax" data-toggle="modal" data-width="1000px" title="AGREGAR CERTIFICACION">
				<i class="material-icons">
				folder_special
				</i>
		</a> -->
		{/if}
		<!--
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

</tbody>
</table>
{include file="{$DOC_ROOT}/templates/lists/pages_ok.tpl" pages=$registros.pages info=$registros.info}