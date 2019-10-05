<?php require_once 'cabecalho.php' ?>

<div style="height:250px;" class="parallax1">
</div>


<div class="corpo-linaDoces" id="corpo-tb">
    <table class="tb-comprar">
        <tr>
            <th>
                Doces
            </th>
            <th>
                Preço
            </th>
        </tr>
        
        <tr>
            <td>
                Bolo
            </td>
            <td>
                R$ 20,00
            </td>
        </tr>

        <tr>
            <td>
                Brigadeiro
            </td>
            <td>
                R$ 15,00
            </td>
        </tr>
        
        <tr>
            <td>
                Panettone
            </td>
            <td>
                R$ 30,00
            </td>
        </tr>
    </table>
</div>

<div style="height:150px;" class="parallax2">
</div>

<div class="corpo-linaDoces" id="corpo-form">
    <form action="">
        <label for="nome">Nome:</label>
        <input id="nome" type="text" name="nome" placeholder="Insira seu nome...">

        <label for="telefone">Telefone:</label>
        <input id="telefone" type="tel" name="telefone" placeholder="(  )     -    ">
        
        <label for="endereco">Endereço (Rua, Nº, Bairro):</label>
        <input id="endereco" type="text" name="endereco">
        
        <label for="cidade">Cidade:</label>
        <input id="cidade" type="text" name="cidade">

        <label for="doces">Doces:</label>
        <select name="doces" id="doces">
            <option value="bolo-chocholate">Bolo Chocolate</option>
            <option value="bolo-laka">Bolo Laka</option>
            <option value="brigadeiro">Brigadeiro</option>
            <option value="panettone">Panettone</option>
            <option value="chocottone">Chocottone</option>
        </select>
        <button id="botao-formulario" >Enviar pedido</button>
    </form>

    <a onclick="validarForm()">teste</a>
</div>

<?php require_once 'footer.php' ?>