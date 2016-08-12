<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 02:26:22
         compiled from "C:\xampp\htdocs\tienda\themes\theme593\modules\blocksharefb\blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:620857aad71e168028-00936214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7275e4f30165dbcb1931d904d95722c157fc668f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\theme593\\modules\\blocksharefb\\blocksharefb.tpl',
      1 => 1470729851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '620857aad71e168028-00936214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57aad71e173ba3_30123360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aad71e173ba3_30123360')) {function content_57aad71e173ba3_30123360($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><i class="icon-facebook-sign"></i><?php echo smartyTranslate(array('s'=>'Share on Facebook','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
