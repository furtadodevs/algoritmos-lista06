<?php
/* Exercício 8 – Estoque
A loja possui 20 produtos.
● Venda: rand(1,4)
● Enquanto houver estoque.
● Conte as vendas.
● Some os itens vendidos.
*/

$estoque = 20;
$qtdVendas = 0;
$vendidos = 0;

while ($estoque > 0 && $estoque <= 20) {

    $vendas = rand(1, 4);

    if ($vendas <= $estoque) {

        $estoque -= $vendas;
        $vendidos += $vendas;
        $qtdVendas++;

        echo "Número de vendas: $qtdVendas <br>";
        echo "Itens vendidos: $vendas <br>";
        echo "Estoque restante: $estoque <br>";
    } else {

        echo "Não foi possível realizar a venda de $vendas itens, pois restam apenas $estoque em estoque.<br>";
    }

    echo "<hr>";
}

echo "<strong>Total de vendas: $qtdVendas</strong><br>";
echo "<strong>Total de itens vendidos: $vendidos</strong><br>";
