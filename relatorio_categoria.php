<?php
include('config.php');

// Consulta para gerar relatório de melhorias por categoria
$sql = "SELECT categoria, COUNT(id) AS num_melhorias FROM melhorias GROUP BY categoria ORDER BY num_melhorias DESC";
$result = mysqli_query($con, $sql);

// Arrays para armazenar os dados do gráfico
$categorias = [];
$num_melhorias = [];

while ($row = mysqli_fetch_assoc($result)) {
    $categorias[] = $row['categoria'];
    $num_melhorias[] = $row['num_melhorias'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Melhorias por Categoria</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Relatório de Melhorias por Categoria</h1>
    
    <canvas id="categoriaChart" width="400" height="200"></canvas>
    
    <script>
        // Obtendo os dados do PHP
        var categorias = <?php echo json_encode($categorias); ?>;
        var num_melhorias = <?php echo json_encode($num_melhorias); ?>;

        // Configuração do gráfico de barras
        var ctx = document.getElementById('categoriaChart').getContext('2d');
        var categoriaChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: categorias,
                datasets: [{
                    label: 'Número de Melhorias',
                    data: num_melhorias,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
