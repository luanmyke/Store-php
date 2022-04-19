<?php 
    include("header.php"); 
    include("conecta.php"); 
    include("banco-categoria.php");
    verificaUsuario(); 
 ?>
<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    

    //executar a query
    if(alteraCategoria($conexao, $id, $nome)){
        //funcionou
       
        header("Location: categoria-lista.php?calt=true");
    }else{
        header("Location: categoria-lista.php?calt=false");
        //nao funcionou
    }
    //fechar conexao
    mysqli_close($conexao);


?>


<?php include("footer.php"); ?>  