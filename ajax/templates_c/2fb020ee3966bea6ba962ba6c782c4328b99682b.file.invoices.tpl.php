<?php /* Smarty version Smarty3-b7, created on 2015-09-30 14:32:01
         compiled from "/home/iapchiap/public_html/templates/lists/invoices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:469232570560c38b179e473-67286829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fb020ee3966bea6ba962ba6c782c4328b99682b' => 
    array (
      0 => '/home/iapchiap/public_html/templates/lists/invoices.tpl',
      1 => 1379525155,
    ),
  ),
  'nocache_hash' => '469232570560c38b179e473-67286829',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table width="100%" class="tblGral">
	<thead>
    	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/items/invoices-header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    </thead>
    <tbody>
    	<?php $_template = new Smarty_Internal_Template("{$_smarty_tpl->getVariable('DOC_ROOT')->value}/templates/items/invoices-base.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	</tbody>
</table>