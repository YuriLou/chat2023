<?php

$dbname = 'bd_0830';
$user = 'root';
$password = '';

$conexao = new PDO('mysql:host=localhost; dbname='.$dbname,$user,$password);

$stmt = $conexao->query("select * from mensagens order by id desc");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$dados = array_reverse($dados);
echo json_encode($data);