<?php

// Initialisation de l"environnement
require "./config/config.init.php";

require_once _CTRL_ . "header.php";

// Gestion de Routing
if (isset($_GET["action"]) && file_exists(_CTRL_ . $_GET["action"].'.php')) {
    include _CTRL_ . $_GET["action"] . '.php';
} elseif (isset($_GET["action"]) && !file_exists(_CTRL_ . $_GET["action"].'.php')) {
    include _CTRL_ . "404.php";
} else {
    include _CTRL_ . "films.php";
}

require _CTRL_ . "footer.php";
