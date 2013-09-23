<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 14:38:24
         compiled from "C:\wamp\www\prestashop\admin4791\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7827523fe1e0077f88-06048046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa25c7931a220c395912c4d4989027c316eede5' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin4791\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1377656062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7827523fe1e0077f88-06048046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523fe1e008c7b8_17905907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523fe1e008c7b8_17905907')) {function content_523fe1e008c7b8_17905907($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>