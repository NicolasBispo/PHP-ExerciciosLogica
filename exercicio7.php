<?php

/*
Implemente um algoritmo de ordenação (por exemplo, Bubble Sort, Insertion Sort ou Selection Sort)
para ordenar uma lista de números.
*/
//5 9 2 8 6 4
function ordenaLista($lista){
    
    
    $numeroElementosLista = count($lista);
    
    for($contador1 = 0; $contador1 < ($numeroElementosLista - 1); $contador1++){


        //Segundo loop, percorre a lista analisando se o elemento atual da lista é maior que o proximo
        //Se for maior ele armazena o valor dele numa variavel temporaria
        //Atualiza a posicao atual da lista para o menor valor
        //E atualiza a proxima posicao para o maior valor
        //Exemplo: [5,3,2] fica => [2,3,5]
        for($contador2 = 0; $contador2 < ($numeroElementosLista - $contador1 - 1); $contador2++){
            if($lista[$contador2] > $lista[$contador2 + 1]){
                $tmp = $lista[$contador2];
                $lista[$contador2] = $lista[$contador2 + 1];
                $lista[$contador2 + 1] = $tmp;
            }
        }
    }
    return $lista;
}

$listaNaoOrdenada = [10,40,21,43,59,1,3,5,4,2,7,6,8,11,9];
print_r('Lista nao ordenada: <br>');
print_r($listaNaoOrdenada);
$listaOrdenada = ordenaLista($listaNaoOrdenada);
print_r('<br>Lista ordenada: <br>');
print_r($listaOrdenada);


?>