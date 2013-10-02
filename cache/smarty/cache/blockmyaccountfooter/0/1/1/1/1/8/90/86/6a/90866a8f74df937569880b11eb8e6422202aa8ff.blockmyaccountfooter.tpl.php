<?php /*%%SmartyHeaderCode:5932524bdb1a0ca0b2-80818459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90866a8f74df937569880b11eb8e6422202aa8ff' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1377677664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5932524bdb1a0ca0b2-80818459',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524bdb1a91cab0_11741271',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524bdb1a91cab0_11741271')) {function content_524bdb1a91cab0_11741271($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://127.0.0.1/prestashop/index.php?controller=my-account" title="Gérer mon compte client" rel="nofollow">Mon compte</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://127.0.0.1/prestashop/index.php?controller=history" title="Voir mes commandes" rel="nofollow">Mes commandes</a></li>
						<li><a href="http://127.0.0.1/prestashop/index.php?controller=order-slip" title="Voir mes avoirs" rel="nofollow">Mes avoirs</a></li>
			<li><a href="http://127.0.0.1/prestashop/index.php?controller=addresses" title="Voir mes adresses" rel="nofollow">Mes adresses</a></li>
			<li><a href="http://127.0.0.1/prestashop/index.php?controller=identity" title="Gérer mes informations personnelles" rel="nofollow">Mes informations personnelles</a></li>
						
		</ul>
		<p class="logout"><a href="http://127.0.0.1/prestashop/index.php?mylogout" title="Se déconnecter" rel="nofollow">Se déconnecter</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>