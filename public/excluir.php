<?php

include '../infra/conexao.php';

$id = $_POST['id'];

$sql = 'DELETE FROM brinquedos WHERE id = ?';
$stmt = $conexao->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();

header('Location: ../index.php');
