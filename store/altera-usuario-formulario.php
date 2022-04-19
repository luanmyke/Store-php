<?php include("header.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-usuarios.php"); ?>
<?php
    $id = $_GET["id"];
    $usuario = mostraUsuario($conexao, $id);
    $usuarios = listaUsuarios($conexao);
    verificaUsuario();
?>
    <p class="text-center fs-1">Alteração de Usuario</p>
    <form class="row g-3" action="altera-usuario.php" method="post">
        
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-3 text-center">
            <label for="inputEmail" class="form-label">Email do Usuario</label>
            <input type="text" class="form-control" name="email" id="inputEmail" value="<?php echo $usuario["email"]; ?>">
        </div>
        <div class="col-md-3">
            <label for="inputSenha" class="form-label">Senha do Usuario</label>
            <input type="password" class="form-control" name="senha" id="inputSenha">
        </div>
        <div class="col-md-3">
            <label for="inputNick" class="form-label">Apelido</label>
            <input type="text" class="form-control" name="nick" id="inputNick" value="<?php echo $usuario["nick"]; ?>">
        </div>
    </div>
         <input type="hidden" name="id" value='<?php echo $usuario["id"];?>'>           
    <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
<?php include("footer.php"); ?> 