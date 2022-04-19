<?php 
    include("header.php"); 
    include("conecta.php");
    include("banco-produtos.php");
    verificaUsuario(); 
?>
<h1>Lista de produtos</h1>
<?php
    if(array_key_exists("removido", $_GET) && $_GET["removido"] == true){
       ?>
       <p class="alert alert-success">Produto removido com sucesso!</p>
       <?php
    }
    $produtos = listaProdutos($conexao);
?>
    <table class="table table-striped table-bordered text-center mt-5">
        <tr>
            <td><b>Nome</b></td>
            <td><b>Preço</b></td>
            <td><b>Descrição</b></td>
            <td><b>Categoria</b></td>
            <td><b>Usado</b></td>
            <td colspan="2"><b>Ações</b></td>
        </tr>
<?php
    foreach($produtos as $produto){
?>
    <tr>
        <td><?php echo $produto["nome"]; ?></td>
        <td><?php echo "R$".str_replace('.',',',$produto["preco"]); ?></td>
        <td><?php echo $produto["descricao"]; ?></td>
        <td><?php echo $produto["categoria_nome"]; ?></td>
        <td><?php if($produto["usado"] == 0){
                        echo "novo";
                        }else{
                            echo "usado";
                            } ?>
                            </td>
        <td><a class="btn btn-danger" href="remove-produto.php?id=<?php echo $produto["id"]; ?>"><i class="bi bi-trash"></i></a></td>
        <td><a class="btn btn-primary" href="altera-produto-formulario.php?id=<?php echo $produto["id"]; ?>"><i class="bi bi-wrench"></i></a></td>
    </tr>
        
<?php
    }   
?>
    </table>

<?php include("footer.php"); ?> 