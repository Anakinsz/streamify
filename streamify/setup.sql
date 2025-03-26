CREATE DATABASE IF NOT EXISTS music_streaming;

USE music_streaming;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Usuários de exemplo
INSERT INTO users (username, password) VALUES
('admin', '$2y$10$k0i4dQ1e6aF2h9u2BzxhGe8J0YYQfbW/Jfl4sQzj8dIMjZBwpxm/O'),  -- Senha: admin123
('user1', '$2y$10$9Fzv9Nnfsxs82mr1iFcs0.S6r8FHG9i9xUfw.CedT.WXpy5wFK8dW');  -- Senha: user123
