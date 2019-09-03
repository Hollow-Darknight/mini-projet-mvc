<?php
/* Smarty version 3.1.30, created on 2019-08-29 11:44:38
  from "C:\wamp64\www\php\TpMVC\views\connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d679e8688ef34_94229520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beb86cfcdf43021d215af64ff581d846a3b616ef' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\TpMVC\\views\\connexion.tpl',
      1 => 1567071560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d679e8688ef34_94229520 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-4 offset-4 my-auto bg-light">
        <h1>Connexion</h1>
        <?php if (isset($_smarty_tpl->tpl_vars['connected']->value)) {?>
            <p class="text-success"><?php echo $_smarty_tpl->tpl_vars['connected']->value;?>
</p>
        <?php } elseif (isset($_smarty_tpl->tpl_vars['connectionError']->value)) {?>
            <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['connectionError']->value;?>
</p>
        <?php }?>
        <form method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">Adresse Email :</label>
                <input type="text" class="form-control" name="mail" id="formGroupExampleInput" placeholder="azerty@azerty.xyz">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Mot de Passe :</label>
                <input type="password" class="form-control" name="pass" id="formGroupExampleInput2" placeholder="Mot de Passe">
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
</div>
<?php }
}
