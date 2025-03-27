<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streamify - Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="logo">
            <h1>Streamify</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Registrar</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <section class="intro">
            <h2>Bem-vindo ao Streamify</h2>
            <p>Aqui você pode explorar suas playlists e músicas favoritas. Acesse sua conta ou crie uma nova para começar!</p>
        </section>
    <div class="playlist-container">
        <div class="playlist-card" onclick="openPlayer('musica1.mp3', 'playlist1.jpg')">
            <img src="fotos/album1.png" alt="Playlist 1">
            <h3>Playlist 1</h3>
            <p>Descrição da Playlist</p>
        </div>
        <div class="playlist-card" onclick="openPlayer('musica2.mp3', 'playlist2.jpg')">
            <img src="fotos/album2.jpg" alt="Playlist 2">
            <h3>Playlist 2</h3>
            <p>Descrição da Playlist</p>
        </div>
        <div class="playlist-card" onclick="openPlayer('musica3.mp3', 'playlist3.jpg')">
            <img src="fotos/album3.jpg" alt="Playlist 3">
            <h3>Playlist 3</h3>
            <p>Descrição da Playlist</p>
        </div>
    </div>
    </div>

    <!-- Modal do Player de Música -->
    <div id="music-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closePlayer()">&times;</span>
            <img id="album-img" src="" alt="Album Image" class="album-img">
            <h2 id="song-title">Título da Música</h2>
            <audio id="audio-player" controls>
                <source id="audio-source" src="" type="audio/mp3">
                Seu navegador não suporta o elemento <code>audio</code>.
            </audio>
        </div>
    </div>

    <script src="script.js"></script>
    <footer>
        <p>&copy; 2025 Streamify. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
