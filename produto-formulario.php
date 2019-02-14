<?php include("cabecalho.php"); 
include ("conexao.php");
include ("banco-categoria.php");
$categorias = listaCategorias($conexao);
 
?>


<style type="text/css">
	body{
		background-color: #FFFFFF;
	}
	form {
	    /* Apenas para centralizar o form na página */
	    margin: 0 auto;
	    width: 1100px;
	    /* Para ver as bordas do formulário */
	    padding: 2em;
	    border: 2px solid #CCC;
	    border-radius: 2em;
		}
</style>

<h1 style="color: #DC143C">Formulário de Cadastro</h1>
	<form action="adiciona-produto.php" method="POST">
		<table class="table">
			<tr>
				<td style="color: #696969">Nome</td>
				<td><input class="form-control" type="text" name="nome"><br/></td>
			</tr>

			<tr>
				<td style="color: #696969">Preço</td>
				<td><input class="form-control" type="number" name="preco"><br/></td>
			</tr>
			<tr>
				<td style="color: #696969">Descrição</td>
				<td><textarea name="descricao" class="form-control" ></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="usado" value="true"> Usado
			</tr>
			<tr>
				<td style="color: #696969">Categoria</td>
				<td>
					<select name="categoria_nome" class="form-control">
						<?php foreach ($categorias as $categoria) : ?>
							<option value="<?= $categoria['id']?>">
								<?=$categoria['nome']?><br/>
							</option> 
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><input style="background-color:#006400" class="btn btn-primary" type="submit" value="Cadastrar"></td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>