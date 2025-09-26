<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos - GameSphere</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            padding: 30px 0;
        }
        .card-list {
            background-color: rgba(255,255,255,0.95);
            border-radius: 15px;
            padding: 30px;
            max-width: 900px;
            margin: auto;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .table thead {
            background-color: #6a11cb;
            color: #fff;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(106,17,203,0.1);
        }
        .btn-action {
            margin: 2px;
        }
        .alert-success {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="card-list">
    <h2>Lista de Produtos</h2>

    <?php if(isset($_GET['msg'])): ?>
        <div class="alert alert-success">
            <?php
            switch($_GET['msg']){
                case 'apagado': echo "Produto apagado com sucesso!"; break;
                case 'atualizado': echo "Produto atualizado com sucesso!"; break;
                case 'cadastrado': echo "Produto cadastrado com sucesso!"; break;
            }
            ?>
        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-hover align-middle text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos";
                foreach($pdo->query($sql) as $produto) {
                    echo "<tr>
                            <td>{$produto['id']}</td>
                            <td>{$produto['nome']}</td>
                            <td>R$ {$produto['preco']}</td>
                            <td>{$produto['quantidade']}</td>
                            <td>
                                <a href='form_atualizar.php?id={$produto['id']}' class='btn btn-warning btn-sm btn-action'>Atualizar</a>
                                <a href='apagar.php?id={$produto['id']}' class='btn btn-danger btn-sm btn-action'>Apagar</a>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="text-center mt-3">
        <a href="index.php" class="btn btn-secondary btn-lg">Voltar</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
