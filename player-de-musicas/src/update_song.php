<?php
require_once __DIR__ . "/../config/database.php";

header('Content-Type: application/json');

$id = $_GET['id'] ?? null;

$data = json_decode(file_get_contents('php://input'), true);
if (!$id || !isset($data['titulo'], $data['artista'])) {
    http_response_code(400);
    echo json_encode(['mensagem' => 'Dados inválidos. ID, título e artista são obrigatórios.']);
    exit;
}
try {
    $sql = "UPDATE songs 
            SET titulo = :titulo, artista = :artista, album = :album, caminho_arquivo = :caminho_arquivo WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":titulo", $data["titulo"]);
    $stmt->bindParam(":artista", $data["artista"]);
    $stmt->bindParam(":album", $data["album"] ?? null);
    $stmt->bindParam(":caminho_arquivo", $data["caminho_arquivo"] ?? null);

    $stmt->execute();

    if ($stmt->rowCount()) {
    echo json_encode(['mensagem' => 'Música atualizada com sucesso!']);
    } else {
    http_response_code(404);
    echo json_encode(['mensagem' => 'Música não encontrada ou nenhum dado alterado.']);
    }
} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['mensagem' => 'Erro ao atualizar a música: ' . $e->getMessage()]);
}
