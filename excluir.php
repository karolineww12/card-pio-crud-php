<?php


require("./data/conexao.php");
require("./model/Produto.php");
require("./data/ProdutosRepository.php");

$id = $_POST["id"];

$repository = new ProdutosRepository($pdo);
$repository->delete($id);

header('Location: /admin.php');


