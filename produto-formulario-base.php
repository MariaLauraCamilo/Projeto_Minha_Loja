<?php 
require_once("banco-categoria.php");
require_once("banco-produto.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");


$listaCategorias = listaCategorias($conexao,$produto);
if(isset($_GET["id"])){
	$produto = buscaProduto($conexao,$_GET["id"]);
}
?>

<tr>
	<td style="color: #696969">Nome</td>
	<td><input class="form-control" type="text" name="nome" value="<?=$produto->nome?>"><br/></td>
</tr>
<tr>
	<td style="color: #696969">Preço</td>
	<td><input class="form-control" type="number" name="preco" value="<?=$produto->preco?>"><br/></td>
</tr>
<tr>
	<td style="color: #696969">Descrição</td>
	<td><textarea name="descricao" class="form-control"><?=$produto->descricao?></textarea></td>
</tr>
<tr>
	<td></td>
	<td><input type="checkbox" name="usado" <?=$produto->usado?> value="true"> Usado
</tr>
<tr>
	<td style="color: #696969">Categoria</td>
	<td>
		 <select name="categoria_nome" class="form-control">
			<?php 

			foreach ($listaCategorias as $categoria) :


				$CategoriaSelecionada = $produto->categoria->id == $categoria->id;
				$selecao = $CategoriaSelecionada ? "selected='selected'" : "";

			?>
	
			<option value="<?=$categoria->id?>"<?=$selecao?>>
				<?=$categoria->nome?><br/>
			</option> 
			<?php endforeach ?> 
		 </select>
	</td>
</tr>