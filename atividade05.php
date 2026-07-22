<?php
/*Atividade 05 – Abastecimento 
Um carro recebe combustível. Pelo menos uma vez é realizado o abastecimento  
● Litros: rand(5,15). 
● Continue conforme rand(0,1). 
● Conte os abastecimentos. 
● Some os litros abastecidos.*/

$litros = 0;
$abastecidos = 0;
$continuar = 0 ;
$qtdAbastecimento = 0;

do {
    $abastecidos++;

    $litros = rand(5, 15);
    $qtdAbastecimento += $litros;
    
    echo ("Veículos abastecidos: $abastecidos <br>");
    echo ("Litros por veículos: " .  number_format($litros, 2) . "<br>");




    //flag de saída : 0(F) ou 1(V)
    $continuar = rand(0, 1);

    echo ("<hr>");
} while ($continuar == 1);

echo ("Quantidade final de veículos: $abastecidos <br>");
echo ("<strong>Quantidade final de litros abastecidos: " .  number_format($qtdAbastecimento, 2) . "</strong>" . "<br>");

?>