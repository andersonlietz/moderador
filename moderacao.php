<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moderação</title>
</head>
<body>
    <header>
    <a href="index.php"><img src="imagens/titulo.png" class="imagem"/></a>
    </header>
    <main>
        <h1>Moderação</h1>
    <?php
    require_once "conection.php";
// Busca todas as mensagens pendentes
$sql = "SELECT * FROM mensagens WHERE status = 'pendente'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$mensagens = $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtém todas as mensagens pendentes
?>

<?php foreach ($mensagens as $m): ?>
    <b><?= htmlspecialchars($m['usuario']) ?></b>
    <br>
    <p><?= htmlspecialchars($m['mensagem']) ?></p>
    <br>
    <a href="aprovar.php?id=<?= $m['id'] ?>">Aprovar Mensagem</a>
    <br> <br><br><br>
    <a href="excluir.php?id=<?= $m['id'] ?>">Excluir Mensagem</a>
    <hr>
<?php endforeach; ?>
<a href="index.php">Página Inicial</a>
</main>
</body>
</html>
