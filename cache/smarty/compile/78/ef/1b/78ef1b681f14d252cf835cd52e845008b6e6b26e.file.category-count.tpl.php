<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 14:34:45
         compiled from "C:\wamp\www\prestashop\themes\default\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17176523fe105c0f7a5-32216396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78ef1b681f14d252cf835cd52e845008b6e6b26e' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default\\category-count.tpl',
      1 => 1377656064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17176523fe105c0f7a5-32216396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523fe105c467e6_69495815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523fe105c467e6_69495815')) {function content_523fe105c467e6_69495815($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>