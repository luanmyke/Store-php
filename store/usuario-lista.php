<?php 
    include("header.php"); 
    include("conecta.php");
    include("banco-usuarios.php"); 
    verificaUsuario();
?>
<p class="text-center fs-1">Lista de Usuarios</p>
<?php
    if(array_key_exists("removido", $_GET) && $_GET["removido"] == true){
       ?>
       <p class="alert alert-success text-center">Usuario removido com sucesso!</p>
       <?php
    }
    if(array_key_exists("alterado", $_GET) && $_GET["alterado"] == true){
        ?>
        <p class="alert alert-success text-center">Usuario alterado com sucesso!</p>
        <?php
      }
    $usuarios = listaUsuarios($conexao);
?>
    <table class="table table-striped table-bordered text-center mt-5">
        <tr>
            <td><b>Email</b></td>
            <td colspan="2"><b>Ações</b></td>
        </tr>
<?php
    foreach($usuarios as $usuario){
?>
    <tr>
        <td><?php echo $usuario["email"]; ?></td>
        <td><a class="btn btn-danger" href="remove-usuario.php?id=<?php echo $usuario["id"]; ?>"><i class="bi bi-trash"></i></a></td>
        <td><a class="btn btn-primary" href="altera-usuario-formulario.php?id=<?php echo $usuario["id"]; ?>"><i class="bi bi-wrench"></i></a></td>
    </tr>
        
<?php
    }   
?>
    </table>

<?php include("footer.php"); ?> 