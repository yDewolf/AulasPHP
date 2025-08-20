CREATE DATABASE MachadoLanches;
USE MachadoLanches;

CREATE TABLE funcionarios (
    id_funcionario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_funcionario VARCHAR(255) NOT NULL,
    cargo VARCHAR(255) NOT NULL,
    data_admissao DATE NOT NULL,
    ativo BOOLEAN NOT NULL DEFAULT TRUE
);

CREATE TABLE clientes (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome_cliente VARCHAR(255) NOT NULL,
    telefone VARCHAR(255) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    sexo ENUM('M', 'F') NOT NULL DEFAULT ('F'),
    data_cadastro DATE NOT NULL
);