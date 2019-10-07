<?php 
    require_once 'conexao.php';

    $conexao = new Conexao;
    $conexao = Conexao::pegarConexao();

    $cod = md5($_POST['senha']);
    $usuario = $_POST['usuario'];

    $query = "SELECT login, senha FROM login WHERE login='$usuario' AND senha='$cod'";

    $resultado = $conexao->query($query);

    if ($resultado) {
        header("Location:consulta.php");
    }
    else{
        echo "Falha";
    }
?>