<?php
$user = new UserDAO();

if(isset($_POST['mail']) && isset($_POST['pass'])){
    $pass = $_POST['pass'];
    $utilisateur = new User($_POST['mail'], $pass);

    $status = $user->userConnection($utilisateur);
    if($status){
        $connected = "Vous êtes maintenant connecté, vous pouvez accéder aux options utilisateur";
        $smarty->assign('connected', $connected);
    } else{
        $connectionError =  "Email ou mot de passe incorrect";
        $smarty->assign('connectionError', $connectionError);
    }
}

$smarty->display(_VIEW_ . 'connexion.tpl');