<?php

echo("temos nossa taxa de entrega padrao dependendo do valor da sua compra\n");
echo("porem se sua compra for maior que 199,99 reais, a entrega sera gratuita!!!");

$valor = (float) readline("\n\nqual o valor da sua compra? ");

if ($valor >= 200) {
    echo("o valor da sua compra é de R$ $valor e sua entrea sera gratuita!");}
     elseif ($valor >= 101 && $valor <= 199.99){
        echo("o valor da sua compra é de R$ ". $valor + 10 . " e o valor da entrega sera de R$ 10,00");}
         else{
            echo("o valor da sua compra é de R$ ". $valor + 20 . " e o valor da entrega sera de R$ 20,00");}

            
         ?>

                      