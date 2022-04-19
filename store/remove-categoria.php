<?php 
    include("header.php"); 
    include("conecta.php");
    include("banco-categoria.php"); 
    verificaUsuario();
?>
<?php
    $id = $_GET["id"];
    removeCategoria($conexao, $id);
    header("Location: categoria-lista.php?removido=true");
    die();
?>



<?php include("footer.php"); ?> 