<?php
/*Atividade 02 – Partidas
Um jogador joga videogame. E ele joga pelo menos uma vez.
● Gere a pontuação com rand(0,100).
● Gere $continuar = rand(0,1).
● Conte as partidas.
● Some a pontuação.
● Mostre a média ao final.*/

$pontuacao = 0;
$partidas = 0;
$mediaFinal = 0;
$totalPontos = 0;

do {
    $partidas++;

    $pontuacao = rand(0, 100);

    $totalPontos += $pontuacao;

    echo ("Quantidade de partidas: $partidas <br>");
    echo ("Pontuação: $pontuacao <br>");


    //flag de saída : 0(F) ou 1(V)
    $continuar = rand(0, 1);

    echo ("<hr>");
} while ($continuar == 1);

$mediaFinal = $totalPontos / $partidas;

echo ("<strong>Quantidade de partidas: " . $partidas . "</strong>" . "<br>");
echo ("<strong>Pontuação final: " . $totalPontos . "</strong>" . "<br>");
echo ("<strong>Média final: " . number_format($mediaFinal, 2) . "</strong>" . "<br>");
