
<div class="form-body">
    <center>
        {if $type eq "plan"}
            <a target='_blank' href='{$WEB_ROOT}/files/estandares/{$file_pdf}' class="btn default red">Ver Estándar de Competencia</a>
        {/if}
        {if ($type eq "plan")}
            {if $editable or ($perfil eq 'Administrador' or $perfil eq 'Director' or $personal_id eq 222 or $perfil eq 'Docente')}
                <a href='javascript:;' class="btn default green btnEditPlan" data-id="{$id}" data-course="{$course_id}">Editar Plan</a>
            {/if}
        {/if}
        {if ($type eq "cedula")}
            {if $editable or ($perfil eq 'Administrador' or $perfil eq 'Director' or $personal_id eq 222 or $perfil eq 'Docente')}
                <a href='javascript:;' class="btn default green btnEditCedula" data-id="{$id}">Editar Cédula</a>
            {/if}
        {/if}
        <a type="button" target='_blank' href='{$WEB_ROOT}/ajax/{$type}.php?id={$id}'  class="btn default blue" style="width:211px">{$btnTitle}</a>
    </center>
</div>
