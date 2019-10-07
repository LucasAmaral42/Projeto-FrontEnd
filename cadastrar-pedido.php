<?php

    require_once 'conexao.php';

    
    if (getenv("REQUEST_METHOD") == "POST") {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $data = $_POST['data-entrega'];
        $doce = $_POST['doce'];
        
        $sql = "INSERT INTO tbpedido (nome, telefone, endereco, data_entrega, doces)
                    VALUES ('" . $nome . "', '" . $telefone . "', '" . $endereco . "', '" . $data . "', '" . $doce . "')";
       
        $conexao = new Conexao;
        $conexao = Conexao::pegarConexao();
        $conexao->exec($sql);
    }

    header('location: comprar.php');