<?php
//login e senha

$loginRealizado = 0;
$tentativas = 0;

while($loginRealizado == 00 && $tentativas <= 2){
    $loginRealizado = rand (0,1);
    echo("<br Login realizado: $loginRealizado <br>");
    echo("<br> tentativas: $tentativas <br>");
    
    if($loginRealizado == 1){
        echo ("Logou!");
    } else {
        echo ("Tente novamente.");
    }

    $tentativas++;
}

if($loginRealizado == 0){
    echo ("<br> Número máximo de tentativas atigido.");
}


?>