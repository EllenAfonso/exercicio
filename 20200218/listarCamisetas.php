<?php
	include "classCamiseta.php";
	include "cabecalho.php";
?>
Objetos "Camiseta" instanciados no sistema:<br />
<hr />

<?php
	foreach($_SESSION["camiseta"] as $c){
		echo "Cor: <span style='color:$c->cor'>$c->cor</span><br />
		Tamanho: $c->tamanho <br />
		preco: $c->preco <br />
		<hr />";
	}
?>