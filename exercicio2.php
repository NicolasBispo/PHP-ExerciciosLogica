<?php
/*
Função que recebe uma lista de numeros e retorne a soma de todos os elementos
*/


function somaTudo($listaDeNumeros){
    $resultado = 0;

    for($contador = 0; $contador < count($listaDeNumeros); $contador++){
        $resultado = $resultado + $listaDeNumeros[$contador];
    }
    return $resultado;
}


//Vetor que armazenará os numeros
$vetorNumeros = [];

//Gerando quantidade aleatorias de elemento no vetor
$quantidadeElementos = random_int(1,15);

//Adicionando elementos aleatorios no vetor
for($contador  = 0; $contador < $quantidadeElementos; $contador++){
    array_push($vetorNumeros, random_int(1,40));
}
$resultadoSomaVetor = somaTudo($vetorNumeros);
echo("Elementos do vetor: <br>");
for($contador = 0; $contador < count($vetorNumeros); $contador++){
    echo($contador+1 ."º Elemento: " . " " . $vetorNumeros[$contador] . " <br> ");
}
echo("Resultado da soma:" . $resultadoSomaVetor . "<br>");
?>