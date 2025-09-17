<?php
require_once __DIR__ . "/../config/database.php";

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['titulo'], $data['artista'], $data['caminho_arquivo'])) {
    http_response_code(400); // Bad Request
    echo json_encode(['mensagem' => 'Dados incompletos.', "data" => $data]);
    exit;
}

try {
    $sql = "INSERT INTO songs (titulo, artista, album, caminho_arquivo) 
            VALUES (:titulo, :artista, :album, :caminho_arquivo)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":titulo", $data["titulo"]);
    $stmt->bindParam(":artista", $data["artista"]);
    $stmt->bindParam(":album", $data["album"]);
    $stmt->bindParam(":caminho_arquivo", $data["caminho_arquivo"]);
    $stmt->execute();

    echo json_encode(['message' => 'Música adicionada com sucesso!', 'id' => $pdo->lastInsertId()]);

} catch (\PDOException $e) {
    http_response_code(500); 
    echo json_encode(['message' => 'Erro ao adicionar a música: ' . $e->getMessage()]);
}
