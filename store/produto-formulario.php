<?php include("header.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-categoria.php"); ?>
<?php
    $categorias = listaCategorias($conexao);
    verificaUsuario();
?>
    <h1>Cadastro de Produtos</h1>
    <form class="row g-3" action="adiciona-produto.php" method="post">
    <?php
     if(array_key_exists("pcadastrado", $_GET) && $_GET["pcadastrado"] == true){
     ?>
        <p class="alert alert-success text-center">Produto cadastrado com sucesso!</p>
    <?php
    }if(array_key_exists("pcadastrado", $_GET) && $_GET["pcadastrado"] == false){
     ?>
        <p class="alert alert-danger text-center">Produto não foi cadastrado!</p>
    <?php  
    }
     ?> 
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-3">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="inputNome">
        </div>

        <div class="col-md-3">
            <label for="inputPreco" class="form-label">Preço</label>
            <input type="text" class="form-control" name="preco" id="inputPreco">
        </div>
    </div>
        

        <div class="row justify-content-md-center mt-3">
            <div class="col-md-6">
                <label for="inputDescricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="inputDescricao"></textarea>
            </div>
        
        </div>
        

        <div class="row justify-content-md-center mt-3">
            <div class="col-md-3">
                <label for="categoria" class="form-label">Categoria</label>
                <select name="categoria_id" class="form-control">
                    <?php foreach($categorias as $categoria){?>
                    <option value="<?php echo $categoria["id"];?>"><?php echo $categoria["nome"];?></option>
                    <?php } ?>
                </select>
            </div>
        
            <div class="col-md-3 mt-4">
                <input type="checkbox" name="usado" value="true"> Usado 
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
<?php include("footer.php"); ?> 