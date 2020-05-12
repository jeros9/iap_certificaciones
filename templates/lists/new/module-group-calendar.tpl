<div class="portlet-body">
	{if $item.activityId eq $tareaId}
		{if $exito eq "si"}
			<div class="alert alert-warning alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <strong></strong> La actividad se subió correctamente al sistema de tareas
			</div>
		{/if}
	{/if}
    
	{if $timestamp > $item.initialDateTimestamp && $timestamp < $item.finalDateTimestamp}
        <span style="color:#0C0">Esta actividad se encuentra disponible</span>
    {/if}
    {if $timestamp > $item.finalDateTimestamp}
        <span style="color:#C00">El tiempo de esta actividad ha terminado</span>
    {/if}
    {if $timestamp < $item.initialDateTimestamp}
        <span style="color:#C00">Esta actividad aun no ha iniciado</span>
    {/if}<br /><br />

    <b>Fecha Inicial:</b> {$item.initialDate|date_format:"%d-%m-%Y"} {$item.horaInicial}<br />
    <b>Fecha Final:</b> {$item.finalDate|date_format:"%d-%m-%Y %H:%M:%S"}<br /><br />
    <b>Modalidad:</b> {$item.modality}<br />

    {if $item.requerida.activityId}
        {if $item.activityType == "Tarea"}
            <b> Tarea Requerida:</b> Para realizar esta Actividad necesitas terminar la Actividad {$item.numreq}
        {/if}
        {if $item.activityType == "Examen"}
            <b>Tarea Requerida:</b> Para realizar este Examen necesitas terminar la Actividad {$item.numreq}
        {/if}
        <br />
    {/if}

    {if $timestamp > $item.initialDateTimestamp && $timestamp < $item.finalDateTimestamp && $item.available}
        <b>Entregable: </b>
        {if $item.activityType == "Lectura"}
            Ninguno.
        {/if}
        {if $item.activityType == "Tarea"}
            {if $vistaPrevia == 0}
				{if $item.homework.path eq ''}
					<a href="{$WEB_ROOT}/graybox.php?page=upload-group-homework&id={$item.activityId}" title="Subir Tarea" data-target="#ajax" data-toggle="modal" style="color:#000" class="btn btn-xs green-jungle"> Subir Actividad al Sistema de Tareas <i class="fa fa-upload "></i></a>
				 {/if}
		   {else}
				Subir Tarea al Sistema de Tareas.
            {/if}
        {/if}
        {if $item.activityType == "Examen"}
            {if $item.ponderation} 
                Ex&aacute;men realizado.
            {else}
                <a id="presentarExamen" style="display: none" class=" btn yellow btn-outline sbold" href="{$WEB_ROOT}/graybox.php?page=make-group-test&id={$item.activityId}" data-target="#ajax" data-toggle="modal">Presentar examen</a>
                <a style="cursor:pointer; color:#000" onclick="DoTest({$item.activityId})" class="btn btn-xs green-jungle">Presentar Ex&aacute;men.</a>
            {/if} 
        {/if}
        {if $item.activityType == "Foro"}
            Participación en foro.
        {/if}
        {if $item.activityType == "Otro"}
            Ninguno.
        {/if}

    {/if}
    {if $item.homework.path ne ''}
        <br />
        <b>Tarea entregada</b>
		{if $item.homework.path ne ''}
		    <button class="btn blue" onclick="window.location.href='{$WEB_ROOT}/download.php?file=capacitador_homework/{$item.homework.path}&mime={$item.homework.mime}'" class="bb" style="width:90px">
                VER TAREA
            </button>
			{if $timestamp < $item.finalDateTimestamp}  
				{if $item.homework.countUpdate ne 1}
					{if $item.modality eq 'Individual'}
					    <button class="btn red" onclick="deleteActividad('{$item.activityId}')" class="bb" style="width:90px">Eliminar</button>
					{/if}
				{/if}
			{/if}
		{/if}
	{/if}
    {if $item.ponderation}
        <br />
        <b>Calificación:</b> {$item.ponderation}
        <b>Porcentaje obtenido:</b> {$item.realScore}%
    {/if}
    {if $item.retro}
        <br />
        <b>Retroalimentación:</b> 
		<a href="javascript:void(0)" onClick='verRetro("{$item.activityId}")'>
		    <div style=" float:left; left:-80px; font-size:24px;   position:relative; height: 24px; width: 24px;">
		        <i class="material-icons md-16">ic_visibility</i>
		    </div>
		</a>
		<div style="display:none" id="divRetro_{$item.activityId}">{$item.retro}</div>
    {/if}
	 {if $item.retroFile ne ""}
        <br />
        <b>Archivo Adjunto Disponible:</b>
		<a href='{$WEB_ROOT}/file_capacitador_retro/{$item.retroFile}' target="_blank" class="bb" style="background: #73b760; color:white">Descargar</a>
    {/if}
</div>
