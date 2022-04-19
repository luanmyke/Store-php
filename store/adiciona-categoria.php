<?php 
    include("header.php"); 
    include("conecta.php"); 
    include("banco-categoria.php"); 
    verificaUsuario();
 ?>
<?php
    $nome = $_POST["nome"];
    $query = mysqli_query($conexao,"select * from categoria where nome = '{$nome}' ");
    $check = mysqli_num_rows($query);   

    if($check > 0){
        
        header("Location: categoria-formulario.php?adicionado=true");
        die();
    }
    //executar a query
    if(insereCategoria($conexao, $nome)){
        //funcionou
        header("Location: categoria-formulario.php?ccadastrado=true");
    }else{
        header("Location: categoria-formulario.php?ccadastrado=false");
        //nao funcionou
    }
    
    //fechar conexao
    mysqli_close($conexao);

?>
<?php include("footer.php"); ?>   