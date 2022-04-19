<?php 
    include("header.php"); 
    include("conecta.php");
    include("banco-categoria.php"); 
    verificaUsuario();
?>
<p class="text-center fs-1">Lista de Categorias</p>
<?php
    if(array_key_exists("removido", $_GET) && $_GET["removido"] == true){
       ?>
       <p class="alert alert-success text-center">Categoria removida com sucesso!</p>
       <?php
    }if(array_key_exists("calt", $_GET) && $_GET["calt"] == true){
        ?>
        <p class="alert alert-success text-center">Categoria alterada com sucesso!</p>
        <?php
        }if(array_key_exists("calt", $_GET) && $_GET["calt"] == false){
            ?>
            <p class="alert alert-danger text-center">Categoria não foi alterada!</p>
            <?php 
            }
    $categorias = listaCategorias($conexao);
?>
    <table class="table table-striped table-bordered text-center mt-5">
        <tr>
            <td><b>Nome</b></td>
            <td colspan="2"><b>Ações</b></td>
        </tr>
<?php
    foreach($categorias as $categoria){
?>
    <tr>
        <td><?php echo $categoria["nome"]; ?></td>
        <td><a class="btn btn-danger" href="remove-categoria.php?id=<?php echo $categoria["id"]; ?>"><i class="bi bi-trash"></i></a></td>
        <td><a class="btn btn-primary" href="altera-categoria-formulario.php?id=<?php echo $categoria["id"]; ?>"><i class="bi bi-wrench"></i></a></td>
    </tr>
        
<?php
    }   
?>
    </table>

<?php include("footer.php"); ?> 