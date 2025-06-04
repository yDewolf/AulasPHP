<?php

// Database connection
const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB = "lanchinho";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB);
if (!$conn) {
    echo "Erro ao conectar na database | ".mysqli_connect_errno(). " - ".mysqli_connect_error();
}

echo "Conectado à database com sucesso! ";