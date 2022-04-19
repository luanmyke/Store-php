<?php 
    include("header.php"); 
    include("conecta.php"); 
    include("banco-produtos.php");
    verificaUsuario(); 
 ?>
<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];
    if(array_key_exists('usado', $_POST)){
        $usado = 'true';
    }else{
        $usado = 'false';
    }

    //executar a query
    if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)){
        //funcionou
       
    ?>
         <p class="alert alert-success">Produto <?php echo $nome; ?> alterado com sucesso!</p>
    <?php
    }else{
        ?>
        <p class="alert alert-danger">Produto <?php echo $nome; ?> não foi alterado!</p>
        <?php
        //nao funcionou
    }
    //fechar conexao
    mysqli_close($conexao);


?>


<?php include("footer.php"); ?>  