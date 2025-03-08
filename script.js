function gerarnumero() {
    fetch('http://localhost:8000/bingo.php') // Fetch API é usada para fazer requisições HTTP
        .then(response => response.json())
        .then(data => {

            document.getElementById('numero').innerHTML = data.numero;
            document.getElementById('letra').innerHTML = data.letra;
        })
        .catch(error => console.error("Erro ao obter número" , error));
}
