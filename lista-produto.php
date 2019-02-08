<?php 
      include("cabecalho.php");
      include("conexao.php");
      include("banco-produto.php"); 
      ?>
<?php 
    if (array_key_exists("removido", $_GET) && $_GET["removido"]=="true") {
?>
<p class="alert-success">Produto apagado com sucesso!</p>
<?php
    }
?>


<h1 style="color: #DC143C">Lista de Produtos</h1>
<table class="table table-striped table-bordered">

    <?php
        $merc = listaProdutos($conexao);
        foreach ($merc as $produto) :
           
    ?>
    <tr>
        <td><?=$produto['nome'] ?></td>
        <td><?=$produto['preco'] ?></td>
        <td><?= substr($produto['descricao'], 0, 60)?></td>
        <td>
            <form action="remove-produto.php?id=<?=$produto['id']?>" method="POST">
                <button class="btn btn-danger">X</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>

<?php include("rodape.php"); ?>
