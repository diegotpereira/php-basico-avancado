function enviarArray() {
    let produtos = ['mouse', 'teclado', 'monitor', 'desktop', 'notebook']

    // Requisição AJAX
    // cria objeto XMLHtttpRequest
    const xhttp = new XMLHttpRequest()

    // chama função quando requisitada
    xhttp.onload = function() {
        document.querySelector('#demo').innerHTML = this.responseText
    }

    // requisita metodo GET AJAX
    xhttp.open('GET', 'resultadoArray.php?array=' + produtos)
    xhttp.send()
}