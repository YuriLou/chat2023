<?php
# actions/categoria_salvar.php
echo 123;
require '../includes/conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);
$data = date("Y-m-d H:i:s");


$sql = "INSERT INTO mensagens (nome, mensagem, datahora) VALUES ('$nome','$mensagem', '$data')";

$conexao->query($sql);

#redireciona
header('Location:../index.php');