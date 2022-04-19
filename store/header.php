<?php include("logica-usuario.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="css/pricing.css" rel="stylesheet">
    <title>Loja</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index2.php">Loja</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categoria
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="categoria-formulario.php">Adicionar Categoria</a></li>
                    <li><a class="dropdown-item" href="categoria-lista.php">Listar</a></li>
                </li>
             </ul>
                <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Produtos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="produto-formulario.php">Adicionar Lista</a></li>
                    <li><a class="dropdown-item" href="produtos-lista.php">Listar</a></li>
                </li>
            </ul>
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Usuarios
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="usuario-formulario.php">Adicionar Usuario</a></li>
                    <li><a class="dropdown-item" href="usuario-lista.php">Listar</a></li>
                </li>
             </ul>
            </div>
            <nobr><h7 class="text-success">Você esta logado como <?php echo $_SESSION["nick_logado"] ; ?></h7></nobr>
        </div>
        <a href="logout.php" class="btn btn-danger">Sair</a>
    </nav>
    <div class="container text-center mt-5">