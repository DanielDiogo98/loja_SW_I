<?php
require 'conexao.php';

if(isset($_POST['nome'], $_POST['preco'], $_POST['quantidade'])) {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':quantidade', $quantidade);

    if ($stmt->execute()) {
        header("Location: listar.php?msg=cadastrado");
        exit;
    } else {
        echo "Erro ao inserir produto.";
    }
} else {
    echo "Dados inválidos.";
}
?>
