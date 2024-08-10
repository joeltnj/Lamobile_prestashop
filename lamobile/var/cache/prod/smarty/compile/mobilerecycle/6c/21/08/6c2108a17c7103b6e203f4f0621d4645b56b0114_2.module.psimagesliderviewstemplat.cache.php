<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:18
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fec64183a4_17079568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1722326704,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9fec64183a4_17079568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '78322045866a9fec63fe2d1_28623253';
?>

<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['slides']) {?>
<div class="container-fluid p-0">
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-wrap="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['homeslider']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
" data-touch="true">
    <ol class="carousel-indicators">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeslider']->value['slides'], 'slide', false, 'idxSlide', 'homeslider', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idxSlide']->value => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['index'];
?>
      <li data-target="#carousel" data-slide-to="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idxSlide']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['idxSlide']->value == 0) {?> class="active"<?php }?>></li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
    <ul class="carousel-inner" role="listbox">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeslider']->value['slides'], 'slide', false, NULL, 'homeslider', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['index'];
?>
        <li class="carousel-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first'] : null)) {?>active<?php }?>" role="option" aria-hidden="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first'] : null)) {?>false<?php } else { ?>true<?php }?>">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <figure>
              <div class="img-box">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['legend'] )), ENT_QUOTES, 'UTF-8');?>
" width="100" height="100" loading="lazy">
              </div>
              <?php if ($_smarty_tpl->tpl_vars['slide']->value['title'] || $_smarty_tpl->tpl_vars['slide']->value['description']) {?>
                <figcaption class="caption">
                  <h2 class="display-1 text-uppercase"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h2>
                  <div class="caption-description"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
                </figcaption>
              <?php }?>
            </figure>
          </a>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

  </div>
   </div>
<?php }?>


<?php }
}
