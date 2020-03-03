<?php
include "classCamiseta.php";
include "cabecalho.php";

$c = new Camiseta();

$c->cor = $_POST["cor"];
$c->tamanho = $_POST["tamanho"];
$c->preco = $_POST["preco"];


$_SESSION["camiseta"][] = $c;


?>

<h3>Camiseta Inserida com sucesso.</h3>

</body>
<html>