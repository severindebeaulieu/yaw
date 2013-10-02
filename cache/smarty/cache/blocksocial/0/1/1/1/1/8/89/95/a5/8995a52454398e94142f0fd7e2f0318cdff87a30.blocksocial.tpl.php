<?php /*%%SmartyHeaderCode:30197524bdb1a9598b2-11187353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8995a52454398e94142f0fd7e2f0318cdff87a30' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default\\modules\\blocksocial\\blocksocial.tpl',
      1 => 1377677664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30197524bdb1a9598b2-11187353',
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524bdb1aa89eb4_75782248',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524bdb1aa89eb4_75782248')) {function content_524bdb1aa89eb4_75782248($_smarty_tpl) {?>
<div id="social_block">
	<p class="title_block">Nous suivre</p>
	<ul>
		<li class="facebook"><a href="http://www.facebook.com/prestashop">Facebook</a></li>		<li class="twitter"><a href="http://www.twitter.com/prestashop">Twitter</a></li>		<li class="rss"><a href="http://www.prestashop.com/blog/en/feed/">RSS</a></li>	</ul>
</div>
<?php }} ?>