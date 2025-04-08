<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
</head>
<body>
    <header>
    <div id="logo"><a href="index.php">Lietz Desenvolvimento</a></div>
    </header>
    <?php
require_once "conection.php";

 $bloqueado = false;
$mensagem_status = "";


$limite_ip = 4;


$ip_usuario = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';

// Se o usuário não está bloqueado e enviou uma mensagem
if (!$bloqueado && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = htmlspecialchars(trim($_POST['usuario'] ?? ""));
    $mensagem = htmlspecialchars(trim($_POST['mensagem'] ?? ""));

    if (!empty($usuario) && !empty($mensagem)) {
        $sql = "INSERT INTO mensagens (usuario, mensagem, ip, data_envio) 
                VALUES (:usuario, :mensagem, :ip, NOW())";
        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute([
                ':usuario' => $usuario,
                ':mensagem' => $mensagem,
                ':ip' => $ip_usuario
            ]);

            // Redireciona após o envio bem-sucedido
            header("Location: " . $_SERVER['PHP_SELF'] . "?status=sucesso");
            exit;
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                header("Location: " . $_SERVER['PHP_SELF'] . "?status=duplicado");
                exit;
            } else {
                header("Location: " . $_SERVER['PHP_SELF'] . "?status=erro");
                exit;
            }
        }
    } else {
        header("Location: " . $_SERVER['PHP_SELF'] . "?status=vazio");
        exit;
    }
}

?>

<main>

<h2>Mensagem aleatória:</h2>

    <div id="mensagem-box">
        <p id="mensagem">Carregando mensagem...</p>
        <p id="usuario"></p>
    </div>
    <button onclick="carregarMensagem()">Próxima mensagem</button>
<?php if (!$bloqueado): ?>
        <h2>Deixe sua mensagem aleatória:</h2>
        <p>Compartilhe algo inteligente ou transcreva um meme.</p>
        <form method="POST">
            <input type="text" name="usuario" class="field" placeholder="Nome de Usuário">
            <textarea class="field" id="mensagemInput" name="mensagem" placeholder="Digite aqui..." maxlength="600"></textarea>
            <input id="submit" type="submit" value="ENVIAR">
        </form>
    <?php endif; 
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'sucesso':
            echo "<p style='color: green;'>Mensagem enviada com sucesso!</p>";
            break;
        case 'duplicado':
            echo "<p style='color: orange;'>Essa mensagem já foi enviada.</p>";
            break;
        case 'erro':
            echo "<p style='color: red;'>Erro ao enviar a mensagem.</p>";
            break;
        case 'vazio':
            echo "<p style='color: red;'>Preencha todos os campos!</p>";
            break;
    }
}
?>

</main>
<footer>
<div id="gmail"><p><a href="mailto:contato@lietz.dev.br">contato@lietz.dev.br</a></p>

</div>
<div id="copy">&copy; 2021-2025 Lietz Desenvolvimento </div>
<p>Desde 16/10/2021.</p>
</footer>
<script src="script.js"></script>
</body>
</html>