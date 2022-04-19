<?php
     session_start();

     function verificaUsuario(){
          if(!usuarioEstaLogado()){
               header("Location :index.php?falhaDeSeguranca=true");
               die();
          }
     }


     function usuarioEstaLogado(){
          return isset($_SESSION["usuario_logado"]);
     }


     function usuarioLogado(){
          return $_SESSION["usuario_logado"];
     }

     function logaUsuario($email, $conexao){
          $_SESSION["usuario_logado"] = $email;
          $query = "select * from usuarios where email = '$email'";
          $resultado = mysqli_query($conexao, $query);
          $row = mysqli_fetch_assoc($resultado);
          $_SESSION["nick_logado"] = $row['nick'];
          
     }
     


     function logout(){
          session_destroy();
     }
?>