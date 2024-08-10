<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:16
  from 'C:\laragon\www\lamobile\modules\advancedpopupcreator\views\templates\hook\apc_functions_front.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fec4cc7369_52066851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd585a854029f0c8e55d89429cf1f0bcf20eca74c' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\modules\\advancedpopupcreator\\views\\templates\\hook\\apc_functions_front.tpl',
      1 => 1722328372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9fec4cc7369_52066851 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" style="display: none">
	//Common vars
    var apc_link = "<?php echo $_smarty_tpl->tpl_vars['apc_link']->value;?>
";
    var apc_token = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apc_token']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var apc_product = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['apc_product']->value), ENT_QUOTES, 'UTF-8');?>
";
    var apc_category = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['apc_category']->value), ENT_QUOTES, 'UTF-8');?>
";
    var apc_supplier = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['apc_supplier']->value), ENT_QUOTES, 'UTF-8');?>
";
    var apc_manufacturer = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['apc_manufacturer']->value), ENT_QUOTES, 'UTF-8');?>
";
    var apc_cms = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apc_cms']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var apc_controller = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apc_controller']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var apc_exit_popups = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['apc_exit_popups']->value), ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
>
<?php }
}
