<?php /*%%SmartyHeaderCode:98325240036ccac550-98275018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90748aa897b98fdbfb6ee6bc2176c77738d0e5db' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1377656064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98325240036ccac550-98275018',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5240048f7a0f92_85343085',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240048f7a0f92_85343085')) {function content_5240048f7a0f92_85343085($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<h4 class="title_block"><a href="http://localhost/prestashop/index.php?controller=my-account" title="Manage your customer account" rel="nofollow">My account</a></h4>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost/prestashop/index.php?controller=history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost/prestashop/index.php?controller=order-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost/prestashop/index.php?controller=addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost/prestashop/index.php?controller=identity" title="Manage your personal information" rel="nofollow">My personal info</a></li>
						
		</ul>
		<p class="logout"><a href="http://localhost/prestashop/index.php?mylogout" title="Sign out" rel="nofollow">Sign out</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>