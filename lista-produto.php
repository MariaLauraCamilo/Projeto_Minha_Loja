<?php 
      include("cabecalho.php");
      include("conexao.php");
      include("banco-produto.php"); 
      include("logica-usuario.php");
      ?>

<?php if (isset($_SESSION['success'])) { ?>
    <p class="alert-success"><?= $_SESSION['success']?></p>
<?php }  
    unset($_SESSION['success']); 
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
        <td><?= substr($produto['descricao'], 0, 40)?></td>
        <td><?=$produto['categoria_nome'] ?></td>
        <td>
            <a class="btn btn-primary" href="altera-produto-formulario.php?id=<?=$produto['id']?>">Editar</a> 
        </td>
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
