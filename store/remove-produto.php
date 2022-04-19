<?php 
    include("header.php"); 
    include("conecta.php");
    include("banco-produtos.php"); 
    verificaUsuario();
?>
<?php
    $id = $_GET["id"];
    removeProduto($conexao, $id);
    header("Location: produtos-lista.php?removido=true");
    die();
?>



<?php include("footer.php"); ?> 