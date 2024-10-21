<div class="row">
    <form id="addStudentForm" action="{$WEB_ROOT}/ajax/new/studentCurricula.php" class="form row"
        style="display: flex; flex-wrap:wrap;" method="POST">
        <input type="hidden" id="type" name="type" value="saveAddStudentRegisterMultiple" />
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
            <select id="tipoSolicitante" name="tipoSolicitante" class="form-control">
                {foreach from=$lstSolicitante item=pais}
                    <option value="{$pais.tiposolicitanteId}">{$pais.nombre} </option>
                {/foreach}
            </select>
        </div>
        <div class="row"></div>
        <div class="form-group col-md-12">
            <label for="curricula">Certificación:</label>
            <div class="row">
                {foreach from=$activeCourses item=course}
                    <div class="col-md-4" style="display:flex; margin-bottom: 4px; border-radius: 5px;">
                        <input type="checkbox" name='curricula[]' id="curricula{$course.courseId}"
                            value="{$course.courseId}" style="width: 25px; flex-shrink: 0; margin-right: 10px;">
                        <label for="curricula{$course.courseId}"> {$course.name} - {$course.group}</label>
                    </div>
                {/foreach}
            </div>
        </div>
        <div class="text-center col-md-12">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>
</div>