<?php

session_start();

$usuario_autenticado = false;

//arrays e subarrays usadas
$usuario_cadastro = [
    [
        'email' => 'maria.garatini@senai.br',
        'senha' => 'maria1234'
    ],
    [
        'email' => 'anna.bonvicine@senai.br',
        'senha' => 'anna1234'
    ],
    [
        'email' => 'guilherme@senai.br',
        'senha' => 'gui1234'
    ],
    [
        'email' => 'augusto.ferrari@senai.br',
        'senha' => 'augusto1234'
    ],
    [
        'email' => 'felipe.soares@senai.br',
        'senha' => 'felipe1234'
    ],
    [
        'email' => 'nicolas@senai.br',
        'senha' => 'nicolas1234'
    ],
];

//verificação de booleano
foreach ($usuario_cadastro as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado == true){
    // echo "Usuario autenticado com sucesso";
    $_SESSION['autenticado'] = 'SIM';
    header ('Location: painel.php');
}
else{
    // echo "Usuário ou senha incorreto";
    $_SESSION['autenticado'] = 'NÃO';
    header ('Location: index.php?login=erro');
}

?>