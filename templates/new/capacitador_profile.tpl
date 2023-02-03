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
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success" role="alert">
            <h1 class="page-title" style="text-align: center;"><strong>Bienvenido al Módulo de Alineador</strong></h1>
        </div>
    </div>
    <div class="col-md-12">
        <div class="profile-sidebar">
            <div class="portlet light profile-sidebar-portlet ">
                <div class="profile-userpic">
                    <img src="{$fotoPj}" class="img-responsive" alt=""> </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"> {$User.username} </div>
                    <div class="profile-usertitle-job">Alineador</div>
                    <a href="{$WEB_ROOT}/" class="btn btn-primary">
                        Ir al Módulo de Evaluador
                    </a>
                    <br><br>
                    <a href="{$WEB_ROOT}/capacitador_original_profile" class="btn btn-primary">
                        Ir al Módulo de Capacitador
                    </a>
                </div>
                <div class="profile-usermenu">
                    <ul class="nav">
						<li></li>
                    </ul>
                </div>
            </div>
            <div class="portlet light ">
                <div>
                    <h4 class="profile-desc-title">Acerca del IAP Chiapas</h4>
                    <span class="profile-desc-text"> El <b>Instituto de Administración Pública del Estado de Chiapas, A. C.</b><br />te da la mas cordial bienvenida a nuestro Sistema de Educación en Línea.</span>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-globe"></i>
                        <a href="https://iapchiapas.org.mx/">iapchiapas.org.mx</a>
                    </div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-facebook"></i>
                        <a href="https://www.facebook.com/IAPChiapas">iapchiapas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Certificaciones</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table table-hover table-light" >
                                    <thead>
                                        <tr class="uppercase">
                                            <th style="text-align: center">Nombre</th>
                                            <th style="text-align: center">Acciones</th>
                                        </tr>
                                    </thead>
                                    {foreach from=$resu item=subject}
                                        <tr>
                                            <td align="center">{$subject.name}</td>
                                            <td align="center">
                                                <a href="{$WEB_ROOT}/gpscap/id/{$subject.subjectId}"" title="Entrar a la Certificación">
                                                    <i class="fa fa-sign-in fa-lg"></i>
                                                </a>
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
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
    </div>
</div>