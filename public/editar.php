<?php

include '../infra/conexao.php';

$id = $_GET['id'];

$sql = 'SELECT * FROM brinquedos WHERE id = ?';
$stmt = $conexao->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$resultado = $stmt->get_result();
$brinquedo = mysqli_fetch_assoc($resultado);

?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar brinquedo</title>
</head>
<body>
    <h1>Editar brinquedo</h1>

    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $brinquedo['id']; ?>">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $brinquedo['nome']; ?>" required>
        <br>
        <label>Categoria:</label>
        <input type="text" name="categoria" value="<?php echo $brinquedo['categoria']; ?>" required>
        <br>
        <label>Faixa etária:</label>
        <input type="text" name="faixa_etaria" value="<?php echo $brinquedo['faixa_etaria']; ?>" required>
        <br>
        <label>Preço:</label>
        <input type="number" name="preco" min="0" step="0.01" value="<?php echo $brinquedo['preco']; ?>" required>
        <br>
        <label>Quantidade em estoque:</label>
        <input type="number" name="quantidade" min="0" value="<?php echo $brinquedo['quantidade']; ?>" required>
        <br>
        <button type="submit">Atualizar</button>
    </form>

    <a href="../index.php">Voltar</a>
</body>
</html>
