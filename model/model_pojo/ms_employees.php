<?php

class MsEmployees
{
	//class attributes
	private $employee_id;
	private $employee_name;
	private $employee_plata;
	private $music_shop_id;


	//setter
	public function setEmployeeID($employee_id){
		$this->employee_id=$employee_id;
	}

	public function setEmployeeName($employee_name)
	{
		$this->employee_name=$employee_name;
	}

	public function setEmployeePlata($employee_plata)
	{
		$this->employee_plata=$employee_plata;
	}	

	public function setMusicShopID($music_shop_id)
	{
		$this->music_shop_id=$music_shop_id;
	}


		//getter


	public function getEmployeeID(){
		return $this->employee_id;
	}

	public function getEmployeeName()
	{
		return $this->employee_name;
	}

	public function getEmployeePlata()
	{
		return $this->employee_plata;
	}	

	public function getMusicShopID()
	{
		return $this->music_shop_id;
	}



}//end class music_shop



?>