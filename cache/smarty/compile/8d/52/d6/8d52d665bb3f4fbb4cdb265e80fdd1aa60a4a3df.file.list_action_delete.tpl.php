<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 14:38:24
         compiled from "C:\wamp\www\prestashop\admin4791\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3785523fe1e00ed520-80006333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d52d665bb3f4fbb4cdb265e80fdd1aa60a4a3df' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin4791\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1377656062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3785523fe1e00ed520-80006333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523fe1e0114ce9_23821116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523fe1e0114ce9_23821116')) {function content_523fe1e0114ce9_23821116($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>