<?php 

/* 
Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final)  
e retorne um array com os números primos estão compreendidos entre o valor inicial e o final, 
desprezando o número inicial e final recebidos como parâmetro. 

Exemplo para teste:

Numero Inicial = 10
Número Final = 29
Resposta: Array [11,13,17,19,23] 
*/

function Primo($inicial, $final) 
{
    // Identifica se o numero é primo
    function isPrimo($n)
    {
        $divisores = 0;
        for ($i = 2; $i < $n; $i++) {
            if(($n % $i) == 0) {
                $divisores++;
            }
        }
        return $divisores ? false : true;
    }

    $primos = [];
    for ($n = $inicial+1; $n < $final; $n++) {
        if(isPrimo($n)) {
            array_push($primos, $n);
        }
    }

    print_r($primos);
}

$inicial = 10;
$final = 29;

Primo($inicial, $final);