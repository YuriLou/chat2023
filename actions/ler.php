<?php

$dbname = 'bd_0830';
$user = 'root';
$password = '';

$conexao = new PDO('mysql:host=localhost; dbname='.$dbname,$user,$password);

$id = filter_input(INPUT_POST,'id');


# Pegar somente as últimas 20


$stmt = $conexao->query("select * from mensagens where id>$id order by id desc limit 20");
$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
$dados = array_reverse($dados);
echo json_encode($dados);