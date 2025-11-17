<?php
require_once 'controllers/AlunoController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    AlunoController::salvar($_POST['nome'], $_POST['idade'], $_POST['matricula']);
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Alunos</title>
    <link rel="stylesheet" href="../Stylesh1t/style/components.css">
    <link rel="stylesheet" href="../Stylesh1t/style/basic.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'views/header.php'; ?>
    <main class="content">
        <?php 
        if (isset($_GET['form'])) {
            include 'views/form.php';
        } else {
            $alunos = AlunoController::listar();
            include 'views/lista.php';
        }
        ?>
    </main>
    <?php include 'views/footer.php'; ?>
    
    <!-- <script src="Stylesh1t/js/Responsivity.js"></script> -->
</body>
</html>