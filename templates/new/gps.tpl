<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i>Grupos
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
	
	 <table width="100%" class="tblGral table table-bordered table-striped table-condensed flip-content">
	<thead>
    	<tr> 
			<th width="">Grupo</th>	  
			<th width="">Cantidad</th>	 
			<th width="">Lote</th>	 
			<th width="">Acciones</th>
            <th>Reportes</th>
    </thead>
    <tbody>
    	{foreach from=$registros item=item}
    	<tr>
			<td align="center">{$item.group}</td>
			<td align="center">{$item.cantidad}</td>
            <td style="text-align: center;">{$item.numero}</td>
			<td align="center">
                <a href="{$WEB_ROOT}/graybox.php?page=red-dates&id={$item.courseId}&subjectId={$subjectId}" data-target="#ajax" data-toggle="modal" data-width="1000px">
                    <i class="material-icons">event</i>
                </a>
			    <a href="{$WEB_ROOT}/usuarios/id/{$item.courseId}" >
                    <i class="material-icons">login</i>
                </a>
                <a href="{$WEB_ROOT}/graybox.php?page=numero-lote&id={$item.courseId}&subjectId={$subjectId}&tipo=general" data-target="#ajax" data-toggle="modal" data-width="300px">
                    <i class="material-icons">tag</i>
                </a>
			</td>
            <td align="center">
                <a href="{$WEB_ROOT}/graybox.php?page=revision-portafolio&id={$item.courseId}&subjectId={$subjectId}&option=evaluator" data-target="#ajax" data-toggle="modal" data-width="1200px">
                    <i class="material-icons">
                    assessment
                    </i>
                </a>
            </td>
		</tr>
	{/foreach}
		
	</tbody>
</table>

    </div>
        
            


        <div id="loader2" > </div>
</div>
