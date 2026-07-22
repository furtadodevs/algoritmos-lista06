<?php
/*Exercício 7 – Cofrinho 
Enquanto o total for menor que R$500. Não se sabe quantas vezes vai repetir. 
● Depósito: rand(20,100) 
● Conte os depósitos. 
● Some o dinheiro.*/

$deposito = 0;
$qtdDepositos = 0;
$valorDeposito = 0;

while ($valorDeposito <= 500) {
    $deposito = rand(20, 100);

    $valorDeposito += $deposito;

    echo ("Quantidade de depositos: $qtdDepositos <br>");
    echo ("Valor do deposito: R$: " .  number_format($deposito, 2, ",", ".") . "<br>");


    if ($valorDeposito <= 500) {
        echo ("Deposito concedido. <br>");
    } else {
        echo ("Deposito negado. <br>");
    }

    echo ("<hr>");
    $qtdDepositos++;
}

if ($valorDeposito >= 500) {
    echo ("Número máximo de tentativas de deposito atigido. <br>");
}

echo ("<strong>Valor final do deposito: R$: " .  number_format($valorDeposito - $deposito, 2, ",", ".") . "</strong>" . "<br>");
