<?php
require 'conexao.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        header("Location: listar.php?msg=apagado");
        exit;
    } else {
        echo "Erro ao excluir produto.";
    }
} else {
    echo "ID inválido.";
}
?>
