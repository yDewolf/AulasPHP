<?php
require_once 'config/conexao.php';
require_once 'classes/Aluno.php';

class AlunoController {

    public static function listar() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM professores");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public static function salvar($nome, $cpf, $especializacao) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO professores (nome, cpf, especializacao) VALUES (?, ?, ?)");
        $stmt->execute([$nome, $cpf, $especializacao]);
    }
}