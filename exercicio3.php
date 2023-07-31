<?php
/*
Função que verifique se uma string é um palindromo
*/


function verificaPalindromo($stringAnalisar){
    $stringAnalisar = strtoupper($stringAnalisar);
    $stringReversa = "";
    $tamanhoString = strlen($stringAnalisar);

    for($contador = $tamanhoString-1; $contador >= 0;  $contador--){
        $stringReversa = $stringReversa . $stringAnalisar[$contador];
    }
    if($stringAnalisar == $stringReversa){
        print('A palavra: ' . $stringAnalisar . ' É um palindromo <br>');
    }
    else{
        print('A palavra: ' . $stringAnalisar . ' não é um palindromo <br>');
    }

    
    
    
}

verificaPalindromo('Teste');
verificaPalindromo("ovo");
verificaPalindromo('especificado');

?>