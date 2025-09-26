<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto - GameSphere</title>
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
    </style>
</head>
<body>
    <div class="card-form">
        <h2>Cadastrar Produto</h2>
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nome do produto" name="nome" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Preço do produto" name="preco" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" placeholder="Quantidade" name="quantidade" required>
            </div>
            <button type="submit" class="btn btn-success btn-custom">Cadastrar</button>
            <a href="index.php" class="btn btn-secondary btn-custom">Voltar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
