<?php /*%%SmartyHeaderCode:19200524bdb1927e6b3-84193565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3f0940d4316af11b93c414f956032ba3aac0c04' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\homeslider\\homeslider.tpl',
      1 => 1377677664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19200524bdb1927e6b3-84193565',
  'variables' => 
  array (
    'homeslider' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524bdb194a24b8_94838372',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524bdb194a24b8_94838372')) {function content_524bdb194a24b8_94838372($_smarty_tpl) {?>
<!-- Module HomeSlider -->
<script type="text/javascript">
			var homeslider_loop = true;
	var homeslider_speed = 500;
var homeslider_pause = 3000;
</script>
<ul id="homeslider">
			<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="/prestashop/modules/homeslider/images/sample-1.jpg" alt="sample-1" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="/prestashop/modules/homeslider/images/sample-2.jpg" alt="sample-2" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="/prestashop/modules/homeslider/images/sample-3.jpg" alt="sample-3" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="/prestashop/modules/homeslider/images/sample-4.jpg" alt="sample-4" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="/prestashop/modules/homeslider/images/sample-5.jpg" alt="sample-5" height="300" width="535" />
			</a>
		</li>
	</ul>
<!-- /Module HomeSlider -->
<?php }} ?>