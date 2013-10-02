<?php /* Smarty version Smarty-3.1.14, created on 2013-10-02 10:36:58
         compiled from "C:\wamp\www\prestashop\themes\default\mobile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15368524bdb2a61bc37-55366727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f820040bc8f32f73815523470687ba5299aed74c' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default\\mobile\\index.tpl',
      1 => 1377677664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15368524bdb2a61bc37-55366727',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524bdb2a694aa5_10814489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524bdb2a694aa5_10814489')) {function content_524bdb2a694aa5_10814489($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>