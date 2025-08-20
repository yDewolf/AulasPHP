<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machado Lanches</title>
    <link rel="stylesheet" href="https://ydewolf.github.io/Stylesh1t/style/components.css">
    <link rel="stylesheet" href="https://ydewolf.github.io/Stylesh1t/style/navbar.css">
</head>
<body>
    <div class="section">
        <h1>Form de clientes:</h1>
        <form action="" method="post">
            <div class="input-row">
                <label for="name">Nome: </label>
                <input type="text" name="name" id="name">
            </div>
            <div class="input-row">
                <label for="telefone">Telefone: </label>
                <input type="tel" name="telefone" id="telefone">
            </div>
            <div class="input-row">
                <label for="endereco">Endereço: </label>
                <input type="address" name="endereco" id="endereco">
            </div>
            <div class="input-row">
                <label for="sexo">Sexo: </label>
                <select name="sexo" id="sexo">
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                </select>
            </div>
        </form>
    </div>

    <div class="section">
        <h1>Form de funcionario:</h1>
        <form action="" method="post">
            <div class="input-row">
                <label for="name">Nome: </label>
                <input type="text" name="name" id="name">
            </div>
            <div class="input-row">
                <label for="role">Cargo: </label>
                <input type="text" name="role" id="role">
            </div>
            <div class="input-row">
                <label for="data_admissao">Data Admissão: </label>
                <input type="date" name="data_admissao" id="data_admissao">
            </div>
            <div class="input-row">
                <label for="active">Ativo: </label>
                <input type="checkbox" name="active" id="active">    
            </div>
        </form>
    </div>
</body>
</html>