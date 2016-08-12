<?php /*%%SmartyHeaderCode:3117357aad71c718ad1-90211464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daa5a3ea7549dc0836c9b51ed0fd0da00e6596b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\theme593\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1470729851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3117357aad71c718ad1-90211464',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57abe47abacab6_06224870',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57abe47abacab6_06224870')) {function content_57abe47abacab6_06224870($_smarty_tpl) {?><!-- Block suppliers module -->
<section id="suppliers_block_left" class="block blocksupplier column_box">
	<h4 class="title_block"><span>Proveedores</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="first_item">
			<a href="http://localhost/tienda/1__fashion-supplier" title="Más sobre Fashion Supplier"><i class="icon-ok"></i>Fashion Supplier</a>
		</li>
							<li class="last_item">
			<a href="http://localhost/tienda/2__nine-west" title="Más sobre NINE WEST"><i class="icon-ok"></i>NINE WEST</a>
		</li>
				</ul>
				<form action="/tienda/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Todos los proveedores</option>
									<option value="http://localhost/tienda/1__fashion-supplier">Fashion Supplier</option>
									<option value="http://localhost/tienda/2__nine-west">NINE WEST</option>
								</select>
			</p>
		</form>
		</div>
</section>
<!-- /Block suppliers module -->
<?php }} ?>
