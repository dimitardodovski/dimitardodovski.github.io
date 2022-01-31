<?php

class MsSale
{
	//class attributes
	private  $sale_id;
    private  $customer_id;
    private  $item_id;
    private  $sale_date;
    private  $sale_price;


	//setter
	public function setSaleID($sale_id){
		$this->sale_id=$sale_id;
	}

	public function setCustomerID($customer_id){
		$this->customer_id=$customer_id;
	}

	public function setItemID($item_id){
		$this->item_id=$item_id;
	}

	public function setSaleDate($sale_date){
		$this->sale_date=$sale_date;
	}

	public function setSalePrice($sale_price){
		$this->sale_price=$sale_price;
	}



//getter



	public function getSaleID(){
		$this->sale_id;
	}

	public function getCustomerID(){
		$this->customer_id;
	}

	public function getItemID(){
		$this->item_id;
	}

	public function getSaleDate(){
		$this->sale_date;
	}

	public function getSalePrice(){
		$this->sale_price;
	}





}//end class ms_sale



?>