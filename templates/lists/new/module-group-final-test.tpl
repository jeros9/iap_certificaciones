<div class="portlet-body">
	{if $final_test.testId eq $tareaId}
		{if $exito eq "si"}
			<div class="alert alert-warning alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong></strong> La actividad se subió correctamente al sistema de tareas
			</div>
		{/if}
	{/if}
    
	{if $timestamp > $final_test.initialDateTimestamp && $timestamp < $final_test.finalDateTimestamp}
        <span style="color:#0C0">Esta actividad se encuentra disponible</span>
    {/if}
    {if $timestamp > $final_test.finalDateTimestamp}
        <span style="color:#C00">El tiempo de esta actividad ha terminado</span>
    {/if}
    {if $timestamp < $final_test.initialDateTimestamp}
        <span style="color:#C00">Esta actividad aun no ha iniciado</span>
    {/if}<br /><br />

    <b>Fecha Inicial:</b> {$final_test.initialDate|date_format:"%d-%m-%Y"} {$final_test.horaInicial}<br />
    <b>Fecha Final:</b> {$final_test.finalDate|date_format:"%d-%m-%Y %H:%M:%S"}<br /><br />
    <b>Modalidad:</b> Examen Final<br />

    {if ($timestamp > $final_test.initialDateTimestamp && $timestamp < $final_test.finalDateTimestamp && $final_test.available) || ($userId == 1601)}
        <b>Entregable: </b>
        {if $final_test.ponderation and $final_test.finalDateTest} 
            Ex&aacute;men realizado.
        {else}
            <a id="presentarExamenFinal" style="display: none" class=" btn yellow btn-outline sbold" href="{$WEB_ROOT}/graybox.php?page=make-group-test&id={$final_test.testId}" data-target="#ajax" data-toggle="modal">Presentar examen</a>
            <a style="cursor:pointer; color:#000" onclick="DoFinalTest({$final_test.testId})" class="btn btn-xs green-jungle">Presentar Ex&aacute;men.</a>
        {/if} 
    {/if}
</div>
