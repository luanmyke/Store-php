<?php 
    include("header.php"); 
    include("conecta.php"); 
    include("banco-usuarios.php"); 
    verificaUsuario();
 ?>
<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nick = $_POST["nick"];
    $query = mysqli_query($conexao,"select * from usuarios where email = '{$email}' ");
    $linha = mysqli_num_rows($query);   

    if($linha > 0){
        header("Location: usuario-formulario.php?cadastrado=true");
    }else{
    
    
    //executar a query
    if(insereUsuario($conexao, $email, $senha,$nick)){
        header("Location: usuario-formulario.php?ucadastrado=true");
    }else{
        header("Location: usuario-formulario.php?ucadastrado=false");
        //nao funcionou
    } return 
    //fechar conexao
    mysqli_close($conexao);
 }
?>
<?php include("footer.php"); ?>  