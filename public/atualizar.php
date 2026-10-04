<?php

include '../infra/conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$faixaEtaria = $_POST['faixa_etaria'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$sql = 'UPDATE brinquedos SET nome = ?, categoria = ?, faixa_etaria = ?, preco = ?, quantidade = ? WHERE id = ?';
$stmt = $conexao->prepare($sql);
$stmt->bind_param('sssdii', $nome, $categoria, $faixaEtaria, $preco, $quantidade, $id);
$stmt->execute();

header('Location: ../index.php');
