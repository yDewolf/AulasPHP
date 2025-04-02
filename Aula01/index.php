<?php

require_once (__DIR__ . "/elements/top.php");

require_once (__DIR__ . "/elements/menu.php");

# Se nao existe 'p' na query:
# retornar o que tiver na home
if (!isset($_GET["p"])) {
    require_once __DIR__ . "/pages/home.php";
}

# Se a pagina do 'p' existe:
# retornar a página
# Se não: retornar 404
if (file_exists(__DIR__ . "/pages/{$_GET['p']}.php")) {
    require_once (__DIR__ . "/pages/{$_GET['p']}.php");
} else {
    http_response_code(404);
    echo "Erro 404 | Página não encontrada";
}

// if (isset($_GET["p"])) {
//     $p = $_GET["p"];
//     switch ($p) {
//         case 1: require_once "pages/professores.php"; break;
//         case 2: require_once "pages/cursos.php"; break;
//         case 3: require_once "pages/login.php"; break;
//         case 4: require_once "pages/fale.php"; break;
//         default: require_once "pages/home.php"; break;
//     }
// } else {
//     require_once "pages/home.php";
// }


require_once (__DIR__ . "/elements/bottom.php");

?>