<?php
/* Smarty version 3.1.30, created on 2019-08-28 15:32:48
  from "C:\wamp64\www\php\TpMVC\views\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d668280d7b7c7_36639302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd76504783eee5e3057ae94c8c567ca04e9daf4d' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\TpMVC\\views\\nav.tpl',
      1 => 1566999161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d668280d7b7c7_36639302 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index">Médiathèque</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="films">Films <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">Créations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inscription">Inscription</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<hr>
<?php }
}
