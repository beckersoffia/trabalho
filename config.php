<?php
// Conexão com o banco de dados
$host = 'localhost';
$db = 'crud';       // Nome do seu banco de dados
$user = 'root';     // Usuário do banco de dados
$password = '';     // Senha do banco de dados
$port = 3307;       // Porta do MySQL (pode ser 3306)

$con = mysqli_connect($host, $user, $password, $db, $port);

if (!$con) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>
