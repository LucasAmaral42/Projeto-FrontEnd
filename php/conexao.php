<?php

class Conexao{    

    public static function pegarConexao(){

        try {
            $conexao = new PDO ("mysql:host=localhost:3307;dbname=linadoces", 'root', '');
            return $conexao;
            
        }
        catch(PDOException $e) {
            echo "Falha na conexão:<br />" . $e->getMessage();
        }  
    }
    
}