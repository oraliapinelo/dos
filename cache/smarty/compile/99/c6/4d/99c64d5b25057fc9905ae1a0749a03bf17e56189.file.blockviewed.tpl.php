<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 02:26:20
         compiled from "C:\xampp\htdocs\tienda\themes\theme593\modules\blockviewed\blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3127957aad71c301be8-72665301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99c64d5b25057fc9905ae1a0749a03bf17e56189' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\theme593\\modules\\blockviewed\\blockviewed.tpl',
      1 => 1470729851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3127957aad71c301be8-72665301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsViewedObj' => 0,
    'viewedProduct' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57aad71c35f7f3_53324943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aad71c35f7f3_53324943')) {function content_57aad71c35f7f3_53324943($_smarty_tpl) {?><!-- Block Viewed products -->
<section id="viewed-products_block_left" class="block products_block column_box">
	<h4><span><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="products ">
			<?php  $_smarty_tpl->tpl_vars['viewedProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['viewedProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsViewedObj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['viewedProduct']->key => $_smarty_tpl->tpl_vars['viewedProduct']->value) {
$_smarty_tpl->tpl_vars['viewedProduct']->_loop = true;
?>
				<li class="shop_box  clearfix">
					<a class="products_block_img bordercolor" href="<?php echo $_smarty_tpl->tpl_vars['viewedProduct']->value->product_link;?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blockviewed'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->cover,'small_default');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
" /></a>
					<div>
	<h5><a class="product_link" href="<?php echo $_smarty_tpl->tpl_vars['viewedProduct']->value->product_link;?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blockviewed'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['viewedProduct']->value->name,25,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
	<p class="product_descr"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['viewedProduct']->value->description_short),75);?>
</p>
     </div> 
				</li>
			<?php } ?>
		</ul>
	</div>
</section>
<?php }} ?>
