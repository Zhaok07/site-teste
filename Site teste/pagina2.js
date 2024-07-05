function goback() {
    window.history.back();
}

document.addEventListener('DOMContentLoaded', function() {
    // Recupera os valores da sessionStorage e define nos inputs hidden
    document.getElementById('inputUm').value = sessionStorage.getItem('um');
    document.getElementById('inputDois').value = sessionStorage.getItem('dois');
    document.getElementById('inputTres').value = sessionStorage.getItem('tres');
    document.getElementById('inputQuatro').value = sessionStorage.getItem('quatro');
    document.getElementById('inputCinco').value = sessionStorage.getItem('cinco');
});