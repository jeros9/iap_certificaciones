 <div class="portlet box red">
 	<div class="portlet-title">
 		<div class="caption">
 			<i class="fa fa-user-plus "></i>Ver curricula estudiante - {$prospect.name} {$prospect.firstSurname}
 			{$prospect.secondSurname}
 		</div>
 	</div>
 	<div class="portlet-body">
 		<form id="form_curricula" method="post" class="form" action="{$WEB_ROOT}/ajax/new/studentCurricula.php">
 			<input type="hidden" id="userId" name="userId" value="{$id}" />
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

 			<div class="form-group col-md-4">
 				<label for="capacitador">Capacitador</label>
 				<select name="capacitador" id="capacitador" class="form-control">
 					<option value="">-- Seleccione al capacitador --</option>
 					{foreach from=$personalCapacitado item=item}
	 					<option value="{$item.personalId}">{$item.nombrePersona}</option>
 					{/foreach}
 				</select>
 			</div>
 			<div class="form-group col-md-4">
 				<label for="alineador">Alineador</label>
 				<select name="alineador" id="alineador" class="form-control">
 					<option value="">-- Seleccione al alineador --</option>
 					{foreach from=$personalCapacitado item=item}
	 					<option value="{$item.personalId}">{$item.nombrePersona}</option>
 					{/foreach}
 				</select>
 			</div>
 			<div class="form-group col-md-4">
 				<label for="evaluador">Evaluador</label>
 				<select name="evaluador" id="evaluador" class="form-control">
 					<option value="">-- Seleccione al evaluador --</option>
 					{foreach from=$personalCapacitado item=item}
	 					<option value="{$item.personalId}">{$item.nombrePersona}</option>
 					{/foreach}
 				</select>
 			</div>

 			<div class="form-group text-center">
 				<button class="btn btn-success" type="submit">Agregar currícula</button>
 			</div>
 		</form>
 	</div>
 </div>
{literal}
	 <script>
	 	$("#courseId").on("change", function(){
			var curricula = $(this).val();
	 		$.ajax({
	 			url: WEB_ROOT + '/ajax/new/personal.php',
	 			type: "POST",
	 			data: { type: "personalCapacitado", curricula: curricula }
	 		}).done(function(response) {
	 			data = JSON.parse(response);
	 			console.log(data);
	 			$("#capacitador").html("<option value=''>-Seleccione al capacitador--</option>");
	 			$("#alineador").html("<option value=''>-Seleccione al alineador--</option>");
	 			$("#evaluador").html("<option value=''>-Seleccione al evaluador--</option>");
	 			data.personal.forEach(element => {
	 				$("#capacitador").append(`<option value="${element.personalId}">${element.nombrePersona}</option>`);
	 				$("#alineador").append(`<option value="${element.personalId}">${element.nombrePersona}</option>`);
	 				$("#evaluador").append(`<option value="${element.personalId}">${element.nombrePersona}</option>`);
	 			});
	 		}).fail(function(response) {
	 			console.log(response);
	 		});
		}); 
	 </script>
{/literal}