<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 02:53:17
         compiled from "C:\xampp\htdocs\tienda\modules\paypalmx\views\templates\admin\configuration-mx.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132957aadd6d0de260-98598171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d4be7e125460610e700094adb9bf8d2471522b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\modules\\paypalmx\\views\\templates\\admin\\configuration-mx.tpl',
      1 => 1470815591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132957aadd6d0de260-98598171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paypal_mx_tracking' => 0,
    'module_dir' => 0,
    'paypal_mx_validation' => 0,
    'validation' => 0,
    'paypal_mx_error' => 0,
    'error' => 0,
    'paypal_mx_form_link' => 0,
    'paypal_mx_configuration' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57aadd6d186202_29925291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aadd6d186202_29925291')) {function content_57aadd6d186202_29925291($_smarty_tpl) {?>
<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_mx_tracking']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="" class="hiddenElement" />
<div class="paypal_mx-module-wrapper ">
	<div class="paypal_mx-module-header">
		<a rel="external" href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_registration-run&from=prestashop" target="_blank"><img class="paypal_mx-logo" alt="" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/img/logo.png" /></a>
		<span class="paypal_mx-module-intro"><?php echo smartyTranslate(array('s'=>'PayPal is the #1 solution to start accepting payments on the web today','mod'=>'paypalmx'),$_smarty_tpl);?>
.<br />
		<span class="paypal_mx-module-singup-text"><?php echo smartyTranslate(array('s'=>'If you don\'t have a PayPal account','mod'=>'paypalmx'),$_smarty_tpl);?>
.</span>
		<a class="paypal_mx-module-create-btn" rel="external" href="https://www.paypal.com/mx/webapps/mpp/referral/paypal-business-account2?partner_id=XYAYGKRUJMJTG" target="_blank"><span><?php echo smartyTranslate(array('s'=>'Sign up for a PayPal account here','mod'=>'paypalmx'),$_smarty_tpl);?>
</span></a></span>
	</div>
	<div class="paypal_mx-module-wrap">
		<div class="col-md-6">
			<h3><?php echo smartyTranslate(array('s'=>'Credit and Debit Cards','mod'=>'paypalmx'),$_smarty_tpl);?>
</h3>
			<p><?php echo smartyTranslate(array('s'=>'With PayPal you can accept payments with all major credit and debit cards in 25 currencies from 190 countries.','mod'=>'paypalmx'),$_smarty_tpl);?>
</p>
			
		</div>
		<div class="col-md-6">
			<h3><?php echo smartyTranslate(array('s'=>'Monthly Payments Feature','mod'=>'paypalmx'),$_smarty_tpl);?>
</h3>
			<p><?php echo smartyTranslate(array('s'=>'Offer to your clients the possibility to make monthly payments using the following credit cards: Bancomer, Banamex, HSBC, Santander y Banorte.','mod'=>'paypalmx'),$_smarty_tpl);?>
</p>
			<img class="paypal_mx-cc" alt="" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/img/accpmark_tarjdeb_mx.png" />
		</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['paypal_mx_validation']->value) {?>
		<div class="alert alert-success">
			<?php  $_smarty_tpl->tpl_vars['validation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['validation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paypal_mx_validation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['validation']->key => $_smarty_tpl->tpl_vars['validation']->value) {
$_smarty_tpl->tpl_vars['validation']->_loop = true;
?>
				<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['validation']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br />
			<?php } ?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['paypal_mx_error']->value) {?>
		<div class="alert alert-danger">
			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paypal_mx_error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
				<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<br />
			<?php } ?>
		</div>
	<?php }?>
	<form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_mx_form_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" class="form-horizontal">
		<input type="hidden" name="paypal_mx_express_checkout" value="1" />
		<fieldset>
			<legend>
					<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/settings.gif" alt="" />
					<span><?php echo smartyTranslate(array('s'=>'PayPal PayPal Express Checkout API Settings','mod'=>'paypalmx'),$_smarty_tpl);?>
