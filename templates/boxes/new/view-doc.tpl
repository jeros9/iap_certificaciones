
<div class="form-body">
    <center>
        {if $type eq "plan"}
            <a target='_blank' href='{$WEB_ROOT}/files/estandares/{$file_pdf}' class="btn default red">Ver Estándar de Competencia</a>
        {/if}
        {if ($type eq "plan")}
            {if $editable or ($perfil eq 'Administrador' or $perfil eq 'Director' or $personal_id eq 231)}
                <a href='javascript:;' class="btn default green btnEditPlan" data-id="{$id}">Editar Plan</a>
            {/if}
        {/if}
        <a type="button" target='_blank' href='{$WEB_ROOT}/ajax/{$type}.php?id={$id}'  class="btn default blue" style="width:211px">{$btnTitle}</a>
    </center>
</div>
