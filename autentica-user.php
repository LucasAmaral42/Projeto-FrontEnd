<?php 
    require_once 'conexao.php';

    $conexao = new Conexao;
    $conexao = Conexao::pegarConexao();

    $cod = md5($_POST['senha']);
    $usuario = $_POST['usuario'];

    $query = "SELECT login, senha FROM login WHERE login='$usuario' AND senha='$cod'";

    $resultado = $conexao->query($query);

    $resultado = $resultado->fetch();

    
    if ($resultado[0] == $usuario && $resultado[1] == $cod) {
        header("Location:consulta.php");
    }
    else{
        echo "Falha ao logar";
    }
