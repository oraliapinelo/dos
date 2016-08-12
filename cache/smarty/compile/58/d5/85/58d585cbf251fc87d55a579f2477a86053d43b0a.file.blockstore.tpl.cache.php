<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 02:26:21
         compiled from "C:\xampp\htdocs\tienda\themes\theme593\modules\blockstore\blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:729357aad71d90cee5-12082844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58d585cbf251fc87d55a579f2477a86053d43b0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\theme593\\modules\\blockstore\\blockstore.tpl',
      1 => 1470729851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '729357aad71d90cee5-12082844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'img_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57aad71d937e65_61860656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aad71d937e65_61860656')) {function content_57aad71d937e65_61860656($_smarty_tpl) {?><section id="stores_block_left" class="block  column_box">
	<h4><span><?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content blockstore toggle_content">
		<p class="store_image"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store_img']->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"  /></a></p>
		<p>
			<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Discover our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</a>
		</p>
	</div>
</section>
<!-- /Block stores module -->
<?php }} ?>
