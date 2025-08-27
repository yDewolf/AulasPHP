DROP DATABASE MachadoLanches;

CREATE DATABASE MachadoLanches;
USE MachadoLanches;

CREATE TABLE funcionarios (
    id_funcionario INT PRIMARY KEY AUTO_INCREMENT,
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

CREATE TABLE produtos (
    id_produto INT PRIMARY KEY AUTO_INCREMENT,
    preco_unit DECIMAL(4,2) NOT NULL,
    nome VARCHAR(127) NOT NULL,
    descricao VARCHAR(255) NOT NULL
);

CREATE TABLE mesas (
    id_mesa INT PRIMARY KEY AUTO_INCREMENT,
    quantidade_pessoas INT NOT NULL,
    horario_entrada DATETIME DEFAULT NOW(),
    horario_saida DATETIME,
    vazia BOOLEAN NOT NULL DEFAULT TRUE
);

CREATE TABLE pedidos (
    id_pedido INT PRIMARY KEY AUTO_INCREMENT,
    id_mesa INT NOT NULL,
    id_produto INT NOT NULL,
    FOREIGN KEY (id_mesa) REFERENCES mesas(id_mesa),
    FOREIGN KEY (id_pedido) REFERENCES produtos(id_produto)
);

-- Selecionar produtos de uma mesa específica
-- SELECT 
--     produtos.id_produto,
--     produtos.nome,
--     produtos.preco_unit
-- FROM pedidos
--     JOIN mesas ON pedidos.id_mesa = mesas.id_mesa,
--     JOIN produtos ON pedidos.id_produto = produtos.id_produto
-- WHERE pedidos.id_mesa = {mesa};