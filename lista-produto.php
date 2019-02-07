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


<h1 style="color: #00BFFF">Lista de Produtos</h1>
<table class="table table-striped table-bordered">

    <?php
        $merc = listaProdutos($conexao);
        foreach ($merc as $produto) :
           
    ?>
    <tr>
        <td><?=$produto['nome'] ?></td>
        <td><?=$produto['preco'] ?></td>
       <td>
        <a href="remove-produto.php?id=<?=$produto['id']?>" class="btn btn-danger">Remover</a>
       </td>
    </tr>
    <?php
        endforeach
    ?>
</table>

<?php include("rodape.php"); ?>
