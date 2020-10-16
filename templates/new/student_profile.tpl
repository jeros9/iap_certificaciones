<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{$WEB_ROOT}">Inicio</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Perfil</span>
        </li>
    </ul>
    <div class="page-toolbar">
{*        <div class="btn-group pull-right">
            <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a href="#">
                        <i class="icon-bell"></i> Action</a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-shield"></i> Another action</a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-user"></i> Something else here</a>
                </li>
                <li class="divider"> </li>
                <li>
                    <a href="#">
                        <i class="icon-bag"></i> Separated link</a>
                </li>
            </ul>
        </div>*}
    </div>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Bienvenido
    <small></small>
</h1>
<div id="msjHome">
</div>
{if $msjC eq 'si'}
<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>El perfil se actualizo correctamente</strong>
</div>
{/if}

{if $msjCc eq 'si'}
<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>La contrasela se actualizo correctamente</strong>
</div>
{/if}

<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">{$imgFoto}</div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"> {$User.username} </div>
                    <div class="profile-usertitle-job"> Alumno </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
{*
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                    <button type="button" class="btn btn-circle red btn-sm">Message</button>
                </div>
*}
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
						<li>
                           <a href="{$WEB_ROOT}/graybox.php?page=aviso" data-target="#ajax" data-toggle="modal" data-width="1000px">
                               <i class="fa fa-adn" aria-hidden="true"></i>Aviso de Privacidad 
							</a>
                        </li>
						<li>
                           <a href="{$WEB_ROOT}/graybox.php?page=registro-add" data-target="#ajax" data-toggle="modal" data-width="1000px">
                               <i class="fa fa-adn" aria-hidden="true"></i>Registro
							</a>
                        </li>
						{*<li>
                           <a  href="{$WEB_ROOT}/ajax/acuse.php?id={$id}" target="_blank" >
                               <i class="fa fa-adn" aria-hidden="true"></i>Acuse de Derecho
							</a>
                        </li>*}
                        <li>
                           <a href="{$WEB_ROOT}/ajax/datas.php?id={$id}&key={$firma}" target="_blank">
                               <i class="fa fa-adn" aria-hidden="true"></i> Ficha de Registro
							</a>
                        </li>
                        <li>
                           <a href="{$WEB_ROOT}/docs/dyo.pdf" target="_blank">
                               <i class="fa fa-adn" aria-hidden="true"></i> Derechos y Obligaciones
							</a>
                        </li>
						<li>
                            &nbsp;
							<br>
							<br>
                        </li>
                        {if $info.autorizo eq 'si'}
                            <li>
                                <a href="{$WEB_ROOT}/graybox.php?page=add-ine&id=1" data-target="#ajax" data-toggle="modal" data-width="1000px">
                                    <i class="fa fa-newspaper-o" style="color:green" aria-hidden="true"></i> INE Frente
                                </a>
                            </li>
                            <li>
                                <a href="{$WEB_ROOT}/graybox.php?page=add-ine&id=2" data-target="#ajax" data-toggle="modal" data-width="1000px">
                                    <i class="fa fa-newspaper-o" style="color:#2ab4c0" aria-hidden="true"></i> INE Vuelta
                                </a>
                            </li>
                        {/if}
						<!--<li>
                            <a href="{$WEB_ROOT}/perfil" >
                               <i class="fa fa-user" aria-hidden="true"></i>Perfil 
							</a>
                        </li>
                        <li class="">
                            <a href="{$WEB_ROOT}/alumn-services ">
                                <i class="icon-settings"></i> Actualizar Información</a>
                        </li>
                        <li>
                            <a href="{$WEB_ROOT}/tv ">
                                <i class="fa fa-video-camera"></i> VideoConferencias </a>
                        </li>
                        <li>
                            <a href="{$WEB_ROOT}/recorded ">
                                <i class="fa fa-camera"></i> Grabaciones </a>
                        </li>-->
						<!--
						<li>
                            <a href="{$WEB_ROOT}/view-solicitud" >
                               <i class="fa fa-folder-open" aria-hidden="true"></i>Solicitudes 
							</a>
                        </li>--><!--
						<li>
						<a href="{$WEB_ROOT}/graybox.php?page=referencia-bancaria" data-target="#ajax" data-toggle="modal" data-width="1000px">
						   <i class="fa fa-university" aria-hidden="true"></i>Referencia Bancaria 
						</a>
						</li>
						<li>
						<a href="{$WEB_ROOT}/graybox.php?page=formato-reinscripcion" data-target="#ajax" data-toggle="modal" data-width="1000px">
						  <i class="fa fa-file-text" aria-hidden="true"></i>Descargar Formatos de Inscripción/Reinscripción
						</a>
						</li>
						<li>-->
						<!--<a href="{$WEB_ROOT}/ver-calendario" ><onClick="verCalendario()"
						   <i class="fa fa-calendar"></i>Calendario de Pagos
						</a>
						</li>-->
						<!--
						<li>
						<a href="{$WEB_ROOT}/estatus-financiero" >
						  <i class="fa fa-file-text" aria-hidden="true"></i>Estatus Financiero
						</a>
						</li>
						<li>
						<a href="{$WEB_ROOT}/graybox.php?page=concepto-pago" data-target="#ajax" data-toggle="modal" data-width="1000px">
						   <i class="fa fa-files-o"></i>Conceptos de Pago
						</a>
						</li>
						<li>
						<a href="{$WEB_ROOT}/inbox/or/h" >
						 <i class="fa fa-comments"></i>Inbox 
						</a>
						</li>
						<li>
						<a href="{$WEB_ROOT}/graybox.php?page=contra" data-target="#ajax" data-toggle="modal" data-width="1000px">
						   <i class="fa fa-unlock-alt"></i>Cambiar Contraseña
						</a>
						</li>
						<li>
						<a href="{$WEB_ROOT}/personal-academico" >
						   <i class="fa fa-sitemap"></i>Personal Academico
						</a>
						</li>-->
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
            <!-- PORTLET MAIN -->
            <div class="portlet light ">
{*
                <!-- STAT -->
                <div class="row list-separated profile-stat">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="uppercase profile-stat-title"> 37 </div>
                        <div class="uppercase profile-stat-text"> Projects </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="uppercase profile-stat-title"> 51 </div>
                        <div class="uppercase profile-stat-text"> Tasks </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="uppercase profile-stat-title"> 61 </div>
                        <div class="uppercase profile-stat-text"> Uploads </div>
                    </div>
                </div>
                <!-- END STAT -->
*}
                <div>
                    <h4 class="profile-desc-title">Acerca del IAP Chiapas</h4>
                    <span class="profile-desc-text"> El <b>Instituto de Administración Pública del Estado de Chiapas, A. C.</b><br />te da la mas cordial bienvenida a nuestro Sistema de Educación en Línea.</span>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-globe"></i>
                        <a href="https://iapchiapas.edu.mx/" target="_blank">iapchiapas.edu.mx</a>
                    </div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-facebook"></i>
                        <a href="https://www.facebook.com/IAPChiapas">iapchiapas</a>
                    </div>
                </div>
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            {if $info.autorizoFirma eq "no"}
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Datos para fichas de registros CONOCER</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <div class="tab-pane " id="tab_1_2">
                                    </div>
                                    <div class="tab-pane active" id="tab_1_1">
                                        <div class="scroller" style="height: 137px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                            <div style="text-align:justify">
                                                Autorizo la creación de mi código individual de identificación para utilizarlo como firma electrónica dentro de los documentos que se requieran en el Sistema de Red CONOCER del Instituto de Administración Pública del Estado de Chiapas, A. C.
                                            </div>
                                        </div>
                                        <form id="frmAutorizaFirma">
                                            <input type="hidden" id="type" name="type" value="saveautorizaFirma"/>
                                            <input type="hidden" id="userId" name="userId" value="{$info.userId}"/>
                                            <input type="hidden" name="autorizaFirma" id="autorizaFirma" value="1">
                                        </form>
                                        <center>
                                            <button type="button" class="btn green submitForm" onclick="authorizeSignature();" id="authorizeSignature">Si autorizo</button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    {elseif $info.actualizado eq "no"}
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet light ">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Datos para fichas de registros CONOCER</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <!--BEGIN TABS-->
                                <div class="tab-content">
                                    <div class="tab-pane " id="tab_1_2">
                                    </div>
                                    <div class="tab-pane active" id="tab_1_1">
                                        <div class="scroller" style="height: 137px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                            <div style="text-align:justify">
                                                Doy mi consentimiento al CONOCER para que, en términos del artículo 22 de la LEY FEDERAL DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA GUBERNAMENTAL, difunda, distribuya y publique la información contenida en el documento que se inscribe, para ser transmitida a instituciones públicas o privadas para agregar mi información a bolsas de trabajo electrónicas o en línea y facilitar mi localización en caso de que alguna otra Institución pública o privada requiera personal con las competencias certificadas con las que cuento.
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            
                                            
                                        </div>
                                        <form id="frmConfirma">
                                            <center>
                                                <b>No autorizo</b>
                                                <label class="switch">
                                                <input type="checkbox" name="confirma" id="confirma" onChange="showMessage(this)">
                                                <span class="slider round"></span>
                                                </label>
                                                <b>Si autorizo</b>
                                            </center>
                                        </form>
                                        <div id="autorizaText" style="margin-top: 20px; display: none;" class="text-center">
                                            Al autorizar que el CONOCER publique su información en el RENAP, deberá subir copia de ambos lados de su Credencial de Elector (INE).
                                        </div>
                                    </div>
                                </div>
                                <!--END TABS-->
                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase"></span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable table-scrollable-borderless">
                                    {include file="{$DOC_ROOT}/templates/forms/completo.tpl"}
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                </div>
			{else}
                {if $hasLive eq true}
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading"><i class="fa fa-video-camera"></i> Transmisión en Vivo</div>
                                <div class="panel-body text-center">
                                    <h4><b>Certificación:</b> {$live['name']}</h4>
                                    <a href="{$WEB_ROOT}/view-modules-student/id/{$live['courseId']}&tipo=live" title="Ver Transmisión" class="btn btn-danger">
                                        <i class="fa fa-play"></i> Ver Transmisión
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                {/if}
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Certificación Activa</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable table-scrollable-borderless">
                                    <table class="table table-hover table-light" >
                                        <thead>
                                        <tr class="uppercase">

                                            <!-- <th style="text-align: center"> Tipo </th>-->
                                            <th style="text-align: center"> Nombre </th>
                                            <th style="text-align: center"> Grupo </th>
                                            <!--<th style="text-align: center"> Modalidad </th>-->
                                            <th style="text-align: center"> Fecha Inicial </th>
                                            <th style="text-align: center"> Fecha Final </th>
                                            <!--<th style="text-align: center"> Modulos </th>-->
                                        
                                            <th style="text-align: center"> Ingresar </th>
                                            <th style="text-align: center"> Certificado </th>
                                        </tr>
                                        </thead>
                                        {foreach from=$activeCourses item=subject}
                                        <tr>
                                        
                                        <!-- <td align="center">{$subject.majorName}</td>-->
                                            <td align="center">{$subject.name}</td>
                                            <td align="center">{$subject.group}
                                                <!-- <td align="center">{$subject.modality}</td>-->
                                            <td align="center">{$subject.initialDate|date_format:"%d-%m-%Y"}</td>
                                            <td align="center">{$subject.finalDate|date_format:"%d-%m-%Y"}</td>
                                            <!--<td align="center">{$subject.courseModule}-->
                                        
                                            <td align="center">
                                                {if $subject.evalDocenteCompleta eq 'no'}
                                                    <a href="{$WEB_ROOT}/view-modules-student/id/{$subject.courseId}" title="Ver Modulo de Curso"  style="color:#000" target="_top" >
                                                        <i class="fa fa-sign-in fa-lg"></i>
                                                    </a>
                                                {else}
                                                    <a href="{$WEB_ROOT}/view-modules-student/id/{$subject.courseId}&tipo=avisos" title="Ver Modulo de Curso"  style="color:#000" target="_top" >
                                                        <i class="fa fa-sign-in fa-lg"></i>
                                                    </a>
                                                {/if}
                                            </td>
                                            <td align="center">
                                                {if $subject.certificacion_pdf != "" && $subject.courseId != 50}
                                                    <!--a href="{$WEB_ROOT}/alumnos/repositorio/{$subject.certificacion_pdf}" target="_blank">
                                                        <i class="material-icons">
                                                            assignment_returned
                                                        </i>
                                                    </a-->
                                                    <a href="{$WEB_ROOT}/graybox.php?page=student-certificado&userId={$subject.alumnoId}&subjectId={$subject.subjectId}&auxTpl=1" data-target="#ajax" data-toggle="modal" data-width="1000px" title="Descargar Certificado">
                                                        <i class="material-icons">assignment_returned</i>
                                                    </a> 
                                                {else}
                                                    {if $subject.courseId == 50}
                                                        <i class="material-icons" title="NO DISPONIBLE" style="cursor:pointer;" onclick="alert('Su certificado digital estará disponible en próximas fechas, le enviaremos un correo informándole en cuanto se encuentre disponible para su descarga.')">
                                                            info
                                                        </i>
                                                    {else}
                                                        <i class="material-icons" title="NO DISPONIBLE">
                                                            block
                                                        </i>
                                                    {/if}
                                                {/if}
                                            </td>
                                        </tr>
                                            {foreachelse}
                                            <tr>
                                                <td colspan="12" align="center">No se encontr&oacute; ning&uacute;n registro.</td>
                                            </tr>

                                        {/foreach}

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Acerca de la Plataforma</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/WTxKWMQQ2EE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="col-md-6">
                                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/Dw5akhfWaEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			{/if}
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>

<script>
    function showMessage(element)
    {
        if(element.checked == true)
            $("#autorizaText").css("display", "block");
        else
            $("#autorizaText").css("display", "none");
    }
</script>