<table width="100%" class="tblGral table table-bordered table-striped table-condensed flip-content">
	<thead>
    	<tr>
			<th width="">Nombre</th>	 
			<th width="">Apellido Paterno</th>	 
			<th width="">Apellido Materno</th>	 
			<th width="">Certificación</th>		 
			<th width="">Grupo</th>
			<th width="">Capacitador</th>
    </thead>
    <tbody>
    	{foreach from=$result item=item}
    	<tr>
			<td align="center">{$item.names}</td>
			<td align="center">{$item.lastNamePaterno}</td>
			<td align="center">{$item.lastNameMaterno}</td>
			<td align="center">{$item.certificacion}</td>
			<td align="center">{$item.group}</td>
			<td align="center">{$item.capacitador}</td>
		</tr>
	{/foreach}
		
	</tbody>
</table>