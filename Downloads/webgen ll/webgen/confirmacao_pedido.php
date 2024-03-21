<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Confirmação de Pedido</title>
</head>
<body>
    <?php
    $status = isset($_GET['status']) ? $_GET['status'] : 'unknown';
    $mensagem = isset($_GET['mensagem']) ? $_GET['mensagem'] : 'Mensagem não encontrada.';

    if ($status === 'success') {
        echo "<h1>Sucesso!</h1>";
        echo "<p>$mensagem</p>";
        echo "<p>Os dados foram enviados para o banco de dados corretamente.</p>";
    } elseif ($status === 'error') {
        echo "<h1>Erro!</h1>";
        echo "<p>$mensagem</p>";
    } else {
        echo "<h1>Status desconhecido!</h1>";
    }
    ?>

    <button onclick="location.href='index.html'">Voltar</button>
</body>
</html>
