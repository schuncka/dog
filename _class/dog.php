<?php
class dog{
	private $nome;
	private $idade;	
	private $raca;	
	
	function __construct($nome="", $idade="",$raca=""){
		$this->nome = $nome;
		$this->idade = $idade;	
		$this->raca = $raca;	
	}
	function getNome(){
		return $this->nome;
	}
	function getIdade(){
		return $this->idade;
	}
	function getRaca(){
		return $this->raca;
	}
	
	function setNome($prNome){
		$this->nome  = $prNome;
	}
	function setIdade($prIdade){
		$this->idade = $prIdade;
	}
	function setRaca($prRaca){
		$this->raca = $prRaca;
	}	
	
	public function latir(){
		echo("<br>AU AU");	
	}
	public function rosnar(){
		echo("<br>GRRRR");	
	}
	
	public function passear(){
		print("<br>".$this->getNome()." esta passeando...");
		for($i=0;$i<10;$i++){			
			if ((rand()%2)==0){
				$this->latir();
			}else{
				$this->rosnar();
			}
		}
	}
}
?>