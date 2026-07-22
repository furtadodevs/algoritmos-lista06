<?php
/*Atividade 01 – Compras
Um cliente faz compras. Não se sabe quantas e ele compra pelo menos um produto.
● Gere o valor do produto com rand(10,50).
● Gere $continuar = rand(0,1).
● Conte quantos produtos foram comprados.
● Some o valor total da compra.
● Mostre:
○ valor de cada produto;
○ quantidade de produtos;
○ total da compra.*/

$continuar = 0;
$produto = 0;
$valorProduto = 0;
$total = 0;
$qtdProdutosComprados = 0;


do {
    $qtdProdutosComprados++;

    $produto = rand(0, 3);
    $valorProduto = rand(10, 50);
    $total = $produto * $valorProduto;

    echo ("Quantidade produto: $produto <br>");
    echo ("Valor do produto: " . number_format($valorProduto, 2, ",", ".") . "<br>");


    //flag de saída : 0(F) ou 1(V)
    $continuar = rand(0, 1);

    echo ("<hr>");
} while ($continuar == 1);


echo ("<strong>Valor total R$: " .  number_format($total, 2, ",", ".") . "</strong>" . "<br>");
