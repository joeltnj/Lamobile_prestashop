<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:27
  from 'C:\laragon\www\lamobile\modules\pm_advancedcookiebanner\views\templates\hook\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fecf01ade6_43043870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f741c291ef82e27792524c96dd6334f9bc4c7118' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\modules\\pm_advancedcookiebanner\\views\\templates\\hook\\footer.tpl',
      1 => 1722328276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9fecf01ade6_43043870 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['acb_is_legal_cms_page']->value) {?>
	<style type="text/css">
        <?php if ($_smarty_tpl->tpl_vars['acb_gdpr_mode']->value) {?>
            #acb-accept-all-button.acb-button {
                font-size: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BUTTON_FONT_SIZE']), ENT_QUOTES, 'UTF-8');?>
px;
                color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BUTTON_FONT_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
                background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BUTTON_BG_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
            }
            .acb-button {
                font-size: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BUTTON_FONT_SIZE']), ENT_QUOTES, 'UTF-8');?>
px;
                color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BUTTON_BG_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
                border-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BUTTON_BG_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
                background-color: #fff;
            }
        <?php } else { ?>
            #acb-close-button.acb-button {
                font-size: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BUTTON_FONT_SIZE']), ENT_QUOTES, 'UTF-8');?>
px;
                color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BUTTON_FONT_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
                background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BUTTON_BG_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
            }
        <?php }?>
        #acb_link_information {
            font-size: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_FONT_SIZE'])*0.9, ENT_QUOTES, 'UTF-8');?>
px;
            color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_FONT_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
        }
        #acb-banner *:not(.acb-button) {color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_FONT_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}
        #acb-banner p {
            font-size: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_FONT_SIZE']), ENT_QUOTES, 'UTF-8');?>
px;
            <?php if ($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_CMS'] == 0) {?>
                margin: 0 0 0px!important;
            <?php } else { ?>
                margin: 0 0 6px;
            <?php }?>
        }
        #acb-banner {
            background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BG_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
            color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_FONT_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
            border-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BORDER_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
            text-align: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_TEXT_ALIGN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
            box-shadow: 0px 0px 5px 0px <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BG_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
            <?php if ($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_POSITION'] == 2) {?>
                border-top-width: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BORDER_SIZE']), ENT_QUOTES, 'UTF-8');?>
px;
            <?php } else { ?>
                border-bottom-width: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BORDER_SIZE']), ENT_QUOTES, 'UTF-8');?>
px;
            <?php }?>
        }
        @media screen and (max-width: 767px) {
            #acb-banner {
                border-width: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_BORDER_SIZE']), ENT_QUOTES, 'UTF-8');?>
px;
            }
            .acb_link_information_container {
                border-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_FONT_COLOR'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
            }
        }
	</style>

    <div id="acb-banner" class="container acb-position-<?php if ($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_POSITION'] == 1) {?>top<?php } else { ?>bottom<?php }
if ($_smarty_tpl->tpl_vars['acb_gdpr_mode']->value) {?> acb-gdpr<?php }?>">
        <div id="acb-content" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_CLASSES_CONTENT'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <?php if ((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null) >= '1.7.0.0') {?>
                <?php echo $_smarty_tpl->tpl_vars['banner_content']->value;?>
            <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_content']->value, ENT_QUOTES, 'UTF-8');?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_CMS'] != 0) {?>
                <div class="acb_link_information_container">
                    <?php if ($_smarty_tpl->tpl_vars['acb_is_17']->value) {?>
                        <i class="material-icons">chevron_right</i>
                    <?php } elseif ($_smarty_tpl->tpl_vars['acb_is_16']->value) {?>
                        <i class="icon-chevron-right"></i>
                    <?php }?>
                    <a id="acb_link_information" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_CMS_LINK'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                        <?php if (!empty($_smarty_tpl->tpl_vars['cms_link_label']->value)) {?>
                            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cms_link_label']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                        <?php } else { ?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More information','mod'=>'pm_advancedcookiebanner'),$_smarty_tpl ) );?>

                        <?php }?>
                    </a>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['acb_gdpr_mode']->value) {?>
                <div class="acbCheckboxesContainer">
                    <div class="acbCheckboxContainer<?php if ($_smarty_tpl->tpl_vars['acb_is_16']->value) {?> acbCheckboxContainer16<?php }?>">
                        <input name="acbConsentMandatory" class="acbCheckbox" type="checkbox" checked disabled />
                        <label class="acbConsentLabel" for="acbConsentMandatory"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mandatory cookies','mod'=>'pm_advancedcookiebanner'),$_smarty_tpl ) );?>
</label>
                    </div>
                    <div class="acbCheckboxContainer<?php if ($_smarty_tpl->tpl_vars['acb_is_16']->value) {?> acbCheckboxContainer16<?php }?>">
                        <input name="acbConsentAnalytics" class="acbCheckbox" type="checkbox" />
                        <label class="acbConsentLabel" for="acbConsentAnalytics"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Statistics cookies','mod'=>'pm_advancedcookiebanner'),$_smarty_tpl ) );?>
</label>
                    </div>
                    <div class="acbCheckboxContainer<?php if ($_smarty_tpl->tpl_vars['acb_is_16']->value) {?> acbCheckboxContainer16<?php }?>">
                        <input name="acbConsentMarketing" class="acbCheckbox" type="checkbox" />
                        <label class="acbConsentLabel" for="acbConsentMarketing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Marketing and Social network cookies','mod'=>'pm_advancedcookiebanner'),$_smarty_tpl ) );?>
</label>
                    </div>
                </div>
            <?php }?>
        </div>
        <div id="acb-action" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_configuration']->value['PM_ACB_CLASSES_BUTTON'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['acb_gdpr_mode']->value) {?>
                <button id="acb-deny-all-button" class="acb-button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deny all','mod'=>'pm_advancedcookiebanner'),$_smarty_tpl ) );?>
</button>
                <button id="acb-close-button" class="acb-button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept current selection','mod'=>'pm_advancedcookiebanner'),$_smarty_tpl ) );?>
</button>
                <button id="acb-accept-all-button" class="acb-button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept all','mod'=>'pm_advancedcookiebanner'),$_smarty_tpl ) );?>
</button>
            <?php } else { ?>
                <button id="acb-close-button" class="acb-button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I agree','mod'=>'pm_advancedcookiebanner'),$_smarty_tpl ) );?>
</button>
            <?php }?>
        </div>
    </div>
<?php }
}
}
