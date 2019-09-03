<?php
$userDAO = new UserDAO();

if(isset($_POST['pass1']) && isset($_POST['pass2'])){
    if($_POST['pass1'] == $_POST['pass2']){
        $pass = $_POST['pass2'];
        $hashPass = password_hash($pass, PASSWORD_DEFAULT);
        $user = new User($_POST['mail'], $hashPass);

        $status = $userDAO->addUser($user);

        if($status){
            $ok = "Félicitation, vous êtes enregistré, vous pouvez dès maintenant vous connecté pour accéder à votre compte";
            $smarty->assign('ok', $ok);
        } else{
            $notOk =  "Un problème est survenu, veuillez réessayer";
            $smarty->assign('notOk', $notOk);
        }
    } else{
        $error = 'Les mots de passes ne correspondent pas';
        $smarty->assign('error', $error);
    }
}
$smarty->display(_VIEW_ . 'inscription.tpl');
