<?php

/*
Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10.
Depois informe qual ou quais número(s) não se repetiram.

Exemplo

Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
Os números que não se repetem são o 4 e 7.
 */

function NaoSeRepete()
{
    $sorteados = [];
    for ($n = 0; $n < 20; $n++) {
        array_push($sorteados, rand(1, 10));
    }
    $naoSeRepete = [];
    for ($n = 0; $n < count($sorteados); $n++) {
        $numRepetidos = count(array_keys($sorteados, $sorteados[$n]));
        if ($numRepetidos == 1) {
            array_push($naoSeRepete, $sorteados[$n]);
        }
    }
    
    echo "--------- Numeros sorteados -----------\n";
    print_r($sorteados);
    echo "--------- Numeros que não se repetiram no array -----------\n";
    print_r($naoSeRepete);
}

NaoSeRepete();
