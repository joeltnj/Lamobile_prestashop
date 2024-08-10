<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:18
  from 'C:\laragon\www\lamobile\themes\mobilerecycle\templates\catalog\_partials\productlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fec6e9f662_21192790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6efcd87d59d75f9d8cfdcafb009c8a801d559a17' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\themes\\mobilerecycle\\templates\\catalog\\_partials\\productlist.tpl',
      1 => 1722326661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_66a9fec6e9f662_21192790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '135933831266a9fec6e99f17_37470437';
?>
<div class="products <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?> products_slider col-xl-3 col-lg-4 col-sm-6<?php }?> <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] !== 'index') {?>row<?php }?>  px-0" itemscope itemtype="http://schema.org/ItemList">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'position');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
