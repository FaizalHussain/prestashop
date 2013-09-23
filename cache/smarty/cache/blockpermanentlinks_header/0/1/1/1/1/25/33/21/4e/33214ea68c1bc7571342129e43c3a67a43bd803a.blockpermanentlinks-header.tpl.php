<?php /*%%SmartyHeaderCode:232995240048e8bab97-09087701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33214ea68c1bc7571342129e43c3a67a43bd803a' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\leoconv\\modules\\blockpermanentlinks\\blockpermanentlinks-header.tpl',
      1 => 1377312752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232995240048e8bab97-09087701',
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5240048e952850_17450800',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240048e952850_17450800')) {function content_5240048e952850_17450800($_smarty_tpl) {?><script type="text/javascript">
$(document).ready(function () {
	var width = $(window).width(); 
		
	$('#permanentlinks').each(function(){
		$(this).find('a.leo-mobile').click(function(){
		 $('#').slideToggle('slow');

		});
	  });
	
  $(window).resize(function(){
		var width = $(window).width();
		if(width >= 600){	
			$("#form-permanentlinks").css("display","block");
			$(".leo-button").css("display","none");
		}
		else{
			$("#form-permanentlinks").css("display","none");
			$(".leo-button").css("display","block");
			
		}
	});	
	

});
</script>

<!-- Block permanent links module HEADER -->
<div id="permanentlinks">
	<div class="leo-button"><a class="leo-mobile">Information</a></div>
	<div id="form-permanentlinks">
		<div class="nav-item">
			<div class="item-top"> 
									<a href="http://localhost/prestashop/index.php?controller=my-account" title="Login to your customer account" class="login" rel="nofollow">Log in</a>
							</div>
		</div>
		<div class="nav-item">
			<div class="item-top">
				<a href="http://localhost/prestashop/index.php?controller=my-account" title="My Account">My Account</a>
			</div>
		</div>
		<div class="nav-item" id="wishlist_block">
			<div class="item-top">
				<a href="http://localhost/prestashop/index.php?fc=module&module=blockwishlist&controller=mywishlist&id_lang=1" title="My wishlists">My Wishlist</a>
			</div>
		</div>
	</div>
</div>
<!-- /Block permanent links module HEADER --><?php }} ?>