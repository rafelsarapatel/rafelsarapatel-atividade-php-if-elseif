<?php
$nome = readline("ola, seja bem vindo a nossa central de atendimento, qual o seu nome? ");


echo("\nola $nome, qual o procedimento que voce deseja realizar?\n");
echo("1 - renovar cadastro\n");
echo("2 - solicitar ajuda com o sistema \n");
echo("3 - fechar atendimento \n\n");

$opcao = (int) readline("digite o numero da opcao desejada: ");

switch ($opcao) {
    case 1:
        echo(" renovando seu cadastro... \n");
        break;
        case 2:
            echo("solicitando ajuda com  o sistema... \n");
            break;
            case 3:
                echo("fechando atendimento... \n");
                break;
                default:
                echo("opcao ivalida. ");



}
?>