<?php
/* 
Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

Exemplos para teste 

Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas como TRUE

[1, 3, 2, 1]  false
[1, 3, 2]  true
[1, 2, 1, 2]  false
[3, 6, 5, 8, 10, 20, 15] false
[1, 1, 2, 3, 4, 4] false
[1, 4, 10, 4, 2] false
[10, 1, 2, 3, 4, 5] true
[1, 1, 1, 2, 3] false
[0, -2, 5, 6] true
[1, 2, 3, 4, 5, 3, 5, 6] false
[40, 50, 60, 10, 20, 30] false
[1, 1] true
[1, 2, 5, 3, 5] true
[1, 2, 5, 5, 5] false
[10, 1, 2, 3, 4, 5, 6, 1] false
[1, 2, 3, 4, 3, 6] true
[1, 2, 3, 4, 99, 5, 6] true
[123, -17, -5, 1, 2, 3, 12, 43, 45] true
[3, 5, 67, 98, 3] true 
*/

function SequenciaCrescente($array)
{
    if (count($array) <= 2) {
        echo "true";
        return;
    }

    $isSequence;

    for ($i = 0; $i < count($array); $i++) {

        $arrayTemp = $array;
        unset($arrayTemp[$i]);
        $arrayTemp = array_values($arrayTemp);

        for ($n = 1; $n < count($arrayTemp); $n++) {
            if($arrayTemp[$n] <= $arrayTemp[$n-1]) {
                $isSequence = false;
                break;
            } else {
                $isSequence = true;
            }
        }
        if ($isSequence) {
            break;
        }
    }

    echo $isSequence ? "true" : "false";
}

echo "---------- Testes -----------\n";
echo "Entrada: [1, 3, 2, 1]\n";
echo "saída: ";
SequenciaCrescente([1, 3, 2, 1]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [1, 3, 2]\n";
echo "saída: ";
SequenciaCrescente([1, 3, 2]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [1, 2, 1, 2]\n";
echo "saída: ";
SequenciaCrescente([1, 2, 1, 2]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [3, 6, 5, 8, 10, 20, 15]\n";
echo "saída: ";
SequenciaCrescente([3, 6, 5, 8, 10, 20, 15]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [1, 1, 2, 3, 4, 4] \n";
echo "saída: ";
SequenciaCrescente([1, 1, 2, 3, 4, 4]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [1, 4, 10, 4, 2]\n";
echo "saída: ";
SequenciaCrescente([1, 4, 10, 4, 2]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [10, 1, 2, 3, 4, 5]\n";
echo "saída: ";
SequenciaCrescente([10, 1, 2, 3, 4, 5]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [1, 1, 1, 2, 3]\n";
echo "saída: ";
SequenciaCrescente([1, 1, 1, 2, 3]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [0, -2, 5, 6]\n";
echo "saída: ";
SequenciaCrescente([0, -2, 5, 6]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [1, 2, 3, 4, 5, 3, 5, 6]\n";
echo "saída: ";
SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [40, 50, 60, 10, 20, 30]\n";
echo "saída: ";
SequenciaCrescente([40, 50, 60, 10, 20, 30]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [1, 1]\n";
echo "saída: ";
SequenciaCrescente([1, 1]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [1, 2, 5, 3, 5]\n";
echo "saída: ";
SequenciaCrescente([1, 2, 5, 3, 5]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [1, 2, 5, 5, 5]\n";
echo "saída: ";
SequenciaCrescente([1, 2, 5, 5, 5]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [10, 1, 2, 3, 4, 5, 6, 1]\n";
echo "saída: ";
SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [1, 2, 3, 4, 3, 6]\n";
echo "saída: ";
SequenciaCrescente([1, 2, 3, 4, 3, 6]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [1, 2, 3, 4, 99, 5, 6]\n";
echo "saída: ";
SequenciaCrescente([1, 2, 3, 4, 99, 5, 6]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [123, -17, -5, 1, 2, 3, 12, 43, 45]\n";
echo "saída: ";
SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]);
echo "\n\n";

echo "---------- Testes -----------\n";
echo "Entrada: [3, 5, 67, 98, 3]\n";
echo "saída: ";
SequenciaCrescente([3, 5, 67, 98, 3]);
echo "\n\n";
