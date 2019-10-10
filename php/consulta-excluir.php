<?php 

    require_once 'conexao.php';
    
    $conexao = new Conexao;
    $conexao = Conexao::pegarConexao();

    $query = "DELETE FROM tbpedido WHERE id = " . $_GET['id'];

    $conexao->query($query);

    header("Location: ../consulta.php");