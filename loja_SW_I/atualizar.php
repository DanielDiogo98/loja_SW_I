<?php
require 'conexao.php';

if(isset($_GET['id']) && isset($_POST['nomeNovo'], $_POST['precoNovo'], $_POST['quantidadeNovo'])) {
    $id = $_GET['id'];
    $nomeNovo = $_POST['nomeNovo'];
    $precoNovo = $_POST['precoNovo'];
    $quantidadeNovo = $_POST['quantidadeNovo'];

    $sql = "UPDATE produtos SET nome = :nomeNovo, preco = :precoNovo, quantidade = :quantidadeNovo WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nomeNovo', $nomeNovo);
    $stmt->bindParam(':precoNovo', $precoNovo);
    $stmt->bindParam(':quantidadeNovo', $quantidadeNovo);

    if ($stmt->execute()) {
        header("Location: listar.php?msg=atualizado");
        exit;
    } else {
        echo "Erro ao atualizar produto.";
    }
} else {
    echo "Dados inválidos.";
}
?>
