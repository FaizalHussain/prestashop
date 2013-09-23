<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 17:06:23
         compiled from "C:\wamp\www\prestashop\themes\leoconv\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311285240048fbd2895-19937706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f4ce48ccddac8c6f6c8576f74b98c1b25b568f0' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\leoconv\\footer.tpl',
      1 => 1373006490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311285240048fbd2895-19937706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'page_name' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'LEO_PANELTOOL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5240048fc06744_01237675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240048fc06744_01237675')) {function content_5240048fc06744_01237675($_smarty_tpl) {?>
	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
							</div><!-- 5-->
						</div><!-- 4-->
						
						<?php if ($_smarty_tpl->tpl_vars['page_name']->value!="index"){?>
						<div id="leo-rightcol" class="span3">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

						</div><!--righttcol-->
						<?php }?>	
					</div><!-- End Of Fluid-Width -->
				</div><!-- 4-->
			</div>
			</div>

			<div id="leo-manufac" class="leo-manufac">
			
				<div class="row-fluid">
					<div class="container">
						<?php echo Hook::exec('bottomManufacturer');?>

					</div>
				</div>
			</div>
		<!-- Footer -->	
   		<div id="leo-footer" class=" leo-footer">
			<div class="footer-wrapper">
			</div>
			<div class="container">	
				<div class="row-fluid"  >
							<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
	
				</div>
			</div>  <!--footer-->	
			
		</div>
	<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value){?>
		   <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	</div>	<!--leopage-->
	</body>
</html><?php }} ?>