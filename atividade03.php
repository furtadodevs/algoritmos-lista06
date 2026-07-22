<?php
/*Atividade 03 – Depósitos 
Uma pessoa faz depósitos. E, ele faz pelo menos 1 depósito. 
● Valor: rand(50,200). 
● Continue enquanto rand(0,1) retornar 1. 
● Conte os depósitos. 
● Some o dinheiro depositado. 
● Exiba o total.*/

$continuar = 0;
$deposito = 0;
$valorDeposito = 0;
$total = 0;


do {
    $deposito++;

    $valorDeposito = rand(50, 200);
    $total += $valorDeposito;

    echo ("Depositos: $deposito <br>");
    echo ("Valor do deposito " . number_format($valorDeposito, 2, ",", ".") . "<br>");


    //flag de saída : 0(F) ou 1(V)
    $continuar = rand(0, 1);

    echo ("<hr>");
} while ($continuar == 1);


echo ("<strong>Valor total R$: " .  number_format($total, 2, ",", ".") . "</strong>" . "<br>");




?>