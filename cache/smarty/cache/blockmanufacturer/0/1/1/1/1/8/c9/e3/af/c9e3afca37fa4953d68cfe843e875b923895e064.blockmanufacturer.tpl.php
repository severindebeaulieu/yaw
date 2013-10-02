<?php /*%%SmartyHeaderCode:31706524bdb17479eb4-00232004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e3afca37fa4953d68cfe843e875b923895e064' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1377677664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31706524bdb17479eb4-00232004',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524bdb177546b2_60222584',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524bdb177546b2_60222584')) {function content_524bdb177546b2_60222584($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://127.0.0.1/prestashop/index.php?controller=manufacturer" title="Fabricants">Fabricants</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://127.0.0.1/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer" title="En savoir plus sur Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://127.0.0.1/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer" title="En savoir plus sur Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Tous les fabricants</option>
									<option value="http://127.0.0.1/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer">Apple Computer, Inc</option>
									<option value="http://127.0.0.1/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>