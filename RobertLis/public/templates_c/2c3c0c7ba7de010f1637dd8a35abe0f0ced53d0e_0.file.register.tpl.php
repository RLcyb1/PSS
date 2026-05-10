<?php
/* Smarty version 4.3.4, created on 2026-05-10 16:01:20
  from 'C:\xampp\htdocs\RobertLis\app\views\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6a008fb0493612_73001295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c3c0c7ba7de010f1637dd8a35abe0f0ced53d0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RobertLis\\app\\views\\register.tpl',
      1 => 1775328820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a008fb0493612_73001295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11953408656a008fb04828f9_86153785', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13518892036a008fb04832b4_70316338', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "title"} */
class Block_11953408656a008fb04828f9_86153785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11953408656a008fb04828f9_86153785',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Rejestracja<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_13518892036a008fb04832b4_70316338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13518892036a008fb04832b4_70316338',
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
        <div class="mb-3">
        <label class="form-label">Email: <input type="email" name="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control" required></label><br>
        </div>
        <div class="mb-3">
        <label class="form-label">Hasło: <input type="password" name="password" class="form-control" required></label><br>
        </div>
        <div class="mb-3">
        <label class="form-label">Powtórz hasło: <input type="password" name="confirm_password" class="form-control" required></label><br>
        </div>
        <button type="submit" class="btn btn-primary" >Zarejestruj się</button>
        
    </form>
<?php
}
}
/* {/block "content"} */
}
