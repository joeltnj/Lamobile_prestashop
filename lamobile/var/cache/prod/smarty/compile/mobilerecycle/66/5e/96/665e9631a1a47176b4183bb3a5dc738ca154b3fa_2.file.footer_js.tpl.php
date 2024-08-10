<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:26
  from 'C:\laragon\www\lamobile\modules\pm_advancedcookiebanner\views\templates\hook\footer_js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9feced2b409_56466802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '665e9631a1a47176b4183bb3a5dc738ca154b3fa' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\modules\\pm_advancedcookiebanner\\views\\templates\\hook\\footer_js.tpl',
      1 => 1722328276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9feced2b409_56466802 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	var acbConfigMode = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_CONFIG_MODE']), ENT_QUOTES, 'UTF-8');?>
;
	var acbControllerURL = "<?php echo $_smarty_tpl->tpl_vars['acb_controller_url']->value;?>
"; 	var acbIsLegalCmsPage = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['acb_is_legal_cms_page']->value), ENT_QUOTES, 'UTF-8');?>
;
	var acbGdprMode = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['acb_gdpr_mode']->value), ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
>
<?php }
}
