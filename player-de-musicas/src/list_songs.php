<?php
require_once __DIR__ . "/../config/database.php";

header("Content-Type: application/json");

# TODO: Fix this
try {
    $searchTerm = $_GET['search'] ?? '';
    $sortBy = $_GET['sort'] ?? 'data_adicao';
    
    $sql = "SELECT id, titulo, artista, album, caminho_arquivo FROM songs";
    if ($searchTerm) {
        $sql .= " WHERE titulo LIKE :searchT OR artista LIKE :searchA";
    }

    $sortBy = $_GET['sort'] ?? 'data_adicao';
    $allowedSorts = ['titulo', 'artista', 'album', 'data_adicao'];
    if (!in_array($sortBy, $allowedSorts)) {
        $sortBy = 'data_adicao';
    }

    $sql .= " ORDER BY " . $sortBy; 

    $stmt = $pdo->prepare($sql);
    if ($searchTerm) {
        $stmt->bindParam(":searchT", $searchTerm, PDO::PARAM_STR);
        $stmt->bindParam(":searchA", $searchTerm, PDO::PARAM_STR);
    }
    $stmt->execute();
    
    $songs = $stmt->fetchAll();
    echo json_encode(['status' => 'sucesso', 'data' => $songs]);

} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['status' => 'erro', 'mensagem' => 'Erro ao listar as músicas: ' . $e->getMessage()]);
}
