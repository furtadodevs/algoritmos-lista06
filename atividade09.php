<?php
/* Exercício 9 – Água
Encha um reservatório até 50 litros. Não se sabe quantas vezes vai repetir.
● Litros adicionados: rand(5,10)
● Conte os abastecimentos.
● Some os litros.
*/

$reservatorio = 0;
$litros = 0;
$qtdAbastecimento = 0;

while ($reservatorio < 50) {

    $litros = rand(5, 10);
    $reservatorio += $litros;
    $qtdAbastecimento++;

    echo "Abastecimento: $qtdAbastecimento <br>";
    echo "Litros adicionados: " . number_format($litros, 2) . "<br>";
    echo "Total no reservatório: " . number_format($reservatorio, 2) . "<br>";

    if ($reservatorio < 50) {
        echo "Reservatório abastecido.<br>";
    } else {
        echo "Limite do reservatório atingido<br>";
    }

    echo "<hr>";
}

echo "<strong>Total de abastecimentos: " . ($qtdAbastecimento) . "</strong>" . "<br>";
echo "<strong>Total de litros no reservatório: " . number_format($reservatorio - $litros, 2) . " litros</strong>";
