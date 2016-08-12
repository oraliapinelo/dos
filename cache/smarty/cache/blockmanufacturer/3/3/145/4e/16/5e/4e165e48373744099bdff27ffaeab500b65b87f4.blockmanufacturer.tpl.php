<?php /*%%SmartyHeaderCode:210857aad71c40f4a3-13900009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e165e48373744099bdff27ffaeab500b65b87f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\theme593\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1470729851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210857aad71c40f4a3-13900009',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57abe47aa54e67_39769714',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57abe47aa54e67_39769714')) {function content_57abe47aa54e67_39769714($_smarty_tpl) {?><!-- Block manufacturers module -->
<section id="manufacturers_block_left" class="block blockmanufacturer column_box">
	<h4 class="title_block"><span>Fabricantes</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="first_item"><a href="http://localhost/tienda/1_fashion-manufacturer" title="More about Fashion Manufacturer"><i class="icon-ok"></i>Fashion Manufacturer</a></li>
							<li class="last_item"><a href="http://localhost/tienda/2_nine-west" title="More about NINE WEST"><i class="icon-ok"></i>NINE WEST</a></li>
				</ul>
				<form action="/tienda/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Todos los fabricantes</option>
									<option value="http://localhost/tienda/1_fashion-manufacturer">Fashion Manufacturer</option>
									<option value="http://localhost/tienda/2_nine-west">NINE WEST</option>
								</select>
			</p>
		</form>
		</div>
</section>
<!-- /Block manufacturers module -->
<?php }} ?>
