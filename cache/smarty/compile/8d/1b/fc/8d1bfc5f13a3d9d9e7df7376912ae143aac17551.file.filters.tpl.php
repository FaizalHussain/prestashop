<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 14:38:29
         compiled from "C:\wamp\www\prestashop\modules\gamification\views\templates\admin\gamification\helpers\view\filters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29311523fe1e5400ef7-96409453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d1bfc5f13a3d9d9e7df7376912ae143aac17551' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\gamification\\views\\templates\\admin\\gamification\\helpers\\view\\filters.tpl',
      1 => 1379917413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29311523fe1e5400ef7-96409453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'groups' => 0,
    'id_group' => 0,
    'group' => 0,
    'levels' => 0,
    'id_level' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523fe1e54b1d34_41148405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523fe1e54b1d34_41148405')) {function content_523fe1e54b1d34_41148405($_smarty_tpl) {?><div class="badges_filters">
<?php if ($_smarty_tpl->tpl_vars['type']->value=='badges_feature'||$_smarty_tpl->tpl_vars['type']->value=='badges_achievement'){?>
	<div><?php echo smartyTranslate(array('s'=>"Type:",'mod'=>'gamification'),$_smarty_tpl);?>

		<select id="group_select_<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" onchange="filterBadge('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
');">
				<option value="badge_all"><?php echo smartyTranslate(array('s'=>"All",'mod'=>'gamification'),$_smarty_tpl);?>
</option>
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['id_group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['type']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['id_group']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
				<option value="group_<?php echo $_smarty_tpl->tpl_vars['id_group']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value;?>
</option>
			<?php } ?>
		</select>
	</div>
<?php }?>	
	<div><?php echo smartyTranslate(array('s'=>"State:",'mod'=>'gamification'),$_smarty_tpl);?>

		<select id="status_select_<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" onchange="filterBadge('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
');">
			<option value="badge_all"><?php echo smartyTranslate(array('s'=>"All",'mod'=>'gamification'),$_smarty_tpl);?>
</option>
			<option value="validated"><?php echo smartyTranslate(array('s'=>"Validated",'mod'=>'gamification'),$_smarty_tpl);?>
</option>
			<option value="not_validated"><?php echo smartyTranslate(array('s'=>"Not Validated",'mod'=>'gamification'),$_smarty_tpl);?>
</option>
		</select>
	</div>

<?php if ($_smarty_tpl->tpl_vars['type']->value=='badges_feature'||$_smarty_tpl->tpl_vars['type']->value=='badges_achievement'){?>
	<div><?php echo smartyTranslate(array('s'=>"Level:",'mod'=>'gamification'),$_smarty_tpl);?>

		<select id="level_select_<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" onchange="filterBadge('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
');">
				<option value="badge_all"><?php echo smartyTranslate(array('s'=>"All",'mod'=>'gamification'),$_smarty_tpl);?>
</option>
			<?php  $_smarty_tpl->tpl_vars['level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level']->_loop = false;
 $_smarty_tpl->tpl_vars['id_level'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['levels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level']->key => $_smarty_tpl->tpl_vars['level']->value){
$_smarty_tpl->tpl_vars['level']->_loop = true;
 $_smarty_tpl->tpl_vars['id_level']->value = $_smarty_tpl->tpl_vars['level']->key;
?>
				<option value="level_<?php echo $_smarty_tpl->tpl_vars['id_level']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
</option>
			<?php } ?>
		</select>
	</div>
<?php }?>
</div>
<div class="clear"></div>


<?php }} ?>