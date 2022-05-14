// function enviarString() {
//     // define as variaveis nome e sobrenome
//     let nome = prompt('Digite seu nome')
//     let sobrenome = prompt('Digite seu sobrenome')

//     // Requisição AJAX
//     // cria objeto XMLHttpRequest
//     const xhttp = new XMLHttpRequest()

//     // chama a função quando a requisição é recebida
//     xhttp.onload = function() {
//         document.querySelector('#demo').innerHTML = this.responseText
//     }

//     // faz a requisição AJAX - metodo POST
//     xhttp.open('POST', 'resultadoString.php')

//     // adiciona um header  para  a requisição HTTP
//     xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

//     // especifica os dados que deseja enviar
//     xhttp.send('nome=' + nome + '&sobrenome=' + sobrenome)
// }

function enviarString() {
    // define as variáveis nome e sobrenome
    let nome = prompt("Digite o seu nome");
    let sobrenome = prompt("Digite o seu sobrenome");

    // REQUISIÇÃO AJAX
    // cria o objeto XMLHttpRequest
    const xhttp = new XMLHttpRequest();
    // chama a função quando a requisição é recebida
    xhttp.onload = function() {
            document.getElementById("demo").innerHTML = this.responseText;
        }
        // faz a requisição AJAX - método POST
    xhttp.open("POST", "resultadoString.php");
    // adiciona um header para a requisição HTTP
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // especifica os dados que deseja enviar   
    xhttp.send("nome=" + nome + "&sobrenome=" + sobrenome);
}