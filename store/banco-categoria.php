<?php
    function insereCategoria($conexao, $nome){
        $query = "insert into categoria (nome ) values ('{$nome}')";
        //echo $query;
        //die();
        return mysqli_query($conexao, $query);
    }

    function listaCategorias($conexao){
        $categorias = array();
        $resultado = mysqli_query($conexao, "select * from categoria");
        while($categoria = mysqli_fetch_assoc($resultado)){
            array_push($categorias, $categoria);
        }
        return $categorias;
    }

    function removeCategoria($conexao, $id){
        $query = "delete from categoria where id = {$id}";
        return mysqli_query($conexao, $query);
    }

    function buscaCategoria($conexao, $id){
        $query = "select * from categoria where id = {$id}";
        $resultado = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }

    function alteraCategoria($conexao, $id, $nome){
        $query = "update categoria set nome = '{$nome}' where id = '{$id}'";
        return mysqli_query($conexao, $query);
    }

?>