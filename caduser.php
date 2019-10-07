<?php
$conexao = new PDO("mysql:host=localhost;dbname=linadoces", 'root', '');

if (getenv("REQUEST_METHOD") == "POST") {
    
    $cod = md5($_POST['senha']);
    $usuario = $_POST['usuario'];

    $sql = "INSERT INTO login (login, senha) VALUES ('$usuario', '$cod')";

    $conexao->exec($sql);
}

header('Location:login.php');
?>