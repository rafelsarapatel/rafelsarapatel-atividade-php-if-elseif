<?php

$num1 = (float) readline("digite o primeiro numero: ");

$num2 = (float) readline("\ndigite o segundo numero: ");

echo("\n qual operacao voce deseja realizar?\n ");
echo("1 - adicao\n");
echo("2 - subtracao\n");
echo("3 - multiplicacao\n");
echo("4 - divisao\n\n");

$opcao = (int) readline("digite um numer equivalente a operacao desejada: ");

switch ($opcao) {
    case 1:
        echo("oresultado da adicao de $num1 + $num2 = " . ($num1 + $num2));
        break;
    case 2:
        echo("o resultado da subtracao de $num1 - $num2 = " . ($num1 - $num2));
        break;
    case 3:
        echo("o resultado da multiplicacao de $num1 * $num2 = " . ($num1 * $num2));
        break;
    case 4:
        if ($num2 == 0) {
            echo("erro na divisao chefe, nao da pra dividir por zero, tente outro numero");
        } else {
            echo("o resultado da divisao de $num1 / $num2 = " . ($num1 / $num2));}
        break;
        default:
        echo("opcao invalida meu camarada");
        break;


}?>
