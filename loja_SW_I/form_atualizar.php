<?php
require 'conexao.php';

if(!isset($_GET['id'])) {
    header("Location: listar.php");
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$produto = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$produto) {
    echo "Produto não encontrado!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Produto - GameSphere</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }
        .card-form {
            background-color: rgba(255,255,255,0.95);
            border-radius: 15px;
            padding: 40px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }
        .card-form h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .btn-custom {
            width: 100%;
            font-weight: bold;
        }
        .btn-secondary {
            margin-top: 10px;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="card-form">
        <h2>Atualizar Produto</h2>
        <form action="atualizar.php?id=<?= $id ?>" method="POST">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nomeNovo" value="<?= $produto['nome'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Preço</label>
                <input type="text" class="form-control" name="precoNovo" value="<?= $produto['preco'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantidade</label>
                <input type="number" class="form-control" name="quantidadeNovo" value="<?= $produto['quantidade'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary btn-custom">Atualizar</button>
            <a href="listar.php" class="btn btn-secondary btn-custom">Voltar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
