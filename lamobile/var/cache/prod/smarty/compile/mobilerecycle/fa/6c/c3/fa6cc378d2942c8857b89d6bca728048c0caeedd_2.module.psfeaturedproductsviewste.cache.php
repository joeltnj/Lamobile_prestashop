<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:18
  from 'module:psfeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fec6d8a070_50782459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:psfeaturedproductsviewste',
      1 => 1722326703,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
function content_66a9fec6d8a070_50782459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '175509469066a9fec6d70f79_16387579';
?>

<section class="featured-products clearfix" id="popProducts">
<div class="container">
  <div class="row align-items-center h-100 mb-3">
    <div class="col-6">
      <h2 class="h2 products-section-title text-uppercase">
        Produits <span class="pink">Populaires</span>
      </h2>
    </div>
    <div class="col-6 text-right list_btn">
      <button onclick="prevPopulaire()" ><</button>
      <button onclick="nextPopulaire()">></button>
    </div>
  </div>
    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'cssClass'=>"row"), 0, false);
?>
    
</div>
</section>

<?php }
}
