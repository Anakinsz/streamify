# Streamify - Plataforma de Streaming de Música

**Streamify** é uma plataforma de **streaming de música** onde os usuários podem **criar uma conta, fazer login, registrar playlists e ouvir músicas**. Esse projeto foi construído usando **PHP**, **MySQL** e **HTML/CSS**, com foco em segurança e experiência de usuário.

## Funcionalidades

- **Cadastro de usuários**: Os usuários podem criar uma conta com nome de usuário, e-mail e senha.
- **Login de usuários**: Após o cadastro, os usuários podem fazer login para acessar suas contas.
- **Criação de playlists**: Usuários podem criar playlists personalizadas.
- **Visualização de playlists**: O usuário pode visualizar suas playlists e as músicas nelas.
- **Controle de músicas**: Reproduza, pause e navegue entre as músicas.
- **Design responsivo**: Interface amigável e adaptável a dispositivos móveis.

## Tecnologias Usadas

- **PHP**: Backend da aplicação para gerenciar a lógica de registro, login e manipulação de playlists.
- **MySQL**: Banco de dados para armazenar informações dos usuários e playlists.
- **HTML/CSS**: Frontend para a interface do usuário.
- **JavaScript**: Funcionalidades dinâmicas, como controle de reprodução de músicas.

## Estrutura do Projeto

O projeto é dividido nas seguintes seções:

- **`index.php`**: Página inicial, onde o usuário pode ver a interface principal, as playlists e músicas.
- **`login.php`**: Formulário para login de usuários registrados.
- **`register.php`**: Formulário para registro de novos usuários.
- **`playlist.php`**: Página onde o usuário pode criar e visualizar suas playlists.
- **`player.php`**: Reprodutor de músicas, com controles para tocar, pausar e navegar entre as músicas.
- **`config.php`**: Arquivo de configuração de conexão com o banco de dados.
- **`register_action.php`**: Lógica de backend para processar o registro do usuário e armazenar os dados no banco de dados.
- **`login_action.php`**: Lógica de backend para autenticar o usuário durante o login.

## 2. Configuração do Banco de Dados
Criar o Banco de Dados: Abra o phpMyAdmin ou acesse o MySQL via linha de comando e crie o banco de dados streamify.
sql
CREATE DATABASE streamify;

## Criar a Tabela de Usuários:
sql
USE streamify;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

## Criar a Tabela de Playlists:
`sql
CREATE TABLE playlists (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    playlist_name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);`

## Criar a Tabela de Músicas:
`sql
CREATE TABLE songs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    playlist_id INT NOT NULL,
    song_title VARCHAR(255) NOT NULL,
    song_url VARCHAR(255) NOT NULL,
    FOREIGN KEY (playlist_id) REFERENCES playlists(id)
);`

## 3. Configuração do Banco de Dados no PHP
**Abra o arquivo config.php e configure suas credenciais do MySQL:**

`php`

`$servername = "localhost";`

`$username = "root";   // Usuário padrão do MySQL no XAMPP`

`$password = "";       // Senha em branco, caso esteja usando o XAMPP`

`$dbname = "streamify"; // Nome do banco de dados`

##4. Executando o Sistema
Coloque todos os arquivos do projeto na pasta htdocs (se você estiver usando o XAMPP).

Acesse o sistema no seu navegador através de http://localhost/streamify.

Registre-se criando uma conta de usuário.

Faça login e comece a criar e visualizar suas playlists e músicas.

## Arquivos Principais
**index.php: Página principal onde o usuário visualiza suas playlists e pode acessar o player de música.**

login.php: Formulário de login para os usuários autenticados.

register.php: Formulário de cadastro de novos usuários.

playlist.php: Página onde os usuários podem criar e editar suas playlists.

player.php: Reprodutor de músicas com controles básicos de áudio.

register_action.php: Processa o registro de um novo usuário e salva as informações no banco de dados.

login_action.php: Verifica as credenciais de login e autentica o usuário.

## Fluxo de Uso
**Cadastro de Usuário: O usuário preenche o formulário de registro em register.php e os dados são inseridos no banco de dados com a senha criptografada.**

Login: Após o registro, o usuário faz login em login.php para acessar suas playlists e músicas.

Playlists: O usuário pode criar, visualizar e editar suas playlists em playlist.php.

Player de Música: O reprodutor de música em player.php permite ao usuário tocar suas músicas armazenadas nas playlists.
