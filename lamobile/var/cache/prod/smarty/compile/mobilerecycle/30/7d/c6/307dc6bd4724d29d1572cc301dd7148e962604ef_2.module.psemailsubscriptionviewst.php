<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:25
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fecde8d2c2_28761928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1722326695,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9fecde8d2c2_28761928 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="block_newsletter " id="blockEmailSubscription_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
">
  <div class="row align-items-center">
    <div class="col-lg-12"> <h3>Recevez<span class="pink"> nos offres spéciales</span></h3></div>
      <div id="block-newsletter-label" class="col-md-6 col-xs-12 wow fadeInUp" data-wow-delay=".3s">
        <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                    <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                    </p>
                  <?php }?>
      </div>
      <div class="col-md-5 offset-lg-1 col-xs-12 wow fadeInUp" data-wow-delay=".3s">
        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
#blockEmailSubscription_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
              <input
                class="btn btn-primary float-xs-right hidden-xs-down"
                name="submitNewsletter"
                type="submit"
                value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
              >
              <input
                class="btn btn-primary float-xs-right hidden-sm-up"
                name="submitNewsletter"
                type="submit"
                value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
              >
              <div class="input-wrapper">
                <input
                  name="email"
                  type="email"
                  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
                  aria-labelledby="block-newsletter-label"
                  required
                >
              </div>
              <input type="hidden" name="blockHookName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" />
              <input type="hidden" name="action" value="0">
              <div class="clearfix"></div>
        </form>
      </div>
  </div>
</div>

<?php }
}
