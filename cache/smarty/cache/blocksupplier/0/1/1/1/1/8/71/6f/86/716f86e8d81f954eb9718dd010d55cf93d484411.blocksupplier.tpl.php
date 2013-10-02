<?php /*%%SmartyHeaderCode:22539524bdb177ce2b2-16181930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '716f86e8d81f954eb9718dd010d55cf93d484411' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1377677664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22539524bdb177ce2b2-16181930',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524bdb17aa8ab1_98460683',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524bdb17aa8ab1_98460683')) {function content_524bdb17aa8ab1_98460683($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://127.0.0.1/prestashop/index.php?controller=supplier" title="Fournisseurs">Fournisseurs</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://127.0.0.1/prestashop/index.php?id_supplier=1&amp;controller=supplier" title="En savoir plus sur AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://127.0.0.1/prestashop/index.php?id_supplier=2&amp;controller=supplier" title="En savoir plus sur Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Tous les fournisseurs</option>
									<option value="http://127.0.0.1/prestashop/index.php?id_supplier=1&amp;controller=supplier">AppleStore</option>
									<option value="http://127.0.0.1/prestashop/index.php?id_supplier=2&amp;controller=supplier">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>