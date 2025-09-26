<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja do Daniel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }
        .card-index {
            background-color: rgba(255,255,255,0.1);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }
        .btn-index {
            width: 220px;
            margin: 15px;
            font-weight: bold;
        }
        h1 {
            margin-bottom: 30px;
            font-size: 2.5rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="card-index">
        <h1>Loja do Daniel</h1>
        <a href="form_cadastra.php" class="btn btn-success btn-lg btn-index">Cadastrar Produto</a>
        <a href="listar.php" class="btn btn-primary btn-lg btn-index">Listar Produtos</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
