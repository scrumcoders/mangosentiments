<?php /* Smarty version Smarty-3.1.19, created on 2017-12-02 06:32:41
         compiled from "module:blockreassurance/views/templates/hook/blockreassurance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9919187585a2202b9919451-50255700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ffc009d1b66ea89054a8e253403b7d3a67d8150' => 
    array (
      0 => 'module:blockreassurance/views/templates/hook/blockreassurance.tpl',
      1 => 1512172356,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '9919187585a2202b9919451-50255700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elements' => 0,
    'element' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2202b991f613_48521438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2202b991f613_48521438')) {function content_5a2202b991f613_48521438($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['elements']->value) {?>
  <div id="block-reassurance">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
        <li>
          <div class="block-reassurance-item">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['text'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="h6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
        </li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
