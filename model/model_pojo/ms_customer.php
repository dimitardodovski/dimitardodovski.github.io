<?php

class MsCustomer
{
	//class attributes
	private $customer_id;
	private $customer_name;
	private $customer_address;
	private $music_shop_id;


	//setter
	public function setCustomer_id($customer_id){
		$this->customer_id=$customer_id;
	}

	public function setCustomer_name($customer_name)
	{
		$this->customer_name=$customer_name;
	}

	public function setCustomer_address($customer_address)
	{
		$this->customer_address=$customer_address;
	}	

	/*public function setCustomer_item($customer_item)
	{
		$this->customer_item=$customer_item;
	}*/

	public function setMusic_shop_id($music_shop_id)
	{
		$this->music_shop_id=$music_shop_id;
	}


		//getter


	public function getCustomer_id(){
		return $this->customer_id;
	}

	public function getCustomer_name()
	{
		return $this->customer_name;
	}

	public function getCustomer_address()
	{
		return $this->customer_address;
	}	

/*	public function getCustomer_item()
	{
		return $this->customer_item;
	}*/

	public function getMusic_shop_id()
	{
		return $this->music_shop_id;
	}



}//end class music_shop



?>