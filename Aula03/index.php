<?php

require_once __DIR__ . "/parts/top.php";

if (!isset($_GET["p"])) {
    require_once __DIR__ . "/pages/main.php";
} else {
    if (file_exists(__DIR__ . "/pages/{$_GET['p']}.php")) {
        require_once (__DIR__ . "/pages/{$_GET['p']}.php");
    } else {
        http_response_code(404);
        echo "Erro 404 | Página não encontrada";
    }

}

require_once __DIR__ . "/parts/bottom.php";
