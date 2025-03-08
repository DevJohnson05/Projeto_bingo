<?php 
    // Enable CORS
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');
   
    // Start session
    
    session_start();
    // Array com letras e números do bingo
    $letras = [
        'B' => range(1,15),
        'I' => range(16,30),
        'N' => range(31, 45),
        'G' => range(46, 60),
        'O' => range(61, 75)
    ];
    // Se não existir a sessão bingo, cria um array vazio
    if(!isset($_SESSION['bingo'])){
        $_SESSION['bingo'] = [];
    }
    // Se o array bingo tiver 75 elementos, limpa o array
    if (count($_SESSION['bingo']) >= 75) {
        $_SESSION['bingo'] = [];
    }
    // Gera uma letra e um número aleatório
    do {
        $letra = array_rand($letras);
        $numero = $letras[$letra][array_rand($letras[$letra])];
    } while (in_array($letra.$numero, $_SESSION['bingo']));
    // Adiciona a letra e o número ao array bingo
    $_SESSION['bingo'][] = $letra.$numero;
    // Retorna a letra e o número em formato JSON
    header('Content-Type: application/json');
    echo json_encode([
        'letra' => $letra,
        'numero' => $numero
    ]);
?>