<?php
/*Parte 2 – while (Enquanto) 
Exercício 6 – Login 
Enquanto o login não acontecer. Não se sabe quantas vezes vai repetir. 
● rand(0,1) 
● Conte as tentativas. 
● Máximo de 5 tentativas.*/

$loginRealizado = 0;
$tentativas = 0;

while ($loginRealizado == 00 && $tentativas <= 5) {
    $loginRealizado = rand(0, 1);

    echo ("Login realizado: $loginRealizado <br>");
    echo ("Tentativas: $tentativas <br>");

    if ($loginRealizado == 1) {
        echo ("Logou! <br>");
    } else {
        echo ("Login não realizado. <br>");
    }
    echo ("<hr>");
    $tentativas++;
}

if ($loginRealizado == 0) {
    echo ("<br> Número máximo de tentativas atigido. <br>");
}

echo ("<strong>Quantidade de tentativas final:</strong> $tentativas <br>");
