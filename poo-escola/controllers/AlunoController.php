<?php
require_once 'config/conexao.php';
require_once 'classes/Aluno.php';

class AlunoController {

    public static function listar() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM alunos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public static function salvar($nome, $idade, $matricula) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO alunos (nome, idade, matricula) VALUES (?, ?, ?)");
        $stmt->execute([$nome, $idade, $matricula]);
    }
}