<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:16
  from 'C:\laragon\www\lamobile\modules\shopimind\views\templates\front\spm_tag_cacheworkaround.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fec4affd84_06760014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e40709ce4d065a84acea87d20a00f1a026bc35e0' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\modules\\shopimind\\views\\templates\\front\\spm_tag_cacheworkaround.tpl',
      1 => 1722329059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9fec4affd84_06760014 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    
    var xmlhttp = new XMLHttpRequest();
    var _spmq = {};
    var _spmq_nc = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['spm_user_infos']->value ));?>
;
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            try {
                var data = JSON.parse(xmlhttp.responseText);
            } catch(err) {
                return;
            }
            var _spmq_c = JSON.parse(data.spm_user_infos);
            Object.keys(_spmq_nc).forEach(key => _spmq[key] = _spmq_nc[key]);
            Object.keys(_spmq_c).forEach(key => _spmq[key] = _spmq_c[key]);
            var _spmq_encode = data.spm_user_infos_encode;
            var _spm_id_combination = function() {
                return (typeof(document.getElementById('idCombination')) != 'undefined' && document.getElementById('idCombination') != null ?
                        document.getElementById('idCombination').value : ''
                );
            };
            var spm = document.createElement('script');
            spm.type = 'text/javascript';
            spm.defer = true;
            spm.src = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['spm_client_url']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
/app.js?<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( $_smarty_tpl->tpl_vars['spm_user_infos_encode']->value ));?>
'+(typeof _spmq_encode === 'string' && _spmq_encode ? '&'+_spmq_encode:'')+'&id_combination='+_spm_id_combination();
            var s_spm = document.getElementsByTagName('script')[0];
            s_spm.parentNode.insertBefore(spm, s_spm);
        }
    };
    xmlhttp.open("GET", '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['spm_ajaxspmq_url']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
', true);
    xmlhttp.send();
    
<?php echo '</script'; ?>
>
<?php }
}
