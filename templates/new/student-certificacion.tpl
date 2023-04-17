<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i> Certificaciones
        </div>
        <div class="actions"></div>
    </div>
    <div class="portlet-body">
        <div id="tblContent" class="content-in">
			<form id="frmGralEval">
				<input type="hidden" name="id" value="{$id}">
				<table width="100%" class="tblGral table table-bordered table-striped table-condensed flip-content">
					<thead>      
						<tr>
							<th height="28">Nombre</th>		
							<th height="28">Grupo</th>			
							<th height="28">Municipio</th>	
							<th height="28">Evaluación</th>	
							<th height="28">Elementos</th>	
							{if $cId ne 'usuarios-admin'}						
								<th height="28">Evaluador</th>	
								<th height="28">Acciones</th>
								<th height="28">Descargas</th>
							{else}
								<th height="28">Capacitador</th>
								<th height="28">Alineador</th>
								<th height="28">Evaluador</th>
								<th height="28">Certificación</th>
							{/if}
						</tr>
					</thead>
					<tbody>
					{foreach from=$registros item=item key=key}
						<tr>
							<td align="center" class="id">{$item.certificacion}</td>       
							<td align="center" class="id">{$item.group}</td>            
							<td align="center" class="id">{$item.municipio}</td>   
							<td align="center" class="id">{if $item.aprobado eq 'si'} Competente{else if $item.aprobado eq 'no'} No Competente {else} Sin asignar{/if}</td>   
							<td align="center" class="id">{$item.countRepositorio}/4</td>   
							{if $cId ne 'usuarios-admin'}						
								<td align="center" class="id">{$item.suEvaluador.name} {$item.suEvaluador.lastname_paterno} {$item.suEvaluador.lastname_materno}</td>				
								<td align="center" class="id">
									<a href="javascript:void(0)" onClick="verFormEvaluacion({$item.suEvaluador.personalId},{$item.userId},{$item.subjectId}_{$item.courseId},1)" title="AGREGAR PLAN">
										<i class="material-icons">calendar_today</i>	
									</a>
									<a href="javascript:void(0)" onClick="verForm({$item.userId},{$item.subjectId}_{$item.courseId},2, {$item.courseId})" title="AGREGAR IEC">
										<i class="material-icons">chrome_reader_mode</i>	
									</a>
									<a href="javascript:void(0)" onClick="verFormEvaluacion({$item.suEvaluador.personalId},{$item.userId},{$item.subjectId}_{$item.courseId},3, {$item.courseId})" title="AGREGAR CEDULA">
										<i class="material-icons">aspect_ratio</i>	
									</a>
									<a href="javascript:void(0)" onClick="verForm({$item.userId},{$item.subjectId},4, {$item.courseId})" title="AGREGAR PRODUCTOS">
										<i class="material-icons">description</i>	
									</a>
									<a href="javascript:void(0)" onClick="verFormEva({$item.userId},{$item.subjectId},4, {$item.courseId})"  title="EVALUAR">
										<i class="material-icons">school</i>
									</a>
									<a href="javascript:void(0)" onClick="verForm({$item.userId},{$item.subjectId},5, {$item.courseId})" title="AGREGAR CERTIFICADO">
										<i class="material-icons">assignment_turned_in</i>	
									</a>
								</td>
								<td>
									<a href="{$WEB_ROOT}/ajax/acuse.php?id={$item.userId}&courseId={$item.courseId}"   target='_blank' title='ACUSE'>
										<i class="material-icons">how_to_reg</i>
									</a>
									<a href="{$WEB_ROOT}/ajax/dg.php?id={$item.userId}&cId={$item.activityId}&courseId={$item.courseId}"   target='_blank' title='EVALUACION'>
										<i class="material-icons">ballot</i>	
									</a>	
									{* <a href="{$WEB_ROOT}/files/solicitudes/{$item.userId}_{$item.courseId}.pdf"   target='_blank' title='REGISTRO'> *}
									<a href="{$WEB_ROOT}/ajax/reg.php?id={$item.userId}&courseId={$item.courseId}"   target='_blank' title='Ficha de Registro'>
										<i class="material-icons">description</i>
									</a>
									<a href="{$WEB_ROOT}/ajax/ine.php?id={$item.userId}"   target='_blank' title='INE'>	
										<i class="material-icons">picture_in_picture</i>
									</a>
									<a href="{$WEB_ROOT}/ajax/download.php?userId={$item.userId}"  target="_blank" title="DESCARGAR">
										<i class="material-icons">save_alt</i>
									</a>
									<a href="{$WEB_ROOT}/ajax/acuse_certificado.php?userId={$item.userId}&courseId={$item.courseId}"  target="_blank" title="ACUSE DE RECIBO DE CERTIFICADO">
										<i class="material-icons">class</i>
									</a>
									<a href="{$WEB_ROOT}/ajax/encuesta_satisfaccion.php?userId={$item.userId}&courseId={$item.courseId}"  target="_blank" title="ENCUESTA DE SATISFACCION">
										<i class="material-icons">check_circle</i>
									</a>
									<a href="{$WEB_ROOT}/ajax/examen_final.php?userId={$item.userId}&courseId={$item.courseId}"  target="_blank" title="EXAMEN FINAL">
										<i class="material-icons">wysiwyg</i>	
									</a>
									<a href="{$WEB_ROOT}/ajax/autorizacion-firma.php?id={$item.userId}&courseId={$item.courseId}"  target="_blank" title="ACTA DE AUTORIZACIÓN FIRMA DIGITAL">
										<i class="material-icons">grading</i>	
									</a>
								</td>
							{else}
								<td>
									<select id="sel_capacitadororiginal" name="capacitadororiginal_{$item.subjectId}" class="form-control">
										<option></option>
										{foreach from=$item.evaluadores item=item2 key=key}
											<option value="{$item2.personalId}" {if $item2.personalId eq $item.suCapacitadorOriginal.personalId} selected{/if}>{$item2.name} {$item2.lastname_paterno} {$item2.lastname_materno} </option>
										{/foreach}
									</select>
								</td>
								<td>
									<select id="sel_capacitador" name="capacitador_{$item.subjectId}" class="form-control">
										<option></option>
										{foreach from=$item.evaluadores item=item2 key=key}
											<option value="{$item2.personalId}" {if $item2.personalId eq $item.suCapacitador.personalId} selected{/if}>{$item2.name} {$item2.lastname_paterno} {$item2.lastname_materno} </option>
										{/foreach}
									</select>
								</td>
								<td>
									<select id="sel_evaluador" name="evaluador_{$item.subjectId}" class="form-control">
										<option></option>
										{foreach from=$item.evaluadores item=item2 key=key}
											<option value="{$item2.personalId}" {if $item2.personalId eq $item.suEvaluador.personalId} selected{/if}>{$item2.name} {$item2.lastname_paterno} {$item2.lastname_materno} </option>
										{/foreach}
									</select>
								</td>
								<td>
									<select id="new_group" name="group_{$item.courseId}" class="form-control">
										{foreach from=$item.availableGroups item=element key=key}
											<option value="{$element.courseId}" {if $element.courseId eq $item.courseId} selected {/if}>
												Grupo {$element.group}: {$element.name}	
											</option>
										{/foreach}
									</select>
								</td>
							{/if}					
						</tr>
						<tr>
							<td colspan="5" style="display:none" id="r_{$item.subjectId}_{$item.courseId}"></td>
						</tr>
						{/foreach}
					</tbody>
				</table>
			</form>
			{if $cId eq 'usuarios-admin'}
				<center><button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn green submitForm" onclick="sendInfoEvaluador()">Guardar</button></center>
			{/if}
        </div>
    </div>
</div>