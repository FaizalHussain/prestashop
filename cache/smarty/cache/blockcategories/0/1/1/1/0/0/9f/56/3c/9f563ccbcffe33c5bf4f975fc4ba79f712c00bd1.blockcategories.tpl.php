<?php /*%%SmartyHeaderCode:149675240036b589b70-08096128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f563ccbcffe33c5bf4f975fc4ba79f712c00bd1' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1377656064,
      2 => 'file',
    ),
    'de034a4b3cec7b87e161737d912476abb5d2c3f2' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1377656064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149675240036b589b70-08096128',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5240048f268d75_22876397',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240048f268d75_22876397')) {function content_5240048f268d75_22876397($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h4 class="title_block">Categories</h4>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost/prestashop/index.php?id_category=3&amp;controller=category&amp;id_lang=1" 		title="Now that you can buy movies from the iTunes Store and sync them to your iPod, the whole world is your theater.">iPods</a>
	</li>

												
<li >
	<a href="http://localhost/prestashop/index.php?id_category=4&amp;controller=category&amp;id_lang=1" 		title="Wonderful accessories for your iPod">Accessories</a>
	</li>

												
<li class="last">
	<a href="http://localhost/prestashop/index.php?id_category=5&amp;controller=category&amp;id_lang=1" 		title="The latest Intel processor, a bigger hard drive, plenty of memory, and even more new features all fit inside just one liberating inch. The new Mac laptops have the performance, power, and connectivity of a desktop computer. Without the desk part.">Laptops</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>