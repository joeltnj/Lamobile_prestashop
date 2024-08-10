<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:08:28
  from 'C:\laragon\www\lamobile\modules\ndk_advanced_combinations_infos\views\templates\hook\headers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9ff0c93b310_60003354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2194414ffdfed1cfd4f833153f27b1c6c7a0ca43' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\modules\\ndk_advanced_combinations_infos\\views\\templates\\hook\\headers.tpl',
      1 => 1722328326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9ff0c93b310_60003354 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ps_version']->value > 1.6) {?>
	<?php $_smarty_tpl->_assignInScope('base_dir_ssl', $_smarty_tpl->tpl_vars['urls']->value['base_url']);?>
	<?php $_smarty_tpl->_assignInScope('base_dir', $_smarty_tpl->tpl_vars['urls']->value['base_url']);
}
echo '<script'; ?>
 type="text/javascript">
	var baseUrl = '<?php if ((isset($_smarty_tpl->tpl_vars['is_https']->value)) && $_smarty_tpl->tpl_vars['is_https']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir_ssl']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');
}?>';
	var baseDir = '<?php if ((isset($_smarty_tpl->tpl_vars['is_https']->value)) && $_smarty_tpl->tpl_vars['is_https']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir_ssl']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');
}?>';
	var ps_version = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps_version']->value, ENT_QUOTES, 'UTF-8');?>
';
	var ps_token = '<?php echo htmlspecialchars(Tools::getToken(false), ENT_QUOTES, 'UTF-8');?>
';
<?php echo '</script'; ?>
>


<?php }
}
