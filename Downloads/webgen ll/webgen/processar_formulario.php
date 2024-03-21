<?php
require_once "config.php";

$mensagem = '';
$status = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idproduto = $_POST["idproduto"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];

    $sql = "INSERT INTO usuario (idproduto, nome, email, endereco) VALUES ('$idproduto', '$nome', '$email', '$endereco')";

    if ($conn->query($sql) === TRUE) {
        $status = 'success';
        $mensagem = "Seu pedido foi concluído com sucesso!";
    } else {
        $status = 'error';
        $mensagem = "Erro ao processar seu pedido: " . $conn->error;
    }
}

header("Location: confirmacao_pedido.php?status=$status&mensagem=$mensagem");
exit(); 
