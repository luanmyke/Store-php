<?php include("header.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-categoria.php"); ?>
<?php
    $id = $_GET["id"];
    $categoria = buscaCategoria($conexao, $id);
    $categorias = listaCategorias($conexao);
    verificaUsuario();
?>
    <p class="text-center fs-1">Alteração de Categoria</p>
    <form class="row g-3" action="altera-categoria.php" method="post">
        
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-3 text-center">
            <label for="inputNome" class="form-label">Nome da Categoria</label>
            <input type="text" class="form-control" name="nome"  value="<?php echo $categoria["nome"]; ?>">
        </div>
    </div>
         <input type="hidden" name="id" value='<?php echo $categoria["id"];?>'>           
    <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
<?php include("footer.php"); ?> 