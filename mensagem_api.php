<?php
require_once "conection.php";

// Consulta aleatória de uma mensagem aprovada
$sql = "SELECT usuario, mensagem FROM mensagens WHERE status = 'aprovada' ORDER BY RAND() LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$mensagem = $stmt->fetch(PDO::FETCH_ASSOC);

// Retorna a resposta como JSON
header('Content-Type: application/json');
echo json_encode($mensagem);
