<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:21
  from 'C:\laragon\www\lamobile\themes\mobilerecycle\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fec9467326_01566972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97f3f86fd84c99add9f92b9eb5914b0cd93f1af' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\themes\\mobilerecycle\\templates\\index.tpl',
      1 => 1722326660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9fec9467326_01566972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105886984066a9fec9462588_12539619', 'page_content_container');
?>


</style><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_136814510466a9fec9463612_55404569 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_213565626066a9fec9465281_60639788 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_62563664966a9fec94649c6_30197262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213565626066a9fec9465281_60639788', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_105886984066a9fec9462588_12539619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_105886984066a9fec9462588_12539619',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_136814510466a9fec9463612_55404569',
  ),
  'page_content' => 
  array (
    0 => 'Block_62563664966a9fec94649c6_30197262',
  ),
  'hook_home' => 
  array (
    0 => 'Block_213565626066a9fec9465281_60639788',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136814510466a9fec9463612_55404569', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62563664966a9fec94649c6_30197262', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
