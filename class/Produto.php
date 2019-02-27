<?php

class Produto{

	private $id;
	private $nome; 
 	private $preco;
 	private $descricao; 
 	private $categoria;
 	private $usado;

 	public function precoComDesconto($valor){
 		if ($valor > 0 && $valor <=0.5){
 			$this->preco -= $this->preco * $valor;
 		}
 		
 		return $this->preco;
 	}

 	//Id
 	public function getId(){
 		return $this->id;
 	}

 	public function setId($id){
 		$this->id = $id;
 	}

 	//Nome
 	public function getNome(){
 		return $this->nome;
 	}

 	public function setNome($nome){
 		$this->nome = $nome;
 	}

 	//Preco
 	public function getPreco(){
 		return $this->preco;
 	}

 	public function setPreco($preco){
 		if ($preco > 0) {
 			$this->preco = $preco;
 		}
 	}

 	//Descricao
 	public function getDescricao(){
 		return $this->descricao;
 	}

 	public function setDescricao($descricao){
 		$this->descricao = $descricao;
 	}

 	//Categoria
 	public function getCategoria(){
 		return $this->categoria;
 	}

 	public function setCategoria($categoria){
 		$this->categoria = $categoria;
 	}

 	//Usado
 	public function getUsado(){
 		return $this->usado;
 	}

 	public function setUsado($usado){
 		$this->usado = $usado;
 	}

}