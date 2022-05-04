<?php 

/*
Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. 
O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

Exemplos para teste:

Ano 1905 = século 20
Ano 1700 = século 17 
*/

function SeculoAno($ano)
{
    // a Função ceil Retorna o próximo maior valor inteiro arredondando para cima do value, se fracionário.
    echo ceil($ano/100);
}

// Altere o valor da variavel ano
$ano = 2022;

SeculoAno($ano);
