<?php
/* Smarty version 3.1.30, created on 2019-08-28 15:59:45
  from "C:\wamp64\www\php\TpMVC\views\films.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d6688d1832468_85915245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cd56ccfb21510cbf80b782635000db96892c6bc' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\TpMVC\\views\\films.tpl',
      1 => 1567000612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6688d1832468_85915245 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-12 bg-light">
        <h1>Rechercher un film</h1>
        <p>Saisir un mot du titre</p>
        <form class="col-6 my-3" method="post">
            <div class="col-12 input-group">
                <input type="text" class="form-control" placeholder="Rechercher" name="search" aria-label="" aria-describedby="basic-addon1">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="submit">Rechercher</button>
                </div>
            </div>
        </form>
    </div>
</div>
<hr>
<div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allFilms']->value, 'films', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['films']->value) {
?>
    <div class="col-12">
        <h2><?php echo $_smarty_tpl->tpl_vars['films']->value->getTitre();?>
 (<?php echo $_smarty_tpl->tpl_vars['films']->value->getAnnee();?>
)</h2>
        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['films']->value->getAffiche();?>
" alt="Responsive image">
            </div>
            <div class="col-6 my-5">
                <h3>Acteurs :</h3>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['films']->value->getRoles(), 'role', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['role']->value) {
?>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['role']->value->getActeur()->getNom();?>
 <?php echo $_smarty_tpl->tpl_vars['role']->value->getActeur()->getPrenom();?>
 (<?php echo $_smarty_tpl->tpl_vars['role']->value->getPersonnage();?>
)
                </p>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
        <hr>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div class="offset-4 col-4">
        <button class="btn btn-dark col-3">Previous</button>
        <button class="btn btn-dark offset-1 col-3">Next</button>
    </div>
</div>
<?php }
}
