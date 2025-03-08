function gerarnumero() {
    fetch('http://localhost:8000/bingo.php') // Fetch API é usada para fazer requisições HTTP
        .then(response => response.json())
        .then(data => {
            document.getElementById('numero').innerHTML = data.numero;
            document.getElementById('letra').innerHTML = data.letra;
            salvarNumero(data.numero, data.letra); // Chama a função salvarNumero após obter os dados
        })
        .catch(error => console.error("Erro ao obter número", error));
}

function salvarNumero(numero, letra) {
    let numerosSorteados = JSON.parse(localStorage.getItem('numerosSorteados')) || [];
    let numeroCompleto = letra + numero; // Combina letra e número

    if (!numerosSorteados.includes(numeroCompleto)) {
        numerosSorteados.push(numeroCompleto);
        localStorage.setItem('numerosSorteados', JSON.stringify(numerosSorteados));
        document.getElementById('numeros').innerHTML = numerosSorteados.join(', ');
    }
}