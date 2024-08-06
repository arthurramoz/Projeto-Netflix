document.addEventListener('DOMContentLoaded',(event) => {
    var video = 
    document.getElementById('video-destaque');
    video.currentTime = 6;
    video.play();
});

document.getElementById('meuForm').onsubmit = function() {
    var inputValue = document.getElementById('duracao').value;
    if (!inputValue.includes(':')) {
      alert('Por favor, utilize o formato correto na Duração do Filme usando ":"');
      return false;
    }
    return true;
};