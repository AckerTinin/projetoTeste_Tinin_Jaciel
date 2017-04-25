<?php
/*
Classe Pessoa
Classe mae e abstrata 
*/
class Pessoas {
	protected $nome; // atributo protegido -nome- 
	protected $sexo; // atributo protegido -sexo-
	protected $idade; // atributo protegido -idade-

	public function getNome() {	 // função publica para pegar valor da variavel protegida -nome-
		return $this->nome;
	}
	public function getSexo() { // função publica para pegar valor da variavel protegida -sexo-
 		return $this->sexo;		
	}
	public function getIdade() { // função publica para pegar valor da variavel protegida -idade-
		return $this->idade;
	}
	public function setNome($nome) { // função publica para colocar valor na variavel protegida -nome-
		$this->nome = $nome;
	}
	public function setSexo($sexo) { // função publica para colocar valor na variavel protegida -sexo-
		$this->sexo = $sexo;
	}
	public function setIdade($idade) { // função publica para colocar valor na variavel protegida -idade-
		$this->idade = $idade;
	}
	public function beberAgua($qtdAgua){ // função publica ramdom

	}
}