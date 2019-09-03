<?php
if(isset($_POST['search'])){
    $film = new FilmsDAO();
    $resultat = $film->getSome($_POST['search']);
}
$film = new FilmsDAO();
$allFilms = $film->getAll();

$smarty->assign('allFilms', $allFilms);
$smarty->display(_VIEW_ . 'films.tpl');