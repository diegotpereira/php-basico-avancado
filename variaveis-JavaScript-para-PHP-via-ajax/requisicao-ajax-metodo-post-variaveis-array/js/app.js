function enviarArray() {
    let produtos = ['mouse', 'teclado', 'monitor', 'desktop', 'notebook']

    // Requisiçao AJAX
    // cria objeto XMLHttpRequest
    const xhttp = new XMLHttpRequest()

    // chama função quando requisição é recebida
    xhttp.onload = function() {
        document.querySelector('#demo').innerHTML = this.responseText
    }

    // faz requisiçao AJAX metodo POST 
    xhttp.open('POST', 'resultadoArray.php')

    // adiciona header para requisição HTTP
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

    // especifica os dados que deseja enviar
    xhttp.send('array=' + produtos)
}