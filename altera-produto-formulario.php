<?php include("cabecalho.php"); 
include ("conexao.php");
include ("banco-categoria.php");
include ("banco-produto.php");

$id  = isset($_GET["id"])  ? $_GET["id"]  : "";
$produto = buscaProduto($conexao,$id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>


<style type="text/css">
	body{
		background-color: #FFFFFF;
	}
</style>

<h1 style="color: #DC143C">Formulário do Produto</h1>
	<form action="altera-produto.php" method="GET">
		<input type="hidden" name="id" value="<?=$produto['id']?>">
		<table class="table">
			<tr>
				<td style="color: #696969">Nome</td>
				<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"><br/></td>
			</tr>

			<tr>
				<td style="color: #696969">Preço</td>
				<td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"><br/></td>
			</tr>
			<tr>
				<td style="color: #696969">Descrição</td>
				<td><textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado
			</tr>
			<tr>
				<td style="color: #696969">Categoria</td>
				<td>
					<select name="categoria_nome" class="form-control">
						<?php foreach ($categorias as $categoria) : 
							$CategoriaSelecionada = $produto['categoria_id'] == $categoria['id'];
							$selecao = $CategoriaSelecionada ? "selected='selected'" : "";
							?>
							<option value="<?=$categoria['id']?>"<?=$selecao?>>
								<?=$categoria['nome']?><br/>
							</option> 
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><input style="background-color:#4682B4" class="btn btn-primary" type="submit" value="Alterar"></td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>