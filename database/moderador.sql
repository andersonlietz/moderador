-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS moderador;
USE moderador;

-- Criação da tabela 'mensagens'
CREATE TABLE IF NOT EXISTS mensagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(100) NOT NULL,
    mensagem TEXT NOT NULL,
    status ENUM('pendente', 'aprovada', 'reprovada') DEFAULT 'pendente',
    ip VARCHAR(45) NOT NULL,
    data_envio DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Dados de exemplo (opcional, pode remover se preferir)
INSERT INTO mensagens (usuario, mensagem, status, ip)
VALUES 
('João', 'Primeira mensagem de teste.', 'aprovada', '192.168.0.1'),
('Maria', 'Essa precisa de moderação.', 'pendente', '192.168.0.2');
