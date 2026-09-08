<?php 
echo("temos uma taxa fixa de 50 reais por cada km rodados");
$km = (float) readline("qual a distancia que voce percorreu em km?");

$valor = $km * 50;
echo("o valor a ser pago é de: R$ ". $valor);

?>