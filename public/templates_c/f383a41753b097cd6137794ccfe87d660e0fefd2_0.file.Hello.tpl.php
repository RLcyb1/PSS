<?php
/* Smarty version 4.3.4, created on 2026-03-28 18:18:54
  from 'C:\xampp\htdocs\RobertLis\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_69c80d7e0f1395_89824735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f383a41753b097cd6137794ccfe87d660e0fefd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RobertLis\\app\\views\\Hello.tpl',
      1 => 1774718331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69c80d7e0f1395_89824735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37635136369c80d7e0f0195_53739502', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199334164969c80d7e0f0c70_46753766', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "title"} */
class Block_37635136369c80d7e0f0195_53739502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_37635136369c80d7e0f0195_53739502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Strona główna<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_199334164969c80d7e0f0c70_46753766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_199334164969c80d7e0f0c70_46753766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Panel Budżetu Domowego!</h1>
    <p>Wybierz jedną z funkcji z górnego menu.</p>
    
<?php
}
}
/* {/block "content"} */
}
