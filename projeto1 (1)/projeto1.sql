-- projeto1.sql
-- Criação do banco de dados e tabelas para o Projeto 1 (Clientes + Produtos)

CREATE DATABASE IF NOT EXISTS projeto1 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE projeto1;

-- Tabela clientes (exemplo básico)
CREATE TABLE IF NOT EXISTS clientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(150) NOT NULL,
  email VARCHAR(150) DEFAULT NULL,
  telefone VARCHAR(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela produtos (tema do novo CRUD)
CREATE TABLE IF NOT EXISTS produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  preco DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  categoria VARCHAR(50) DEFAULT NULL,
  descricao TEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dados de exemplo (opcional)
INSERT INTO clientes (nome, email, telefone) VALUES
('João Silva','joao@example.com','(11) 99999-0000'),
('Maria Souza','maria@example.com','(21) 98888-1111');

INSERT INTO produtos (nome, preco, categoria, descricao) VALUES
('Caneta Azul', 3.50, 'Material Escolar', 'Caneta esferográfica azul'),
('Caderno 100fl', 12.90, 'Material Escolar', 'Caderno brochura 100 folhas');