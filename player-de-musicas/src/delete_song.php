<?php
require_once __DIR__ . "/../config/database.php";

header('Content-Type: application/json');

$id = $_GET['id'] ?? null;
if (!$id) {
    http_response_code(400);
    echo json_encode(['mensagem' => 'ID da música não fornecido.']);
    exit;
}

try {
    $sql = "DELETE FROM songs WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

if ($stmt->rowCount()) {
    echo json_encode(['mensagem' => 'Música excluída com sucesso!']);
} else {
    http_response_code(404);
    echo json_encode(['mensagem' => 'Música não encontrada.']);
}
} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['mensagem' => 'Erro ao excluir a música: ' . $e->getMessage()]);
}
