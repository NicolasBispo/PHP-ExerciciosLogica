<?php

/*
Escreva uma função que receba uma lista de números e retorne uma nova lista apenas com os números pares.
*/


function somaPar($listaNumeros)
{
    function verificaPar($numero)
    {
        $resultado = "";
        if (($numero % 2) == 1) {
            return ($resultado = 1);
        } else {
            return ($resultado = 0);
        }
    }
    $resultadoSoma = 0;
    for ($contador = 0; $contador < count($listaNumeros); $contador++) {
        $verificadorPar = verificaPar($listaNumeros[$contador]);
        if($verificadorPar == 0){
            $resultadoSoma = $resultadoSoma + $listaNumeros[$contador];
        }
    }
    return $resultadoSoma;
}

//Vetor que armazenará os numeros
$vetorNumeros = [];

//Gerando quantidade aleatorias de elemento no vetor
$quantidadeElementos = random_int(1,20);

//Adicionando elementos aleatorios no vetor
for($contador  = 0; $contador < $quantidadeElementos; $contador++){
    array_push($vetorNumeros, random_int(1,40));
}
echo("Elementos do vetor: <br>");
for($contador = 0; $contador < count($vetorNumeros); $contador++){
    echo($contador+1 ."º Elemento: " . " " . $vetorNumeros[$contador] . " <br> ");
}

$resultadoSomaDosPares = somaPar($vetorNumeros);
echo("Resultado da soma dos elementos pares: " . $resultadoSomaDosPares . "<br>");

