<?php
# actions/categoria_salvar.php

require '../includes/conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);
$data = date("Y-m-d H:i:s");

if($nome && $mensagem){
    $conexao->query("INSERT INTO mensagens(nome, mensagem, datahora) VALUES ('$nome', '$mensgem', '$data')");
}
else{
    echo 'Dados nao enviados '.count($_POST).count($_GET);
    print_r($_POST);
}
