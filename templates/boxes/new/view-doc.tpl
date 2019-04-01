
<div class="form-body">
    <center>
        {if $type eq "plan"}
            <a target='_blank' href='{$WEB_ROOT}/files/estandares/{$file_pdf}' class="btn default red">Ver Estándar de Competencia</a>
        {/if}
        <a type="button" target='_blank' href='{$WEB_ROOT}/ajax/{$type}.php?id={$id}'  class="btn default blue" style="width:211px">{$btnTitle}</a>
    </center>
</div>
