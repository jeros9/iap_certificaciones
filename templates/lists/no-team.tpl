<form method="post" action="{$WEB_ROOT}/config-teams/id/{$id}">
<input type="hidden" name="auxTpl" id="auxTpl" value="{$auxTpl}">
<table width="100%" class="tblGral table table-bordered table-striped table-condensed flip-content">
<thead>      
   {include file="{$DOC_ROOT}/templates/items/no-team-header.tpl"}
</thead>
<tbody>
   {include file="{$DOC_ROOT}/templates/items/no-team-base.tpl"}
</tbody>
</table>
</form>