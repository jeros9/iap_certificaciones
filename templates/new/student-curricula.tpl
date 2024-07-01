 <div class="portlet box red">
 	<div class="portlet-title">
 		<div class="caption">
 			<i class="fa fa-user-plus "></i>Ver curricula estudiante
 		</div>
 	</div>
 	<div class="portlet-body">
 		<form id="form_curricula" method="post" class="form" action="{$WEB_ROOT}/ajax/new/studentCurricula.php">
 			{* <input type="hidden" id="userId" name="userId" value="{$id}" />
 			<input type="hidden" id="type" name="type" value="addProspectCourse" />
 			<div class="content-in-popup form-group">
 				<label for="f1"><span class="reqField">*</span> Selecciona Curricula:</label>
 				<br>
 				<select name="courseId" id="courseId" class="form-control">
 					<option value=""></option>
 					{foreach from=$curricula item=curso}
	 					<option value="{$curso.courseId}">{$curso.majorName} - {$curso.name} - {$curso.group} -
	 						{$curso.courseId}</option>
 					{/foreach}
 				</select>
 			</div>
			<div class="form-group text-center">
				<button class="btn btn-success" type="submit">Agregar currícula</button>
			</div> *}
 		</form>
 	</div>
</div>