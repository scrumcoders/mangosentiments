<?php /* Smarty version Smarty-3.1.19, created on 2017-12-04 20:09:21
         compiled from "/var/www/html/shop/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2400519155a256521e1b603-10625553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6290e5ed5bbb79fb9441453acc21f41663963c6e' => 
    array (
      0 => '/var/www/html/shop/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl',
      1 => 1512172356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2400519155a256521e1b603-10625553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a256521e20233_61744236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a256521e20233_61744236')) {function content_5a256521e20233_61744236($_smarty_tpl) {?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
