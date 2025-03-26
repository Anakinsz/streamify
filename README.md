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

## Como Começar

### 1. Clonando o Repositório

Primeiro, faça o clone deste repositório para seu ambiente local:

```bash
git clone https://github.com/seu-usuario/streamify.git
