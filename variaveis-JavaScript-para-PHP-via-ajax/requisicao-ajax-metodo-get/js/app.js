function enviarString() {
    // define as variáveis nome e sobrenome
    let nome = prompt('Digite seu nome')
    let sobrenome = prompt('Digite seu sobrenome')

    // Requisição AJAX
    // criando objeto XMLHttpRequest
    const xhttp = new XMLHttpRequest()

    // chama função 
    xhttp.onload = function() {
        document.querySelector('#demo').innerHTML = this.responseText
    }

    // faz a requisicao AJAX - metodo GET
    xhttp.open("GET", "resultadoString.php?nome=" + nome + "&sobrenome=" + sobrenome)
    xhttp.send()
}