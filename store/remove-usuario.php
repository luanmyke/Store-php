<?php 
    include("header.php"); 
    include("conecta.php");
    include("banco-usuarios.php"); 
    verificaUsuario();
?>
<?php
    $id = $_GET["id"];
    removeUsuario($conexao, $id);
    header("Location: usuario-lista.php?removido=true");
    die();
?>



<?php include("footer.php"); ?> 