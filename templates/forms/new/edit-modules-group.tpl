<div id="msjCourse"></div>
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> .:: Datos del Grupo ::.
        </div>
        <div class="actions">
            {if !isset($informe)}
                <a href="{$WEB_ROOT}/graybox.php?page=add-group-inform&id={$infoCourse.courseId}&auxTpl=admin&cId={$infoCourse.courseId}" data-target="#ajax" data-toggle="modal" class="btn btn-circle blue">
                    &raquo; Agregar Informe del Curso
                </a>
            {/if}
        </div>
    </div>
    <div class="portlet-body">
		<div id="msj"></div>
        <div class="row">
            <div class="col-md-12">
                <label class="col-md-3 control-label">Perteneciente al (a la) {$infoCourse.majorName}:</label>
                <div class="col-md-8">
                    <b>{$infoCourse.name}</b>
                </div>
            </div>
            <div class="col-md-12">
                <label class="col-md-3 control-label">Nombre del Grupo:</label>
                <div class="col-md-8">
                    <b>{$infoCourse.group}</b>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <a href="{$WEB_ROOT}/candidatos/id/{$infoCourse.courseId}" target="_blank" data-toggle="modal" class="btn green">
                    &raquo; Ver Candidatos y Calificaciones
                </a>
                <a href="{$WEB_ROOT}/foro/id/{$infoCourse.courseId}" target="_blank" data-toggle="modal" class="btn blue">
                    &raquo; Ver Foro
                </a>
            </div>
            {if $informe}
                <div class="col-md-12 text-center" style="margin-top: 30px;">
                    <h4><b><i class="fa fa-hand-o-right"></i> Informe del Curso <i class="fa fa-hand-o-left"></i></b></h4>
                    <a href="{$WEB_ROOT}/capacitador_informs/{$informe.file}" target="_blank" class="btn btn-success">
                        <i class="fa fa-file-pdf-o"></i> Descargar
                    </a>
                </div>
                <div class="col-md-12 text-center" style="margin-top: 10px;">
                    <button class="btn btn-danger" onclick="DeleteInform({$informe.informId})">
                        <i class="fa fa-trash"></i> Eliminar
                    </button>
                </div>
            {/if}
        </div>
    </div>
</div>

{* LISTA DE ASISTENCIA *}
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-check-circle"></i>.:: Lista de Asistencia ::.
        </div>
    </div>
    <div class="portlet-body">
        <div class="row">
            <div class="col-md-6 text-center">
                <a href="{$WEB_ROOT}/graybox.php?page=add-group-attendance&id={$infoCourse.courseId}&auxTpl=admin" data-target="#ajax" data-toggle="modal" class="btn btn-circle green" data-backdrop="static" data-keyboard="false">
                    <i class="fa fa-calendar-check-o"></i> Marcar Asistencia
                </a>
            </div>
            <div class="col-md-6 text-center">
                <a href="{$WEB_ROOT}/ajax/attendance.php?cId={$infoCourse.courseId}&pId={$usuariologId}" target="_blank" title="Lista de Asistencia" class="btn btn-circle green">
                    <i class="fa fa-list fa-lg"></i> Descargar Lista de Asistencia
                </a>
            </div>
        </div>
    </div>
</div>

{* ACTIVIDADES *}
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>.:: Actividades ::.
        </div>
        <div class="actions">
            <a href="{$WEB_ROOT}/graybox.php?page=add-group-activity&id={$infoCourse.courseId}&auxTpl=admin" data-target="#ajax" data-toggle="modal" class="btn btn-circle blue">
                &raquo; Agregar actividad
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <div style="text-align:left">Ponderaci&oacute;n Total del Grupo: <b>{$totalPonderation}%</b>
            {if $totalPonderation < 100}
                <span style="color:#C00"> La suma de las ponderaciones de las actividades es menor a 100%. Se recomienda que sea 100%</span>
            {/if}
            {if $totalPonderation > 100}
                <span style="color:#C00"> La suma de las ponderaciones de las actividades es mayor a 100%. Se recomienda que sea 100%</span>
            {/if}
        </div>
        <div id="tblContent-activities">{include file="lists/new/group-activities.tpl"}</div>
    </div>
</div>

{* RECURSOS DE APOYO *}
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>.:: Recursos de Apoyo ::.
        </div>
        <div class="actions">
            <a href="{$WEB_ROOT}/graybox.php?page=add-group-resource&id={$infoCourse.courseId}&auxTpl=admin&cId={$infoCourse.courseId}" data-target="#ajax" data-toggle="modal" class="btn btn-circle blue">
                &raquo; Agregar Recurso de Apoyo
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <div id="tblContentResources">{include file="lists/new/group_resources.tpl"}</div>
    </div>
</div>

{* AVISOS *}
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> .:: Avisos ::.
        </div>
        <div class="actions">
            <a href="{$WEB_ROOT}/graybox.php?page=add-group-noticia&id={$infoCourse.courseId}&auxTpl=admin" data-target="#ajax" data-toggle="modal"  class="btn btn-circle blue">
                &raquo; Agregar Aviso
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <div id="tblContentNoticias">{include file="lists/new/module-group-announcements.tpl"}</div>
    </div>
</div>

{* VIDEOS *}
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> .:: Videos ::.
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">T&iacute;tulo</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$videos item=item}
                        <tr>
                            <td>{$item.title}</td>
                            <td>{$item.created_at}</td>
                            <td class="text-center"> 
                                <a href="https://www.youtube.com/watch?v={$item.code}" class="btn btn-success">
                                    Ver Video
                                </a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>