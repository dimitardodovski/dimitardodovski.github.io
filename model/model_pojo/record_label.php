<?php

class RecordLabel
{
	//class attributes
	private  $label_id;
    private  $label_name;
    private  $label_country;



	//setter
	public function setLabelID($label_id){
		$this->label_id=$label_id;
	}

	public function setLabelName($label_name){
		$this->label_name=$label_name;
	}

	public function setLabelCountry($label_country){
		$this->label_country=$label_country;
	}


	//getter

	public function getLabelID(){
		return $this->label_id;
	}

	public function getLabelName(){
		return $this->label_name;
	}

	public function getLabelCountry(){
		return $this->label_country;
	}

	

}//end class artist



?>