function enviarNumeros() {
    // definir as variaveis
    let varInt = window.innerWidth
    let varFloat = (1 / 4).toFixed(2)

    // Requisição AJAX
    // cria função quando a requisição é recebida
    const http = new XMLHttpRequest()

    // chama função quando requisitada
    http.onload = function() {
        document.querySelector('#demo').innerHTML = this.responseText
    }

    // requisita o metodo AJAX GET
    http.open('GET', 'resultadoNumeros.php?largura=' + varInt + '&divisor=' + varFloat)
    http.send()
}