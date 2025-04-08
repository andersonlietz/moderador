<?php
require_once "conection.php";
$id = $_GET['id'] ?? null;

if (!empty($id) && is_numeric($id)) {
    $sql = "UPDATE mensagens SET status = 'aprovada' WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([':id' => $id])) {
        header("Location: moderacao.php");
        exit;
    } else {
        echo "Erro ao aprovar a mensagem!";
    }
} else {
    echo "ID inválido!";
}
?>