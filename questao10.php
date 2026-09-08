<?php
echo("oque voce deseja fazer?\n\n");
echo("fazer login - digite 1\n");
echo("fazer cadastro - digite 2\n\n");

$opcao = (int) readline("digite a opcao desejada: ");

switch ($opcao) {
    case 1:
        $user = (string) readline("digite seu usuario:");
        $senha = (string) readline("digite sua senha:");

        echo("para confirmar seu login, digite novamente seu usuario e senha\n");

        if ($user == (string) readline("digite seu usuario novamente: ") && $senha == (string) readline ("digite novamente sua senha: ")) {
            echo("login realizdo com sucesso!");
        } else {
            echo("usuario ou senha incorretos, tente novamente!");
        }
        break;
    case 2:
        $user = (string) readline("digite seu usuario:");
        $senha = (string) readline("digite sua senha:");

        echo("cadastro realizado com sucesso!");
        break;
    default:
        echo("opcao invalida meu camarada");
        break;
}








?>