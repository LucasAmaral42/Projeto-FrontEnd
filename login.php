<?php require_once 'cabecalho.php' ?>

<div style="height:150px;" class="parallax1">
</div>

<div class="corpo-linaDoces" id="corpo-login">
    <form action="autentica-user.php" method="POST">
        <label for="usuario">Usuário:</label>
        <input id="usuario" type="text" name="usuario" placeholder="Usuario...">

        <label for="senha">Senha:</label>
        <input id="senha" type="password" name="senha">

        <button id="botao-login" type="submit">Fazer login</button>
    </form>
</div>

<div style="height:150px;" class="parallax2">
</div>

<?php require_once 'footer.php' ?>