function openPlayer(audioSrc, albumImg) {
    const modal = document.getElementById('music-modal');
    const audioPlayer = document.getElementById('audio-player');
    const audioSource = document.getElementById('audio-source');
    const albumImage = document.getElementById('album-img');
    const songTitle = document.getElementById('song-title');

   
    audioSource.src = audioSrc;
    albumImage.src = albumImg;
    songTitle.textContent = "Tocando: " + audioSrc.replace('.mp3', '').replace(/_/g, ' ');

    
    modal.style.display = 'flex';

    // Caregar a música
    audioPlayer.load();r
    audioPlayer.play();
}

// Função para fechar o modal
function closePlayer() {
    const modal = document.getElementById('music-modal');
    modal.style.display = 'none';
    const audioPlayer = document.getElementById('audio-player');
    audioPlayer.pause(); 
    audioPlayer.currentTime = 0; // 
}
