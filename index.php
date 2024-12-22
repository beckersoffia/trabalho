<?php
include('config.php');
$sql = "SELECT * FROM cidades";
$stmt = $pdo->query($sql);
$cidades = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Melhoria Urbana</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Selecione uma Cidade</h1>
    <ul>
        <?php foreach ($cidades as $cidade): ?>
            <li><a href="melhorias.php?cidade_id=<?= $cidade['id'] ?>"><?= $cidade['nome'] ?> - <?= $cidade['estado'] ?></a></li>
        <?php endforeach; ?>
    </ul>
    <a href="cadastrar_cidade.php">Cadastrar Nova Cidade</a>
    
    <ul>
    <li><a href="relatorios/relatorio_categoria.php">Relatório de Melhorias por Categoria</a></li>
    <li><a href="relatorios/relatorio_data.php">Relatório de Melhorias por Data</a></li>
    <li><a href="relatorios/relatorio_voto.php">Relatório de Melhorias por Voto</a></li>
</ul>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
