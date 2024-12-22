<?php
include('melhorias.php');
$cidade_id = $_GET['cidade_id'];
$melhorias = listarMelhorias($cidade_id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Melhorias - Cidade</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Melhorias Sugeridas</h1>
    <ul>
        <?php foreach ($melhorias as $melhoria): ?>
            <li>
                <p><?= $melhoria['descricao'] ?></p>
                <form action="votar.php" method="POST">
                    <input type="hidden" name="melhoria_id" value="<?= $melhoria['id'] ?>">
                    <button type="submit">Votar</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
