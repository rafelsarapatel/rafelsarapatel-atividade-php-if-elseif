<?php
$user = (string) readline("digite seu usuario:");
$senha = (string) readline("digite sua senha:");

echo("para confirmar seu login, digite novamente seu usuario e senha\n");

if ($user == (string) readline("digite seu usuario novamente: ") && $senha == (string) readline ("digite novamente sua senha: ")) {
    echo("login realizdo com sucesso!");
} else {
    echo("usuario ou senha incorretos, tente novamente!");
}



?>