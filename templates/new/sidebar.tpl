<div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu  page-header-fixed {if $User.type == "student" || $User.type == "Docente" || $page == "register-multiple"} page-sidebar-menu-closed {/if}"
        data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li>
        {* INICIO *}
        <li class="nav-item start ">
            <a href="{$WEB_ROOT}" class="nav-link">
                <i class="icon-home"></i>
                <span class="title">Inicio</span>
            </a>
        </li>
        {* MENU ALUMNO *}
        {if $User.type == "student" && $myModule.evalOk eq "si"}
            {if $myModule['ytLive'] neq ''}
                <li class="nav-item {if $page == "view-modules-student" and $tipo eq "live"} active {/if}">
                    <a href="{$WEB_ROOT}/view-modules-student/id/{$id}&tipo=live" class="nav-link nav-toggle">
                        <i class="fa fa-video-camera"></i> <span class="title">Live</span>
                    </a>
                </li>
            {/if}
            <li class="nav-item {if $page == "view-modules-student" and $tipo eq "avisos"} active {/if}">
                <a href="{$WEB_ROOT}/view-modules-student/id/{$id}&tipo=avisos" class="nav-link nav-toggle">
                    <i class="fa fa-bullhorn"></i> <span class="title">Avisos</span>
                </a>
            </li>
            <li class="nav-item {if $page == "view-modules-student" and $tipo eq "actividades"} active {/if}">
                <a href="{$WEB_ROOT}/view-modules-student/id/{$id}&tipo=actividades" class="nav-link nav-toggle">
                    <i class="fa fa-list"></i> <span class="title">Actividades</span>
                </a>
            </li>
            <li class="nav-item {if $page == "view-modules-student" and $tipo eq "foro"} active {/if}">
                <a href="{$WEB_ROOT}/view-modules-student/id/{$id}&tipo=foro" class="nav-link nav-toggle">
                    <i class="fa fa-comments"></i> <span class="title">Foro</span>
                </a>
            </li>
            <li class="nav-item {if $page == "view-modules-student" and $tipo eq "recursos"} active {/if}">
                <a href="{$WEB_ROOT}/view-modules-student/id/{$id}&tipo=recursos" class="nav-link nav-toggle">
                    <i class="fa fa-files-o"></i> <span class="title">Recursos de Apoyo</span>
                </a>
            </li>
            <li class="nav-item {if $page == "view-modules-student" and $tipo eq "resultado"} active {/if}">
                <a href="{$WEB_ROOT}/view-modules-student/id/{$id}" class="nav-link nav-toggle">
                    <i class="fa fa-check-square-o"></i> <span class="title">Evaluación Diagnóstica (Resultados)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{$WEB_ROOT}/ajax/acuse.php?id={$userId}&courseId={$id}" class="nav-link nav-toggle"
                    target="_blank">
                    <i class="fa fa-adn" aria-hidden="true"></i> <span class="title">Acuse de Derecho</span>
                </a>
            </li>
            {if $hasVideos eq true}
                <li class="nav-item {if $page == "view-modules-student" and $tipo eq "videos"} active {/if}">
                    <a href="{$WEB_ROOT}/view-modules-student/id/{$id}&tipo=videos" class="nav-link nav-toggle">
                        <i class="fa fa-file-video-o"></i> <span class="title">Videos</span>
                    </a>
                </li>
            {/if}
            <li class="nav-item">
                <a href="{$WEB_ROOT}/ajax/autorizacion-firma.php?id={$userId}&courseId={$id}" class="nav-link nav-toggle"
                    target="_blank">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="title">Carta de Autorización Firma
                        Digital</span>
                </a>
            </li>
        {/if}
        {if in_array($User.positionId, [1,33]) || $AccessMod[1] == 1 || $AccessMod[3] == 1 || $AccessMod[9] == 1}
            {if !$docente}
                {if $vistaPrevia ne 1 && in_array($User.positionId, [1])}
                    {* CATALOGOS *}
                    <li
                        class="nav-item {if $page == "personal1" || $page == "role" || $page == "major" || $page == "dictum"} active {/if}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">Catálogos</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            {if $User.positionId == 1 || $AccessMod[1] == 1}
                                <li class="nav-item  ">
                                    <a href="{$WEB_ROOT}/major" class="nav-link ">
                                        <span class="title">Tipos de Cursos</span>
                                    </a>
                                </li>
                            {/if}
                            {if $User.positionId == 1 || $AccessMod[3] == 1}
                                <li class="nav-item  ">
                                    <a href="{$WEB_ROOT}/personal1" class="nav-link ">
                                        <span class="title">Personal</span>
                                    </a>
                                </li>
                            {/if}
                            {if $User.positionId == 1 || $AccessMod[9] == 1}
                                <li class="nav-item  ">
                                    <a href="{$WEB_ROOT}/role" class="nav-link ">
                                        <span class="title">Roles</span>
                                    </a>
                                </li>
                            {/if}
                            {if $User.positionId == 1 || $AccessMod[49] == 1}
                                <li class="nav-item  ">
                                    <a href="{$WEB_ROOT}/dictum" class="nav-link ">
                                        <span class="title">Dictámenes</span>
                                    </a>
                                </li>
                            {/if}
                        </ul>
                    </li>
                {/if}
                {* CERTIFICACIONES *}
                {if in_array($User.positionId, [1])}
                    <li class="nav-item {if $page == "grupos" || $page == "history-subject"} active {/if}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">Certificaciones</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            {if $User.positionId == 1 || $AccessMod[8] == 1}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/history-subject" class="nav-link">
                                        <span class="title">Certificaciones</span>
                                    </a>
                                </li>
                            {/if}
                            {if $User.positionId == 1 || $AccessMod[46] == 1}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/grupos" class="nav-link">
                                        <span class="title">Grupos</span>
                                    </a>
                                </li>
                            {/if}
                            {if $User.positionId == 1 || $AccessMod[46] == 1}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/permisos" class="nav-link">
                                        <span class="title">Permisos</span>
                                    </a>
                                </li>
                            {/if}
                        </ul>
                    </li>
                {/if}
                {* CANDIDATOS *}
                {if in_array($User.positionId, [1, 33])}
                    <li
                        class="nav-item {if  $page == "student" || $page == "usuarios"  || $page == "usuarios-admin" || $page == "usuarios-doc" || $page == "usuarios-sol"} active {/if} ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">Candidatos</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            {if $User.positionId == 1 || $AccessMod[4] == 1}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/prospectos" class="nav-link">
                                        <span class="title">Prospectos</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/usuarios-admin" class="nav-link">
                                        <span class="title">Usuarios</span>
                                    </a>
                                </li>
                            {/if}
                            {if in_array($User.positionId, [1,33]) || $AccessMod[47] == 1}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/usuarios-doc" class="nav-link">
                                        <span class="title">Documentos</span>
                                    </a>
                                </li>
                            {/if}
                        </ul>
                    </li>
                {/if}

                {* REPORTES *}
                {if in_array($User.positionId, [1, 33])}
                    <li
                        class="nav-item {if  $page == "reporte-region" || $page == "reporte-b" || $page == "reporte-certificaciones" || $page == "asistencia-municipios" || $page == "revision-externo"} active {/if} ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">Reportes</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            {if $User.positionId == 1 || $AccessMod[45] == 1}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/reporte-b" class="nav-link">
                                        <span class="title">Reporte B</span>
                                    </a>
                                </li>
                            {/if}
                            {if $User.positionId == 1 || $AccessMod[44] == 1}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/reporte-region" class="nav-link">
                                        <span class="title">Reporte</span>
                                    </a>
                                </li>
                            {/if}
                            {if in_array($User.positionId, [1])}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/revision-portafolio" class="nav-link">
                                        <span class="title">Revisión Portafolios</span>
                                    </a>
                                </li>
                            {/if}
                            {if in_array($User.positionId, [1, 33])}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/revision-externo" class="nav-link">
                                        <span class="title">Revisión A. Externo</span>
                                    </a>
                                </li>
                            {/if}
                            {if $User.positionId == 1 || $AccessMod[48] == 1}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/log" class="nav-link">
                                        <span class="title">Log</span>
                                    </a>
                                </li>
                            {/if}
                            {if $User.positionId == 1}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/reporte-evaluadores" class="nav-link">
                                        <span class="title">Evaluadores</span>
                                    </a>
                                </li>
                            {/if}
                            {if  $User.positionId == 1 || $AccessMod[45] == 1}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/reporte-certificaciones" class="nav-link">
                                        <span class="title">Certificaciones</span>
                                    </a>
                                </li>
                            {/if}
                            {if  $User.positionId == 1 || $AccessMod[45] == 1}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/asistencia-municipios" class="nav-link">
                                        <span class="title">Asistencia de Municipios</span>
                                    </a>
                                </li>
                            {/if}

                            {if in_array($User.positionId, [1, 33])}
                                <li class="nav-item">
                                    <a href="{$WEB_ROOT}/ajax/new/reportes.php?option=prospects&page=export-excel" target="_blank" class="nav-link">
                                        <span class="title">Prospectos</span>
                                    </a>
                                </li>
                            {/if}
                        </ul>
                    </li>
                {/if}
            {/if}
        {/if}
        {* PROCESO DE CERTIFICACION *}
        {if $User.positionId == 1 || $AccessMod[50] == 1 || $AccessMod[51] == 1 || $AccessMod[52] == 1 || $AccessMod[53] == 1}
            <li
                class="nav-item {if  $page == "invitacion" || $page == "progreso" || $page == "reporte-evaluaciones" || $page == "reporte-certificados"} active {/if}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Proceso de Certificaci&oacute;n</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    {if $User.positionId == 1 || $AccessMod[50] == 1}
                        <li class="nav-item">
                            <a href="{$WEB_ROOT}/invitacion" class="nav-link">
                                <span class="title">Invitación</span>
                            </a>
                        </li>
                    {/if}
                    {if $User.positionId == 1 || $AccessMod[51] == 1}
                        <li class="nav-item">
                            <a href="{$WEB_ROOT}/reporte-evaluaciones" class="nav-link">
                                <span class="title">Reporte de Evaluaciones</span>
                            </a>
                        </li>
                    {/if}
                    {if $User.positionId == 1 || $AccessMod[52] == 1}
                        <li class="nav-item">
                            <a href="{$WEB_ROOT}/reporte-certificados" class="nav-link">
                                <span class="title">Reporte de Certificados</span>
                            </a>
                        </li>
                    {/if}
                    {if $User.positionId == 1 || $AccessMod[53] == 1}
                        <li class="nav-item">
                            <a href="{$WEB_ROOT}/progreso" class="nav-link">
                                <span class="title">Progreso</span>
                            </a>
                        </li>
                    {/if}
                </ul>
            </li>
        {/if}
        {* CURRICULA *}
        {if $AccessMod[11] == 1 || $User.positionId == 1 || $AccessMod[31] == 1 || $AccessMod[8] == 1 || $AccessMod[39] == 1}
            {if !$docente}
                {if $vistaPrevia ne 1}
                {/if}
            {else}
                <li class="nav-item">
                    <a href="{$WEB_ROOT}/history-subject" class="nav-link nav-toggle">
                        <i class="icon-settings"></i>
                        <span class="title">Currícula</span>
                    </a>
                </li>
            {/if}
        {/if}
        {* EXAMENES *}
        {if $mnuMain == "modulo1" || $mnuMain == "modulo"}
            {if $infoUSubject.acuseDerecho eq "si"}
                <li class="nav-item {if $page == "examen-modules-student"} active {/if} ">
                    <a href="{$WEB_ROOT}/examen-modules-student/id/{$id}" class="nav-link nav-toggle">
                        <i class="fa fa-check-square-o"></i>
                        <span class="title">Examenes</span>
                    </a>
                </li>
            {/if}
        {/if}
    </ul>
</div>