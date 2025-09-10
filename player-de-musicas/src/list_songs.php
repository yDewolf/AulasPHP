<?php
require_once __DIR__ . "/../config/database.php";

header("Content-Type: application/json");

try {
    $searchTerm = $_GET['search'] ?? '';
    $sql = "SELECT id, titulo, artista, album, caminho_arquivo FROM songs";
    $params = [];
    if ($searchTerm) {
        $sql .= " WHERE titulo LIKE ? OR artista LIKE ?";
        $params[] = "%" . $searchTerm . "%";
        $params[] = "%" . $searchTerm . "%";
    }
    $sql .= " ORDER BY titulo ASC"; // Ordena por título
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $songs = $stmt->fetchAll();
    echo json_encode(['status' => 'sucesso', 'data' => $songs]);
    
} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['status' => 'erro', 'mensagem' => 'Erro ao listar as músicas: ' . $e->getMessage()]);
}
