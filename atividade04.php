<?php
/*Atividade 04 – Avaliações 
Clientes dão notas de 1 a 5. Não se sabe quantas vezes e precisa informar ao 
menos 1. 
● Nota: rand(1,5). 
● Continue conforme rand(0,1). 
● Conte as avaliações. 
● Some as notas. 
● Calcule a média.*/

$continuar = 0;
$avaliacao = 0;
$nota = 0;
$total = 0;
$media = 0;


do {
    $avaliacao++;

    $nota = rand(1, 5);
    $total += $nota;
    $media = $total / $avaliacao;

    echo ("Avaliação: $avaliacao <br>");
    echo ("Nota individual: $nota <br>");
   


    //flag de saída : 0(F) ou 1(V)
    $continuar = rand(0, 1);

    echo ("<hr>");
} while ($continuar == 1);

echo ("Quantidade de avaliações: $avaliacao <br>");
echo ("Total de notas: $total <br>");
echo ("<strong>Média de avaliações: " .  number_format($media, 2) . "</strong>" . "<br>");




?>