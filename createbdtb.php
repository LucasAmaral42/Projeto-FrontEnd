<?php

    $host = 'localhost';
    $bd = 'linaDoces';
    $user = 'root';
    $pass = '';
    $tb = 'pedidos';

    // Cria banco de dados.
    $conexao = new PDO("mysql:host=$host", $user,$pass);
    $query = "CREATE DATABASE IF NOT EXISTS $bd";
    $conexao->exec($query);


    // Cria tabela
    $conexao = new PDO("mysql:host=$host;dbname=$bd", $user, $pass);
    $query = "CREATE TABLE IF NOT EXISTS $bd.$tb (
            `id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `nome` varchar(100) NOT NULL,
            `telefone` varchar(15) NOT NULL,
            `endereco` varchar(100) NOT NULL,
            `cidade` varchar(50) NOT NULL,
            `doces` varchar(20) NOT NULL
        )ENGINE=InnoDB DEFAULT CHARSET=latin1";
    $conexao->exec($query);