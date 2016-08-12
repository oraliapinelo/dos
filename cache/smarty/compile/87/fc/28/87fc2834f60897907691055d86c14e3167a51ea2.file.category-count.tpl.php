<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 02:27:15
         compiled from "C:\xampp\htdocs\tienda\themes\theme593\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2119557aad7535a61e1-90753331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87fc2834f60897907691055d86c14e3167a51ea2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\theme593\\category-count.tpl',
      1 => 1470729850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2119557aad7535a61e1-90753331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57aad7535b9a69_80510608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aad7535b9a69_80510608')) {function content_57aad7535b9a69_80510608($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0) {?>
	<?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1) {?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>
