<?php 

include "Funcionario.php";

class Atendente extends Funcionario {
	public function cadastrarCliente($tipo) {
		if ($tipo == 1)
		$nome = new Cliente();
		else if ($tipo == 2)
		$nome = new ClienteVIP();	
		}
}
