<?php /* Smarty version Smarty-3.1.14, created on 2013-10-02 10:37:45
         compiled from "C:\wamp\www\prestashop\modules\blockcustomerprivacy\blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13245524bdb599e3046-35918459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d48f64ba38974ec785d6200862b22f11689c748' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blockcustomerprivacy\\blockcustomerprivacy.tpl',
      1 => 1377677664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13245524bdb599e3046-35918459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524bdb59a1f789_17868174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524bdb59a1f789_17868174')) {function content_524bdb59a1f789_17868174($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" autocomplete="off"/>				
	</p>
	<label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>		
</fieldset><?php }} ?>