<?php
include('config.php');

// Função para votar em uma melhoria
function votarMelhoria($melhoria_id, $usuario_nome, $voto) {
    global $pdo;
    $sql = "INSERT INTO votos (melhoria_id, usuario_nome, voto) VALUES (:melhoria_id, :usuario_nome, :voto)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'melhoria_id' => $melhoria_id,
        'usuario_nome' => $usuario_nome,
        'voto' => $voto
    ]);
    
    // Atualizar a relevância da melhoria
    atualizarRelevancia($melhoria_id);
}

// Função para atualizar a relevância
function atualizarRelevancia($melhoria_id) {
    global $pdo;
    $sql = "SELECT SUM(voto) as relevancia FROM votos WHERE melhoria_id = :melhoria_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['melhoria_id' => $melhoria_id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $relevancia = $result['relevancia'];
    
    $updateSql = "UPDATE melhorias SET relevancia = :relevancia WHERE id = :melhoria_id";
    $stmt = $pdo->prepare($updateSql);
    $stmt->execute([
        'relevancia' => $relevancia,
        'melhoria_id' => $melhoria_id
    ]);
}
?>
