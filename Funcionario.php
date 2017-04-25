<?php 

class Funcionario {
	protected $idFuncionario;
	protected $salario;
	protected $isGerente = 0;

	public function __construct($idFuncionario, $salario) {
		$this->idFuncionario = $idFuncionario;
		$this->salario = $salario;
	}
	public function getIdFuncionario() {
		return $this->idFuncionario;
	}
	public function setIdFuncionario($idFuncionario) {
		$this->salario = $salario;
	}
	public function getSalario() {
		return $this->salario;
	}
	public function setSalario($salario) {
		$this->idFuncionario = $salario;
	}
}