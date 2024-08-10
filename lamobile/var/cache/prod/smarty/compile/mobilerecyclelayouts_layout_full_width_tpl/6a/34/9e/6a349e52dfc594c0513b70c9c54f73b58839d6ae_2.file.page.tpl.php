<?php
/* Smarty version 3.1.47, created on 2024-07-31 11:07:21
  from 'C:\laragon\www\lamobile\themes\mobilerecycle\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66a9fec9645ef4_85483702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a349e52dfc594c0513b70c9c54f73b58839d6ae' => 
    array (
      0 => 'C:\\laragon\\www\\lamobile\\themes\\mobilerecycle\\templates\\page.tpl',
      1 => 1722326660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a9fec9645ef4_85483702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188384710866a9fec963b054_17009802', 'content');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_80131684866a9fec963bdf2_20086934 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_133955656866a9fec963b6c0_81774678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80131684866a9fec963bdf2_20086934', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_3593443766a9fec96428d8_09506221 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_146689070166a9fec96430f8_78341832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_122677349666a9fec9642301_54220656 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block  wow fadeInUp" data-wow-delay=".3s">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3593443766a9fec96428d8_09506221', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146689070166a9fec96430f8_78341832', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_142013431766a9fec9644e65_04299515 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_120522198166a9fec9644953_56229598 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142013431766a9fec9644e65_04299515', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_188384710866a9fec963b054_17009802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_188384710866a9fec963b054_17009802',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_133955656866a9fec963b6c0_81774678',
  ),
  'page_title' => 
  array (
    0 => 'Block_80131684866a9fec963bdf2_20086934',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_122677349666a9fec9642301_54220656',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3593443766a9fec96428d8_09506221',
  ),
  'page_content' => 
  array (
    0 => 'Block_146689070166a9fec96430f8_78341832',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_120522198166a9fec9644953_56229598',
  ),
  'page_footer' => 
  array (
    0 => 'Block_142013431766a9fec9644e65_04299515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133955656866a9fec963b6c0_81774678', 'page_header_container', $this->tplIndex);
?>

    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
    <?php }?> 
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122677349666a9fec9642301_54220656', 'page_content_container', $this->tplIndex);
?>

    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>

      <section class="avis-site">
        <div class="container">  
            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s"><h2>Nos avis clients</h2></div>   
              <!-- Begin eTrusted bootstrap tag -->
              <?php echo '<script'; ?>
 src="https://integrations.etrusted.com/applications/widget.js/v2" defer async><?php echo '</script'; ?>
>
              <!-- End eTrusted bootstrap tag -->

              <!-- Begin eTrusted widget tag -->
              <etrusted-widget data-etrusted-widget-id="wdg-f0c7439d-d178-4d0a-bba5-36ffdf101c84"></etrusted-widget>
              <!-- End eTrusted widget tag -->
        </div>
      </section>
      
    <?php }?> 
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120522198166a9fec9644953_56229598', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
