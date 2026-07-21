<?php

// Contador /iterador
$i = 0; // inicialização
$nota = 0;
$contAprovados = 0;
$contReprovados = 0;


while ($i<=2){
    echo("I: " . $i . "<br>");

$nota = rand(0,10);

if ($nota > 6){
    echo ("$nota - Aprovado" . "<br>");
    $contAprovados++;

} else {
    echo ("$nota - Reprovado" . "<br>");
    $contReprovados++;
}

    $i++;
}

echo("Fim do laço de repetição." . "<br>");
echo("Quantidade de aprovados: " . $contAprovados . "<br>");
echo("Quantidade de reprovados: " . $contReprovados . "<br>");

?>