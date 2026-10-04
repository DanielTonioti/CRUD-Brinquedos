<?php

include 'infra/conexao.php';

$stmt = $conexao->prepare('SELECT * FROM brinquedos');
$stmt->execute();
$brinquedos = $stmt->get_result();

?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Brinquedos</title>
</head>
<body>
    <h1>Gestão de Brinquedos</h1>

    <h2>Cadastrar brinquedo</h2>
    <form action="public/cadastrar.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label>Categoria:</label>
        <input type="text" name="categoria" required>
        <br>
        <label>Faixa etária:</label>
        <input type="text" name="faixa_etaria" required>
        <br>
        <label>Preço:</label>
        <input type="number" name="preco" min="0" step="0.01" required>
        <br>
        <label>Quantidade em estoque:</label>
        <input type="number" name="quantidade" min="0" required>
        <br>
        <button type="submit">Cadastrar</button>
    </form>

    <h2>Brinquedos cadastrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Faixa etária</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
        <?php while ($brinquedo = mysqli_fetch_assoc($brinquedos)) { ?>
            <tr>
                <td><?php echo $brinquedo['id']; ?></td>
                <td><?php echo $brinquedo['nome']; ?></td>
                <td><?php echo $brinquedo['categoria']; ?></td>
                <td><?php echo $brinquedo['faixa_etaria']; ?></td>
                <td><?php echo $brinquedo['preco']; ?></td>
                <td><?php echo $brinquedo['quantidade']; ?></td>
                <td>
                    <a href="public/editar.php?id=<?php echo $brinquedo['id']; ?>">Editar</a>
                    <form action="public/excluir.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $brinquedo['id']; ?>">
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
