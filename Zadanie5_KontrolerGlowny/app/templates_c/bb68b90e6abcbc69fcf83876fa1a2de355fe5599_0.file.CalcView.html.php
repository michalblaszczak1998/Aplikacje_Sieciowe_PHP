<?php
/* Smarty version 3.1.30, created on 2020-12-22 18:33:41
  from "C:\xampp\htdocs\php_06_uproszczony\app\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fe22df52b66d0_88968368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb68b90e6abcbc69fcf83876fa1a2de355fe5599' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_uproszczony\\app\\CalcView.html',
      1 => 1608658235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.html' => 1,
  ),
),false)) {
function content_5fe22df52b66d0_88968368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8434111885fe22df52aac63_76607935', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21287391385fe22df52b6306_20760660', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_8434111885fe22df52aac63_76607935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_21287391385fe22df52b6306_20760660 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Prosty kalkulator kredytowy</h3>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
    <fieldset>
        <label>Kwota kredytu: </label>
        <input type="number" placeholder="Kwota pożyczki" min="1" name="loanValue" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->loanValue;?>
"/><br/>
        <label>Na ile lat: </label>
        <input type="number" min="1" placeholder="Okres" name="yearsOfCredit" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->yearsOfCredit;?>
"/><br/>
        <label>Oprocentowanie: </label>
        <input type="number" min="1" placeholder="Oprocentowanie" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
"/><br/>
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <h4>Wystąpiły błędy: </h4>
    <ol class="err">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ol>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <h4>Informacje: </h4>
    <ol class="inf">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ol>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
    <h4>Wynik</h4>
    <p class="res">
        Miesięczna rata będzie wynosić: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
zł
    </p>
    <?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
