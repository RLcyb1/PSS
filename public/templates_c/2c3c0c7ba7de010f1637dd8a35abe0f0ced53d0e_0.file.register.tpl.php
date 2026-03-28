<?php
/* Smarty version 4.3.4, created on 2026-03-28 13:51:57
  from 'C:\xampp\htdocs\RobertLis\app\views\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_69c7ceedde8ef8_32643427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c3c0c7ba7de010f1637dd8a35abe0f0ced53d0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RobertLis\\app\\views\\register.tpl',
      1 => 1774698648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69c7ceedde8ef8_32643427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3387144769c7ceeddda8a3_63986665', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104608244969c7ceedddb3a8_56829525', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "title"} */
class Block_3387144769c7ceeddda8a3_63986665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3387144769c7ceeddda8a3_63986665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Rejestracja<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_104608244969c7ceedddb3a8_56829525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_104608244969c7ceedddb3a8_56829525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Rejestracja</h1>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <div class="alert 
                    <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert-success<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alert-warning<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alert-danger<?php }?>" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <form method="POST">
        <label>Email: <input type="email" name="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" required></label><br>
        <label>Hasło: <input type="password" name="password" required></label><br>
        <label>Powtórz hasło: <input type="password" name="confirm_password" required></label><br>
        <button type="submit">Zarejestruj się</button>
    </form>
<?php
}
}
/* {/block "content"} */
}
