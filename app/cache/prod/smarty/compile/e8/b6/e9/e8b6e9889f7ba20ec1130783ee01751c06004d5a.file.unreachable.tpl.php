<?php /* Smarty version Smarty-3.1.19, created on 2017-12-04 19:10:03
         compiled from "/var/www/html/shop/themes/classic/templates/checkout/_partials/steps/unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6021991815a25573bcabdd1-27487114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b6e9889f7ba20ec1130783ee01751c06004d5a' => 
    array (
      0 => '/var/www/html/shop/themes/classic/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1512172356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6021991815a25573bcabdd1-27487114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a25573bcaf9a7_75589446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a25573bcaf9a7_75589446')) {function content_5a25573bcaf9a7_75589446($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
