<?php
/* Smarty version 3.1.30, created on 2019-08-20 17:00:31
  from "C:\wamp64\www\php\TpMVC\views\recherche.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5c0b0f1a0175_82167400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ac8549b8593e15411e9c1928312131626d84c4' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\TpMVC\\views\\recherche.tpl',
      1 => 1566313229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5c0b0f1a0175_82167400 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-12 bg-light">
        <h1>Rechercher un film</h1>
        <p>Saisir un mot du titre</p>
        <form class="col-6 my-3" action="" method="GET">
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
<?php }
}
