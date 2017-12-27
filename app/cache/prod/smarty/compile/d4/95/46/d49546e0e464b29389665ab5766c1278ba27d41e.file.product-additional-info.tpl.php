<?php /* Smarty version Smarty-3.1.19, created on 2017-12-02 06:32:58
         compiled from "/var/www/html/shop/themes/classic/templates/catalog/_partials/product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12834600615a2202ca45dba1-09912961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd49546e0e464b29389665ab5766c1278ba27d41e' => 
    array (
      0 => '/var/www/html/shop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1512172356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12834600615a2202ca45dba1-09912961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2202ca45f794_30502215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2202ca45f794_30502215')) {function content_5a2202ca45f794_30502215($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>
