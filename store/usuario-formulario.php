<?php include("header.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-usuarios.php"); ?>
<?php
    /* verificaUsuario(); */
    $usuarios = listaUsuarios($conexao);

?>
    <p class="text-center fs-1">Cadastro de Usuarios</p><?php

    if(isset($_GET["cadastrado"]) && $_GET["cadastrado"] == true){
        ?>
         <p class="alert alert-danger text-center">Usuario ja foi cadastrado !</p>
        <?php
         }if(isset($_GET["ucadastrado"]) && $_GET["ucadastrado"] == true){
             ?>
            <p class="alert alert-success text-center">Usuario cadastrado com sucesso!</p>  
            <?php
       }if(isset($_GET["ucadastrado"]) && $_GET["ucadastrado"] == false){
        ?>
        <p class="alert alert-danger text-center">Usuario não foi cadastrado!</p>
        <?php
       }   
     ?>
    <form class="row g-3" action="adiciona-usuario.php" method="post">
        
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-3 text-center">
            <label for="inputNome" class="form-label">Email do Usuario</label>
            <input type="text" class="form-control" name="email" id="inputEmail">
        </div>
        <div class="col-md-3">
            <label for="inputSenha" class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" id="inputSenha">
        </div>
        <div class="col-md-3">
            <label for="inputNick" class="form-label">Apelido</label>
            <input type="text" class="form-control" name="nick" id="inputNick">
        </div>
    </div>
     <p></p>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
<?php include("footer.php"); ?> 