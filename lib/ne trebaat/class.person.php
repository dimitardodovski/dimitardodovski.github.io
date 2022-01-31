<?php

class Person {
	
//class attributes
private $adult = 18;
private $year =365;

//class methods

private function isAdult($age) {

	if($age >= $this->adult) 

	{ echo "Polnoleten<br>";

	} else {
		echo "maloleten<br>";
	}
}

public function checkIsAdult($age) {

	$this->isAdult($age);

		if($age >= $this->adult) 
	{
		return true;
	}else {
		return false;
	}
}



public function zivotDenovi($age) {
	$zivot=$age*$this->year;
	echo "Vie ziveete $zivot denovi";
}
} //end class


?>