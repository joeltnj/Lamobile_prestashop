<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:21
  from 'C:\laragon\www\lamobile\modules\creativeelements\views\templates\front\theme\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fec929ab14_24096305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfcffbe1dc4b9bc4ae4a44b3292baf884098e9df' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\modules\\creativeelements\\views\\templates\\front\\theme\\index.tpl',
      1 => 1722328486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9fec929ab14_24096305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ((isset($_smarty_tpl->tpl_vars['CE_PAGE_INDEX']->value))) {?>
	<?php $_smarty_tpl->_assignInScope('ce_layout', $_smarty_tpl->tpl_vars['layout']->value);
} elseif (file_exists(((string)(defined('_PS_THEME_DIR_') ? constant('_PS_THEME_DIR_') : null))."templates/index.tpl")) {?>
	<?php $_smarty_tpl->_assignInScope('ce_layout', ((string)(defined('_PS_THEME_DIR_') ? constant('_PS_THEME_DIR_') : null))."templates/index.tpl");
} elseif ((defined('_PARENT_THEME_NAME_') ? constant('_PARENT_THEME_NAME_') : null)) {?>
	<?php $_smarty_tpl->_assignInScope('ce_layout', 'parent:index.tpl');
}?>



<?php if ((isset($_smarty_tpl->tpl_vars['CE_PAGE_INDEX']->value))) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121253296066a9fec9299482_87124312', 'content');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['ce_layout']->value);
}
/* {block 'content'} */
class Block_121253296066a9fec9299482_87124312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_121253296066a9fec9299482_87124312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section id="content"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cefilter' ][ 0 ], array( $_smarty_tpl->tpl_vars['CE_PAGE_INDEX']->value )), ENT_QUOTES, 'UTF-8');?>
</section>
	<?php
}
}
/* {/block 'content'} */
}
