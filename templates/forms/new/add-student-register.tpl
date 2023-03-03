<div class="row">
<form id="addStudentForm" name="addStudentForm" method="POST">
    <input type="hidden" id="type" name="type" value="saveAddStudentRegister"/>
    <input type="hidden" id="redireccion" name="redireccion" value="1"/>
    <input type="hidden" id="tam" name="tam" value="0"/>
	<input type="hidden" id="permiso" name="permiso" value="0"/>
		<div class="form-group col-md-4">
			<label for="names">Nombre:</label>
			<input type="text" id="names" name="names" class="form-control">
		</div>
		<div class="form-group col-md-4">
			<label for="lastNamePaterno">Apellido Paterno:</label>
			<input type="text" id="lastNamePaterno" name="lastNamePaterno" class="form-control">
		</div>
		<div class="form-group col-md-4">
			<label for="lastNameMaterno">Apellido Materno:</label>
			<input type="text" id="lastNameMaterno" name="lastNameMaterno" class="form-control">
		</div>
	<div class="form-group col-md-4">
		<label for="email">Email:</label>
		<input type="text" id="email" name="email" class="form-control">
	</div>
	<div class="form-group col-md-4">
		<label for="mobile">Celular:</label>
		<input type="text" id="mobile" name="mobile" class="form-control">
	</div>
	<div class="form-group col-md-4">
		<label for="estados">Estado:</label>
		<select id="estados" name="estados" class="form-control">
			<option value="0">Selecciona....</option>
			{foreach from=$estados item=item}
				<option value="{$item.estadoId}">{$item.nombre} </option>
			{/foreach}
		</select>
	</div>
	<div class="form-group col-md-4">
		<label for="ciudad">Municipio:</label>
		<select id="ciudad" name="ciudad" class="form-control">
			<option value="0">Selecciona....</option>
		</select>
	</div>
	<div class="form-group col-md-4">
		<label for="tipoSolicitante">Tipo de Solicitante:</label>
		<select id="tipoSolicitante" name="tipoSolicitante"  class="form-control">
			{foreach from=$lstSolicitante item=pais}
				<option value="{$pais.tiposolicitanteId}">{$pais.nombre} </option>
			{/foreach}
		</select>
	</div>
	<div class="form-group col-md-4">
		<label for="curricula">Certificación:</label>
		<select name='curricula' id="curricula" class="form-control">
			{foreach from=$activeCourses item=course}
				<option value="{$course.courseId}">{$course.name} - {$course.group}</option>
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
</form>
</div>


<div id="loader">
</div>
<center>
	<div class="">
        <div class="">
			<br><br><br>
            <button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn green submitForm" onclick="AddStudentRegister();" id="addStudent" >Guardar</button>
        </div>
    </div>
</center>
<br><br>
