<?php
include('config.php');

// Função para adicionar cidade
function cadastrarCidade($nome, $estado) {
    global $pdo;
    $sql = "INSERT INTO cidades (nome, estado) VALUES (:nome, :estado)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nome' => $nome, 'estado' => $estado]);
}
?>
