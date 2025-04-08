<?php
require_once "conection.php";
$id = $_GET['id'] ?? null;

if (!empty($id) && is_numeric($id)) {
    $sql = "DELETE FROM mensagens WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([':id' => $id])) {
        header("Location: moderacao.php");
        exit;
    } else {
        echo "Erro ao excluir a mensagem!";
    }
} else {
    echo "ID inválido!";
}
?>