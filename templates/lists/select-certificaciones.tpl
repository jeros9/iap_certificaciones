<select name="certificaciones" class="form-control" required>
	<option></option>
	{foreach from=$lstCertificaciones item=item}
        {if $item.countModule >0}
	        <option value="{$item.subjectId}">{$item.name}</option>
        {/if}
	{/foreach}
</select>