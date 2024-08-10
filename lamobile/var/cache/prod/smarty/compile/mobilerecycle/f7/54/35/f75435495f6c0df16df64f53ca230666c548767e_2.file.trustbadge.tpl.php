<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:29
  from 'C:\laragon\www\lamobile\modules\trustedshopseasyintegration\views\templates\front\trustbadge.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fed16a3781_82461670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f75435495f6c0df16df64f53ca230666c548767e' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\modules\\trustedshopseasyintegration\\views\\templates\\front\\trustbadge.tpl',
      1 => 1722329142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9fed16a3781_82461670 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['trustbadgeModels']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trustbadgeModels']->value, 'trusbadgeModel');
$_smarty_tpl->tpl_vars['trusbadgeModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['trusbadgeModel']->value) {
$_smarty_tpl->tpl_vars['trusbadgeModel']->do_else = false;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['trusbadgeModel']->value->getAttributes())) {?>
          <!-- added by Trusted Shops app: Start -->
          <<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['trusbadgeModel']->value->getTag(),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trusbadgeModel']->value->getAttributes(), 'value', false, 'attributeName');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attributeName']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['attributeName']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           data-app="TrustedShopsApp"></<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['trusbadgeModel']->value->getTag(),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
>
          <!-- End -->
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
