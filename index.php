<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prova Final</title>
</head>
<body>
	<?php

		include "Gerente.php";

		$novoFuncionario1 = new Gerente(001, "R$10.000", 1);
		echo $novoFuncionario1->getIsGerente()."<br>";
		echo $novoFuncionario1->getIdFuncionario()."<br>";
		echo $novoFuncionario1->getSalario()."<br>";
		echo $novoFuncionario1->cont(1);
		$novoobj1->nome = "Carlos";
	?>
</body>
</html>