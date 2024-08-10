<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:29
  from 'C:\laragon\www\lamobile\modules\gbchayall\views\templates\hook\gb_chayall.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fed146bd07_86016874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3758cd4a1842104e4d1ae378e2a1c8db8e92ff6' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\modules\\gbchayall\\views\\templates\\hook\\gb_chayall.tpl',
      1 => 1722328353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9fed146bd07_86016874 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- gb_chayall -->
<?php if ((isset($_smarty_tpl->tpl_vars['gb_chayall_api_key']->value)) && $_smarty_tpl->tpl_vars['gb_chayall_api_key']->value) {?>
  <?php echo '<script'; ?>
 defer async
    data-chayall-account="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gb_chayall_api_key']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
    src="https://widgets.chayall.fr/js/chayall.js">
  <?php echo '</script'; ?>
>
<?php }?>
<!-- /gb_chayall --><?php }
}
