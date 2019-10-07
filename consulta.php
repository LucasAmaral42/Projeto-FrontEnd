<?php require_once 'cabecalho.php' ?>
<?php require_once 'conexao.php' ?>

<?php
    
    $conexao = new Conexao;
    $query = "SELECT id,nome,telefone,endereco,data_entrega,doces FROM tbpedido";
    $conexao = Conexao::pegarConexao();
    $resultado = $conexao->query($query);
    
?>

<div class="parallax1">
</div>

<div class="corpo-linaDoces" id="corpo-consulta">
    <table id="tabela-consulta">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Data</th>
            <th>Doce</th>
        </thead>
        
        <tbody>
            <?php foreach ($resultado->fetchAll() as $linha): ?>
                <tr>
                    <td><?php echo $linha['id'] ?></td>
                    <td><?php echo $linha['nome'] ?></td>
                    <td><?php echo $linha['telefone'] ?></td>
                    <td><?php echo $linha['endereco'] ?></td>
                    <td><?php echo $linha['data_entrega'] ?></td>
                    <td><?php echo $linha['doces'] ?></td>
                    <td class="botao-consulta-ex"><a href="/consulta-editar.php?id=<?php echo $linha['id'] ?>" >Excluir</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
</div>

<div class="parallax2">
</div>


<?php require_once 'footer.php' ?>