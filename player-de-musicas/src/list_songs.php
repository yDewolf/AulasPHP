<?php
require_once __DIR__ . "/../config/database.php";

header("Content-Type: application/json");

try {
    $sql = "SELECT 
                id, titulo, artista, album, caminho_arquivo 
            FROM songs ORDER BY data_adicao DESC";
    $stmt = $pdo->query($sql);
    $songs = $stmt->fetchAll();

    echo json_encode([
        "status" => "Sucesso",
        "data" => $songs
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        "status" => "error", 
        "message" => "Erro ao listar as musicas" . $e->getMessage()
    ]);
}