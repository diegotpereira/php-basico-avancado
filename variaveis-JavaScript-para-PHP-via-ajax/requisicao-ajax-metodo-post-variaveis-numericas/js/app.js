function enviarNumeros() {
    // define as variáveis 
    var varInt = window.innerWidth
    var varFloat = (1 / 4).toFixed(2)

    // Requisião Ajax
    // cria objeto XMLHttpRequest
    const xhttp = new XMLHttpRequest()

    // chama a função quando requisição é recebida
    xhttp.onload = function() {
        document.querySelector('#demo').innerHTML = this.responseText
    }

    // requisição AJAX metodo do POST
    xhttp.open('POST', 'resultadoNumeros.php')

    // adiciona header para requisição Http
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

    // especifica os dados que deseja enviar
    xhttp.send('largura=' + varInt + '&divisor=' + varFloat)
}