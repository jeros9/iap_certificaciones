<select id="municipiotId" name="municipiotId" class="form-control" >
	<option value="0">Selecciona</option>
	{foreach from=$lstt item=pais}
        <option value="{$pais.municipioId}" {if $info.ciudadt == $pais.municipioId} selected="selected" {/if}>{$pais.nombre} </option>
    {/foreach}
</select>