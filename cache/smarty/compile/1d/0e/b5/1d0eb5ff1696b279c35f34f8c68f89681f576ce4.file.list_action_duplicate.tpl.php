<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 14:38:24
         compiled from "C:\wamp\www\prestashop\admin4791\themes\default\template\helpers\list\list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32464523fe1e00ad481-33885324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d0eb5ff1696b279c35f34f8c68f89681f576ce4' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin4791\\themes\\default\\template\\helpers\\list\\list_action_duplicate.tpl',
      1 => 1377656062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32464523fe1e00ad481-33885324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523fe1e00cbee4_41751591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523fe1e00cbee4_41751591')) {function content_523fe1e00cbee4_41751591($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>