<?php
/* Smarty version 3.1.30, created on 2019-08-29 09:47:19
  from "C:\wamp64\www\php\TpMVC\views\inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d678307170ad7_02049859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd3508793f84241b745d3c8898340c1f4a3fc11f' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\TpMVC\\views\\inscription.tpl',
      1 => 1567064827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d678307170ad7_02049859 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-4 offset-4 my-auto bg-light">
        <h1>Inscription</h1>
        <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
            <p class="text-success"><?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</p>
        <?php } elseif (isset($_smarty_tpl->tpl_vars['notOk']->value)) {?>
            <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['notOk']->value;?>
</p>
        <?php }?>
        <form method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">Adresse email :</label>
                <input type="text" class="form-control" name="mail" id="formGroupExampleInput" placeholder="azerty@azerty.xyz" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Mot de Passe :</label>
                <input type="password" class="form-control" name="pass1" id="formGroupExampleInput2" placeholder="Mot de Passe" required>
                <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                <?php }?>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput3">Confirmation de Mot de Passe :</label>
                <input type="password" class="form-control" name="pass2" id="formGroupExampleInput2" placeholder="Confirmation Mot de Passe" required>
                <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                <?php }?>
            </div>
            <div class="row">
                <div class="offset-2 col-4">
                    <button class="btn btn-dark" type="submit">Valider</button>
                </div>
                <div class="col-4">
                    <button class="btn btn-dark" type="reset">Effacer</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }
}
