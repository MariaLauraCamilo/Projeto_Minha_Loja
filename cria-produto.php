<?php

require_once("class/Produto.php");

$livro = new Produto();

$livro->nome = "Livro de PHP";

var_dump($livro);

?>