<?php include("header.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-categoria.php"); ?>
<?php
    verificaUsuario();
    $categorias = listaCategorias($conexao);
    
?>
    <p class="text-center fs-1">Cadastro de Categoria</p>
    <form class="row g-3" action="adiciona-categoria.php" method="post">
        <?php
    if(array_key_exists("adicionado", $_GET) && $_GET["adicionado"] == true){
        ?>
        <p class="alert alert-danger text-center">Categoria ja foi adicionada!</p>
        <?php
         }
         if(array_key_exists("ccadastrado", $_GET) && $_GET["ccadastrado"] == true){
            ?>
            <p class="alert alert-success text-center">Categoria cadastrada com sucesso!</p>
            <?php
             }if(array_key_exists("ccadastrado", $_GET) && $_GET["ccadastrado"] == false){
                ?>
                <p class="alert alert-danger text-center">Categoria não foi cadastrada!</p>
            <?php  
             }
         ?> 
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-3 text-center">
            <label for="inputNome" class="form-label">Nome da Categoria</label>
            <input type="text" class="form-control" name="nome" id="inputNome">
        </div>
           <p></p> 
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<?php include("footer.php"); ?> 