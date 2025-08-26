<?php
include 'pedaco.php';
?>
<div class="container">

    <h1>Formulario para atualizar produtos</h1>
        <form action="atualizar.php" method="POST">

        <?php
            $id = $_GET['id'];
            echo "$id"
        ?>
            <div class="mb-3">
                Nome:<input type="text" class="form-control" name="nome">
            </div>
            <div class="mb-3">
                PRECO:<input type="text" class="form-control"  name="preco">

            </div>
            <div class="mb-3">
                QUANTIDADE:<input type="text" class="form-control"  name="quantidade">

            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href='index.php' type='button' class='btn btn-secondary btn-sm'>Voltar para a tela inicial</a>
        </form>
    

</div>