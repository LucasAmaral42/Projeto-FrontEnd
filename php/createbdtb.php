<?php

    $host = 'localhost:3307';
    $bd = 'linaDoces';
    $user = 'root';
    $pass = '';

    // Cria banco de dados.
    try {
        $conexao = new PDO("mysql:host=$host", $user,$pass);
        $query = "CREATE DATABASE IF NOT EXISTS $bd";
        $conexao->exec($query);
    }
    catch(PDOException $e) {
        echo $criadb . "Falha na criação do Banco:<br />" . $e->getMessage();
    } 
    

    // Cria tabela PEDIDOS
    try {  
        $conexao = new PDO("mysql:host=$host;dbname=$bd", $user, $pass);
        $query = "CREATE TABLE IF NOT EXISTS $bd.tbpedido (
                `id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `nome` varchar(100) NOT NULL,
                `telefone` varchar(15) NOT NULL,
                `endereco` varchar(100) NOT NULL,
                `data_entrega` varchar(50) NOT NULL,
                `doces` varchar(20) NOT NULL
            )ENGINE=InnoDB DEFAULT CHARSET=latin1";
        $conexao->exec($query);
      }
    catch(PDOException $e) {
        echo $criatab . "Falha na criação da Tabela:<br />" . $e->getMessage();
    }    


    // Cria tabela USUARIOS
    try {  
        $conexao = new PDO("mysql:host=$host;dbname=$bd", $user, $pass);
        $query = "CREATE TABLE IF NOT EXISTS $bd.login (
            `id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `login` varchar(50) NOT NULL,
            `senha` varchar(32) NOT NULL
        )ENGINE=InnoDB DEFAULT CHARSET=latin1";
        $conexao->exec($query);
      }
    catch(PDOException $e) {
        echo $criatab . "Falha na criação da Tabela:<br />" . $e->getMessage();
    }    