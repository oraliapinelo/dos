<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 03:02:16
         compiled from "C:\xampp\htdocs\tienda\admin506pt1vk4\themes\default\template\controllers\products\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:425857aadf88bd3669-63442701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae94dea583269bb673860cffb07bb000766536a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\admin506pt1vk4\\themes\\default\\template\\controllers\\products\\helpers\\tree\\tree_header.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '425857aadf88bd3669-63442701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'is_category_filter' => 0,
    'toolbar' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57aadf88be3069_12499612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aadf88be3069_12499612')) {function content_57aadf88be3069_12499612($_smarty_tpl) {?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#filter-by-category').click(function() {
			if ($(this).is(':checked')) {
				$('#block_category_tree').show();
				$('#category-tree-toolbar').show();
			} else {
				$('#block_category_tree').hide();
				$('#category-tree-toolbar').hide();
				location.href = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
&reset_filter_category=1';
			}
		});
	});
</script>

<div class="tree-panel-heading-controls clearfix">
	<div id="category-tree-toolbar" <?php if (!$_smarty_tpl->tpl_vars['is_category_filter']->value) {?>style="display:none;"<?php }?>>
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
	<label class="tree-panel-label-title">
		<input type="checkbox" id="filter-by-category" name="filter-by-category" <?php if ($_smarty_tpl->tpl_vars['is_category_filter']->value) {?>checked="checked"<?php }?> />
		<i class="icon-tags"></i>
		<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

	</label>
</div>
<?php }} ?>
