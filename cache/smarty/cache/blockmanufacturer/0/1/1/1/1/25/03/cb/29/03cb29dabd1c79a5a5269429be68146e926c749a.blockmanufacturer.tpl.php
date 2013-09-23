<?php /*%%SmartyHeaderCode:250905240036b961185-06660484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03cb29dabd1c79a5a5269429be68146e926c749a' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1377656064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250905240036b961185-06660484',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5240048f300a63_34615044',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240048f300a63_34615044')) {function content_5240048f300a63_34615044($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<h4 class="title_block"><a href="http://localhost/prestashop/index.php?controller=manufacturer" title="Manufacturers">Manufacturers</a></h4>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://localhost/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1" title="Learn more about Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://localhost/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1" title="Learn more about Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">All manufacturers</option>
									<option value="http://localhost/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1">Apple Computer, Inc</option>
									<option value="http://localhost/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>