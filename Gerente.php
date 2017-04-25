<?php 

include "Atendente.php";

class Gerente extends Atendente {
	protected $isGerente = 1;

	public function getIsGerente() {
		if ($this->isGerente) {
			return "É Gerente!";
		}
	}
	public function __construct($isGerente) {
		$this->isGerente = 1;
	}
	protected function contratar($tipo) {
		if ($tipo == 2)
			$novoobj1 = new Atendente();	
		}
	public function cont() {

	}
}