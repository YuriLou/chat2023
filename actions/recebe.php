<?php
# actions/categoria_salvar.php

require '../includes/conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_EMAIL);



$sql = "INSERT INTO usuario (nome, email, serie, telefone) VALUES ('$nome','$email','$serie','$celular')";

$conexao->query($sql);

#redireciona
header('Location:../feito.html');