</span>
			</legend>

			<div class="form-group">
				<label for="paypal_mx_sandbox_on" class="col-sm-3 control-label">
					<?php echo smartyTranslate(array('s'=>'Mode','mod'=>'paypalmx'),$_smarty_tpl);?>

				</label>
				<div class="col-sm-4">
					<input type="radio" name="paypal_mx_sandbox" id="paypal_mx_sandbox_on" value="0"<?php if ($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_SANDBOX']==0) {?> checked="checked"<?php }?> /> <label for="paypal_mx_sandbox_on" class="resetLabel"><?php echo smartyTranslate(array('s'=>'Live','mod'=>'paypalmx'),$_smarty_tpl);?>
</label>
					<input type="radio" name="paypal_mx_sandbox" id="paypal_mx_sandbox_off" value="1"<?php if ($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_SANDBOX']==1) {?> checked="checked"<?php }?> /> <label for="paypal_mx_sandbox_off" class="resetLabel"><?php echo smartyTranslate(array('s'=>'Test (Sandbox)','mod'=>'paypalmx'),$_smarty_tpl);?>
</label>
					<p><?php echo smartyTranslate(array('s'=>'Use the links below to retreive your PayPal API credentials:','mod'=>'paypalmx'),$_smarty_tpl);?>
<br />
					<a onclick="window.open(this.href, '1369346829804', 'width=415,height=530,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=0,left=0,top=0');
						return false;" href="https://www.paypal.com/us/cgibin/webscr?cmd=_get-api-signature&generic-flow=true" class="paypal_mx-module-btn"><?php echo smartyTranslate(array('s'=>'Live Mode API','mod'=>'paypalmx'),$_smarty_tpl);?>
</a>&nbsp;&nbsp;&nbsp;//&nbsp;&nbsp;&nbsp;<a onclick="window.open(this.href, '1369346829804', 'width=415,height=530,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=0,left=0,top=0');
						return false;" href="https://www.sandbox.paypal.com/us/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true" class="paypal_mx-module-btn"><?php echo smartyTranslate(array('s'=>'Sandbox Mode API','mod'=>'paypalmx'),$_smarty_tpl);?>
</a></p>
				</div>
			</div>

			<div class="form-group required">
				<label for="paypal_mx_account" class="col-sm-3 control-label">
						<?php echo smartyTranslate(array('s'=>'PayPal Business Account:','mod'=>'paypalmx'),$_smarty_tpl);?>

				</label>
				<div class="col-sm-4">
					<input type="text" name="paypal_mx_account" value="<?php if ($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_ACCOUNT']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_ACCOUNT'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" class="form-control" />
				</div>
			</div>

			<div class="form-group required">
				<label for="paypal_mx_api_username" class="col-sm-3 control-label">
					<?php echo smartyTranslate(array('s'=>'PayPal API Username:','mod'=>'paypalmx'),$_smarty_tpl);?>

				</label>
				<div class="col-sm-4">
					<input type="text" name="paypal_mx_api_username" value="<?php if ($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_API_USERNAME']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_API_USERNAME'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" class="form-control"/>
				</div>
			</div>

			<div class="form-group required">
				<label for="paypal_mx_api_password" class="col-sm-3 control-label">
					<?php echo smartyTranslate(array('s'=>'PayPal API Password:','mod'=>'paypalmx'),$_smarty_tpl);?>

				</label>
				<div class="col-sm-4">
					<input type="password" name="paypal_mx_api_password" value="<?php if ($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_API_PASSWORD']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_API_PASSWORD'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" class="form-control"/>
				</div>
			</div>

			<div class="form-group required">
				<label for="paypal_mx_api_signature" class="col-sm-3 control-label">
					<?php echo smartyTranslate(array('s'=>'PayPal API Signature:','mod'=>'paypalmx'),$_smarty_tpl);?>

				</label>
				<div class="col-sm-4">
					<input type="password" name="paypal_mx_api_signature" value="<?php if ($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_API_SIGNATURE']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_API_SIGNATURE'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" class="form-control"/>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<h4 class="sep-title"><?php echo smartyTranslate(array('s'=>'PayPal Express Checkout button settings:','mod'=>'paypalmx'),$_smarty_tpl);?>
</h4>

			<div class="form-group">

				<label for="paypal_mx_checkbox_product" class="col-sm-3 control-label">
					<?php echo smartyTranslate(array('s'=>'Display button on','mod'=>'paypalmx'),$_smarty_tpl);?>

				</label>
				<div class="col-sm-4 PT2">
					<input type="checkbox" name="paypal_mx_checkbox_product"<?php if ($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_EXP_CHK_PRODUCT']) {?> checked="checked"<?php }?> /> 
					<label for="paypal_mx_checkbox_product" class="resetLabel"><?php echo smartyTranslate(array('s'=>'Product page','mod'=>'paypalmx'),$_smarty_tpl);?>
</label> 
					
					<input type="checkbox" name="paypal_mx_checkbox_shopping_cart"<?php if ($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_EXP_CHK_SHOPPING_CART']) {?> checked="checked"<?php }?> />
					<label for="paypal_mx_checkbox_shopping_cart}" class="resetLabel"><?php echo smartyTranslate(array('s'=>'Shopping Cart','mod'=>'paypalmx'),$_smarty_tpl);?>
</label>
				</div>
			</div>

			<div class="form-group">
				<label for="paypal_mx_checkbox_border_color" class="col-sm-3 control-label">
					<?php echo smartyTranslate(array('s'=>'Button border color','mod'=>'paypalmx'),$_smarty_tpl);?>

				</label>
				<div class="col-sm-4">
					<input class="colorSelector form-control" type="text" id="paypal_mx_checkbox_border_color" name="paypal_mx_checkbox_border_color" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_mx_configuration']->value['PAYPAL_MX_EXP_CHK_BORDER_COLOR'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label"></label>
				<div class="col-sm-4 col-sm-offset-3">
					<span class="small"><sup class="warn">*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'paypalmx'),$_smarty_tpl);?>
</span>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label"></label>
				<div class="col-sm-4 ">
					<input type="submit" name="SubmitBasicSettings" class="btn btn-primary" value="<?php echo smartyTranslate(array('s'=>'Save settings','mod'=>'paypalmx'),$_smarty_tpl);?>
" />
				</div>
			</div>
		</fieldset>
	</form>
</div>
</div>
<script type="text/javascript">
	
		$(document).ready(function() {
			$('#content table.table tbody tr th span').html('paypalmx');
		});
	
</script><?php }} ?>
