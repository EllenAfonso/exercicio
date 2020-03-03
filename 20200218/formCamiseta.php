<?php
	include "cabecalho.php";
?>
	<h1>Criar objeto camiseta</h1>
	<form action="instanciarCamiseta.php" method="post">
		Definir cor da camiseta:
		<input type="color" name="cor"/>
		<br />
		
		<input type="string"  name="tamanho" placeholder="Tamanho da camiseta..." />
		<br />
		
		<input type="number" step="0.01"  name="preco" placeholder="Preço da camiseta..." />
		<br />
		
		<input type="submit" value="Criar Camiseta" />
	</form>
</body>
</html>