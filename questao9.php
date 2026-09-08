<?php
$temp = (float) readline ("em graus celsius, qual a temperatura equivalente no momento?\n");
if ($temp <= 0){
    echo("esta muito frio, se cubra bem nao acho que nao é uma boa ideia sair de casa agora");
    } elseif ($temp >=1 && $temp <= 15){
        echo("esta frio, mas da pra aguentar, esta seguro para sair de casa, se cubra bem");
        } elseif ($temp >= 16 && $temp <= 25){
            echo("esta um clima agradavel, esta seguro para sair de casa, aproveite o dia");
            } elseif ($temp >=26 && $temp <= 35){
                echo("esta um clima quente, esta seguro para sair de casa, mas beba bantante agua (uma dica)");
                } elseif ($temp >= 36){
                    echo("ta maluco nem paraense aguenta, fica de baixo do chuveiro, nao esta agradavel sair de casa no momento");
                }
    
?>