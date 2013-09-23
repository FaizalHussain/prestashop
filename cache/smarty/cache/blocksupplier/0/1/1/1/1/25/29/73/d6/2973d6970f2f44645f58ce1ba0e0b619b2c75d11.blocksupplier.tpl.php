<?php /*%%SmartyHeaderCode:100615240036b753494-05354023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2973d6970f2f44645f58ce1ba0e0b619b2c75d11' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1377656064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100615240036b753494-05354023',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5240048f2b7861_53114553',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240048f2b7861_53114553')) {function content_5240048f2b7861_53114553($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<h4 class="title_block"><a href="http://localhost/prestashop/index.php?controller=supplier" title="Suppliers">Suppliers</a></h4>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://localhost/prestashop/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1" title="About AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://localhost/prestashop/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1" title="About Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">All suppliers</option>
									<option value="http://localhost/prestashop/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1">AppleStore</option>
									<option value="http://localhost/prestashop/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>