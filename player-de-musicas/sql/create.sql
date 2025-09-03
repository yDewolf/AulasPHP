-- DROP DATABASE music_player;
CREATE DATABASE music_player;
USE music_player;

CREATE TABLE songs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    artista VARCHAR(255) NOT NULL,
    album VARCHAR(255),
    duracao INT,
    caminho_arquivo VARCHAR(255) NOT NULL,
    data_adicao DATETIME DEFAULT CURRENT_TIMESTAMP
);

