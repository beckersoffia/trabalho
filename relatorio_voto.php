<?php
include('config.php'); // Para a conexão com o banco de dados

// Consulta SQL para melhorias por voto
$sql = "SELECT m.descricao, COUNT(v.id) AS num_votos
        FROM melhorias m
        LEFT JOIN votos v ON m.id = v.melhoria_id
        GROUP BY m.id
        ORDER BY num_votos DESC";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "<h2>Relatório de Melhorias por Voto</h2>";
    echo "<table border='1'>
            <tr>
                <th>Melhoria</th>
                <th>Número de Votos</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['descricao']}</td>
                <td>{$row['num_votos']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Erro ao gerar relatório.";
}
?>
