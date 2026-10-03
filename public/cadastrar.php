<?php

include '../infra/conexao.php';

$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$faixaEtaria = $_POST['faixa_etaria'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$sql = 'INSERT INTO brinquedos (nome, categoria, faixa_etaria, preco, quantidade) VALUES (?, ?, ?, ?, ?)';
$stmt = $conexao->prepare($sql);
$stmt->bind_param('sssdi', $nome, $categoria, $faixaEtaria, $preco, $quantidade);
$stmt->execute();

header('Location: ../index.php');
