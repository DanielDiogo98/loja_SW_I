<?php
include 'pedaco.php';
?>
<div class="container">
    <h1>Formulario para cadastro de produto</h1>
    <form action="inserir.php" method="POST">
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="insira seu nome" name="nome">

        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Digite o preço" name="preco">

        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Digite a quantidade" name="quantidade">

        </div>


        <button type="submit" class="btn btn-primary">enviar</button>
        <a href='index.php' type='button' class='btn btn-secondary btn-sm'>Voltar para a tela inicial</a>
    </form>
    

</div>