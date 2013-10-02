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
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524bdb59a5bec1_89241988',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524bdb59a5bec1_89241988')) {function content_524bdb59a5bec1_89241988($_smarty_tpl) {?>
<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3>Confidentialité des données clients</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" autocomplete="off"/>				
	</p>
	<label for="customer_privacy">Les informations personnelles que nous collectons sont destinées à mieux répondre à vos demandes et traiter vos commandes. Vous disposez à tout moment d’un droit d’accès, de modification et de suppression de vos informations personnelles que vous pouvez exercer via la page &quot;mon compte&quot; de ce site internet.</label>		
</fieldset><?php }} ?>