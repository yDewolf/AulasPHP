<?php
require_once('../config/database.php');

header('Content-Type: application/json');

$id = $_GET['id'] ?? null;
if (!$id) {
    http_response_code(400);
    echo json_encode(['mensagem' => 'ID da música não fornecido.']);
    exit;
}
try {
    $sql = "SELECT id, titulo, artista, album, caminho_arquivo FROM songs WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $song = $stmt->fetch();
    if ($song) {
        echo json_encode(['status' => 'sucesso', 'data' => $song]);
        exit;
    }
    http_response_code(404); 
    echo json_encode(['mensagem' => 'Música não encontrada.']);

} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['mensagem' => 'Erro ao buscar a música: ' . $e->getMessage()]);
}
