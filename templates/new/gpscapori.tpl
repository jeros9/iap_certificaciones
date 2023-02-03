<head>
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
            <i class="fa fa-bullhorm"></i>Grupos del Capacitador
        </div>
        {include file="boxes/status_no_ajax.tpl"}
        <div class="accions"></div>
    </div>
    <div class="portlet-body" > 
	    <table width="100%" class="tblGral table table-bordered table-striped table-condensed flip-content">
            <thead>
                <tr> 
                    <th width="">Grupo</th>	  
                    <th width="">Cantidad</th>	 
                    <th width="">Acciones</th>	 
                </tr>
            </thead>
            <tbody>
                {foreach from=$registros item=item}
                    <tr>
                        <td align="center">{$item.group}</td>
                        <td align="center">{$item.cantidad}</td>
                        <td align="center">
                            <a href="{$WEB_ROOT}/edit-modules-group-original/id/{$item.courseId}" >
                                <i class="fa fa-sign-in fa-lg"></i>
                            </a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    <div id="loader2" ></div>
</div>
