<script type="text/javascript" charset="utf-8">
    $(document).observe('dom:loaded', function() {ldelim}
        {foreach from=$students item=item key=key}
        new FancyZoom('foto-{$item.userId}', {ldelim}width:400, height:300{rdelim});
        {/foreach}
        {rdelim});
</script>
</head>
<body>

<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i>Usuarios
        </div>


        
            {include file="boxes/status_no_ajax.tpl"}
           <div class="accions">
           <!-- <table>
                <tr>
                    <td>
						<a class="btn green" href="{$WEB_ROOT}/graybox.php?page=add-alumno-admin&id={$item.userId}" data-target="#ajax" data-toggle="modal" data-width="1000px">
                            <i class="fa fa-plus"></i> Agregar
                        </a>
                    </td>
                    <td>
                        <form method="post" name="frmReport" id="frmReport" action="">
                            <input type="hidden" name="accion" value="export" />
                            <input type="image" src="images/excel.gif"  title="Exportar alumnos a Excel" alt="Exportar alumnos a Excel">
                        </form>
                    </td>
                </tr>
            </table>-->
			</div>
      
    </div>
	
	 
    <div class="portlet-body" > 
	<form id="frmBuscar" class="form-inline">
		<div class="row">
			<input type="hidden" name="id" id="id" value="{$id}">
			<input type="hidden" name="pas" id="pas" value="usuarios-admin">
			<div class="form-group col-md-3">
				<label>Nombre:</label><br>
				<input type="text" name="nombre" id="nombre" class="form-control" style="width:150px">
			</div>
			<div class="form-group col-md-3">
				<label>Apellido Paterno:</label><br>
				<input type="text" name="apellidoP" id="apellidoP" class="form-control" style="width:150px">
			</div>
			<div class="form-group col-md-3">
				<label>Apellido Materno:</label><br>
				<input type="text" name="apellidoM" id="apellidoM" class="form-control" style="width:150px">
			</div>
			<div class="form-group col-md-3">
				<label>Fotografía</label><br>
				<select class="form-control" id="condPhoto" name="condPhoto">
					<option value="0">Todos</option>
					<option value="1">Con Fotografía</option>
					<option value="2">Sin Fotografía</option>
				</select>
			</div>
		</div>
		<div style="margin: 15px 0;">
			{if $tipoUs != "Docente"}
				<div class="form-group col-md-4">
					<label>Certificaciones</label><br>
					<select name="certificacionId" class="form-control" style="width:100px" onChange="buscarGrupos()">
						<option></option>
						{foreach from=$lstCertificaciones item=item key=key}
						<option value="{$item.subjectId}">{$item.name}</option>
						{/foreach}
					</select>
				</div>
				<div class="form-group col-md-4">
					<label>Evaluador</label><br>
					<select class="form-control" style="width:100px" name="evaluado">
						<option value="">Todos</option>
						<option>si</option>
						<option>no</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label>Grupos:</label><br>
					<div id="divGrupos"></div>
				</div>
			{/if}
		</div>
	 </form>
	<div class="row text-center">
		<div class="col-md-12" style="padding: 15px 0;">
			<button type="submit" class="btn green submitForm" onClick="buscarCertificacion()">Buscar</button>
		</div>
	</div>
    <div id="tblContent">{*include file="lists/usuarios-admin.tpl"*}</div>

    </div>
        
            


        <div id="loader2" > </div>
</div>
