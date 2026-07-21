<?php
// Pedidos realizados

$continuar = 0;
$qtdPedidos = 0;

do{

    $qtdPedidos++;
    echo("Pedido número: $qtdPedidos <br>");

    //flag: 0-se não deseja comprar novamente 
    //flag: 1-se deseja continuar comprando

    $continuar = rand(0, 1);

    echo("Continuar: $continuar <br>");
     
    if($continuar == true){
        echo("O cliente decidiu fazer outro pedido. <br>");

    } else {
        echo("O cliente decidiu encerrar as compras. <br>");
    }

    echo ("<hr>");

}while ($continuar == true);

//Quantas vendas foram realizadas?
echo ("<strong> Foram realizados: $qtdPedidos </strong>")

?>