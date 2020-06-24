<div class="portlet box "  style="background-colo:white;  border-radius: 2px;   border: 1px solid #73AD21 ">
    <div class="portlet-title" style="background-colo:white; color: #73b760; ">
        <div class="caption"><i class="fa fa-bullhorm"></i> Foro</div>
        <div class="actions">
            {if $positionId != 0}
                <a href="{$WEB_ROOT}/edit-modules-course/id/{$myModule["courseId"]}" class="btn btn-default btn-sm" style="background:#73AD21; color:white">Regresar</a>
            {/if}
            {if ($asunto== "Foro de Discusion") && ($User.type == "student")}
            {else}
                <a href="{$WEB_ROOT}/graybox.php?page=add-group-topic&id={$myModule["courseId"]}" data-target="#ajax" data-toggle="modal" class="btn btn-default btn-sm" style="background:#73AD21; color:white">
                    <span class="btnAdd" id="btnAddSubject">Agregar</span>
                </a>
            {/if}

        </div>
    </div>
    <div class="portlet-body">
        <div id="tblContent" class="content-in">
            {include file="boxes/status_no_ajax.tpl"}
            <div id="tblContent">{include file="lists/group_topicsub.tpl"}</div>
            <br />
            {if $coursesCount}
                <div id="pagination" class="lnkPages">
                    {include file="footer-pages-links.tpl"}
                </div>
            {/if}
        </div>
    </div>
</div>
<input type="hidden" id="viewPage" name="viewPage" value="{$arrPage.currentPage}" />