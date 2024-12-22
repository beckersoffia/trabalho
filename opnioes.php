<?php
include('config.php');

// Função para cadastrar opinião
function cadastrarOpiniao($melhoria_id, $usuario_nome, $comentario) {
    global $pdo;
    $sql = "INSERT INTO opinioes (melhoria_id, usuario_nome, comentario) VALUES (:melhoria_id, :usuario_nome, :comentario)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'melhoria_id' => $melhoria_id,
        'usuario_nome' => $usuario_nome,
        'comentario' => $comentario
    ]);
}
?>
