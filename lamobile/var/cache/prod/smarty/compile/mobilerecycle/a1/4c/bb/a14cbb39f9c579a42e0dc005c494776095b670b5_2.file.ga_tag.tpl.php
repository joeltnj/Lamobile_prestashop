<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:17
  from 'C:\laragon\www\lamobile\modules\ps_googleanalytics\views\templates\hook\ga_tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fec59dd948_35790852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a14cbb39f9c579a42e0dc005c494776095b670b5' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\modules\\ps_googleanalytics\\views\\templates\\hook\\ga_tag.tpl',
      1 => 1722329347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9fec59dd948_35790852 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {
echo '<script'; ?>
 type="text/javascript">
    <?php if ($_smarty_tpl->tpl_vars['isV4Enabled']->value) {?>
      document.addEventListener('DOMContentLoaded', function() {
        <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

      });
    <?php } else { ?>
        
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof GoogleAnalyticEnhancedECommerce !== 'undefined') {
                var MBG = GoogleAnalyticEnhancedECommerce;
                MBG.setCurrency('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isoCode']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
                <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

            }
        });
        
    <?php }
echo '</script'; ?>
>
<?php }
}
}
