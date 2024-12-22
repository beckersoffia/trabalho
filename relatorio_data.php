<?php
include('config.php'); // Para a conexão com o banco de dados

// Consulta SQL para melhorias por data
$sql = "SELECT YEAR(data_registro) AS ano, MONTH(data_registro) AS mes, COUNT(id) AS num_melhorias
        FROM melhorias
        GROUP BY ano, mes
        ORDER BY ano DESC, mes DESC";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "<h2>Relatório de Melhorias por Mês</h2>";
    echo "<table border='1'>
            <tr>
                <th>Ano</th>
                <th>Mês</th>
                <th>Número de Melhorias</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['ano']}</td>
                <td>{$row['mes']}</td>
                <td>{$row['num_melhorias']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Erro ao gerar relatório.";
}
?>
