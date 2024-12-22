-- Criação do banco de dados
CREATE DATABASE melhoria_urbana;
USE melhoria_urbana;

-- Tabela para armazenar informações das cidades
CREATE TABLE cidades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    estado VARCHAR(50) NOT NULL
);

-- Tabela para armazenar melhorias
CREATE TABLE melhorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cidade_id INT,
    descricao TEXT NOT NULL,
    categoria VARCHAR(50),
    data_postagem TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    relevancia INT DEFAULT 0,
    FOREIGN KEY (cidade_id) REFERENCES cidades(id)
);

-- Tabela para armazenar opiniões dos cidadãos
CREATE TABLE opinioes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    melhoria_id INT,
    usuario_nome VARCHAR(100),
    comentario TEXT NOT NULL,
    data_postagem TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (melhoria_id) REFERENCES melhorias(id)
);

-- Tabela para armazenar votos nas melhorias
CREATE TABLE votos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    melhoria_id INT,
    usuario_nome VARCHAR(100),
    voto INT,
    FOREIGN KEY (melhoria_id) REFERENCES melhorias(id)
);
