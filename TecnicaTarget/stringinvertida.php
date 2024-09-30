<?php

// solicitação para o usuario informar uma string
$texto = readline("Digite uma string: ");

// incializa uma vairavel para armazenar o texto invertido
$textoInvertido = '';

// Obtém o comprimento da string
$tamanho = strlen($texto);

// percorrer a string original de tras para frente

for ($i = $tamanho - 1; $i >= 0; $i--) {
    $textoInvertido .= $texto[$i];
}

//exibe a string invertida

echo "string invertida:" .$textoInvertido. "\n";

?>