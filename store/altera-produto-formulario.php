<?php include("header.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-categoria.php"); ?>
<?php include("banco-produtos.php"); ?>
<?php
    $id = $_GET["id"];
    $produto = buscaProduto($conexao, $id);
    $categorias = listaCategorias($conexao);
    verificaUsuario();
?>
    <h1>Alteração de Produtos</h1>
    <form class="row g-3" action="altera-produto.php" method="post">
    <?php
    if(array_key_exists("altp", $_GET) && $_GET["altp"] == true){
        ?>
        <p class="alert alert-success text-center">Produto alterado com sucesso!</p>
        <?php
        }if(array_key_exists("altp", $_GET) && $_GET["altp"] == false){
            ?>
            <p class="alert alert-danger text-center">Produto não foi alterado!</p>
            <?php 
            }
            ?>
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-3">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="inputNome" value="<?php echo $produto["nome"]; ?>">
        </div>

        <div class="col-md-3">
            <label for="inputPreco" class="form-label">Preço</label>
            <input type="text" class="form-control" name="preco" id="inputPreco" value="<?php echo $produto["preco"]; ?>">
        </div>
    </div>
        

        <div class="row justify-content-md-center mt-3">
            <div class="col-md-6">
                <label for="inputDescricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="inputDescricao"><?php echo $produto["descricao"]; ?></textarea>
            </div>
        
        </div>
        

        <div class="row justify-content-md-center mt-3">
            <div class="col-md-3">
                <label for="categoria" class="form-label">Categoria</label>
                <select name="categoria_id" class="form-control">
                    <?php foreach($categorias as $categoria){
                        $essaCategoria = $produto['categoria_id'] == $categoria["id"];
                        $selecao = $essaCategoria ? "selected='selected'" : "";
                        ?>
                    <option value="<?php echo $categoria["id"];?>" <?php echo $selecao;?>><?php echo $categoria["nome"];?></option>
                    <?php } ?>
                </select>
            </div>
        
            <div class="col-md-3 mt-4">
                <?php
                    if($produto["usado"] == 0){
                        $usado = "";
                    }else{
                        $usado = "checked='checked'";
                    }
                ?>
                <input type="checkbox" name="usado" value="true" <?php echo $usado; ?>> Usado 
            </div>
        </div>
         <input type="hidden" name="id" value="<?php echo $produto["id"];?>">           
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
<?php include("footer.php"); ?> 