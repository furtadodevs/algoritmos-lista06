<?php

//Quantidade de carros montados
//Que execute pelo menos uma vez (do.. while)
//Contar quantos carros são vermelhos
//Somar o valor total dos carros vermelhos

//Entradas - Variáveis
$qtdCarrosMontados = 0;
$qtdCarrosVermelhos = 0;
$somaCarroVerm = 0;
$valorCarroMontado = 0;
$continuar = 0;

do {
    $qtdCarrosMontados++;

    //flag: 0-azul, 1-vermelho, 2-preto, 3-prata
    $corCarroMontado = rand(0, 3);
    $valorCarroMontado = rand(70000, 10000);

    echo ("Cor do carro: $corCarroMontado <br>");
    echo ("Valor do carro: " . number_format($valorCarroMontado, 2, ",", ".") . "<br>");

    if ($corCarroMontado == 1) {
        $qtdCarrosVermelhos++;
        $somaCarroVerm = $somaCarroVerm + $valorCarroMontado;
    }

    //flag de saída : 0(F) ou 1(V)
    $continuar = rand(0, 1);

    echo ("Deseja continuar: $continuar <br>");
    echo ("<hr>");
} while ($continuar == 1);


echo ("<strong>Quantidade de carros vermelhos: $qtdCarrosVermelhos</strong> <br>");
echo ("<strong>Valor total de carros vermelhos R$: " .  number_format($somaCarroVerm, 2, ",", ".") . "</strong>" . "<br>");
