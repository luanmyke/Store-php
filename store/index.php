<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Store</title>
</head>
<body>
   
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-md-4">
                <?php
                    if(isset($_GET["falhaDeSeguranca"])){
                        ?>
                        <p class="alert alert-danger">Você não tem acesso.</p>
                        <?php
                    }
                    if(isset($_GET["login"]) && $_GET["login"] == false){
                        ?>
                    <p class="alert alert-danger">Usuário ou senha inválido!</p>
                        <?php
                    }
                    if(isset($_GET["logout"])){
                        ?>
                     <p class="alert alert-success">Deslogado Com Sucesso!</p>
                        <?php
                     }
                ?>
                 </div>
        </div>
    </div>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
                <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light" action="login.php" method="post">
                    <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
            </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="senha" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Senha</label>
            </div>
                <div class="checkbox mb-3">
                    <label>
                    <input type="checkbox" value="remember-me"> Lembrar de mim.
                    </label>
                </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
                    <hr class="my-4">
                    <small class="text-muted">Clicando em entrar, Você aceita com os termos de uso.</small>
                </form>
            </div>
        </div>
    </div>
                
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>