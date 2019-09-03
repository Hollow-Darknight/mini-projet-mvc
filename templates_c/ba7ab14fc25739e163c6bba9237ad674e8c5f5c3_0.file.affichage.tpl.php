<?php
/* Smarty version 3.1.30, created on 2019-08-20 15:25:38
  from "C:\wamp64\www\php\TpMVC\views\affichage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5bf4d27d2dc9_63481084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba7ab14fc25739e163c6bba9237ad674e8c5f5c3' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\TpMVC\\views\\affichage.tpl',
      1 => 1566305278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5bf4d27d2dc9_63481084 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allFilms']->value, 'films', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['films']->value) {
?>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['films']->value->getTitre();?>
 (<?php echo $_smarty_tpl->tpl_vars['films']->value->getAnnee();?>
)</h4>
        </div>
        <img src="<?php echo $_smarty_tpl->tpl_vars['film']->value->getAffiche();?>
" alt="Card image">
        <div class="card-body">
            <p class="card-text">Acteurs :
                <br>
                <br>  
            </p>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<hr>
<div class="offset-4 col-4">
    <button class="btn btn-dark col-3">Previous</button>
    <button class="btn btn-dark offset-1 col-3">Next</button>
</div>
<?php }
}
