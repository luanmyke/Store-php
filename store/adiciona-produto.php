<?php 
    include("header.php"); 
    include("conecta.php"); 
    include("banco-produtos.php"); 
    verificaUsuario();
 ?>
<?php
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
    if(insereProdutos($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){
        //funcionou
        header("Location: produto-formulario.php?pcadastrado=true");
    }else{
        header("Location: produto-formulario.php?pcadastrado=true");
        //nao funcionou
    }
    //fechar conexao
    mysqli_close($conexao);

?>
<?php include("footer.php"); ?>   