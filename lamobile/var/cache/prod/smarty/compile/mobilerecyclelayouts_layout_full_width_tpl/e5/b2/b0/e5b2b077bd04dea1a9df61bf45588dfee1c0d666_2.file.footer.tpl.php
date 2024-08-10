<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:25
  from 'C:\laragon\www\lamobile\modules\creativeelements\views\templates\front\theme\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fecd9a9560_29964357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5b2b077bd04dea1a9df61bf45588dfee1c0d666' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\modules\\creativeelements\\views\\templates\\front\\theme\\_partials\\footer.tpl',
      1 => 1722328487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:[1]_partials/footer.tpl' => 1,
    'parent:_partials/footer.tpl' => 1,
  ),
),false)) {
function content_66a9fecd9a9560_29964357 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['CE_FOOTER']->value))) {?>
	<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cefilter' ][ 0 ], array( $_smarty_tpl->tpl_vars['CE_FOOTER']->value )), ENT_QUOTES, 'UTF-8');?>

<?php } elseif (file_exists(((string)(defined('_PS_THEME_DIR_') ? constant('_PS_THEME_DIR_') : null))."templates/_partials/footer.tpl")) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:[1]_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ((defined('_PARENT_THEME_NAME_') ? constant('_PARENT_THEME_NAME_') : null)) {?>
	<?php $_smarty_tpl->_subTemplateRender('parent:_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
