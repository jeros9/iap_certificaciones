<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-bullhorm"></i><b>Calificación acumulada:</b> {$totalScore}% &raquo;
        </div>
    </div>
    <input type="hidden" value="0" id="recarga" name="recarga">
    <div class="portlet-body">
        {foreach from=$actividades item=item}
            {if $timestamp > $item.initialDateTimestamp && $timestamp < $item.finalDateTimestamp}
                <div class="portlet box red">
            {/if}
            {if $timestamp > $item.finalDateTimestamp}
                <div class="portlet box red-mint">
            {/if}
            {if $timestamp < $item.initialDateTimestamp}
                <div class="portlet box red-mint">
            {/if}
                <div class="portlet-title">
                    <div class="caption" >
                        <b>Actividad  {$item.count} - </b> {$item.resumen}
                    </div>
                    <div class="actions">
                        <a href="{$WEB_ROOT}/graybox.php?page=view-description-group-activity&id={$item.activityId}" class="btn green" data-target="#ajax" data-toggle="modal" >
                            <i class="fa fa-plus"></i> Ver Descripción </a>
                    </div>
                </div>
                <div class="portlet-body">
                    {include file="{$DOC_ROOT}/templates/lists/new/module-group-calendar.tpl"}
                </div>
            </div>
        {/foreach}
        {if $final_test neq null}
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption" >
                        <b>Examen Final</b>
                    </div>
                    <div class="actions">
                        <a href="{$WEB_ROOT}/graybox.php?page=view-description-group-final-test&id={$final_test.testId}" class="btn red" data-target="#ajax" data-toggle="modal" >
                            <i class="fa fa-plus"></i> Ver Descripción </a>
                    </div>
                </div>
                <div class="portlet-body">
                    {include file="{$DOC_ROOT}/templates/lists/new/module-group-final-test.tpl"}
                </div>
            </div>
        {/if}
    </div>
</div>

