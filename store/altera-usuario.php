<?php 
    include("header.php"); 
    include("conecta.php"); 
    include("banco-usuarios.php");
    verificaUsuario(); 
 ?>
<?php
    $id = $_POST["id"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nick = $_POST["nick"];

    //executar a query
    if(alteraUsuario($conexao, $id, $email, $senha, $nick)){
        //funcionou
        header("Location: usuario-lista.php?alterado=true");
    }else{
        ?>
        <p class="alert alert-danger text-center">Usuario <?php echo $email; ?> não foi alterado!</p>
        <?php
        //nao funcionou
    }
    //fechar conexao
    mysqli_close($conexao);


?>


<?php include("footer.php"); ?>  