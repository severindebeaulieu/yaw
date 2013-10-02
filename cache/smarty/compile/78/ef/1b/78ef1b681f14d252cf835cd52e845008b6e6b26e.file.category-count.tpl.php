<?php /* Smarty version Smarty-3.1.14, created on 2013-10-02 10:37:27
         compiled from "C:\wamp\www\prestashop\themes\default\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11388524bdb47970893-72967620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78ef1b681f14d252cf835cd52e845008b6e6b26e' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default\\category-count.tpl',
      1 => 1377677664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11388524bdb47970893-72967620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524bdb47a25e44_87556446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524bdb47a25e44_87556446')) {function content_524bdb47a25e44_87556446($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>