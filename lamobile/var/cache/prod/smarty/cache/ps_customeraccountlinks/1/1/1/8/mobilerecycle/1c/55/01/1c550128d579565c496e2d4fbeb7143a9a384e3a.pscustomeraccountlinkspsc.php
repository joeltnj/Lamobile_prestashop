<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:26
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fece9591c2_46433791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1722326676,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_66a9fece9591c2_46433791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper wow fadeInUp" data-wow-delay=".3s">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="https://localhost/lamobile/mon-compte" rel="nofollow">
      Espace client
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Espace client</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="https://localhost/lamobile/identite" title="Informations personnelles" rel="nofollow">
            Informations personnelles
          </a>
        </li>
            <li>
          <a href="https://localhost/lamobile/suivi-commande" title="Retours produit" rel="nofollow">
            Retours produit
          </a>
        </li>
            <li>
          <a href="https://localhost/lamobile/historique-commandes" title="Commandes" rel="nofollow">
            Commandes
          </a>
        </li>
            <li>
          <a href="https://localhost/lamobile/avoirs" title="Avoirs" rel="nofollow">
            Avoirs
          </a>
        </li>
            <li>
          <a href="https://localhost/lamobile/adresses" title="Adresses" rel="nofollow">
            Adresses
          </a>
        </li>
            <li>
          <a href="https://localhost/lamobile/reduction" title="Bons de réduction" rel="nofollow">
            Bons de réduction
          </a>
        </li>
        <li>
  <a href="//localhost/lamobile/module/ps_emailalerts/account" title="Mes alertes">
    Mes alertes
  </a>
</li>

	</ul>
</div>
<?php }
}
