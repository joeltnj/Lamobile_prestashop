<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:23
  from 'C:\laragon\www\lamobile\themes\mobilerecycle\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fecb75b884_01475148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a52ef8836d45b3ddd154fa476b3bb1b5c8056f2e' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\themes\\mobilerecycle\\templates\\_partials\\header.tpl',
      1 => 1722326668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9fecb75b884_01475148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container-fluid custom-header">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140384089566a9fecb736591_19607631', 'header_top');
?>

</div>
<div class="bg-container">
  <div class="container-fluid custom_marg">
    <div class="row">
      <div class="col-sm-4 offset-sm-2">
        <h4><img src="/themes/mobilerecycle/assets/img/box2.png" width="40" height="32">Livraison en <strong>24h CHRONO</strong></h4>
        <h4><img src="/themes/mobilerecycle/assets/img/paiement-card-ico.png" width="40" height="32">Paiement en <strong>3 et 4 fois !</strong></h4>
      </div> 
      <div class="col-sm-6"> 
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>
          
      </div>
    </div>
  </div>
</div>
  
  
  
    
<?php }
/* {block 'header_top'} */
class Block_140384089566a9fecb736591_19607631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_140384089566a9fecb736591_19607631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
        <div class="box-logo">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"  class="logo">
            <img id="header-logo" class="logo img-responsive" loading="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="100" height="100">
          </a>
            <div class="d-mobile box-search">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

            </div>
          <span onclick="toggleMenuHeader()"><i class="far fa-bars"></i></span>
        </div>
        <?php } else { ?>
          <div class="box-logo">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"  class="logo">
              <img id="header-logo" class="logo img-responsive" loading="lazy" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="100" height="100">
            </a>
              <div class="d-mobile box-search">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

              </div>
            <span onclick="toggleMenuHeader()"><i class="far fa-bars"></i></span>
          </div>
        <?php }?>
        <div class="menu-right" id="menu-right">
         <span onclick="closeMenuHeader()" class="closeMenu"><i class="far fa-times"></i></span>   
          <a href="/2-accueil" class="d-mobile">Tous les produits</a>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
      
        </div>
      <?php
}
}
/* {/block 'header_top'} */
}
