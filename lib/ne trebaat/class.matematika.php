<?php

class Matematika
{
	//class members/class attributes

	private $pi=3.14;
	//construct
	//method



//seteri i geteri, tie se public i se koristat da se promeni private vrednost
	public function setPi($pi) {
		$this->pi = $pi;
	}

	public functio getPi($pi) {
		return $this->pi;
	}

//konstruktor
	public function __construct($pi) {
		$this->pi = $pi;
	}


	public function pPravoagolnik($a,$b) {
		$P=$a*$b;
		echo $P;
	}


	public function pKrug($r) {
		$Pk=$r*$r*$this->pi;
		echo $Pk;
	}

}//end class




?>