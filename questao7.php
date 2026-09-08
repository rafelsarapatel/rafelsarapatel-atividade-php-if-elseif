<?php
echo("bem vindo a nossa loja de roupas e calçados!!!");
echo("\n\ntemos desconto em % para todas as peças de roupas e calçados, dependendo do valor final da sua compra\n");

$valor = (float) readline ("qual o valor da sua compra?");

$valor = $valor - ($valor * 0.10);

echo("o valor final da sua compra, ja com nosso desconto é de R$ $valor");







?>